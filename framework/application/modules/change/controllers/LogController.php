<?php

class Change_IndexController extends ApplicationController 
{
    public function beforeFilter()
    {       
        $this->uses('change_list', 'user_profile');
    }
	public function indexAction()
    {   	
       
        $userProfile = $this->user_profile->fetchAll()->toArray();
        
        $changes = $this->change_list->fetchAll(array('active =?' => 1),'id DESC')->toArray();
        
        foreach($changes as $key=>$change)
        {
        	$changes[$key]['initiator'] = $this->getName($change['initiator']);
        	$changes[$key]['manager'] = $this->getName($change['manager']);
        	$changes[$key]['owner'] = $this->getName($change['owner']);
        }
        
        $this->view->paginate($changes, array('limit' => 15));
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
        
        foreach($projects as $key=>$project)
        {
        	$projects[$key]['project_manager'] = $this->getName($project['project_manager']);
        	$projects[$key]['project_developer'] = $this->getName($project['project_developer']);
        }
        
        $this->view->paginate($projects, array('limit' => 15));
    	
    }
    public function getName($userId)
    {
        $userInfo = $this->user_profile->fetchAll(array('user_id = ?' => $userId))->toArray();
        $fullname = $userInfo[0]['firstname'] .' ' . $userInfo[0]['lastname'];
        return $fullname;
    }
    public function getProject($projectId)
    {
        $projectInfo = $this->projects->fetchAll(array('id = ?' => $projectId))->toArray();
        return $projectInfo['project'];
    }
}