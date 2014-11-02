<?php

class Form_Element_Checkbox extends Form_Element 
{
    protected $_helper = 'formCheckbox';
    
    public function loadDefaultDecorators()
    {
        if (count($this->_decorators) <= 0) {
            $this->addDecorator('Label', array('label' => $this->_getLabel(), 'placement' => 'APPEND'));
            
            $nodiv  = $this->getAttrib('nodiv');
            $no_div = $this->getAttrib('no_div');

            if (!($nodiv === true || $no_div === true)) {
                $this->addDecorator('HtmlTag', array('tag' => 'div'));
            }
            $this->removeAttrib('nodiv');
            $this->removeAttrib('no_div');
        }
    }
    
    public function setAttribs($attribs)
    {
        $data = $this->_getFormData();
        $name = $this->getName();
        if ($attribs['value'] == $data[$name]) {
            $attribs['checked'] = true;
        }
        if ($this->getRequest()->isPost()) {
            $post = $this->getRequest()->getPost();
            if ($attribs['value'] == $post[$name]) {
                $attribs['checked'] = true;
            } else {
                $attribs['checked'] = false;
            }
        }
        parent::setAttribs($attribs);
        return $this;
    }
    
    public function setValue($value)
    {
        if ($value = $this->getAttrib('value')) {
            parent::setValue($value);
        }
        
        return $this;
    }
    
    protected function _getValue()
    {
        return $this->_value;
    }
    
    protected function _getLabel()
    {
        $label = '';
        if (null !== ($label = $this->getAttrib('text'))) {
            $this->removeAttrib('text');
        } else {
            if (null === ($label = $this->getAttrib('value'))) {
                $label = $this->getName();
            }
        }
        
        return $label;
    }
}