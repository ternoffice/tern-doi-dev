<?php
/*
 * This is the controller class for all API functions
 * 
 * Author:Wing-fai Wong
 * Date Created: 2013
 * Date Modified: April 2014
 * Modified by: Yi Sun
 * Modification description: rewrites most functions, added new function to cater
 * for new api requirements(refer to each function desc) 
 * 
 */
$baseP=Yii::app()->basePath;

require $baseP.'/include/DBFunctions.php';


class ApiController extends Controller
{
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
         * 
         * Author:Wing-fai Wong
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
         * 
         * Author:Wing-fai Wong
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
         * 
         * Author:Wing-fai Wong
	 */
	public function actionUpdate($user_id, $app_id, $doi, $url)
	{
		$result = $this->processAPI($user_id, $app_id, $doi, 'update', $url);
		response($result);
	}
        
	/**
	 * The web service API for Inactive action (Deactivate DOI).
	 * Call action processAPI to process data.
	 * Call action response to output HTTP code and XML response
	 * @param text $user_id the User login ID, $app_id the 32 characters App ID, and $doi the DOI
         * 
         * Author:Wing-fai Wong
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
         * 
         * Author:Wing-fai Wong
	 */
	public function actionActive($user_id, $app_id, $doi)
	{
            $result = $this->processAPI($user_id, $app_id, $doi, 'activate',null);
            response($result);
	}

        /**
	 * The web service API for list DOI information according to input url
         * 
         * Author:Yi Sun
         * Date: April 2014
         * 
	 * @param       $user_id the User login ID, 
         *              $app_id the 32 characters App ID 
         *              $url the DOI
         * return       $output json/xml (xml by default)
	 */
        public function actionQuery($user_id,$app_id,$url)
        {
            
            //search model by url
            $m=Doc::model()->findByAttributes(array('doc_url'=>$url));

            //get requested format, xml by default
            $rformat = isset($_GET['rformat'])? $_GET['rformat']:'xml';
            
            $dbf=new DBFunctions();
            
            if($m===NULL) //no doi info found according to the landing page url entered
            {
                $outXmlErr=new SimpleXMLElement('<citationMetadata />');
                $err=$outXmlErr->addChild('error','No DOI information found');
                $output=$outXmlErr->asXML();
            }else
            {
                $output=$dbf->buildOutput($m);  //build xml output
            }
            
            if ($rformat=='json')           //json
            {                
                $output=  str_replace(array("\n", "\r", "\t"), '', $output);
                $output = trim(str_replace('"', "'", $output));
                
                $json=xml2json::transformXmlStringToJson($output);
                
                print_r($json);
                
            }else if($rformat=='xml')       //xml
            {                
                 Header('Content-type: text/xml');  //xml header
                 print_r($output);     
            }else
            {
                print_r('Wrong format. Please specify either xml or json');
            }

        }
	/**
	 * The private function to process data by calling ANDS API.
	 * Validate the Data Manager ID , App ID, and XML format.
	 * Call ANDS API to process data.
	 * Update result into local database.
	 * @param text $user_id the User login ID, 
         *             $app_id the 32 character App ID, 
         *             $doi the DOI, 
         *             $action the API action, and 
         *             $url the landing page
	 * @return HTTP code and XML.
         * 
         * Author: Wing-fai Wong
         * 
         * Modified by: Yi Sun
         * Modifications: rewrites the function, format and refactorization
	 */
	private function processAPI($user_id, $app_id, $doi, $action, $url)
	{                   
                $user=User::model()->findByPk($user_id);    //find user model by id

                $validation=new Validation($user,$doi,$app_id,$url);    //validation class
                $dbFunction=new DBFunctions();
                                                
                $regUrls=$dbFunction->getRegisteredUrl();   //get list of registered url

                $valid=$validation->validateUserAll($regUrls,$action);  //do validation
                     
                if ($valid===true)  //validated
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
				
                                $xmlobj=new SimpleXMLElement(trim($xml));//xml object

                                if($xmlobj->identifier->attributes()->identifierType=='DOI')
                                {
                                    $xmldoi=(string)$xmlobj->identifier;

                                    //check if doi specified in url is the same as the doi in xml doc
                                    $match=$validation->validateDOIMatch($xmldoi, $doi); 
                                     
                                    if ($match)
                                    {
                                        //do update if doi matches
                                         $resultXml=$cite->postANDS($url, $xml, $action, $xmldoi);
                                    }else
                                    {
                                        //return errors
                                         $r=$match;
                                    }
                                }else
                                {
                                    $resultXml=$cite->postANDS($url, $xml, $action, $doi);
                                }
                                                                                                             
                                //save to db
                                if(isset($resultXml))
                                {
                                    $rtu=$dbFunction->saveToDBUpdate($cite,$resultXml,$url);  
                                             
                                    $doc=new DOMDocument(); //create dom object
                                    $doc->formatOutput=TRUE;
                                    
                                    $doc->loadXML($rtu->asXML());
                                    $rxmlu=$doc->saveXML();
                                    $r=$rxmlu;
                                }
                                break;
                            case 'mint':

                                $xml = (isset($_POST['xml']))? $_POST['xml'] : '';   
				//$xml = fixHtmlEntities($xml);

                                //mint doi
				$resultXml = $cite->postANDS($url, $xml, $action, $doi);
                                
                                if(isset($resultXml))
                                {
                                    $rt=$dbFunction->saveToDBCreate($cite, $resultXml, $url,$user_id);

                                    //dom document
                                    $doc=new DOMDocument();
                                    $doc->formatOutput=TRUE;
                                    $doc->loadXML($rt->asXML());
                                    $rxml=$doc->saveXML();
                                    $r=$rxml;
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
