<?php

class Pm_IndexController extends ApplicationController 
{
    public function indexAction()
    {   	
        $this->uses('bulletin');
        $bulletin = $this->bulletin->fetchAll(NULL,'id DESC')->toArray();
        $this->view->paginate($bulletin, array('limit' => 5));      
        
        $params = $this->getRequest()->getParams();
        
        $this->uses('user_profile');
        $currentUser = $this->auth->getCurrentUser();
        $userInfo = $this->user_profile->fetchRow(array('user_id = ?'=> $currentUser['id']))->toArray();
        $this->view->user = $userInfo;
       
    }
    public function viewAction()
    {
    	
    }
}