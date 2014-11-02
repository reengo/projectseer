<?php

class Validator_Rule
{
    const BREAK_CHAIN = 'breakChainOnFailure';
    const ADDITIONAL_FIELD = 'additionalFields';
    const ARGS = 'args';
    
    protected $_name;
    
    protected $_location;
    
    protected $_rules = array();
    
    protected $_data = array();
    
    /**
     * @var Zend_Controller_Request_Http
     */
    protected $_request;
    
    public function __construct($name, $location)
    {
        $this->_name = $name;
        $this->_location = $location;
        $this->_request = Zend_Controller_Front::getInstance()->getRequest();
        $this->_setData();
        $this->init();
    }
    
    public function init()
    {
        throw new Validator_Exception('init() not implemented in class (' . get_class($this) . ')');
    }
    
    public function add($field, $rules, $breakChain = false, $options = array())
    {
        $field = (string) $field;
        $rules = (array) $rules;
        
        // for options
        if (isset($options['additional_fields'])) {
            $additionalFields = (array) $options['additional_fields'];
        } else {
            $additionalFields = array();
        }
        
        $_rules = array();
        foreach ($rules as $rule) {
            $option[self::BREAK_CHAIN] = $breakChain;
            $option[self::ADDITIONAL_FIELD] = $additionalFields;

            if (is_string($rule)) {
                $name = $rule;
            } elseif (is_array($rule)) {
                if (is_int(key($rule))) {
                    $rule = $rule[key($rule)];
                }
                
                $name = key($rule);
                $option[self::ARGS] = isset($rule[$name][self::ARGS]) ? $rule[$name][self::ARGS] : array();
            }
            $_rules = array_merge($_rules, array($name => $option));
        }
        
        if (isset($this->_rules[$field])) {
            $this->_rules[$field] = array_merge($this->_rules[$field], $_rules);
        } else {
            $this->_rules[$field] = $_rules;
        }

        return $this;
    }
    
    public function isValid()
    {
        if (!count($this->_rules)) {
            return true;
        }
        
        $ds = DIRECTORY_SEPARATOR;
        $hasError = false;
        foreach ($this->_rules as $field => $rules) {
            $validatorChain = new Zend_Validate();
            foreach ($rules as $name => $rule) {
                $className = 'Zend_Validate_' . $name;
                try {
                    /** try searching at Zend package */
                    $filename = str_replace('_', $ds, $className) . '.php';
                    if (Zend_Loader::isReadable($filename)) {
                        Zend_Loader::loadClass($className);
                    } else {
                        throw new Zend_Exception("File \"$filename\" was not found");
                    }
                } catch (Zend_Exception $e) {
                    /** try searching at user defined validators */
                    try {
                        $className = $this->_loadValidatorRule($name);
                    } catch (Zend_Exception $e) {
                        throw $e;
                    }
                }
                
                $r = new ReflectionClass($className);
                if ($r->implementsInterface('Zend_Validate_Interface')) {
                    if (isset($rule[self::ARGS]) && $r->getConstructor()) {
                        $class = $r->newInstanceArgs($rule[self::ARGS]);
                    } else {
                        $class = $r->newInstance();
                    }
                    
                    if (method_exists($class, 'setRequest')) {
                        $class->setRequest();
                    }
                    if (method_exists($class, 'setField')) {
                        $class->setField($field);
                    }
                    if (method_exists($class, 'setAdditionalFields')) {
                        $class->setAdditionalFields($rule[self::ADDITIONAL_FIELD]);
                    }
                    $validatorChain->addValidator($class, $rule[self::BREAK_CHAIN]);
                } else {
                    throw new Validator_Exception("Validator ($className) must implements (Zend_Validate_Interface)");
                }
            }

            $value = $this->_data[$field];
            $valid = $validatorChain->isValid($value);
            
            $fieldName = new Inflector($field);
            $fieldName = $fieldName->humanize();
            $this->_setMessage($fieldName, array_values($validatorChain->getMessages()));
            
            $validatorChain = null;
            
            if (!$valid) {
                $hasError = true;
            }
        }
        
        // flip the error flag
        return !$hasError;
    }
    
