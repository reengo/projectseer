<?php

class Form_Decorator_Label extends Form_Decorator_Abstract 
{
    protected $_helper = 'formLabel';
    
    /**
     * Default placement: prepend
     * @var string
     */
    protected $_placement = 'PREPEND';
    
    /**
     * HTML tag with which to surround label
     * @var string
     */
    protected $_tag;

    /**
     * Set element ID
     * 
     * @param  string $id 
     * @return Zend_Form_Decorator_Label
     */
    public function setId($id)
    {
        $this->setOption('id', $id);
        return $this;
    }

    /**
     * Retrieve element ID (used in 'for' attribute)
     *
     * If none set in decorator, looks first for element 'id' attribute, and 
     * defaults to element name.
     * 
     * @return string
     */
    public function getId()
    {
        $id = $this->getOption('id');
        if (null === $id) {
            if (null !== ($element = $this->getElement())) {
                if (isset($element->id)) {
                    $id = $element->id;
                } else {
                    $id = $element->getName();
                }
                
                if (substr($id, -2) == '[]') {
                    $id = substr($id, 0, strlen($id) - 2);
                }
                if (strstr($id, ']')) {
                    $id = trim($id, ']');
                    $id = str_replace('][', '-', $id);
                    $id = str_replace('[', '-', $id);
                }

                $this->setId($id);
            }
        }

        return $id;
    }

    /**
     * Set HTML tag with which to surround label
     * 
     * @param  string $tag 
     * @return Zend_Form_Decorator_Label
     */
    public function setTag($tag)
    {
        $this->_tag = (string) $tag;
        return $this;
    }

    /**
     * Get HTML tag, if any, with which to surround label
     * 
     * @return void
     */
    public function getTag()
    {
        if (null === $this->_tag) {
            $tag = $this->getOption('tag');
            if (null !== $tag) {
                $this->removeOption('tag');
                $this->setTag($tag);
            }
            return $tag;
        }

        return $this->_tag;
    }

    public function getLabel()
    {
        if (null !== ($label = $this->getOption('label'))) {
            $this->removeOption('label');
            return $label;
        }
        
        return null;
    }
    
    /**
     * Render a label
     * 
     * @param  string $content 
     * @return string
     */
    public function render($content)
    {
        $element = $this->getElement();
        $view    = $element->getView();
        if (null === $view) {
            return $content;
        }

        $label     = $this->getLabel();
        $separator = $this->getSeparator();
        $placement = $this->getPlacement();
        $tag       = $this->getTag();
        $id        = $this->getId();
        $options   = $this->getOptions();

        if (empty($label) && empty($tag)) {
            return $content;
        }

        if (!empty($label)) {
            $formLabel = $this->_getHelper();
            $formLabel->setView($view);
            $label = $formLabel->formLabel($element->getName(), $label, $options);
        }

        if (null !== $tag) {
            require_once 'library/Form/Decorator/HtmlTag.php';
            $decorator = new Form_Decorator_HtmlTag();
            $decorator->setOptions(array('tag' => $tag));
            $label = $decorator->render($label);
        }

        switch ($placement) {
            case self::APPEND:
                return $content . $separator . $label;
            case self::PREPEND:
                return $label . $separator . $content;
        }
    }
}