<?php

class Form_Element_Select extends Form_Element 
{
    protected $_helper = 'formSelect';
    
    protected $_blankText = '--';
    
    public function setAttribs($attribs)
    {
        parent::setAttribs($attribs);
        $this->_setBlankText();
        $this->_setOptions();
        return $this;
    }
    
    protected function _setOptions()
    {
        $options = array();
        
        $attribs = $this->_getAttribs();
        if (isset($attribs['options'])) {
            $options = $attribs['options'];
        }

        $this->_options += (array) $options;
    }
    
    protected function _setOption($text, $value)
    {
        $this->_options += array($value => $text);
        return true;
    }
    
    protected function _setBlankText()
    {
        $blankText = $this->_blankText;
        
        $attribs = $this->_getAttribs();
        if (isset($attribs['blank_text'])) {
            $blankText = $attribs['blank_text'];
            $this->removeAttrib('blank_text');
        }
        
        $this->_setOption($blankText, '');
    }
}