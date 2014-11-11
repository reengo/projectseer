<?php

class Pm_QatController extends ApplicationController 
{
    public function indexAction()
    {           
    	 $this->_redirect('/admin/qat/list');
    }
    
    public function reportAction()
    {
    	$request = $this->getRequest();
        $params  = $request->getParams();
        
        $page = $params['id'];
        $this->view->formid = $page;
        
    	$this->uses('tickets');
        $tickets = $this->tickets->fetchAll(array('form_id = ?' => $page))->toArray();
        $this->view->paginate($reviews, array('limit' => 10));   
        
        $this->uses('projects');
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