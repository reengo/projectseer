<?php
require_once 'Form/Data.php';
require_once 'Form/Element.php';
require_once 'Form/Decorator/Abstract.php';
require_once 'Form/Method.php';

class Form
{
    /**#@+
     * Method type constants
     */
    const METHOD_DELETE = 'delete';
    const METHOD_GET    = 'get';
    const METHOD_POST   = 'post';
    const METHOD_PUT    = 'put';
    /**#@-*/
    
    protected $_data = array();
    
    protected $_params = array();
    
    protected $_attribs = array();
    
    protected $_messages = array();
    
    protected $_prefix = 'Form_Element_';
    
    /**
     * Allowed form methods
     * @var array
     */
    protected $_methods = array('delete', 'get', 'post', 'put');
    
    /**
     * @var Form
     */
    private static $_instance;
        
    /**
     * Constructor
     */
    private function __construct()
    { }
    
    /**
     * Get the singleton instance of this class
     *
     * @return Form
     */
    public static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
    
    public function set($name, $value = null)
    {
        if (is_array($name)) {
            $this->_data = array_merge($this->_data, $name);
        } else {
            $this->_data[$name] = $value;
        }

        return $this;
    }
    
    public function get($name = null)
    {
        if (null !== $name) {
            if (isset($this->_data[$name])) {
                return $this->_data[$name];
            } else {
                return null;
            }
        }

        return $this->_data;
    }
    
    public function getData()
    {
        return $this->get(null);
    }
    
    public function __set($name, $value)
    {
        $this->set($name, $value);
    }
    
    public function __get($name)
    {
        return $this->get($name);
    }
    
    public function setMessages($messages)
    {
        $this->_messages = array_merge($this->_messages, $messages);
        return $this;
    }
    
    public function setMessage($name, $value)
    {
        if (isset($this->_messages[$name]) && $this->_messages[$name]) {
            $this->_messages[$name] = (array) $this->_messages[$name];
            $this->_messages[$name][] = $value;
        } elseif (empty($name)) {
            $this->_messages[] = $value;
        } else {
            $this->_messages[$name] = $value;
        }
        return $this;
    }
    
    public function getMessages()
    {
        return $this->_messages;
    }
    
    public function setParams($params)
    {
        $this->_params = (array) $params;
        return $this;
    }
    
    public function getParams()
    {
        return $this->_params;
    }
    
    public function getName()
    {
        return $this->_getName();
    }
    
    public function setAction($action)
    {
        $request = Zend_Controller_Front::getInstance()->getRequest();
        $baseUrl = $request->getBaseUrl();

        if (empty($action)) {
            $action = $request->PATH_INFO;
            $paramsQuery = $request->getQuery();
            if (is_array($paramsQuery) && count($paramsQuery)) {
                $part = array();
                foreach ($paramsQuery as $idx => $val) {
                    $part[] = $idx . '=' . $val;
                }
                $part = implode('&', $part);
                if ($part) {
                    $action .= '?' . $part;
                }
            }
        }
        
        $action = $baseUrl . '/' . ltrim($action, '/');
        return $this->setAttrib('action', $action);
    }
    
    public function getAction()
    {
        if (null === ($action = $this->getAttrib('action'))) {
            $this->setAction($action);
        }
        
        return $action;
    }
    
    public function setMethod($method)
    {
        if (!empty($method)) {
            $method = strtolower($method);
            if (!in_array($method, $this->_methods)) {
                require_once 'Form/Exception.php';
                throw new Form_Exception(sprintf('"%s" is an invalid form method', $method));
            }
        }
        
        return $this->setAttrib('method', $method);
    }
    
    public function getMethod()
    {
        if (null === ($method = $this->getAttrib('method'))) {
            $method = self::METHOD_POST;
            $this->setAttrib('method', $method);
        }
        
        return strtolower($method);
    }
    
    public function setAttrib($name, $value)
    {
        $name = (string) $name;
        $this->_attribs[$name] = $value;
        return $this;
    }
    
    public function getAttrib($name)
    {
        $name = (string) $name;
        if (!isset($this->_attribs[$name])) {
            return null;
        }
        
        return $this->_attribs[$name];
    }
    
    public function getAttribs()
    {
        return $this->_attribs;
    }
    
    public function removeAttrib($name)
    {
        if (isset($this->_attribs[$name])) {
            unset($this->_attribs[$name]);
            return true;
        }
        
        return false;
    }
    
    public function getView()
    {
        $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
        return $viewRenderer->view;
    }
    
    public function renderElement($element)
    {
        require_once 'Filter/StringToCapitalize.php';
        require_once 'Zend/Filter/Inflector.php';
        
        $inflector = new Zend_Filter_Inflector(':element');
        $inflector->setRules(array(':element' => array(new Filter_StringToCapitalize())));
        
        $element = $inflector->filter(array('element' => $element));
        $element = $this->_prefix . $element;
        
        if ($this->_loadClass($element)) {
            $name  = $this->_getName();
            $value = $this->_getValue($name);

            $element = new $element($this->_params, $name);
            $element->setValue($value)
                    ->setView($this->getView());

            return $element->render();
        }
    }
    
    public function render($content)
    {
        $this->_loadClass('Form_Decorator_Form');
        $decorator = new Form_Decorator_Form($this->getParams());
        
        $decorator->setElement($this);
        return $decorator->render($content);
    }
    
    protected function _getName()
    {
        if (isset($this->_params['name'])) {
            $name = $this->_params['name'];
            unset($this->_params['name']);
        } else {
            $name = '';
        }
        
        return $name;
    }
    
    protected function _getValue($name)
    {
        if (empty($name)) {
            return '';
        }
        
        $value = $this->_getValueByArrayName($name);
        if (null === $value || !strlen(trim($value))) {
            $value = (isset($this->_params['value'])) ? $this->_params['value'] : '';
        }
        return $value;
    }
    
    protected function _getValueByArrayName($name)
    {
        $value = '';
        $data = $this->getData();

        preg_match('/^([a-zA-Z0-9_]*)/', $name, $formName);
        if (isset($data[$formName[0]])) {
            $value = $data[$formName[0]];
            
            preg_match_all('/(\[)([a-zA-Z0-9_]*)(\])/', $name, $matches, PREG_SET_ORDER);
            if (count($matches) > 0) {
                foreach ($matches as $match) {
                    $isNumber = false;
                    $found = false;
                    if (empty($match[2])) {
                        // this might be a number
                        if (null === ($pointer = Env::get('preValuePointer' . $name))) {
                            $pointer = 0;
                        } else {
                            $pointer++;
                        }
                        $isNumber = true;
                    } else {
                        $pointer = $match[2];
                    }
                    
                    if (is_array($value) && isset($value[$pointer])) {
                        $found = true;
                        $value = $value[$pointer];
                        if ($isNumber) {
                            // save the last pointer for the next array value
                            Env::set('preValuePointer' . $name, $pointer);
                        }
                    }
                }
            }
            
            if (is_array($value) || (!$found && count($matches) > 0)) {
                $value = null;
            }
        }

        return $value;
    }
    
    protected function _loadClass($class)
    {
        $ds = DIRECTORY_SEPARATOR;
        $file = 'library' . $ds . str_replace('_', $ds, $class) . '.php';
        include_once $file;
        
        return class_exists($class);
    }
}