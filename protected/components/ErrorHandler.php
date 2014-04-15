<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

final class ErrorHandler{
        
  /**
     * Call this method to get singleton
     *
     * @return UserFactory
     */
    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new ErrorHandler();
        }
        return $inst;
    }

    /**
     * Private constructor
     */
    private function __construct()
    {

    }
    
    private function createXMLfromString($msg)
    {
        $xml=new SimpleXMLElement('<verbosemessage>'.$msg.'</verbosemessage>');

        return $xml->asXML();
    }
    public function errNotRegistered()
    {
        $msg=Yii::app()->params['errNotRegistered'];
        //return array('Status'=>array('http_code'=>500), 'xml'=>$msg);
        return $this->createXMLfromString($msg);
    }
    
    public function errDataManager()
    {
        $msg=Yii::app()->params['errDataManager'];
        //return array('Status'=>array('http_code'=>500), 'xml'=>$msg);
        return $this->createXMLfromString($msg);
    }
    
    public function errAccountDisabled()
    {
        $msg=Yii::app()->params['errAccountDisabled'];
        //return array('Status'=>array('http_code'=>500), 'xml'=>$msg);
        return $this->createXMLfromString($msg);
    }
    
    public function errNotApproved()
    {
        $msg=Yii::app()->params['errNotApproved'];
        //return array('Status'=>array('http_code'=>500), 'xml'=>$msg);
        return $this->createXMLfromString($msg);
    }
    
    public function errOwner()
    {
        $msg=Yii::app()->params['errOwner'];
        //return array('Status'=>array('http_code'=>500), 'xml'=>$msg);
        return $this->createXMLfromString($msg);
    }
    
    public function errAppIdMismatch()
    {
        $msg=Yii::app()->params['errAppIdMismatch'];
        //return array('Status'=>array('http_code'=>500), 'xml'=>$msg);
        return $this->createXMLfromString($msg);
    }
    
    public function errDOIMismatch()
    {
       $msg=Yii::app()->params['errDOIMismatch'];
      // return array('Status'=>array('http_code'=>500), 'xml'=>$msg);
       return $this->createXMLfromString($msg);
    }
    
    public function errRegisteredUrl()
    {        
        $msg=Yii::app()->params['errUrl'];      
        //return array('Status'=>array('http_code'=>500), 'xml'=>$msg);
        return $this->createXMLfromString($msg);
    }
    
    public function errUrlNotResolvable()
    {
        $msg=Yii::app()->params['errUrlNotResolvable'];      
       // return array('Status'=>array('http_code'=>404), 'xml'=>$msg);
        return $this->createXMLfromString($msg);
    }
    
    public function errFree()
    {
        $msg=Yii::app()->params['errFree'];
        //return array('Status'=>array('http_code'=>201), 'xml'=>$msg);
        return $this->createXMLfromString($msg);
    }
    
    public function errANDS($resultXml)
    {        
        //return array('Status'=>array('http_code'=>400), 'xml'=>$resultXml->verbosemessage->asXML());
        return $resultXml->verbosemessage;
    }
}
?>
