<?php

class Form_Element
{
    protected $_options = array();

    protected $_origAttribs = array();
    
    protected $_attribs = array();
    
    protected $_decorators = array();
    
    protected $_name;
    
    protected $_value;
    
    protected $_defaultValue;
    
    protected $_helper = 'formText';
        
    protected $_view;
    
    protected $_request;
    
    /**
     * Element types that represent buttons
     * @var array
     */
    protected $_buttonTypes = array(
        'Form_Element_Button',
        'Form_Element_Reset',
        'Form_Element_Submit',
    );
    
    public function __construct($attribs = array(), $name = null)
    {
        $this->setRequest();
        $this->setName($name);
        $this->setAttribs($attribs);
        $this->loadDefaultDecorators();
        $this->init();
    }
    
    public function init()
    { }
    
    public function loadDefaultDecorators()
    {
        if (count($this->_decorators) <= 0) {
            if (null !== ($label = $this->getAttrib('label'))) {
                $this->addDecorator('Label', array('label' => $label, 'separator' => ' '));
                $this->removeAttrib('label');
            }
            
            $nodiv  = $this->getAttrib('nodiv');
            $no_div = $this->getAttrib('no_div');

            if (!($nodiv === true || $no_div === true)) {
                $this->addDecorator('HtmlTag', array('tag' => 'div'));
            }
            $this->removeAttrib('nodiv');
            $this->removeAttrib('no_div');
        }
    }
    
    public function setRequest(Zend_Controller_Request_Abstract $request = null)
    {
        if (null == $request) {
            $this->_request = Zend_Controller_Front::getInstance()->getRequest();
        } else {
            $this->_request = $request;
        }
        return $this;
    }
    
    public function getRequest()
    {
        return $this->_request;
    }
        
    public function setAttribs($attribs)
    {
        $this->_origAttribs = $attribs;
        $attribs = (array) $attribs;
        
        $normalized = array();
        foreach ($attribs as $name => $value) {
            $name = strtolower($name);
            $normalized[$name] = $value;
        }
        
        if (count($this->_attribs)) {
            $this->_attribs = array_merge($this->_attribs, $normalized);
        } else {
            $this->_attribs = $normalized;
        }
        
        return $this;
    }
    
    public function getAttrib($name)
    {
        $name = (string) $name;
        if (isset($this->_attribs[$name])) {
            return $this->_attribs[$name];
        }
        
        return null;
    }
    
    public function removeAttrib($name)
    {
        if (null !== ($attrib = $this->getAttrib($name))) {
            unset($this->_attribs[$name]);
            return true;
        }
        
        return false;
    }
    
    public function getOrigAttribs()
    {
        return $this->_origAttribs;
    }
    
    /**
     * Filter a name to only allow valid variable characters
     * 
     * @param  string $value 
     * @param  bool $allowBrackets
     * @return string
     */
    public function filterName($value, $allowBrackets = false)
    {
        if (null === $value) {
            return;
        }
        
        $charset = '^a-zA-Z0-9_\x7f-\xff';
        if ($allowBrackets) {
            $charset .= '\[\]';
        }
        return preg_replace('/[' . $charset . ']/', '', (string) $value);
    }
    
    public function setName($name)
    {
        $this->_name = $this->filterName($name, true);
        return $this;
    }
    
    public function getName()
    {
        return $this->_name;
    }
    
    public function setValue($value)
    {
        $this->_value = $value;
        return $this;
    }
    
    public function addDecorator($decorator, $options = null)
    {
        if ($decorator instanceof Form_Decorator_Abstract) {
            $name = get_class($decorator);
        } elseif (is_string($decorator)) {
            $decorator = $this->_getDecorator($decorator, $options);
            $name = get_class($decorator);
        } else {
            require_once 'library/Form/Exception.php';
            throw new Form_Exception('Invalid decorator provided to addDecorator; must be string or Form_Decorator_Interface');
        }
        
        $this->_decorators[$name] = $decorator;
        return $this;
    }
    
    /**
     * Retrieve a registered decorator
     * 
     * @param  string $name 
     * @return false|Zend_Form_Decorator_Abstract
     */
    public function getDecorator($name)
    {
        if (!isset($this->_decorators[$name])) {
            $decorators = array_keys($this->_decorators);
            $len = strlen($name);
            foreach ($decorators as $decorator) {
            	//bug fix for substr_compare... working on dev env. 
                //if (0 === substr_compare($decorator, $name, -$len, $len, true)) {
                if (false !== stripos($decorator, $name, strlen($decorator) - $len)) {
                    return $this->_decorators[$decorator];
                }
            }
            return false;
        }

        return $this->_decorators[$name];
    }
    
