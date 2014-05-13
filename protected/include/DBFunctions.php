<?php

/*
 * This class contains a list of functions related to db operation
 * Author: Yi Sun
 * Date:   April 2014
 */
$baseP=Yii::app()->basePath;

require $baseP.'/components/CiteANDS.php';
require $baseP.'/components/xml2json.php';


class DBFunctions{
        
    var $errorHdlr;
    
    //constructor
    function __construct( )
    {
        //load ErrorHandler class
        $this->errorHdlr = ErrorHandler::Instance();
    }
    
    /* This function queries the TERN db for a list of registered url 
     * return   an array of urls
     */
    public function getRegisteredUrl()
    {
        $sql="select distinct url from tbl_url";
        $registeredUrls=DocUrl::model()->findAllBySql($sql);
        
        return $registeredUrls;
    }
    
    /*
     * This function gets called when updating DOI,it writes the new updated 
     * values into database
     * return   $result : - error string if problem occured
     *                    - doi value if successful
     */
    public function saveToDBUpdate($cite,$resultXml,$url)
    {
            //get update status from the xml returned from ANDS
            $updateStatus=(string)$resultXml->attributes()->type;

            //if update is successful
            if($updateStatus=='success')
            {
                $doi=(string)$resultXml->doi;
                $metadata=$cite->getANDS($doi,'metadata'); //query metadata from ANDS

                $status='success';
                $title=$metadata->titles->title;
                $docXml=$metadata->asXML();
                $docActive=true;
                $updatedUrl=$url;
                
                //updates the values
                Doc::model()->updateAll(array('doc_title'=>$title, 'doc_xml'=>$docXml, 'doc_status'=>'success','doc_url'=>$updatedUrl),"doc_doi='$doi'");

                $result=$resultXml->doi;
                
            }else
            {                                       
                $result=$this->errorHdlr->errANDS($resultXml);
            }


        return $result;
    }
    
    /*
     * This function gets called when activate/deactivate DOI
     * doi_avtive is updated with either 'true' or 'false'
     * return   $result : - error string if problem occured
     *                    - doi value if successful
     */
    public function updateToDB($cite,$doi,$action)
    {
        $resultXml = $cite->getANDS($doi, $action); //query xml from ANDS
        
        $status=(string)$resultXml->attributes()->type; //check status
        
        if($status=='success')
        {
            switch ($action)
            {
                case 'activate':
                    Doc::model()->updateAll(array('doc_active'=>true),"doc_doi='$doi'");
                    break;
                case 'deactivate':
                    Doc::model()->updateAll(array('doc_active'=>false),"doc_doi='$doi'");
                    break;
                default:break;
            }
            $result=$resultXml->doi;
        }else
        {
            $result=$this->errorHdlr->errANDS($resultXml);
        }
        return $result;
    }
    
    /*
     * This function gets called when minting a DOI,it writes the new  
     * values into database
     * return   $result : - error string if problem occured
     *                    - doi value if successful
     */    
    public function saveToDBCreate($cite,$resultXml,$url,$userId)
    {
        //mint status returned from ANDS
         $mintStatus=(string)$resultXml->attributes()->type;       

         //mint is successful
            if($mintStatus=='success') 
            {
                $doi=(string)$resultXml->doi;
                $metadata=$cite->getANDS($doi,'metadata');
                $status='Successfuly minted';
                $title=$metadata->titles->title;
                $docXml=$metadata->asXML();
                $docActive=true;

                $result=$resultXml->doi;
                
                //store into db
                $model = new Doc;
                $model->doc_url = $url;
                $model->doc_doi = $doi;
                $model->user_id = $userId;
                $model->doc_xml = 'API'; 
                $model->doc_active = $docActive;
                $model->insert();

                $model->doc_xml = $docXml; 
                $model->doc_status =$status;
                $model->doc_title = $title;
                $model->saveAttributes(array('doc_status','doc_title','doc_xml'));
            }else //mint failed
            {
                $doi='';
                $title='';
                $status='Failed to mint';
                $docXml=$resultXml;
                $docActive=false;
                $result=$this->errorHdlr->errANDS($resultXml);
            }

            return $result;
    }

    /*
     * This function creates a xml string based on the model. It returns the basic 
     * information required for citation in xml format.
     * param    @model   the document model
     * return   an xml string
     */
    public function buildOutput($model)
    {
        //getting element values from model, and creates xml object
        $inXml=$model->doc_xml;
        $inXmlObj=new SimpleXMLElement($inXml);
        
        $id=$inXmlObj->identifier;
        $creators=$inXmlObj->creators;
        $title=$model->doc_title;
        $publisher=$inXmlObj->publisher;
        $publicationDate=$inXmlObj->publicationYear;
                
        //create output xml document using simplexml        
        $outXmlObj=new SimpleXMLElement('<citationMetadata />');
        $identifier=$outXmlObj->addChild('identifier',$id);
        $identifierType=$identifier->addAttribute('type','doi');
        
        //iterate through all creators
        for($i=0;$i<count($creators->creator);$i++)
        {
            $contributor=$outXmlObj->addChild('contributor');
            $contributor->addAttribute('seq',$i+1);
            $contributorName=(string)$creators->creator[$i]->creatorName;
            
            $names=explode(",", $contributorName);
            $firstName=$names[1];
            $lastName=$names[0];
            
            $family=$contributor->addChild('namePart',$lastName);
            $family->addAttribute('type','family');
            
            $given=$contributor->addChild('namePart',$firstName);
            $given->addAttribute('type','given');
            
        }
        
        //only main title is needed
        $outTitle=$outXmlObj->addChild('title',$title); 
        $outPublisher=$outXmlObj->addChild('publisher',$publisher);
        $outDate=$outXmlObj->addChild('date',$publicationDate);
        $outDate->addAttribute('type','publicationDate');
        
        return $outXmlObj->asXML();
    }
}
?>
