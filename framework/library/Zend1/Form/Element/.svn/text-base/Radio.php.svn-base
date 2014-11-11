<?php

class Form_Element_Radio extends Form_Element
{
    protected $_helper = 'formRadio';
    
    public function setAttribs($attribs)
    {
        parent::setAttribs($attribs);
        $this->_setOptions();
        return $this;
    }
    
    protected function _setOptions()
    {
        $options = array();
        
        $attribs = $this->_getAttribs();
        if (isset($attribs['options'])) {
            $options = $attribs['options'];
        } elseif (isset($attribs['list'])) {
            $list = explode(',', $attribs['list']);
            foreach ($list as $name => $val) {
                $options[$val] = $val;
            }
            $this->removeAttrib('list');
        }

        $this->_options = array_merge($this->_options, (array) $options);
    }
    
    protected function _setOption($text, $value)
    {
        $this->_options = array_merge($this->_options, array($value => $text));

        return true;
    }
}