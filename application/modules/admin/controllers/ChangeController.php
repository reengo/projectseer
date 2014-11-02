<?php

class Admin_ChangeController extends ApplicationController 
{
     public function indexAction()
    {
        $this->_redirect('/admin/change/list');
    }
    public function beforeFilter()
    {       
        $this->uses('projects', 'user_profile', 'user_list', 'notice');
    }
    public function listAction()
    {
        $params  = $this->getRequest()->getParams();
        
        if (!isset($params['search']) || (isset($params['search']) && $params['search'] == 'search ...')) {
            $params['search'] = '';
        }
        
        $this->form->search = $params['search'];
        $userProfile = $this->user_profile->fetchAll()->toArray();
        
        $projects = $this->projects->fetchAll(array('active =?' => 1),'id DESC')->toArray();
        
       $this->view->paginate($projects, array('limit' => 15));
    	
    }
}