<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Validation
{
    var $user;
    var $registered;
    var $enabled;
    var $approved;
    var $manager;
    var $validAppid;
    var $owner;
    var $url;
    
    var $doi;
    var $appId;
    
    var $errorHdlr;
    
    function __construct( $user,$doi,$appId,$url )
    {
        $this->user=$user;
        
        $this->registered=false;
        $this->enabled=false;
        $this->approved=false;
        $this->manager=false;
        $this->validAppid=false;
        $this->owner=false;
        
        $this->doi=$doi;
        $this->appId=$appId;
        $this->url=$url;
        
        $this->errorHdlr = ErrorHandler::Instance();
    }
    
    private function validateRegistration()
    {
                    
        if(!isset($this->user->email)||$this->user->email==null)
        {
            $this->registered=false;
        }else
        {
            $this->registered=true;
        }
        return $this->registered;
    }
    
    private function validateAccountDisable()
    {
        if(!isset($this->user->enabled)||$this->user->enabled==null)
        {
            $this->enabled=false;
        }else
        {
            $this->enabled=true;
        }
        return $this->enabled;
    }
    
    private function validateApproval()
    {
        if(!isset($this->user->approved)||$this->user->approved==null)
        {
            $this->approved=false;

        }else
        {
            $this->approved=true;
        }
        return $this->approved;       
    }
    
    private function validateDataManager()
    {
        if(!isset($this->user->data_manager)||$this->user->data_manager==null)
        {
            $this->manager=false;
        }else
        {
            $this->manager=true;
        }
        return $this->manager;         
    }
    
    private function validateAppId()
    {
        $digest =$this->user->email . $this->user->appid_seed;
	
        if(hash('ripemd128',$digest)==trim($this->appId))
        {
            $this->validAppid=true;
        }else
        {
            $this->validAppid=false;
        }
        return $this->validAppid;
     
    }
    
    private function validateDOIOwner()
    {
        $ownDoi = Doc::model()->findByAttributes(array('doc_doi'=>$this->doi, 'user_id'=>$this->user->user_id));
	
        if (!$ownDoi)
        {                            
            $this->owner=false;
	}else
        {
            $this->owner=true;
        }
        return $this->owner;
    }
    
    //validate if url is registered
    
    private function validateRegisteredUrl($regUrls)
    {
        $inputUrl=$this->extractUrl($this->url); 
        
        $flag=false;

        if(count($regUrls)>0)
        {
            $count=count($regUrls);
            for($i=0;$i<$count;$i++)
            {
                $tmp=$this->extractUrl((string)$regUrls[$i]->url);

                if($tmp==$inputUrl)
                {
                   $flag=true;
                }
            }
        }
        return $flag;
    }
    
    private function checkUrlExists($url)
    {
        $headers=@get_headers($url);
        if(strpos($headers[0],'404 Not Found'))
        {
            return false;
        }else
        {
            return true;
        }        
    }
    
    private function extractUrl($inUrl)
    {        
            $parts = parse_url($inUrl);
     
            if (!isset($parts['scheme'])) {
                return FALSE; // Not a valid, complete URL
            }
            $out = $parts['scheme'].'://';
            if (!empty($parts['user'])) {
                $out .= $parts['user'];
                if (!empty($parts['pass'])) {
                    $out .= ':'.$parts['pass'];
                }
                $out .= '@';
            }
            $out .= $parts['host'];
            if (!empty($parts['port'])) {
                $out .= ':'.$parts['port'];
            }
   
            return $out;
    }
    
    public function validateUserAll($regUrls,$action)
    {       
       
        if (!$this->validateRegistration())
	{                                
            $result=$this->errorHdlr->errNotRegistered();
            
	}elseif (!$this->validateAccountDisable() )
	{
            $result=$this->errorHdlr->errAccountDisabled();			
            
	}elseif(!$this->validateApproval())
        {   
            $result=$this->errorHdlr->errNotApproved();            
        }elseif(!$this->validateDataManager())
        {
            $result=$this->errorHdlr->errDataManager();
        }elseif(!$this->validateAppId())
        {
            $result=$this->errorHdlr->errAppIdMismatch();
        }
        else
        {
            $result=true;
        }  

        if($action=='update')
        {
            if(!$this->validateDOIOwner())  
                $result=$this->errorHdlr->errOwner();
        
        }
        if($result && ($action=='mint'||$action=='update'))
        {
            if(!$this->validateRegisteredUrl($regUrls))
              $result=$this->errorHdlr->errRegisteredUrl(); 
            
            if(!$this->checkUrlExists($this->url))
            {
                $result=$this->errorHdlr->errUrlNotResolvable();
            }
        }
        
        return $result;
    }

    public function validateDOIMatch($xmldoi,$doi)
    {        
        
        if($xmldoi==$doi)
        {
            $match=true;
        }else
        {
            $match=$this->errorHdlr->errDOIMismatch();
        }
        return $match;
    }
}
?>
