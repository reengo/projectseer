<?php

class Dev_TicketsController extends ApplicationController 
{
    public function indexAction()
    {
        $this->_redirect('/admin/tickets/list');
    }
     public function beforeFilter()
    {       
        $this->uses('projects', 'tickets', 'user_list', 'user_profile');
    }
    public function listAction()
    {
        $params  = $this->getRequest()->getParams();
            
        if (!isset($params['search']) || (isset($params['search']) && $params['search'] == 'search ...')) {
            $params['search'] = '';
        }
        
       $this->form->search = $params['search'];
        $this->view->paginate($this->projects->fetchAll(array('active =?' => 1),'id DESC')->toArray(), array('limit' => 15));
    }
    public function listbugAction()
    {
        $params  = $this->getRequest()->getParams();
            
        if (!isset($params['search']) || (isset($params['search']) && $params['search'] == 'search ...')) {
            $params['search'] = '';
        }
        
        $this->form->search = $params['search'];
        $projects = $this->projects->fetchAll(array('id <?' => 5),'id DESC')->toArray();        
        
        $this->view->paginate($projects, array('limit' => 15));
    }
    public function viewAction()
    {
    	$params  = $this->getRequest()->getParams();
    	
        $projectInfo = $this->projects->fetchRow(array('id = ?' => $params['id']))->toArray();
        
        $this->view->formid = $params['id'];
        $this->view->project = $projectInfo;
        
        if (!isset($params['search']) || (isset($params['search']) && $params['search'] == 'search ...')) {
            $params['search'] = '';
        }
        
        $this->form->search = $params['search'];
        $tickets = $this->tickets->fetchAll(array('form_id =?' => $params['id']))->toArray();

        foreach($tickets as $key=>$ticket)
        {
        	if($ticket['status'] == 0){$status = 'Pending';}
        	if($ticket['status'] == 1){$status = 'Revised';}
        	if($ticket['status'] == 2){$status = 'Completed';}
        	$tickets[$key]['status'] = $status;
        	
        	if($ticket['priority'] == 1){$priority = 'Critical';}
        	if($ticket['priority'] == 2){$priority = 'Urgent';}
        	if($ticket['priority'] == 3){$priority = 'High Priority';}
        	if($ticket['priority'] == 4){$priority = 'Medium Priority';}
        	if($ticket['priority'] == 5){$priority = 'Low Priority';}
        	$tickets[$key]['priority'] = $priority;
        	
        	$userInfo = $this->user_profile->fetchAll(array('user_id = ?' => $ticket['user_id']))->toArray();
        	$fullname = $userInfo[0]['firstname'] .' ' . $userInfo[0]['lastname'];
        	
        	$tickets[$key]['user_id'] = $fullname;
        	
        }
        
        $this->view->paginate($tickets, array('limit' => 15));
    }
    public function viewPendingAction()
    {
    	$params  = $this->getRequest()->getParams();
    	
        $projectInfo = $this->projects->fetchRow(array('id = ?' => $params['id']))->toArray();
        
        $this->view->formid = $params['id'];
        $this->view->project = $projectInfo;
        
        if (!isset($params['search']) || (isset($params['search']) && $params['search'] == 'search ...')) {
            $params['search'] = '';
        }
        
        $this->form->search = $params['search'];
        
        $tickets = $this->tickets->fetchAll(array('form_id =?' => $params['id'], 'status = ?' => 0), 'id DESC')->toArray();
        
        foreach($tickets as $key=>$ticket)
        {
        	if($ticket['status'] == 0){$status = 'Pending';}
        	if($ticket['status'] == 1){$status = 'Revised';}
        	if($ticket['status'] == 2){$status = 'Completed';}
        	$tickets[$key]['status'] = $status;
        	
        	if($ticket['priority'] == 1){$priority = 'Critical';}
        	if($ticket['priority'] == 2){$priority = 'Urgent';}
        	if($ticket['priority'] == 3){$priority = 'High Priority';}
        	if($ticket['priority'] == 4){$priority = 'Medium Priority';}
        	if($ticket['priority'] == 5){$priority = 'Low Priority';}
        	$tickets[$key]['priority'] = $priority;
        	
        	$userInfo = $this->user_profile->fetchAll(array('user_id = ?' => $ticket['user_id']))->toArray();
        	$fullname = $userInfo[0]['firstname'] .' ' . $userInfo[0]['lastname'];
        	
        	$tickets[$key]['user_id'] = $fullname;
        	
        }
        $this->view->paginate($tickets, array('limit' => 15));
        
    }
    public function viewRevisedAction()
    {
    	$params  = $this->getRequest()->getParams();
    	
        $projectInfo = $this->projects->fetchRow(array('id = ?' => $params['id']))->toArray();
        
        $this->view->formid = $params['id'];
        $this->view->project = $projectInfo;
        
        if (!isset($params['search']) || (isset($params['search']) && $params['search'] == 'search ...')) {
            $params['search'] = '';
        }
        
        $this->form->search = $params['search'];
        $tickets = $this->tickets->fetchAll(array('form_id =?' => $params['id'], 'status = ?' => 1), 'id DESC')->toArray();
        
        foreach($tickets as $key=>$ticket)
        {
        	if($ticket['status'] == 0){$status = 'Pending';}
        	if($ticket['status'] == 1){$status = 'Revised';}
        	if($ticket['status'] == 2){$status = 'Completed';}
        	$tickets[$key]['status'] = $status;
        	
        	if($ticket['priority'] == 1){$priority = 'Critical';}
        	if($ticket['priority'] == 2){$priority = 'Urgent';}
        	if($ticket['priority'] == 3){$priority = 'High Priority';}
        	if($ticket['priority'] == 4){$priority = 'Medium Priority';}
        	if($ticket['priority'] == 5){$priority = 'Low Priority';}
        	$tickets[$key]['priority'] = $priority;
        	
        	$userInfo = $this->user_profile->fetchAll(array('user_id = ?' => $ticket['user_id']))->toArray();
        	$fullname = $userInfo[0]['firstname'] .' ' . $userInfo[0]['lastname'];
        	
        	$tickets[$key]['user_id'] = $fullname;
        	
        }
        $this->view->paginate($tickets, array('limit' => 15));
    }
    public function viewCompletedAction()
    {
    	$params  = $this->getRequest()->getParams();
    	
        $projectInfo = $this->projects->fetchRow(array('id = ?' => $params['id']))->toArray();
        
        $this->view->formid = $params['id'];
        $this->view->project = $projectInfo;
        
        if (!isset($params['search']) || (isset($params['search']) && $params['search'] == 'search ...')) {
            $params['search'] = '';
        }
        
        $this->form->search = $params['search'];
        $this->view->paginate($this->tickets->fetchAll(array('form_id =?' => $params['id'], 'status = ?' => 2))->toArray(), array('limit' => 15));
    }
    public function deleteAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $ticket  = $this->tickets->find($params['id']);
        
