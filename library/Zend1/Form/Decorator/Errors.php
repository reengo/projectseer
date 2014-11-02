<?php

class Form_Decorator_Errors extends Form_Decorator_Abstract 
{
    protected $_helper = 'formErrors';
    
    protected $_placement = 'PREPEND';
    
    protected $_elementClass = 'errors';
    
    protected $_elementStart     = '<div class="%s"%s><ul><li>';
    protected $_elementSeparator = '</li><li>';
    protected $_elementEnd       = '</li></ul></div>';
    
    public function setOptions(array $options)
    {
        if (!isset($options['escape'])) {
            $options['escape'] = false;
        }
        
        parent::setOptions($options);
        return $this;
    }
    
    public function setElementStart($element)
    {
        $this->_elementStart = (string) $element;
        return $this;
    }
    
    public function setElementEnd($element)
    {
        $this->_elementEnd = (string) $element;
        return $this;
    }
    
    public function setElementSeparator($element)
    {
        $this->_elementSeparator = (string) $element;
        return $this;
    }
    
    public function getElementClass()
    {
        $class = $this->_elementClass;
        
        if (null !== ($classOpt = $this->getOption('class'))) {
            $class = $this->_elementClass = $classOpt;
            $this->removeOption('class');
        }
        
        return $class;
    }
    
    public function getElementStart()
    {
        $class = $this->getElementClass();
        $elementStart = sprintf($this->_elementStart, $class, '%s');
        return $elementStart;
    }
    
    public function getElementEnd()
    {
        return $this->_elementEnd;
    }
    
    public function getElementSeparator()
    {
        return $this->_elementSeparator;
    }
    
    public function getMessages()
    {
        $element = $this->getElement();
        
        $errMsgs = array();
        $errors  = $element->getMessages();
        foreach ($errors as $idx => $msgs) {
            $msgs = (array) $msgs;
            foreach ($msgs as $msg) {
                if (is_int($idx) || !$idx) {
                    $errMsgs[] = $msg;
                } else {
                    $errMsgs[] = '<b>' . $idx . ':</b> ' . $msg;
                }
            }
        }
        
        return $errMsgs;
    }
    
    public function render($content)
    {
        $element = $this->getElement();
        $view    = $element->getView();
        if (null === $view) {
            return $content;
        }
        
        $errors = $this->getMessages();
        if (null === $errors || count($errors) == 0) {
            return $content;
        }
        
        $separator        = $this->getSeparator();
        $placement        = $this->getPlacement();
        $elementStart     = $this->getElementStart();
        $elementEnd       = $this->getElementEnd();
        $elementSeparator = $this->getElementSeparator();
        
        $formErrors = $this->_getHelper();
        $formErrors->setElementEnd($elementEnd)
                   ->setElementSeparator($elementSeparator)
                   ->setElementStart($elementStart)
                   ->setView($view);
                   
        $errors = $formErrors->formErrors($errors, $this->getOptions());
        
        switch ($placement) {
            case self::APPEND:
                return $content . $separator . $errors;
            case self::PREPEND:
                return $errors . $separator . $content;
        }
    }
}