<?php
require_once 'Zend/Validate/Abstract.php';

abstract class Validator_Rule_Abstract extends Zend_Validate_Abstract 
{
    protected $_field;
    
    protected $_additionalFields = array();
    
    protected $_object;
    
    /**
     * @var Zend_Controller_Request_Http
     */
    protected $_request;
    
    public function setRequest($request = null)
    {
        if (null === $request) {
            $this->_request = Zend_Controller_Front::getInstance()->getRequest();
        } else {
            if ($request instanceof Zend_Controller_Request_Abstract) {
                $this->_request = $request;
            } else {
                throw new Validator_Exception('Request object must be an instance of (Zend_Controller_Request_Abstract)');
            }
        }
    }
    
    /**
     * Get Request object
     *
     * @return Zend_Controller_Request_Http
     */
    public function getRequest()
    {
        return $this->_request;
    }
    
    public function setObject($object)
    {
        $this->_object = $object;
        return $this;
    }
    
    public function getObject()
    {
        return $this->_object;
    }
    
    public function setField($field)
    {
        $this->_field = (string) $field;
        return $this;
    }
    
    public function getField()
    {
        return $this->_field;
    }
    
    public function setAdditionalFields($fields)
    {
        $this->_additionalFields = (array) $fields;
        return $this;
    }
    
    public function getAdditionalFields()
    {
        return $this->_additionalFields;
    }
    
    protected function _setObject($object)
    {
        $this->setObject($object);
    }
    
    protected function _getFieldsData()
    {
        $data = array();
        
        $post = $this->getRequest()->getPost();
        $data[$this->getField()] = $post[$this->getField()];
        
        if (count(($fields = $this->getAdditionalFields())) > 0) {
            foreach ($fields as $field) {
                $data[$field] = $post[$field];
            }
        }
        return $data;
    }
}