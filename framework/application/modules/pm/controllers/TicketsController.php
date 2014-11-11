<?php

class Pm_TicketsController extends ApplicationController 
{
    public function indexAction()
    {
        $this->_redirect('/pm/tickets/list');
    }
     public function beforeFilter()
    {       
        $this->uses('projects', 'tickets', 'user_list');
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
        $this->view->paginate($this->projects->fetchAll(array('id <?' => 5),'id DESC')->toArray(), array('limit' => 15));
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
        	if($ticket['status'] == 0)
        	{
        		$status = 'Pending';
        	}
        	if($ticket['status'] == 1)
        	{
        		$status = 'Revised';
        	}
        	if($ticket['status'] == 2)
        	{
        		$status = 'Completed';
        	}
        	$tickets[$key]['status'] = $status;
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
        $this->view->paginate($this->tickets->fetchAll(array('form_id =?' => $params['id'], 'status = ?' => 0))->toArray(), array('limit' => 15));
        
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
        $this->view->paginate($this->tickets->fetchAll(array('form_id =?' => $params['id'], 'status = ?' => 1))->toArray(), array('limit' => 15));
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
            $this->_redirect('/pm/qat/list');
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
                    		$this->_redirect('/pm/projects/list');
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
               
        if($params['id'])
        {
        	$ticket = $this->tickets->find($params['id'])->current();
        	if($ticket !== null){
        		$ticket->setFromArray($ticketInfo);
        		if($ticket->save()){                			
        			$this->flash('Ticket ID: <b>' . $ticketInfo['id'] . ' - ' . $ticketInfo['page'] . '</b> has been successfully updated.');
            		$this->_redirect('/pm/tickets/view-pending/id/' . $ticketInfo['form_id']);
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
            		$this->_redirect('/pm/tickets/view-revised/id/' . $ticketInfo['form_id']);
        		}
        	}
        }     
            
    }
}