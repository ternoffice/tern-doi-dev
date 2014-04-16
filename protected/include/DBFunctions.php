<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$baseP=Yii::app()->basePath;

require $baseP.'/components/CiteANDS.php';

class DBFunctions{
        
    var $errorHdlr;
    
    function __construct( )
    {
        $this->errorHdlr = ErrorHandler::Instance();
    }
    
    public function getRegisteredUrl()
    {
        $sql="select distinct url from tbl_url";
        $registeredUrls=DocUrl::model()->findAllBySql($sql);
        
        return $registeredUrls;
    }
    public function saveToDBUpdate($cite,$resultXml,$url)
    {

            $updateStatus=(string)$resultXml->attributes()->type;

            if($updateStatus=='success')
            {
                $doi=(string)$resultXml->doi;
                $metadata=$cite->getANDS($doi,'metadata');

                $status='success';
                $title=$metadata->titles->title;
                $docXml=$metadata->asXML();
                $docActive=true;
                $updatedUrl=$url;
                Doc::model()->updateAll(array('doc_title'=>$title, 'doc_xml'=>$docXml, 'doc_status'=>'success','doc_url'=>$updatedUrl),"doc_doi='$doi'");

                $result=$resultXml->doi;
                //$result=$this->errorHdlr->errFree();

            }else
            {                                       
                $result=$this->errorHdlr->errANDS($resultXml);
            }


        return $result;
    }
    
    public function updateToDB($cite,$doi,$action)
    {
        $resultXml = $cite->getANDS($doi, $action);
        $status=(string)$resultXml->attributes()->type;
        
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
//            $result=$this->errorHdlr->errFree();
        }else
        {
            $result=$this->errorHdlr->errANDS($resultXml);
        }
        return $result;
    }
    
    public function saveToDBCreate($cite,$resultXml,$url,$userId)
    {
         $mintStatus=(string)$resultXml->attributes()->type;
       

            if($mintStatus=='success')
            {
                $doi=(string)$resultXml->doi;
                $metadata=$cite->getANDS($doi,'metadata');
                $status='Successfuly minted';
                $title=$metadata->titles->title;
                $docXml=$metadata->asXML();
                $docActive=true;
                //$result=$this->errorHdlr->errFree();
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
            }else
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
}
?>
