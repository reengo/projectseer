<?php

class Form_Method_Post implements Form_Method_Interface
{
    /**
     * @var Zend_Controller_Request_Http
     */
    private $_request;
    
    public function __construct($request)
    {
        $this->_request = $request;
    }
    
    public function isSubmitted()
    {
        return $this->_request->isPost();
    }
}