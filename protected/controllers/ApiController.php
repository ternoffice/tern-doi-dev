<?php
$baseP=Yii::app()->basePath;

require $baseP.'/include/DBFunctions.php';


class ApiController extends Controller
{
       
       public function init()
       {          
       }

	public function actionIndex()
	{
		$this->render('index');
	}

	/**
	 * The web service API for POST action (Mint DOI or Update DOI).
	 * This method constructs post data into a DOC model array and
         * processes aubmitted POST variables for ANDS API.
	 * Convert and construct DOC model into XML using DataCite2_2 and Array2XML.
	 * Call action processAPI to process data.
	 * Call action response to output HTTP code and XML response
	 */
	public function actionPost()
	{
            // Construct post data into a DOC model array.            
            $ands=new CiteANDS();
            $postData=$ands->constructData();
            
            // Convert and construct DOC model into XML using DataCite2_2 and Array2XML.
            $_POST['xml']=$ands->buildDocModelToXml($postData);
            
            // Format get variables required by ANDS API                           
            $user_id = isset($_POST['user_id'])? $_POST['user_id']:'';
            $app_id = isset($_POST['app_id'])? $_POST['app_id']:'';
            $url = isset($_POST['url'])? $_POST['url']:'';
            $doi = isset($_POST['doi'])? $_POST['doi']:null;
            $action = ($doi)? 'update':'mint'; //activate/deactivate???
		
            // process data.
            $result = $this->processAPI($user_id, $app_id, $doi, $action, $url);
            
            response($result); //output xml
	}
        
	
	/**
	 * The web service API for Create action (Mint DOI).
	 * Call action processAPI to process data.
	 * Call action response to output HTTP code and XML response
	 * @param text $user_id the User login ID, $app_id the 32 characters App ID, and $url the landing page
	 */
	public function actionCreate($user_id, $app_id, $url)
	{                                        
		$result = $this->processAPI($user_id, $app_id, null, 'mint', $url);
                response($result);
	}
        
	/**
	 * The web service API for Create action (Update DOI).
	 * Call action processAPI to process data.
	 * Call action response to output HTTP code and XML response
	 * @param text $user_id the User login ID, $app_id the 32 characters App ID, $doi the DOI, and $url the landing page
	 */
	public function actionUpdate($user_id, $app_id, $doi, $url)
	{
		$result = $this->processAPI($user_id, $app_id, $doi, 'update', $url);
		//$this->response($result);
                response($result);
	}
        
	/**
	 * The web service API for Inactive action (Deactivate DOI).
	 * Call action processAPI to process data.
	 * Call action response to output HTTP code and XML response
	 * @param text $user_id the User login ID, $app_id the 32 characters App ID, and $doi the DOI
	 */
	public function actionInactive($user_id, $app_id, $doi)
	{          
		$result = $this->processAPI($user_id, $app_id, $doi, 'deactivate', null);
                response($result);
	}
        
	/**
	 * The web service API for Active action (Activate DOI).
	 * Call action processAPI to process data.
	 * Call action response to output HTTP code and XML response
	 * @param text $user_id the User login ID, $app_id the 32 characters App ID, and $doi the DOI
	 */
	public function actionActive($user_id, $app_id, $doi)
	{
            $result = $this->processAPI($user_id, $app_id, $doi, 'activate',null);
            response($result);
	}

	/**
	 * The private function to process data by call ANDS API.
	 * Validate the Data Manager ID , App ID, and XML format.
	 * Call ANDS API to process data.
	 * Update result into local datagase.
	 * @param text $user_id the User login ID, $app_id the 32 character App ID, $doi the DOI, $action the API action, and $url the landing page
	 * @return HTTP code and XML.
	 */
	private function processAPI($user_id, $app_id, $doi, $action, $url)
	{                   
                $user=User::model()->findByPk($user_id);
                
                $validation=new Validation($user,$doi,$app_id,$url);
                $dbFunction=new DBFunctions();
                                                
                $regUrls=$dbFunction->getRegisteredUrl();

                $valid=$validation->validateUserAll($regUrls,$action);
                          
                if ($valid===true)
                {
                    $cite = new CiteANDS();   

                        switch($action)
                        {
                            
                            case 'activate': 
                                $r=$dbFunction->updateToDB($cite, $doi, 'activate');                              
				break;
                            case 'deactivate':
                                $r=$dbFunction->updateToDB($cite, $doi, 'deactivate');                              
				break;                  
                            case 'update':
                            	$xml = (isset($_POST['xml']))? $_POST['xml'] : '';                               
				$xml = fixHtmlEntities($xml);
                                $xmlobj=new SimpleXMLElement($xml);

                                if($xmlobj->identifier->attributes()->identifierType=='DOI')
                                {
                                    $xmldoi=(string)$xmlobj->identifier;

                                    $match=$validation->validateDOIMatch($xmldoi, $doi);
                                     if ($match)
                                     {
                                         $resultXml=$cite->postANDS($url, $xml, $action, $xmldoi);
                                     }else
                                     {
                                         $r=$match;
                                     }
                                }else
                                {
                                    $resultXml=$cite->postANDS($url, $xml, $action, $doi);
                                }
                                                                                                             
                                //save to db
                                if(isset($resultXml))
                                {
                                    $r=$dbFunction->saveToDBUpdate($cite,$resultXml);                                       
                                }
                                break;
                            case 'mint':

                                $xml = (isset($_POST['xml']))? $_POST['xml'] : '';                               
				$xml = fixHtmlEntities($xml);
				$resultXml = $cite->postANDS($url, $xml, $action, $doi);
                                
                                if(isset($resultXml))
                                {
                                    $rt=$dbFunction->saveToDBCreate($cite, $resultXml, $url,$user_id);

                                    //print_r($rt);die();
                                    $doc=new DOMDocument();
                                    $doc->formatOutput=TRUE;
                                    $doc->loadXML($rt->asXML());
                                    $rxml=$doc->saveXML();
                                    $r=array('Status'=>array('http_code'=>200), 'xml'=>$rxml);
                                }
                                
				break;
                        }

                        return $r;
                }else
                {                      
                    return $valid;
                }
	}

	
}
