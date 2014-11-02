<?php

abstract class Helper_Html_Element
{
    protected $_tag;
    
    protected $_options = array();
    
    protected $_request;
    
    public function __construct($options = null, $request = null)
    {
        $this->setRequest($request);
        $this->setOptions($options);
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
    
    public function removeOption($name)
    {
        if (isset($this->_options[$name])) {
            unset($this->_options[$name]);
            return true;
        }
        
        return false;
    }
    
    public function render()
    {
        require_once 'library/Helper/Html/Exception.php';
        throw new Helper_Html_Exception('render() not implemented.');
    }
    
    /**
     * Convert options to tag attributes
     * 
     * @return string
     */
    protected function _htmlAttribs(array $attribs)
    {
        $xhtml = '';
        foreach ((array) $attribs as $key => $val) {
            $key = htmlspecialchars($key, ENT_COMPAT, 'UTF-8');
            if (is_array($val)) {
                $val = implode(' ', $val);
            }
            $val    = htmlspecialchars($val, ENT_COMPAT, 'UTF-8');
            $xhtml .= " $key=\"$val\"";
        }
        return $xhtml;
    }
}