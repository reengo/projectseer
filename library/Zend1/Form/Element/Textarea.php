<?php

class Form_Element_Textarea extends Form_Element 
{
    protected $_helper = 'formTextarea';
    
    protected $_rows = 8;
    
    protected $_cols = 40;
    
    public function setAttribs($attribs)
    {
        if (empty($attribs['rows'])) {
            $attribs['rows'] = (int) $this->_rows;
        }
        if (empty($attribs['cols'])) {
            $attribs['cols'] = (int) $this->_cols;
        }
        
        parent::setAttribs($attribs);
        return $this;
    }
}