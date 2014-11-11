<?php

class Pm_PluginsController extends ApplicationController 
{
    public function indexAction()
    {
        $this->uses('bulletin');
        $bulletin = $this->bulletin->fetchAll()->toArray();
        $this->view->paginate($bulletin, array('limit' => 5, 'order' => 'id DESC'));      
        
        $params = $this->getRequest()->getParams();
        
        $this->uses('user_profile');
        $currentUser = $this->auth->getCurrentUser();
        $userInfo = $this->user_profile->fetchRow(array('id = ?'=> $currentUser['id']))->toArray();
    }
    public function listAction()
    {
        
	}
}