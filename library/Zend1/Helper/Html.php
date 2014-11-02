<?php
require_once 'Html/Abstract.php';
require_once 'Html/Element.php';

class Helper_Html extends Helper_Html_Abstract
{
    /**
     * @var Helper_Html
     */
    protected static $_instance;
    
    protected $_prefix = 'Helper_Html_';
    
    /**
     * @param array $options
     * @return Helper_Html
     */
    public static function getInstance($options = null)
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        self::$_instance->setOptions($options);
        
        return self::$_instance;
    }
    
    public function render($element)
    {
        $element = (string) $element;
        $element = new Inflector($element);
        $element = $element->camelize();
        
        $class = $this->_prefix . $element;
        if ($this->_loadClass($class)) {
            $options = $this->getOptions();
            
            $class = new $class($options, $this->getRequest());
            return $class->render();
        }
    }
    
    private function _loadClass($class)
    {
        $ds = DIRECTORY_SEPARATOR;
        $file = 'library' . $ds . str_replace('_', $ds, $class) . '.php';
        require_once $file;
        
        return class_exists($class);
    }
}