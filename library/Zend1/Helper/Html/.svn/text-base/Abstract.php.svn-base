<?php

abstract class Helper_Html_Abstract
{
    protected $_options = array();
    
    /**
     * @var Zend_Controller_Request_Http
     */
    protected $_request;
    
    public function __construct($options = null, Zend_Controller_Request_Abstract $request = null)
    {
        $this->setOptions($options);
        $this->setRequest($request);
    }
    
    public function setRequest($request)
    {
        $this->_request = $request;
    }
    
    /**
     * @return Zend_Controller_Request_Http
     */
    public function getRequest()
    {
        if (null === $this->_request) {
            $this->_request = Zend_Controller_Front::getInstance()->getRequest();
        }
        
        return $this->_request;
    }
    
    public function setOptions($options)
    {
        $options = (array) $options;
        $this->_options = array_merge($this->_options, $options);
        return $this;
    }
    
    public function getOptions()
    {
        return $this->_options;
    }
    
    public function setOption($name, $value)
    {
        $this->_options[$name] = $value;
        return $this;
    }
    
    public function getOption($name)
    {
        if (isset($this->_options[$name])) {
            return $this->_options[$name];
        }
        
        return null;
    }
    
    public function clearOptions()
    {
        $this->_options = array();
        return $this;
    }
}