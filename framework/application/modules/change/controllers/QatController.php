<?php

class Change_QatController extends ApplicationController 
{
    public function indexAction()
    {           
    	 $this->_redirect('/qa/qat/list');
    }
     public function beforeFilter()
    {       
        $this->uses('projects', 'reviews','tickets');
    }
    public function listAction()
    {
    	$request = $this->getRequest();
        $params  = $request->getParams();
        
        $page = $params['id'];
        $this->view->formid = $page;

        $reviews = $this->reviews->fetchAll(array('form_id = ?' => $page, 'active = ?' => 1),'id DESC')->toArray();
        
        foreach($reviews as $key=>$review)
        {
        	$reviews[$key]['layout'] = $this->getRating($review['layout']);
        	$reviews[$key]['rollover'] = $this->getRating($review['rollover']);
        	$reviews[$key]['animation'] = $this->getRating($review['animation']);
        	$reviews[$key]['forms'] = $this->getRating($review['forms']);
        	$reviews[$key]['link'] = $this->getRating($review['link']);
        	$reviews[$key]['source'] = $this->getRating($review['source']);
        	$reviews[$key]['action'] = $this->getRating($review['action']);
        	$reviews[$key]['validation'] = $this->getRating($review['validation']);
        }
        
        $this->view->paginate($reviews, array('limit' => 10));   

        $projectInfo = $this->projects->fetchRow(array('id = ?'=> $page))->toArray();
        $this->view->project = $projectInfo;
    }
    public function viewAction()
    {
    	$request = $this->getRequest();
        $params  = $request->getParams();
        
    	$this->uses('reviews');
        $qaInfo = $this->reviews->fetchRow(array('id = ?'=> $params['id']))->toArray();
        $this->view->qaid = $qaInfo['form_id'];
        if (null !== $qaInfo) {            
            $this->view->qat = $qaInfo;
        } else {
            $this->flash('Error in fetching info', 'error');
            $this->_redirect('/qa/qat/list');
        }
    }
    public function editAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();

        $reviewInfo = $this->reviews->fetchRow(array('id = ?' => $params['id']))->toArray();
        
        $this->view->review = $reviewInfo;
        $this->view->description = "Edit Review Item: ";   
        $this->view->qaid = $params['id'];

        $this->form->set($reviewInfo);       
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('edit');
            if ($this->validator->edit->isValid()) {
                $data = $this->form->getPost();                
                if($params['id'])
                {
                	$project = $this->reviews->find($params['id'])->current();
                	if($project !== null){
                		$project->setFromArray($data);
                		if($project->save()){                			
                			$this->flash('Review Item <b>' . $reviewInfo['page'] . '</b> has been successfully updated to <b>'. $data['page'].'</b>' );
                    		$this->_redirect('/qa/qat/view/id/'.$params['id']);
                		}
                	}
                }     
            }
        }
    }
    public function deleteAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $review  = $this->reviews->find($params['id']);
        
        $reviewData = $review->current();
        $reviewData->active = '0';  
        
        
       if ($reviewData->save()) {
        	$reviewInfo = $reviewData->toArray();
            $this->flash('Record successfully deleted.');
            $this->_redirect('admin/qat/list/id/'.$reviewInfo['form_id']);
        }         
	}
	public function addAction(){
		$request = $this->getRequest();
        $params  = $request->getParams();
        
        $this->view->formid = $params['id'];
        
        $this->view->rate = array('1' => 'PASS','2' => 'FAIL','3' => 'UNRATED');
        
        $this->view->locations = (array) Env::get('home_locations');
		
		$this->view->description = "REVIEW NEW ITEM";   
    
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add');
            if ($this->validator->add->isValid()) {
                $data = $this->form->getPost();  
                              
        		if($this->reviews->insert($data)){   
        			if($data['layout'] == 2 || $data['rollover'] == 2 || $data['animation'] == 2 || $data['forms'] == 2 || $data['link'] == 2 || $data['source'] == 2 || $data['actions'] == 2 || $data['validation'] == 2){
        				$qaInfo = $this->reviews->fetchRow(array('page = ?'=> $data['page']))->toArray();
        				$this->_redirect('/qa/qat/add-ticket/id/'.$qaInfo['id']);
        			}          			
        			$this->flash('Review <b>' . $data['page'] . '</b> has been successfully added.');
            		$this->_redirect('/qa/qat/list/id/'.$data['form_id']);
            		
        		}            	             
            }
        }
    }
    public function addTicketAction(){
		$request = $this->getRequest();
        $params  = $request->getParams();
        
       
        
        $this->view->locations = (array) Env::get('home_locations');
		
		$this->view->description = "ISSUE TICKETS";   
    	$qaInfo = $this->reviews->fetchRow(array('id = ?'=> $params['id']))->toArray();  
    	$this->view->qat = $qaInfo;  	   	
    	$this->form->set($qaInfo);   
    	
    	$projectInfo = $this->projects->fetchRow(array('id = ?'=> $qaInfo['form_id']))->toArray();  
    	$this->view->project = $projectInfo;
    	
    	
    	
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add_ticket');
            if ($this->validator->add_ticket->isValid()) {
                $data = $this->form->getPost();                                
                
                $ticketData = array(
                	'form_id' => $data['form_id'],
                	'user_id' => $data['user_id'],
                	'page' => $data['page'],
                	'page_url' => $data['page_url'],
                	'tab' => $data['tab'],
                	'message' => $data['message'],
                	'instructions' => $data['instructions'],
                	'status' => $data['status'],
                	'priority' => $data['priority']                	
                	);
        		
                
                if($this->tickets->insert($ticketData)){   
                	$updateRating = array($ticketData['tab'] => 5);
                	$qatReview = $this->reviews->find($params['id'])->current();                	
            		$qatReview->setFromArray($updateRating);
            		$qatReview->save();
                	    			
        			$this->flash($ticketData['tab'].' Ticket: <b>' . $ticketData['page'] . '</b> has been successfully issued.');
            		$this->_redirect('/qa/qat/add-ticket/id/'.$params['id']);          		
        		}            	             
            }
        }
    }
    public function reportAction()
    {
    	$request = $this->getRequest();
        $params  = $request->getParams();
        
        $page = $params['id'];
        $this->view->formid = $page;
        
        $tickets = $this->tickets->fetchAll(array('form_id = ?' => $page))->toArray();
        $this->view->paginate($reviews, array('limit' => 10));   
        
        $projectInfo = $this->projects->fetchRow(array('id = ?'=> $page))->toArray();
        $this->view->project = $projectInfo;
        $this->view->id = $projectInfo['id'];
    }
    public function getRating($rating)
    {
        if ($rating == 1){
        	$rating = '<div style="width:10px;height:10px;background:green"></div>';
        }if($rating == 2 or $rating == 5){
        	$rating = '<div style="width:10px;height:10px;background:red"></div>';
        }if($rating == 3){
        	$rating = '<div style="width:10px;height:10px;background:yellow"></div>';
        }if($rating == '0'){
        	$rating = '<div style="width:10px;height:10px;background:blue"></div>';
        }
        return $rating;
    }
}