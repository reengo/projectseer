<?php
require_once 'Validator/Exception.php';
require_once 'Validator/Rule.php';
require_once 'Validator/Rule/Abstract.php';
require_once 'Zend/Validate.php';

class Validator
{
    /**
     * @var Validator
     */
    protected static $_instance;
    
    protected $_rules = array();
    
    /**
     * @var Form
     */
    protected $_form;
    
    public function __construct()
    {
        $this->_form = Form::getInstance();
    }
    
    /**
     * @return Validator
     */
    public static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        
        return self::$_instance;
    }
    
    public function add($name, $rule)
    {
        if (!($rule instanceof Validator_Rule)) {
            throw new Validator_Exception('Validator Rule must be an instance of (Validator_Rule)');
        }
        
        $this->_rules[$name] = $rule;
        return $this;
    }
    
    public function __set($name, $rule)
    {
        $this->add($name, $rule);
    }
    
    public function get($name)
    {
        if (isset($this->_rules[$name])) {
            return $this->_rules[$name];
        }
        
        throw new Validator_Exception('Validator Rule (' . $name . ') is not registered in this validator.');
    }
    
    public function __get($name)
    {
        return $this->get($name);
    }
    
    public function setMessages($name, $messages = array())
    {
        if (is_array($name)) {
            $msgs = $name;
        } else {
            $msgs[$name] = $messages;
        }
        
        $this->_form->setMessages($msgs);
        return $this;
    }
    
    public function setMessage($name, $message)
    {
        $this->_form->setMessage($name, $message);
        return $this;
    }
    
    public function getMessages($name = null)
    {
        $messages = $this->_form->getMessages();
        
        if (null === $name) {
            return $messages;
        } else {
            if (isset($messages[$name])) {
                return $messages[$name];
            }
        }
        
        return null;
    }
}