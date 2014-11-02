<?php

class Form_Element_Hidden extends Form_Element 
{
    protected $_helper = "formHidden";
    
    public function init()
    {
        // remove previously registered decorator
        $this->removeDecorator('HtmlTag');
        $this->removeDecorator('Label');
    }
}