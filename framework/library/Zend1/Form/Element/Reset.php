<?php

class Form_Element_Reset extends Form_Element
{
    protected $_helper = 'formReset';
    
    protected function _getValue()
    {
        $value = $this->_value;
        
        $attribs = $this->_getAttribs();
        if (isset($attribs['value'])) {
            $value = $attribs['value'];
        }
        
        return $value;
    }
}