    protected function _loadValidatorRule($name)
    {
        $ds = DIRECTORY_SEPARATOR;
        $libLocation    = "..{$ds}library{$ds}Validator{$ds}Rule{$ds}";
        $userLocation   = "{$this->_location}{$ds}{$this->_name}{$ds}";
        $globalLocation = "..{$ds}application{$ds}validators{$ds}{$this->_name}{$ds}";

        // search in library validator
        if (file_exists($libLocation . $name . '.php')) {
            require_once $libLocation . $name . '.php';
            $class = 'Validator_Rule_' . $name;
            if (class_exists($class)) {
                return $class;
            } else {
                throw new Validator_Exception("Validator ($class) not existing in ($libLocation$name.php)");
            }
        }
        
        $baseClassName = new Inflector($this->_name);
        $baseClassName = $baseClassName->camelize() . '_';
        
        $className = new Inflector($name);
        $fileName  = $className->underscore() . '.php';
        $className = $className->camelize();
        
        if (file_exists($userLocation . $fileName)) {
            // search in module validator
            require_once $userLocation . $fileName;
            $location = $userLocation . $fileName;
            $module = ('default' != ($moduleName = $this->_request->getModuleName())) ? $moduleName : '';
            if ($module) {
                $module = new Inflector($module);
                $module = $module->camelize() . '_';
            }
        } elseif (file_exists($globalLocation . $fileName)) {
            // search in global validator
            require_once $globalLocation . $fileName;
            $location = $globalLocation . $fileName;
            $module = '';
        } else {
            throw new Validator_Exception("Validator ($name) not found.");
        }
        
        $class = $module . $baseClassName . $className;
        if (class_exists($class)) {
            $r = new ReflectionClass($class);
            if ($r->implementsInterface('Zend_Validate_Interface')) {
                return $class;
            } else {
                throw new Validator_Exception("Validator ($class) must be an instance of (Zend_Validate_Abstract)");
            }
        } else {
            throw new Validator_Exception("Validator ($class) not existing in ($location)");
        }

        return $class;
    }
    
    /**
     * Loads a model.
     *
     * @param string $model
     * @return Model
     */
    protected function _getModel($model, $module = null)
    {
        return loadModel($model, $module);
    }

    /**
     * Create a rule with arguments.
     * 
     * @param string $rule
     * @param array $args
     * @return array
     */
    protected function _createRuleWithArgs($rule, array $args)
    {
        return array(array($rule => array(self::ARGS => $args)));
    }

    /**
     * Create a rule with argument as model.
     *
     * @param string $rule
     * @param string $model
     * @param array $others
     * @return array
     */
    protected function _createRuleWithModel($rule, $model)
    {
        $model = $this->_normalizeModelInput($model);
        $newArgs = array($this->_getModel($model['model'], $model['module']));
        
        $args = func_get_args();
        unset($args[0], $args[1]);
        foreach ($args as $arg) {
            $newArgs = array_merge($newArgs, array($arg));
        }
        
        return $this->_createRuleWithArgs($rule, $newArgs);
    }
    
    private function _normalizeModelInput($model)
    {
        $tmp = array();
        if (is_string($model)) {
            $tmp['model']  = $model;
            $tmp['module'] = null;
        } elseif (is_array($model)) {
            if (!isset($model['model'])) {
                // if key [model] is not set then continue to the next argument
                continue;
            } elseif (!isset($model['module'])) {
                $tmp['module'] = null;
            } else {
                $tmp = $model;
            }
        } else {
            $tmp = $model;
        }
        return $tmp;
    }

    /**
     * Set Form data ($_POST)
     *
     * @return Validator_Rule
     */
    private function _setData()
    {
        $request = Zend_Controller_Front::getInstance()->getRequest();
        $this->_data = $request->getPost();
        return $this;
    }
    
    private function _setMessage($name, $message)
    {
        $messages = (array) $message;
        
        $validator = Validator::getInstance();
        foreach ($messages as $msg) {
            $validator->setMessage($name, $msg);
        }
        
        return $this;
    }
}