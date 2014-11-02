<?php

class Admin_SettingsController extends ApplicationController 
{
    public function indexAction()
    {
        $this->_redirect('/admin/settings/list');
    }
    public function beforeFilter()
    {       
        $this->uses('projects', 'user_profile', 'user_list', 'notice', 'bulletin','config');
    }
    public function listAction()
    {      
        $configInfo = $this->config->fetchRow(array('id = ?' => 0))->toArray();             
        
        $this->view->config = $configInfo;
        $this->view->description = "Edit Project: ";   

        $this->form->set($configInfo);       
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('edit');
            if ($this->validator->edit->isValid()) {
                $data = $this->form->getPost();                
                
            	$config = $this->config->find(0)->current();
            	if($config !== null){
            		$config->setFromArray($data);
            		if($config->save()){                			
            			$this->flash('The System Settings has been successfully configured.');
                		$this->_redirect('/admin/settings/list');
            		}
            	}
                    
            }
        }
    }
    public function noticeAction()
    {
    	$noticeInfo = $this->notice->fetchRow(array('id = ?' => 1))->toArray();       

        $this->form->set($noticeInfo);       
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('notice');
            if ($this->validator->notice->isValid()) {
                $data = $this->form->getPost();                
                
            	$notice = $this->notice->find(1)->current();
            	if($notice !== null){
            		$notice->setFromArray($data);
            		if($notice->save()){                			
            			$this->flash('The System Settings has been successfully configured.');
                		$this->_redirect('/admin/settings/notice');
            		}else{
            			$this->flash('no good.');
            		}
            	}
                    
            }
        }
    	
    }
}