    /**
     * Remove a single decorator
     * 
     * @param  string $name 
     * @return bool
     */
    public function removeDecorator($name)
    {
        $decorator = $this->getDecorator($name);
        if ($decorator) {
            $name = get_class($decorator);
            unset($this->_decorators[$name]);
            return true;
        }

        return false;
    }
    
    public function getDecorators()
    {
        return $this->_decorators;
    }
    
    public function setView(Zend_View_Interface $view)
    {
        $this->_view = $view;
        return $this;
    }
    
    public function getView()
    {
        return $this->_view;
    }
    
    public function render()
    {
        $class = $this->_getHelperClass();
        Zend_Loader::loadClass($class);
        
        $helper  = $this->_helper;
        $name    = $this->getName();
        $value   = $this->_getValue();
        $attribs = $this->_getAttribs();
        $options = $this->_getOptions();

        $element = new $class();
        $element->setView($this->getView());
        $content = $element->$helper($name, $value, $attribs, $options);
        
        foreach ($this->getDecorators() as $decorator) {
            $decorator->setElement($this);
            $content = $decorator->render($content);
        }
        
        return $content;
    }

    protected function _getHelperClass($prefix = 'Zend_View_Helper_')
    {
        return $prefix . ucfirst($this->_helper);
    }
    
    protected function _getValue()
    {
        $value = $this->_value;

        if (!$this->_isButtonType()) {
            $request = $this->getRequest();
            if ($request->isPost()) {
                $value = $this->_getValueByArrayName($this->getName(), $request->getPost());
            }
        }
        
        if (strlen(trim($this->_defaultValue)) && !strlen(trim($value))) {
            $value = $this->_defaultValue;
        }
        
        return (is_numeric($value)) ? (int)$value : $value;
    }
    
    protected function _getValueByArrayName($name, $post)
    {
        $value = '';
        
        preg_match('/^([a-zA-Z0-9_]*)/', $name, $formName);
        if (isset($post[$formName[0]])) {
            $value = $post[$formName[0]];
            
            preg_match_all('/(\[)([a-zA-Z0-9_]*)(\])/', $name, $matches, PREG_SET_ORDER);
            if (count($matches) > 0) {
                foreach ($matches as $match) {
                    $isNumber = false;
                    $pointer  = null;
                    if (empty($match[2])) {
                        // this might be a number
                        $pointer = Env::get('postValuePointer' . $name);
                        if (null === $pointer) {
                            $pointer = 0;
                        } else {
                            $pointer++;
                        }
                        $isNumber = true;
                    } else {
                        $pointer = $match[2];
                    }

                    if (isset($value[$pointer])) {
                        $value = $value[$pointer];
                        if ($isNumber) {
                            // save the last pointer for the next array value
                            Env::set('postValuePointer' . $name, $pointer);
                        }
                    }
                }
            }
            
            if (is_array($value)) {
                $value = '';
            }
        }
        
        return $value;
    }
    
    protected function _getAttribs()
    {
        return $this->_attribs;
    }
    
    protected function _getOptions()
    {
        return $this->_options;
    }
    
    protected function _isButtonType()
    {
        foreach ($this->_buttonTypes as $type) {
            if ($this instanceof $type) {
                return true;
            }
        }
        
        return false;
    }
    
    protected function _getDecorator($name, $options = null)
    {
        $prefix = 'Form_Decorator_';
        $ds = DIRECTORY_SEPARATOR;
        
        $class = $prefix . $name;
        $file = ROOT . '/library' . $ds . str_replace('_', $ds, $class) . '.php';
        if (!file_exists($file)) {
            require_once 'library/Form/Decorator/Exception.php';
            throw new Form_Decorator_Exception("decorator '$class' does not exists");
        }
        include_once $file;
        
        if (null === $options) {
            $decorator = new $class();
        } else {
            $reflection = new ReflectionClass($class);
            $decorator = $reflection->newInstance($options);
        }
        
        return $decorator;
    }
    
    protected function _getFormData()
    {
        $form = Form::getInstance();
        return $form->getData();
    }
}