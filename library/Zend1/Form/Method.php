<?php
require_once 'Method/Interface.php';
require_once 'Method/Exception.php';
require_once 'Method/Post.php';
require_once 'Method/Get.php';

class Form_Method
{
    /**
     * @var Form_Method
     */
    private static $_instance;
    
    /**
     * @var Zend_Controller_Request_Http
     */
    private $_request;
    
    private $_method;
    
    public static function getInstance($method = null)
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }

        self::$_instance->initialize($method);
        return self::$_instance;
    }
    
    public function initialize($method = null)
    {
        $this->_request = Zend_Controller_Front::getInstance()->getRequest();
        
        if (null === $method) {
            $this->setMethod($this->_request->getMethod());
        } else {
            $this->setMethod($method);
        }
    }
    
    public function setMethod($method)
    {
        $this->_method = $method;
    }
    
    public function getMethod()
    {
        return $this->_method;
    }
    
    public function isSubmitted()
    {
        $method = $this->getMethod();
        
        $inflector = new Inflector($method);
        $method = $inflector->camelize();
        
        $methodClass = 'Form_Method_' . $method;
        $method = new $methodClass($this->_request);
        
        if ($method instanceof Form_Method_Interface) {
            return $method->isSubmitted();
        } else {
            throw new Form_Method_Exception('Method class (' . $methodClass . ') must implement (Form_Method_Interface)');
        }
    }
}