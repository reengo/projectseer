<?php

class Admin_ProjectsController extends ApplicationController 
{
    public function indexAction()
    {
        $this->_redirect('/admin/projects/list');
    }
    public function beforeFilter()
    {       
        $this->uses('projects', 'user_profile', 'user_list', 'notice');
        $aclrole = $this->user_list->fetchAll()->toArray();
        $this->view->acl = $aclrole;
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
    public function addAction()
    {
    	
        $this->view->description = "ADD NEW PROJECT";   
        $userList = $this->user_profile->fetchAll()->toArray();
        
        foreach($userList as $key=>$user)
        {        	    	        	
        	$users[$user['user_id']] = $user['firstname'] . ' ' . $user['lastname'] ;        	
        }
        
        $this->view->users = $users; 
        $this->view->test_type = array('qat' => 'QAT', 'uat' => 'UAT');      
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add');
            if ($this->validator->add->isValid()) {
                $data = $this->form->getPost();  
                
        		if($this->projects->insert($data)){                			
        			$this->flash('Project <b>' . $data['project'] . '</b> has been successfully added. notification was sent to involved parties');
            		
        			$managerProfile = $this->user_profile->fetchRow(array('user_id = ?' => $data['project_manager']))->toArray();
        			$manager = $managerProfile['firstname'] . ' ' . $managerProfile['lastname'];
        			$manager_mail = $managerProfile['email'];
        			
        			$developerProfile = $this->user_profile->fetchRow(array('user_id = ?' => $data['project_developer']))->toArray();
        			$developer =  $developerProfile['firstname'] . ' ' . $developerProfile['lastname'];
        			$developer_mail = $developerProfile['email'];
        			
        			$notice = $this->notice->fetchRow(array('name = ?' => 'new project'))->toArray();
        			
        			$config = array('auth' => 'login',
			                        'username' => 'noreply@rechargeplus.com',
			                        'password' => 'rechargeplus');
			        $transport = new Zend_Mail_Transport_Smtp('smtp.emailsrvr.com', $config);
        			
					$vars = array(
		              	'project'     			=> $data['project'],
			           	'division'				=> $data['project_division'],
			           	'project_manager' 		=> $manager,
			           	'overall_remarks'		=> $data['overall_remarks'],
			         	'project_developer' 	=> $developer,
			       		'qat_officer' 			=> $data['qat_officer'],
			       		'test_location' 		=> $data['test_location'],
			       		'test_login'  			=> $data['test_login'],
			       		'test_pass'  			=> $data['test_pass'],
			       		'test_remarks'  		=> $data['test_remarks'],
			       		'body'					=> $notice['body'],
					);
					
		            
		            $this->mailer->setAddressFrom($notice['sender_email'], $notice['sender'])
		                         ->setAddressTo($manager_mail, $manager)
		                         ->setAddressTo($developer_mail, $developer)
		                         ->setAddressTo('maner@i-pay.com.ph', 'Maner Puyawan', 'cc')
		                         ->setAddressTo('debi.santos@i-pay.com.ph', 'Debrielle Santos', 'cc')
		                         ->setAddressTo('mark.soriano@i-pay.com.ph', 'Mark Anthony Soriano', 'cc')		                         		                         
		                         ->setSubject($notice['subject'] . ' ' . $data['project'])
		                         ->setBodyTemplate($notice['template'], $vars)
		                        ->send($transport);
		                         
        			$this->_redirect('/admin/projects/list');
            		
        		}            	             
            }
        }
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