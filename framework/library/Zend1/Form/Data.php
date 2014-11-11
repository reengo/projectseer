<?php

class Form_Data 
{
    /**
     * The data
     *
     * @var array
     */
    protected $_data = array();
    
    /**
     * @var Form
     */
    protected $_form;
    
    /**
     * @var Form_Method
     */
    protected $_formMethod;
    
    /**
     * @var Zend_Controller_Request_Http
     */
    protected $_request;
    
    /**
     * @var Form_Data
     */
    protected static $_instance;
    
    /**
     * Constructor
     */
    private function __construct()
    {
        $this->_form = Form::getInstance();
        $this->_formMethod = Form_Method::getInstance($this->_form->getMethod());
        $this->_request = Zend_Controller_Front::getInstance()->getRequest();
    }
    
    /**
     * Get the singleton instance of this class
     *
     * @return Form_Data
     */
    public static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        
        return self::$_instance;
    }
    
    /**
     * Set the method
     *
     * @param string $method
     * @return Form_Data
     */
    public function setMethod($method)
    {
        $this->_form->setMethod($method);
        $this->_formMethod->setMethod($method);
        return $this;
    }
    
    /**
     * Set new data.
     *
     * @param string $name
     * @param string|array $value
     * @return Form_Data
     */
    public function set($name, $value = null)
    {
        $this->_form->set($name, $value);
        return $this;
    }
    
    /**
     * Get the data associated with key (name).
     *
     * @param string $name
     * @return string|array
     */
    public function get($name)
    {
        return $this->_form->get($name);
    }
    
    /**
     * Magic function. Set new data
     *
     * @param string $name
     * @param string|array $value
     * @return void
     */
    public function __set($name, $value)
    {
        $this->set($name, $value);
    }
    
    /**
     * Magic function. Get the data associated with key (name).
     *
     * @param string $name
     * @return string|array
     */
    public function __get($name)
    {
        return $this->get($name);
    }
    
    /**
     * Determines whether the data is submitted or not.
     * 
     * @return boolean
     */
    public function isSubmitted()
    {
        return $this->_formMethod->isSubmitted();
    }
    
    /**
     * Check if the request made is ajax.
     *
     * @return boolean
     */
    public function isAjaxRequest()
    {
        return $this->_request->isXmlHttpRequest();
    }
    
    /**
     * Get $_POST variable
     *
     * @return array
     */
    public function getPost()
    {
        return $this->_request->getPost();
    }
}