<?php

class Pm_ProjectsController extends ApplicationController 
{
    public function indexAction()
    {
        $this->_redirect('/pm/projects/list');
    }
    public function beforeFilter()
    {       
        $this->uses('projects', 'user_profile', 'user_list');
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
    public function editAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $projectInfo = $this->projects->fetchRow(array('id = ?' => $params['id']))->toArray();
        
        $projectInfo['project_manager'] = $this->getName($projectInfo['project_manager']);
        $projectInfo['project_developer'] = $this->getName($projectInfo['project_developer']);
        $projectInfo['qat_officer'] = $this->getName($projectInfo['qat_officer']);
               
        
        $this->view->project = $projectInfo;
        $this->view->description = "Edit Project: ";   

        $this->form->set($projectInfo);       
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('edit');
            if ($this->validator->edit->isValid()) {
                $data = $this->form->getPost();                
                if($params['id'])
                {
                	$project = $this->projects->find($params['id'])->current();
                	if($project !== null){
                		$project->setFromArray($data);
                		if($project->save()){                			
                			$this->flash('Project <b>' . $projectInfo['project'] . '</b> has been successfully updated.');
                    		$this->_redirect('/admin/projects/list');
                		}
                	}
                }     
            }
        }
    }
    public function viewqatAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $this->uses('projects');
        $projectInfo = $this->projects->fetchRow(array('id = ?' => $params['id']))->toArray();
        
        $this->view->formid = $params['id'];
        $this->view->project = $projectInfo;
        $this->view->description = "PROJECT INFORMATION";       
        
    }    
    
    
    public function viewAction()
    {
        $params  = $this->getRequest()->getParams();
        
        $this->_redirectIfNoId();
        
        $projectInfo = $this->projects->fetchRow(array('id = ?' => $params['id']));
        if (null !== $projectInfo) {
            $this->view->project = $projectInfo;
        } else {
            $this->flash('Error in fetching info', 'error');
            $this->_redirect('/admin/projects/list');
        }
    }
    public function deleteAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $this->uses('projects');
        $project  = $this->projects->find($params['id']);
        
        $projectData = $project->current();
        $projectData->active = '0';  
        
        
       if ($projectData->save()) {
        	$projectInfo = $projectData->toArray();
            $this->flash('Record successfully deleted.');
            $this->_redirect('admin/projects/list');
        }         
	}
    public function getName($userId)
    {
        $userInfo = $this->user_profile->fetchAll(array('user_id = ?' => $userId))->toArray();
        $fullname = $userInfo[0]['firstname'] .' ' . $userInfo[0]['lastname'];
        return $fullname;
    }
}