<?php

/*
 * This is a singleton class contains a list of functions that return different
 * error messages. The text value of each error is stored in a config
 * file error.php
 * 
 * Author: Yi Sun
 * Date: April 2014
 */

final class ErrorHandler{
        
    /**
     * Call this method to get singleton
     *
     * @return ErrorHandler
     */
    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new ErrorHandler();
        }
        return $inst;
    }

    /*
     * Private constructor
     */
    private function __construct()
    {

    }
    
    /*
     * Creates an xml from string
     * @return xml string
     */
    private function createXMLfromString($msg)
    {
        $xml=new SimpleXMLElement('<verbosemessage>'.$msg.'</verbosemessage>');

        return $xml->asXML();
    }
    
    /*
     * Display error msg if user is not registered with DOI
     * @return error msg
     */
    public function errNotRegistered()
    {
        $msg=Yii::app()->params['errNotRegistered'];
        return $this->createXMLfromString($msg);
    }
    
     /*
     * Display error msg if user is not a data manager 
     * @return error msg
     */
    public function errDataManager()
    {
        $msg=Yii::app()->params['errDataManager'];
        return $this->createXMLfromString($msg);
    }
    
    /*
     * Display error msg if user account is disabled
     * @return error msg
     */
    public function errAccountDisabled()
    {
        $msg=Yii::app()->params['errAccountDisabled'];
        return $this->createXMLfromString($msg);
    }

    /*
     * Display error msg if user account has not been approved by TERN yet
     * @return error msg
     */
    public function errNotApproved()
    {
        $msg=Yii::app()->params['errNotApproved'];
        return $this->createXMLfromString($msg);
    }
    
    /*
     * Display error msg if user is not the owner of the DOI
     * @return error msg
     */
    public function errOwner()
    {
        $msg=Yii::app()->params['errOwner'];
        return $this->createXMLfromString($msg);
    }
    
    
    /*
     * Display error msg if the user appid mismatches. This should not happen unless
     * the user changes email/or name. If this is the case, new registration is 
     * required.
     * 
     * @return error msg
     */ 
    public function errAppIdMismatch()
    {
        $msg=Yii::app()->params['errAppIdMismatch'];
        return $this->createXMLfromString($msg);
    }
    
    /*
     * Display error msg if the doi value in url does not math the doi value in 
     * xml. This usually happens when doing doi update 
     * @return error msg
     */   
    public function errDOIMismatch()
    {
       $msg=Yii::app()->params['errDOIMismatch'];
       return $this->createXMLfromString($msg);
    }

    /*
     * Display error msg if the landing page url is not registered
     * @return error msg
     */
    public function errRegisteredUrl()
    {        
        $msg=Yii::app()->params['errUrl'];      
        return $this->createXMLfromString($msg);
    }

    /*
     * Display error msg if the landing page url is not resolvable. 
     * @return error msg
     */
    public function errUrlNotResolvable()
    {
        $msg=Yii::app()->params['errUrlNotResolvable'];      
        return $this->createXMLfromString($msg);
    }
    
    /*
     * No errors at all
     * @return 'OK'
     */
    public function errFree()
    {
        $msg=Yii::app()->params['errFree'];
        return $this->createXMLfromString($msg);
    }
    
    /*
     * If the error returned is from ANDS, this function finds the value in 
     * <verbosemessage> element and display it 
     * @return whatever value of <verbosemessage>
     */
    public function errANDS($resultXml)
    {        
        return $resultXml->verbosemessage;
    }
}
?>
