<?php

class Change_IndexController extends ApplicationController 
{
    public function beforeFilter()
    {       
        $this->uses('change_list', 'user_profile','change_evaluation','change_approval');
    }
	public function indexAction()
    {   	
       
        $userProfile = $this->user_profile->fetchAll()->toArray();
        
        $changes = $this->change_list->fetchAll(array('active =?' => 1),'id DESC')->toArray();
        
        foreach($changes as $key=>$change)
        {
        	$changes[$key]['initiator'] = $this->getName($change['initiator']);
        	$changes[$key]['manager'] = $this->getName($change['manager']);        	
        	if($changes[$key]['owner'] == 0){
        		$changes[$key]['owner'] = 'UNASSIGNED';
        	}else{
        	$changes[$key]['owner'] = $this->getName($change['owner']);
        	}
        	$changes[$key]['status'] = $this->getStatus($change['status']);
        	if($changes[$key]['request_id'] == 0){
        		$changes[$key]['request_id'] = 'XXXXX';
        	}
        }
        
        $this->view->paginate($changes, array('limit' => 15));
    }
   	public function addAction()
    {
    	
        $this->view->description = "FILE NEW CHANGE REQUEST";   
        $userList = $this->user_profile->fetchAll()->toArray();
        
        foreach($userList as $key=>$user)
        {        	    	        	
        	$users[$user['user_id']] = $user['firstname'] . ' ' . $user['lastname'] ;        	
        }
        
        $this->view->users = $users;        
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add');
            if ($this->validator->add->isValid()) {
                $data = $this->form->getPost();  
                
        		if($this->change_list->insert($data)){                			
        			$this->flash('Change request for <b>' . $data['project'] . '</b> project has been successfully filed.');
            		
        			$managerProfile = $this->user_profile->fetchRow(array('user_id = ?' => $data['manager']))->toArray();
        			
        			$manager = $managerProfile['firstname'] . ' ' . $managerProfile['lastname'];
        			$manager_mail = $managerProfile['email'];
        			
        			$initProfile = $this->user_profile->fetchRow(array('user_id = ?' => $data['initiator']))->toArray();
        			$initiator =  $initProfile['firstname'] . ' ' . $initProfile['lastname'];
        			$init_mail = $initProfile['email'];
        			
        			$config = array('auth' => 'login',
			                        'username' => 'noreply@rechargeplus.com',
			                        'password' => 'rechargeplus');
			        $transport = new Zend_Mail_Transport_Smtp('smtp.emailsrvr.com', $config);
			   
        			
					$vars = array(
		              	'project'     			=> $data['project'],
			           	'request_id'			=> $data['request_id'],
			           	'manager' 				=> $manager,
			           	'summary'				=> $data['summary'],
			         	'owner' 				=> $developer,
			       		'detail'	 			=> $data['detail'],
			       		'justification' 		=> $data['justification'],
			       		'initiator'  			=> $initiator,
			       		'status'  				=> 'Pending'
					);
					
		            
		            $this->mailer->setAddressFrom('admin@rex2check.com', 'REX2Check')
		                         ->setAddressTo($manager_mail, $manager)		                         
		                         ->setAddressTo('ringo.bautista@i-pay.com.ph', 'Ringo Bautista', 'cc')		                         
		                         ->setAddressTo('debi.santos@i-pay.com.ph', 'Debi Santos', 'cc')
		                         ->setAddressTo('maner@i-pay.com.ph', 'Maner Puyawan', 'cc')		                         
		                         ->setAddressTo('mark.soriano@i-pay.com.ph', 'Mark Anthony Soriano', 'cc')
		                         ->setSubject('New Change Request for ' .$data['project'])
		                         ->setBodyTemplate('new-change', $vars)
		                        ->send($transport);
		                         
        			$this->_redirect('/change');
            		
        		}            	             
            }
        }
    }
    public function evaAction()    
    {    	
        $request = $this->getRequest();
        $params  = $request->getParams();
    	
        $this->view->description = "EVALUATION RESULTS OF CHANGE REQUEST";   
        $userList = $this->user_profile->fetchAll()->toArray();
        
        foreach($userList as $key=>$user)
        {        	    	        	
        	$users[$user['user_id']] = $user['firstname'] . ' ' . $user['lastname'] ;        	
        }
        
        $this->view->users = $users;    
        
        $changeInfo = $this->change_list->fetchRow(array('id = ?' => $params['id']))->toArray();
    	        
    	$this->view->change_id = $params['id'];
        $this->view->change = $changeInfo;   
        
        $this->view->status = array('0' => 'Reject', '1' => 'Approve', '2' => 'Approve Conditionally');
        $this->view->priority = array('0' => 'Unset', '1' => 'Low', '2' => 'Medium', '3' => 'High', '4' => 'Critical');
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add');
            if ($this->validator->add->isValid()) {
                $data = $this->form->getPost();  
                
        		if($this->change_evaluation->insert($data)){        
        			
        			$change = $this->change_list->find($params['id'])->current();
                	if($change !== null){
                		$change->status = 2;
                		$change->request_id = $data['request_id'];
                		if($change->save()){  
                			$this->flash('Change request has been successfully <b>Evaluated</b>');
                		}
                	}
            		       			
        			$config = array('auth' => 'login',
			                        'username' => 'noreply@rechargeplus.com',
			                        'password' => 'rechargeplus');
			        $transport = new Zend_Mail_Transport_Smtp('smtp.emailsrvr.com', $config);
        			
					$vars = array(
		              	'project'     			=> $changeInfo['project'],
			           	'request_id'			=> $changeInfo['request_id'],
			       		'status'  				=> 'Evaluated'
					);
					
		            
		            $this->mailer->setAddressFrom('admin@rex2check.com', 'REX2Check')
		                         //->setAddressTo($manager_mail, $manager)
		                         //->setAddressTo($developer_mail, $developer)		                         
		                         ->setAddressTo('ringo.bautista@i-pay.com.ph', 'Ringo Bautista', 'cc')		                         
		                         ->setAddressTo('debi.santos@i-pay.com.ph', 'Debi Santos', 'cc')
		                         ->setAddressTo('maner@ipay-com.ph', 'Maner Puyawan', 'cc')		                         
		                         ->setAddressTo('mark.soriano@i-pay.com.ph', 'Mark Anthony Soriano', 'cc')
		                         ->setSubject('Change Request for ' .$changeInfo['project'] . 'Has Been Evaluated')
		                         ->setBodyTemplate('eva-change', $vars)
		                        ->send($transport);
		                         
        			$this->_redirect('/change');            		
        		}            	             
            }
        }
    }
    public function appAction()    
    {    	
        $request = $this->getRequest();
        $params  = $request->getParams();
    	
        $this->view->description = "APPROVAL OF CHANGE REQUEST";   
        $userList = $this->user_profile->fetchAll()->toArray();
        
        foreach($userList as $key=>$user)
        {        	    	        	
        	$users[$user['user_id']] = $user['firstname'] . ' ' . $user['lastname'] ;        	
        }
        
        $this->view->users = $users;    
        
        $changeInfo = $this->change_list->fetchRow(array('id = ?' => $params['id']))->toArray();
    	        
    	$this->view->change_id = $params['id'];
        $this->view->change = $changeInfo;   
        
        $this->view->status = array('0' => 'Reject', '1' => 'Approve', '2' => 'Approve Conditionally');
        $this->view->priority = array('0' => 'Unset', '1' => 'Low', '2' => 'Medium', '3' => 'High', '4' => 'Critical');
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add');
            if ($this->validator->add->isValid()) {
                $data = $this->form->getPost();  
                
        		if($this->change_approval->insert($data)){        
        			
        			$change = $this->change_list->find($params['id'])->current();
                	if($change !== null){
                		$change->status = 3;
                		$change->owner = $data['owner'];
                		if($change->save()){  
                			$this->flash('Change request has been successfully <b>Approved</b>. Change is Underway.');
                		}
                	}
            		       			                	
        			$config = array('auth' => 'login',
			                        'username' => 'noreply@rechargeplus.com',
			                        'password' => 'rechargeplus');
			        $transport = new Zend_Mail_Transport_Smtp('smtp.emailsrvr.com', $config);
        			
					$vars = array(
		              	'project'     			=> $changeInfo['project'],
			           	'request_id'			=> $changeInfo['request_id'],
			       		'status'  				=> 'Approved'
					);
					
		            
		            $this->mailer->setAddressFrom('admin@rex2check.com', 'REX2Check')	                         
		                         ->setAddressTo('ringo.bautista@i-pay.com.ph', 'Ringo Bautista', 'cc')		                         
		                         ->setAddressTo('debi.santos@i-pay.com.ph', 'Debi Santos', 'cc')
		                         ->setAddressTo('maner@ipay-com.ph', 'Maner Puyawan', 'cc')		                         
		                         ->setAddressTo('mark.soriano@i-pay.com.ph', 'Mark Anthony Soriano', 'cc')
		                         ->setSubject('Change Request for ' .$changeInfo['project'] . 'Has Been Evaluated')
		                         ->setBodyTemplate('app-change', $vars)
		                        ->send($transport);
		                         
        			$this->_redirect('/change');            		
        		}            	             
            }
        }
    }
    
    public function confirmedAction()    
    {    	
        $request = $this->getRequest();
        $params  = $request->getParams();
    	
        $this->view->description = "CONFIRMATION OF CHANGE REQUEST COMPLETION";   
        $userList = $this->user_profile->fetchAll()->toArray();
        
        foreach($userList as $key=>$user)
        {        	    	        	
        	$users[$user['user_id']] = $user['firstname'] . ' ' . $user['lastname'] ;        	
        }
        
        $this->view->users = $users;    
        
        $changeInfo = $this->change_list->fetchRow(array('id = ?' => $params['id']))->toArray();
        if($changeInfo['status'] == 2){
        	$changeEvaInfo = $this->change_evaluation->fetchRow(array('change_id = ?' => $changeInfo['id']))->toArray();
        	
        }
        if($changeInfo['status'] == 3){
        	$changeEvaInfo = $this->change_evaluation->fetchRow(array('change_id = ?' => $changeInfo['id']))->toArray();
        	$changeAppInfo = $this->change_approval->fetchRow(array('change_id = ?' => $changeInfo['id']))->toArray();
        }
        
        	$changeInfo['manager'] = $this->getName($changeInfo['manager']);
        	$changeInfo['owner'] = $this->getName($changeInfo['owner']);        	
        	$changeInfo['initiator'] = $this->getName($changeInfo['initiator']);
        
        
        $this->view->change = $changeInfo;
        $this->view->eva = $changeEvaInfo;
        $this->view->app = $changeAppInfo;
    	        
    	$this->view->change_id = $params['id'];
        
        $this->view->status = array('0' => 'Reject', '1' => 'Approve', '2' => 'Approve Conditionally');
        $this->view->priority = array('0' => 'Unset', '1' => 'Low', '2' => 'Medium', '3' => 'High', '4' => 'Critical');
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add');
            if ($this->validator->add->isValid()) {
                $data = $this->form->getPost();       		    
        			
    			$change = $this->change_list->find($params['id'])->current();
            	if($change !== null){
            		$change->status = 4;
            		$change->final_comments = $data['final_comments'];
            		if($change->save()){  
            			$this->flash('Change request has been <b>Completed</b>');
            		}
            	}
        		       			                	
    			$config = array('auth' => 'login',
		                        'username' => 'noreply@rechargeplus.com',
		                        'password' => 'rechargeplus');
		        $transport = new Zend_Mail_Transport_Smtp('smtp.emailsrvr.com', $config);
    			
				$vars = array(
	              	'project'     			=> $changeInfo['project'],
		           	'request_id'			=> $changeInfo['request_id'],
		           	'comment'				=> $data['final_comments'],
		       		'status'  				=> 'Completed'
				);
				
	            
	            $this->mailer->setAddressFrom('admin@rex2check.com', 'REX2Check')	                         
	                         ->setAddressTo('ringo.bautista@i-pay.com.ph', 'Ringo Bautista', 'cc')		                         
	                         //->setAddressTo('debi.santos@i-pay.com.ph', 'Debi Santos', 'cc')
	                        // ->setAddressTo('maner@ipay-com.ph', 'Maner Puyawan', 'cc')		                         
	                         //->setAddressTo('mark.soriano@i-pay.com.ph', 'Mark Anthony Soriano', 'cc')
	                         ->setSubject('Change Request for ' .$changeInfo['project'] . ' Has Been Completed')
	                         ->setBodyTemplate('com-change', $vars)
	                        ->send($transport);
	                         
    			$this->_redirect('/change');            		
    		}            	             
            
        }
    }
    public function editAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $changeInfo = $this->change_list->fetchRow(array('id = ?' => $params['id']))->toArray();
    
    
    	$changeInfo['manager'] = $this->getName($changeInfo['manager']);
    	$changeInfo['owner'] = $this->getName($changeInfo['owner']);        	
    	$changeInfo['initiator'] = $this->getName($changeInfo['initiator']);    
        
        $this->view->change_id = $params['id'];
        $this->view->change = $changeInfo;
        $this->view->description = "EDIT: CHANGE REQUEST INFORMATION"; 

        $this->form->set($changeInfo);       
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('edit');
            if ($this->validator->edit->isValid()) {
                $data = $this->form->getPost();                
                if($params['id'])
                {
                	$change = $this->change_list->find($params['id'])->current();
                	if($change !== null){
                		$change->setFromArray($data);
                		if($change->save()){                			
                			$this->flash('Project <b>' . $changeInfo['project'] . '</b> has been successfully updated.');
                    		$this->_redirect('/change/');
                		}
                	}
                }     
            }
        }
    }    
    public function viewAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $changeInfo = $this->change_list->fetchRow(array('id = ?' => $params['id']))->toArray();        
        if($changeInfo['status'] == 2){
        	$changeEvaInfo = $this->change_evaluation->fetchRow(array('change_id = ?' => $changeInfo['id']))->toArray();
        	
        }
        if($changeInfo['status'] == 3){
        	$changeEvaInfo = $this->change_evaluation->fetchRow(array('change_id = ?' => $changeInfo['id']))->toArray();
        	$changeAppInfo = $this->change_approval->fetchRow(array('change_id = ?' => $changeInfo['id']))->toArray();
        }
        
        	$changeInfo['manager'] = $this->getName($changeInfo['manager']);
        	$changeInfo['owner'] = $this->getName($changeInfo['owner']);        	
        	$changeInfo['initiator'] = $this->getName($changeInfo['initiator']);
        
        
        $this->view->change_id = $params['id'];
        $this->view->change = $changeInfo;
        $this->view->eva = $changeEvaInfo;
        $this->view->app = $changeAppInfo;
        $this->view->description = "CHANGE REQUEST INFORMATION";
    }
    public function deleteAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $change  = $this->change_list->find($params['id']);
        
        $changeData = $change->current();
        $changeData->active = '0';  
        
        
       if ($changeData->save()) {
            $this->flash('Record successfully deleted.');
            $this->_redirect('change/');
        }         
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
    public function getStatus($status)
    {
        if($status == 1){
        	return '<span style=color:red>Pending</span>';
        }if($status == 2){
        		return '<span style=color:blue>Evaluated</span>';
        	}if($status == 3){
        			return '<span style=color:green>Approved</span>';
        		}if($status == 5){
        				return '<span style=color:green>Under Revision</span>';
        			}if($status == 4){
			        		return '<span style=color:black><b>Completed</b></span>';
			        	}else{
			        		return 'Obsolete';
			        	}
    }
    
}