        $ticketData = $ticket->current();
        $ticketData->active = '0';  
        
        
       if ($ticketData->save()) {
        	$ticketInfo = $ticketData->toArray();
            $this->flash('Ticket' . $params['id'] . ', successfully closed.');
            $this->_redirect('admin/tickets/list/id/'.$ticketInfo['id']);
        }         
	}
	public function viewDetailAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $ticketInfo = $this->tickets->fetchRow(array('id = ?'=> $params['id']))->toArray();
        
        
        $this->view->ticketid = $ticketInfo['id'];
        if (null !== $ticketInfo) {            
            $this->view->ticket = $ticketInfo;
        } else {
            $this->flash('Error in fetching info', 'error');
            $this->_redirect('/admin/qat/list');
        } 
	}
	public function editAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $ticketInfo = $this->tickets->fetchRow(array('id = ?' => $params['id']))->toArray();
        
        $this->view->ticket = $ticketInfo;
        $this->view->description = "Update Ticket: ";   

        $this->form->set($ticketInfo);       
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('edit');
            if ($this->validator->edit->isValid()) {
                $data = $this->form->getPost();                
                if($params['id'])
                {
                	$ticket = $this->tickets->find($params['id'])->current();
                	if($ticket !== null){
                		$ticket->setFromArray($data);
                		if($ticket->save()){                			
                			$this->flash('Ticket ID: <b>' . $ticketInfo['id'] . ' - ' . $ticketInfo['page'] . '</b> has been successfully updated.');
                    		$this->_redirect('/admin/tickets/list');
                		}
                	}
                }     
            }
        }
    }
    public function reviseAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $ticketInfo = $this->tickets->fetchRow(array('id = ?' => $params['id']))->toArray();
        $ticketInfo['status'] = 1;        
       
        
        //$qaInfo = $this->reviews->fetchRow(array('id = ?'=> $ticketInfo['id']))->toArray();      	
    	$projectInfo = $this->projects->fetchRow(array('id = ?'=> $ticketInfo['form_id']))->toArray(); 
               
        if($params['id'])
        {
        	$ticket = $this->tickets->find($params['id'])->current();
        	if($ticket !== null){
        		$ticket->setFromArray($ticketInfo);
        		if($ticket->save()){                			
        			$this->flash('Ticket ID: <b>' . $ticketInfo['id'] . ' - ' . $ticketInfo['page'] . '</b> has been successfully sent to your developer.');
            		
        			 if($ticketInfo['priority'] == 1){$priority = 'Critical';}
			        	if($ticketInfo['priority'] == 2){$priority = 'Urgent';}
			        	if($ticketInfo['priority'] == 3){$priority = 'High Priority';}
			        	if($ticketInfo['priority'] == 4){$priority = 'Medium Priority';}
			        	if($ticketInfo['priority'] == 5){$priority = 'Low Priority';}
			        	$ticketInfo['priority'] = $priority;
        			
        			
        			//notify        			
        			
        			$managerProfile = $this->user_profile->fetchRow(array('user_id = ?' => $projectInfo['project_manager']))->toArray();
        			$manager = $managerProfile['firstname'] . ' ' . $managerProfile['lastname'];
        			$manager_mail = $managerProfile['email'];
        			
        			$developerProfile = $this->user_profile->fetchRow(array('user_id = ?' => $projectInfo['project_developer']))->toArray();
        			$developer =  $developerProfile['firstname'] . ' ' . $developerProfile['lastname'];
        			$developer_mail = $developerProfile['email'];
        			   			
        			$config = array('auth' => 'login',
			                        'username' => 'noreply@rechargeplus.com',
			                        'password' => 'rechargeplus');
			        $transport = new Zend_Mail_Transport_Smtp('smtp.emailsrvr.com', $config);
			        
        			
					$vars = array(
		              	'project_id'     		=> $ticketInfo['form_id'],
		              	'project'				=> $projectInfo['project'],		              	
		              	'qat_officer'			=> $projectInfo['qat_officer'],
			           	'tab'					=> $ticketInfo['tab'],			           	
			           	'page'					=> $ticketInfo['page'],			           	
			           	'page_url'				=> $ticketInfo['page_url'],
			           	'message'				=> $ticketInfo['message'],			           	
			           	'instructions'			=> $ticketInfo['instructions'],	
			           	'project_manager'	 	=> $manager,
			           	'date'					=> $ticketInfo['date'],
			         	'developer'			 	=> $developer,
			       		'status' 				=> $ticketInfo['status'],
			       		'priority' 				=> $ticketInfo['priority'],
			       		'ticketid'				=> $ticketInfo['id']
					);
					
		            
		            $this->mailer->setAddressFrom('admin@rex2check.com', 'REX2Check Admin')
		                         ->setAddressTo($developer_mail, $developer)
		                         ->setAddressTo('maner@i-pay.com.ph', 'Maner Puyawan', 'cc')
		                         ->setAddressTo('debi.santos@i-pay.com.ph', 'Debrielle Santos', 'cc')
		                         ->setAddressTo('mark.soriano@i-pay.com.ph', 'Mark Anthony Soriano', 'cc')		                         
		                         ->setAddressTo('ringo.bautista@i-pay.com.ph', 'Ringo Bautista', 'bcc')			                         		                         
		                         ->setSubject('Ticket # ' . $params['id'] . ' | ' .$projectInfo['project'])
		                         ->setBodyTemplate('dev-ticket', $vars)
		                        ->send($transport);
        			
        			
        			$this->_redirect('/admin/tickets/view-pending/id/' . $ticketInfo['form_id']);
        		}
        	}
        }                
    }
    public function completeAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $ticketInfo = $this->tickets->fetchRow(array('id = ?' => $params['id']))->toArray();
        $ticketInfo['status'] = 2;
               
        if($params['id'])
        {
        	$ticket = $this->tickets->find($params['id'])->current();
        	if($ticket !== null){
        		$ticket->setFromArray($ticketInfo);
        		if($ticket->save()){                			
        			$this->flash('Ticket ID: <b>' . $ticketInfo['id'] . ' - ' . $ticketInfo['page'] . '</b> has been successfully updated.');
            		$this->_redirect('/admin/tickets/view-revised/id/' . $ticketInfo['form_id']);
        		}
        	}
        }     
            
    }
    public function addAction()
    {
    	
        $this->view->description = "ISSUE TICKET AS DEVELOPER TASK";   
        $userList = $this->user_profile->fetchAll()->toArray();
        
        foreach($userList as $key=>$user)
        {        	    	        	
        	$users[$user['user_id']] = $user['firstname'] . ' ' . $user['lastname'] ;        	
        }
        
        $this->view->users = $users;  
        $this->view->element = array(
        			'layout' => 'Layout / Text',
        			'rollover' => 'Rollover',
        			'animation' => 'Animation',
        			'forms' => 'Form Element',
        			'link' => 'Linkage',
        			'source' => 'Source Code',
        			'action' => 'Action / Processing',
        			'validation' => 'Validation / Response'
        			); 
        
        $this->view->priority = array(
        			'5' => 'Low Priority',
        			'4' => 'Medium Priority',
        			'3' => 'High Priority',
        			'2' => 'Urgent',
        			'1' => 'Critical'
        			);     
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add');
            if ($this->validator->add->isValid()) {
                $data = $this->form->getPost();  
                
        		if($this->tickets->insert($data)){                			
        			$this->flash('Ticket has been successfully posted. notification was sent to involved parties');
            		       			
        			$developerProfile = $this->user_profile->fetchRow(array('user_id = ?' => $data['user_id']))->toArray();
        			$developer =  $developerProfile['firstname'] . ' ' . $developerProfile['lastname'];
        			$developer_mail = $developerProfile['email'];
        			
        			
        			$ticketInfo = $this->tickets->fetchRow(array('message = ?' => $data['message'], 'user_id = ?' => 1, 'page_remarks = ?' => $data['page_remarks']))->toArray();
        			
        			$config = array('auth' => 'login',
			                        'username' => 'noreply@rechargeplus.com',
			                        'password' => 'rechargeplus');
			        $transport = new Zend_Mail_Transport_Smtp('smtp.emailsrvr.com', $config);
        			
					
			        if($data['priority'] == 1){
			        	$priority = 'Critical';
			        }
			         if($data['priority'] == 2){
			        	$priority = 'Urgent';
			        }
			         if($data['priority'] == 3){
			        	$priority = 'High Priority';
			        }
			         if($data['priority'] == 4){
			        	$priority = 'Medium Priority';
			        }
			         if($data['priority'] == 5){
			        	$priority = 'Low Priority';
			         }	        
			        
			        $vars = array(
						'ticket'				=> $ticketInfo['id'],
		              	'project'     			=> $data['page_remarks'],
			           	'page'					=> $data['page'],
			           	'priority'				=> $priority,
			         	'page_url' 				=> $data['page_url'],
			       		'element'	 			=> $data['tab'],
			       		'message' 				=> $data['message'],
			       		'instructions'  		=> $data['instructions']			       		
					);
				
					
		            $this->mailer->setAddressFrom('admin@rex2check.com', 'REX2Check Admin')
		                         ->setAddressTo($developer_mail, $developer)
		                         ->setAddressTo('ringo.bautista@i-pay.com.ph', 'Ringo Bautista', 'cc')
		                         ->setAddressTo('maner@i-pay.com.ph', 'Maner Puyawan', 'cc')
		                         ->setAddressTo('debi.santos@i-pay.com.ph', 'Debrielle Santos', 'cc')
		                         ->setAddressTo('mark.soriano@i-pay.com.ph', 'Mark Anthony Soriano', 'cc')		                         		                         
		                         ->setSubject('Ticket # '.$ticketInfo['id']. ' | ' . $data['page_remarks']. ': '. $data['page'])
		                         ->setBodyTemplate('dev-ticket', $vars)
		                         ->send($transport);
		                         
        			$this->_redirect('/admin/tickets/listbug/id/1');
            		
        		}            	             
            }
        }
    }
    public function updateAllAction()
    {    	
        $request = $this->getRequest();
        $params  = $request->getParams(); 
        
        $tickets = $this->tickets->fetchAll(array('user_id = ?' => $params['id'], 'status = ?' => 0))->toArray();   	
        
		$config = array('auth' => 'login',
                        'username' => 'noreply@rechargeplus.com',
                        'password' => 'rechargeplus');
        $transport = new Zend_Mail_Transport_Smtp('smtp.emailsrvr.com', $config);        
        
		foreach ($tickets as $key=>$ticket) {
			
			$vars = array(
				'id'					=> $ticket['id'],
				'user_id'				=> $ticket['user_id'],
	          	'project'     			=> $ticket['form_id'],
	           	'page'					=> $ticket['page'],
	           	'priority'				=> $ticket['priority'],
	         	'page_url' 				=> $ticket['page_url'],
	       		'tab'	 				=> $ticket['tab'],
	       		'message' 				=> $ticket['message'],
	       		'instructions'  		=> $ticket['instructions']			       		
			);
	
	
				$this->mailer->setAddressFrom('admin@rex2check.com', 'REX2Check Admin')
	//                    ->setAddressTo($developer_mail, $developer)
	             ->setAddressTo('ringo.bautista@i-pay.com.ph', 'Ringo Bautista', 'cc')
	//                     ->setAddressTo('maner@i-pay.com.ph', 'Maner Puyawan', 'cc')
	//                     ->setAddressTo('debi.santos@i-pay.com.ph', 'Debrielle Santos', 'cc')
	//                     ->setAddressTo('mark.soriano@i-pay.com.ph', 'Mark Anthony Soriano', 'cc')		                         		                         
	             ->setSubject('Ticket # '.$ticket['id']. ' | ' . $ticket['page_remarks']. ': '. $ticket['page'])
	             ->setBodyTemplate('update-ticket', $vars)
	             ->send($transport); 
	             $this->flash('sent');
	             $this->_redirect('/admin/tickets/listbug/id/1');                    
	                    		
		}
    }
    function getPriority($priority)
    {
        if($priority == 1){
        	return 'Critical';
        }
         if($priority == 2){
        	return 'Urgent';
        }
         if($priority == 3){
        	return 'High Priority';
        }
         if($priority == 4){
        	return 'Medium Priority';
        }
         if($priority == 5){
        	return 'Low Priority';
        }
    }
    public function getName($userId)
    {
        $userInfo = $this->user_profile->fetchAll(array('user_id = ?' => $userId))->toArray();
        $fullname = $userInfo[0]['firstname'] .' ' . $userInfo[0]['lastname'];
        return $fullname;
    }
}