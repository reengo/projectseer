<?php

class IndexController extends ApplicationController 
{
    public function indexAction()
    {
    	$this->_redirect('admin');
    	
        $this->view->header = 'dito lagay header';
        $this->view->footer = 'dito lagay footer';
        $this->template = tae.tpl;

        if ($this->form->isSubmitted()) {
            $this->useValidationRules('check');
            if ($this->validator->check->isValid()) {
                $this->flash('Successfully saved! (This is a sample message)');
                $this->_redirect('/');
            }
        }
        
        $this->view->options = array(
            'Asia' => array(
                'PH' => 'Philippines',
                'CH' => 'China',
            ),
            'USA'   => array(
                'US' => 'United States of America',
            )
        );
    }
}