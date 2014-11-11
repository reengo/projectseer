<?php

class Form_Method_Get implements Form_Method_Interface 
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
        $params = $this->_request->getParams();
        unset($params['module']);
        unset($params['controller']);
        unset($params['action']);
        
        return (bool) count($params);
    }
}