<?php
require_once 'Zend/Layout.php';

class Layout extends Zend_Layout 
{
    /**
     * @var string
     */
    protected $_defaultLayout = 'default_layout';
    
    /**
     * @var string
     */
    protected $_controllerLayout = '';
    
    /**
     * Static method for initialization with MVC support
     * 
     * @param  string|array|Zend_Config $options 
     * @return Layout
     */
    public static function startMvc($options = null)
    {
        if (null === self::$_mvcInstance) {
            self::$_mvcInstance = new self($options, true);
        } else {
            self::$_mvcInstance->setOptions($options);
        }

        return self::$_mvcInstance;
    }

    /**
     * @param string $layout
     * @return Layout
     */
    public function setDefaultLayout($layout)
    {
        $this->_defaultLayout = $this->_normalize($layout);
        return $this;
    }
    
    /**
     * @param string $layout
     * @return Layout
     */
    public function setControllerLayout($layout)
    {
        $this->_controllerLayout = $this->_normalize($layout);
        return $this;
    }
    
    /**
     * Set layout script to use
     *
     * Note: enables layout.
     * 
     * @param  string $name 
     * @return Zend_Layout
     */ 
    public function setLayout($name) 
    {
        $layout = $this->_normalize($name);
        parent::setLayout($layout);
        return $this;
    }
    
    /**
     * Renders the layout
     *
     * @param string $name
     * @return string
     */
    public function render($name = null)
    {
        $name = $this->_getLayout();
        
        if (null !== $name) {
            $view = $this->getView();
    
            if (null !== ($path = $this->getLayoutPath())) {
                $view->addScriptPath($path);
            }
    
            $view->assign($this->getContentKey(), $this->_container[$this->getContentKey()]);
            return $view->render($name);
        } else {
            return $this->_container[$this->getContentKey()];
        }
    }
    
    /**
     * Normalize the layout name
     *
     * @param string $layout
     * @return string
     */
    private function _normalize($layout)
    {
        $layout = strtolower((string) $layout);
        if (!preg_match('/(\_layout)$/', $layout)) {
            $layout .= '_layout';
        }
        return $layout;
    }
    
    /**
     * Returns the layout (controller/default).
     * This will check if the controller layout is existing or not, if yes then it will be returned
     * default otherwise.
     *
     * @return string|null
     */
    private function _getLayout()
    {
        $ds = DIRECTORY_SEPARATOR;
        $layoutPath = $this->getLayoutPath();
        
        $controllerFile   = $this->_inflect($this->_controllerLayout);
        $defaultLayout    = $this->_inflect($this->_defaultLayout);
        $userDefineLayout = $this->_inflect($this->getLayout());
        if (file_exists($layoutPath . $ds . $userDefineLayout)) {
            return $userDefineLayout;
        } elseif (!empty($controllerFile) && file_exists($layoutPath . $ds . $controllerFile)) {
            return $controllerFile;
        } elseif (file_exists($layoutPath . $ds . $defaultLayout)) {
            return $defaultLayout;
        }

        return null;
    }
    
    /**
     * @param string $name
     * @return string
     */
    private function _inflect($name)
    {
        if ($this->inflectorEnabled() && (null !== ($inflector = $this->getInflector()))) {
            $name = $this->_inflector->filter(array('script' => $name));
        }
        
        return $name;
    }
}