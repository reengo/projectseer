<?php
require_once 'Interface.php';

abstract class Form_Decorator_Abstract implements Form_Decorator_Interface 
{
    /**#@+
     * Placement constants
     * @const string
     */
    const APPEND  = 'APPEND';
    const PREPEND = 'PREPEND';
    /**#@-*/

    /**
     * Default placement: append
     * @var string
     */
    protected $_placement = 'APPEND';
    
    protected $_element;
    
    protected $_separator = PHP_EOL;
    
    protected $_options = array();
        
    public function __construct($options = null)
    {
        $options = (array) $options;
        $this->setOptions($options);
    }
    
    public function setOptions(array $options)
    {
        $this->_options = $options;
        return $this;
    }
    
    public function setOption($name, $value)
    {
        $name = (string) $name;
        $this->_options[$name] = $value;
        return $this;
    }
    
    public function getOptions()
    {
        return $this->_options;
    }
    
    public function getOption($name)
    {
        $name = (string) $name;
        if (isset($this->_options[$name])) {
            return $this->_options[$name];
        }
        
        return null;
    }
    
    public function removeOption($name)
    {
        if (null !== $this->getOption($name)) {
            unset($this->_options[$name]);
        }
        
        return !isset($this->_options[$name]);
    }
    
    public function clearOptions()
    {
        $this->_options = array();
        return $this;
    }
    
    public function setElement($element)
    {
        if ((!$element instanceof Form_Element)
            && (!$element instanceof Form))
        {
            require_once 'Exception.php';
            throw new Form_Decorator_Exception('Invalid element type passed to decorator');
        }
        
        $this->_element = $element;
        return $this;
    }
    
    public function getElement()
    {
        return $this->_element;
    }
    
    public function getSeparator()
    {
        $separator = $this->_separator;
        if (null !== ($separatorOpt = $this->getOption('separator'))) {
            $separator = $this->_separator = $separatorOpt;
            $this->removeOption('separator');
        }
        
        return $separator;
    }
    
    /**
     * Determine if decorator should append or prepend content
     * 
     * @return string
     */
    public function getPlacement()
    {
        $placement = $this->_placement;
        if (null !== ($placementOpt = $this->getOption('placement'))) {
            $placementOpt = strtoupper($placementOpt);
            switch ($placementOpt) {
                case self::APPEND:
                case self::PREPEND:
                    $placement = $this->_placement = $placementOpt;
                    break;
                case false:
                    $placement = $this->_placement = null;
                    break;
                default:
                    break;
            }
            $this->removeOption('placement');
        }

        return $placement;
    }
    
    public function render($content)
    {
        require_once 'Exception.php';
        throw new Form_Decorator_Exception('render() not implemented');
    }
    
    protected function _getHelper($prefix = 'Zend_View_Helper_')
    {
        $helper = $prefix . ucfirst($this->_helper);
        Zend_Loader::loadClass($helper);
        
        return new $helper();
    }
}