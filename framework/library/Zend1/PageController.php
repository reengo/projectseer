<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Session/Namespace.php';
require_once 'ApplicationController.php';
require_once 'Inflector.php';
require_once 'Validator.php';
require_once 'Auth.php';
require_once 'File/Render.php';
require_once 'Mailer.php';
require_once 'Qat.php';

require_once 'Acl.php';

class PageController extends Zend_Controller_Action 
{
    /**
     * @var Form_Data
     */
    protected $form;
    
    /**
     * @var Zend_Db_Adapter_Abstract
     */
    protected $db;
    
    /**
     * Session object namespace. Named with this controller
     *
     * @var Zend_Session_Abstract
     */
    protected $session;
    
    /**
     * Flash Messenger object
     * 
     * @var Zend_Controller_Action_Helper_FlashMessenger
     */
    protected $_flashMessenger;
    
    /**
     * @var Validator
     */
    protected $validator;
    
    /**
     * @var Auth
     */    
    protected $auth;
    
    /**
     * @var CurrentUser
     */
    protected $currentUser;
    
    /**
     * @var File_Render
     */
    protected $file;
        
    /**
     * @var Acl_Role
     */
    protected $aclRole;
    
    /**
     * @var Acl_User
     */
    protected $aclUser;
    
    /**
     * @var Acl
     */
    protected $acl;
    
    protected $_callbacks = array();
    
    public function init()
    {
        $this->_initVariables();
        $this->_initLayout();
        $this->_initAjaxContext();
        $this->preLoad();
    }
    
    public function preLoad()
    { }
    
    public function preDispatch()
    {
        $this->_executeCallbacks('before');
        $this->beforeFilter();
    }
    
    public function postDispatch()
    {
	    /** get all flash messages: error|success */
        $flashMessages = $this->_getFlashMessages();
	    if (count($flashMessages)) {
	       $this->view->flash_messages = $flashMessages;
	    }
	    $this->view->assign('__PARAMS', $this->getRequest()->getParams());
	    
	    if ($this->auth->hasIdentity()) {
	        $this->view->assign('__USER', $this->currentUser);
	        $this->view->assign('__USER_LEVEL', $this->currentUser->role_id);
	        $this->view->assign('__IS_LOGIN', true);
	        $this->view->assign('__WELCOME_MESSAGE', $this->aclUser->getWelcome($this->currentUser->id));
	    }
	    
        $this->_executeCallbacks('after');
        $this->afterFilter();
    }
    
    public function beforeFilter()
    { }
    
    public function afterFilter()
    { }
    
    public function setNoLayout()
    {
        if ($this->_helper->hasHelper('layout')) {
            $this->_helper->layout->disableLayout();
        }
    }
    
    public function setLayout($layout)
    {
        if ($this->_helper->hasHelper('layout')) {
            $layoutInstance = $this->_helper->layout->getLayoutInstance();
            $layoutInstance->setLayout($layout);
        }
    }
    
    public function useValidationRules()
    {
        $ds = DIRECTORY_SEPARATOR;
        $baseDir = $this->_getBaseDir();
        $controller = $this->_getParam('controller');
        
        $controller = new Inflector($controller);
        $controller = $controller->underscore();
        $dir = $baseDir . 'validators' . $ds . $controller;
        
        if ('default' == ($module = $this->_getParam('module')) || empty($module)) {
            $module = '';
        } else {
            $module = new Inflector($module);
            $module = $module->camelize() . '_';
        }
        
        $args = func_get_args();
        foreach ($args as $validator) {
            $name  = new Inflector($validator);
            $class = $module . $name->camelize() . 'ValidatorRule';
            $name  = $name->underscore();
            
            $file = $dir . $ds . $name . '.php';
            if (file_exists($file)) {
                require_once $file;
                if (class_exists($class)) {
                    $validatorObj = new $class($name, $dir);
                    $this->validator->add($name, $validatorObj);
                } else {
                    throw new Validator_Exception("Validator ($class) is not found.");
                }
            } else {
                throw new Validator_Exception("Validator ($name) does not exists in ($dir).");
            }
        }
    }
    
    /**
     * Loads a model / models
     * 
     * @return void
     */
	public function uses()
	{
		$args = func_get_args();

        foreach($args as $arg) {
            $modelObj = loadModel($arg);
            $model = strtolower($arg);
            if (is_object($modelObj) && !isset($this->{$model})) {
                $this->{$model} = $modelObj;
            } elseif (isset($this->{$model})) {
                throw new Zend_Controller_Exception("Cannot use ($model) for model because it's already set.");
            }
        }
	}
    
	/**
	 * Loads a model with specific module.
	 *
	 * @param string $model
	 * @param string $module
	 */
	public function loadModelWithModule($model, $module)
	{
	    if (!empty($model)) {
            $modelObj = loadModel($model, $module);
            $model = strtolower($model);
            if (is_object($modelObj) && !isset($this->{$model})) {
                $this->{$model} = $modelObj;
            }	        
	    }
	}
	
    /**
     * Set a flash message (success or failure)
     * 
     * @param string $msg
     * @param string $type
     * @return PageController
     */
    public function flash($msg, $type = 'success')
    {
        $this->_flashMessenger->setNamespace($type);
        $this->_flashMessenger->addMessage($msg);
        return $this;
    }
	
    protected function _initAjaxContext()
    {
        $ajaxContext = $this->_helper->getHelper('AjaxContext');
        
        if ($ajaxContext->getAutoDisableLayout()) {
            $ajaxContext->setCallback('html', Zend_Controller_Action_Helper_ContextSwitch::TRIGGER_INIT, 'disableLayout');
        }
        
        // get all actions available
        $methods = get_class_methods($this);
        foreach ($methods as $method) {
            if (preg_match('/(Action)$/i', $method)) {
                $action = str_replace('Action', '', $method);
                $ajaxContext->addActionContext($action, 'html');
            }
        }
        
        $ajaxContext->initContext();
    }
    
    protected function _runBeforeFilter($callback, array $options = array())
    {
        $this->_addCallback('before', $callback, $options);
        return $this;
    }

    protected function _runAfterFilter($callback, array $options = array())
    {
        $this->_addCallback('after', $callback, $options);
        return $this;
    }
    
    /**
     * callback => array(
     *      'before' => array(
     *          'functionname1' => array(
     *              'except' => array('login', 'logout'),
     *              'only'   => array('queue')
     *          ),
     *          'functionname2' => array(),
     *          'functionname3' => array(),
     *      ),
     * 
     *      'after' => array(
     *          'functionname1' => array(
     *              'except' => array('login', 'logout'),
     *              'only'   => array('queue')
     *          ),
     *          'functionname2' => array(),
     *      )
     * )
     * 
     * @param string $operation
     * @param string $callback
     * @param array $options  OPTIONAL
     * @return PageController
     */
    private function _addCallback($operation, $callback, array $options = array())
    {
        if (!isset($this->_callbacks[$operation])) {
            $this->_callbacks[$operation] = array();
        }
        
        $callback = (string) $callback;
        if (!isset($this->_callbacks[$operation][$callback])) {
            $this->_callbacks[$operation][$callback] = array();
        }
        $this->_callbacks[$operation][$callback] = array_merge($this->_callbacks[$operation][$callback], $options);
        
        return $this;
    }
    
    private function _getCallbacks($operation = null)
    {
        if (null !== $operation) {
            if (isset($this->_callbacks[$operation])) {
                return $this->_callbacks[$operation];
            }
        } else {
            return $this->_callbacks;
        }
        
        return null;
    }
    
    /**
     * Execute callbacks
     * 
     * sample:
     * module|controller|action1,action2,action3
     *
     * @param string $operation
     */
    private function _executeCallbacks($operation)
    {
        if (null !== ($callbacks = $this->_getCallbacks($operation))) {
            $module = $this->getRequest()->getModuleName();
            if (empty($module)) {
                $module = $this->getFrontController()->getDispatcher()->getDefaultModule();
            }

            $controller = $this->_getParam('controller');
            $action     = $this->_getParam('action');
            
            $compare = $module . '|' . $controller . '|' . $action;
            
            $functionsToRun     = array();
            $functionsNotExists = array();
            foreach ($callbacks as $function => $options) {
                $options['except'] = (isset($options['except'])) ? (array) $options['except'] : null;
                $options['only']   = (isset($options['only'])) ? (array) $options['only'] : null;
                
                $tmp = $this->_getExceptAndOnly($options);
                
                if (!isset($tmp['except'])) $tmp['except'] = null;
                if (!isset($tmp['only'])) $tmp['only'] = null;
                
                switch (true) {
                    case ( empty($options['except']) && empty($options['only'])):
                    case (!empty($tmp['except']) && !$this->_compare($compare, $tmp['except'])):
                    case (!empty($tmp['only']) && !$this->_compare($compare, $tmp['only'])):
                        if (method_exists($this, $function) || function_exists($function)) {
                            $functionsToRun[] = $function;
                        } else {
                            $functionsNotExists[] = $function;
                        }
                }
            }
            
            // check first if functions or methods are existing.
            if (count($functionsNotExists)) {
                require_once 'Zend/Controller/Action/Exception.php';
                throw new Zend_Controller_Action_Exception(
                    'The following functions (' . implode(',', $functionsNotExists) . ') does not exists and cannot run as callback function.');
            }
            
            foreach ($functionsToRun as $method) {
                if (method_exists($this, $method)) {
                    $this->{$method}();
                } elseif (function_exists($method)) {
                    $method();
                }
            }
        }
    }
    
    private function _getExceptAndOnly($options)
    {
        $tmp = array();
        foreach ($options as $meth => $option) {
            $option = (array) $option;
            foreach ($option as $opt) {
                list($md, $cn, $acts) = explode('|', $opt);
                if ($acts) {
                    $acts = explode(',', $acts);
                    foreach ($acts as $act) {
                        $tmp[$meth][] = $md . '|' . $cn . '|' . trim($act);
                    }
                } else {
                    $tmp[$meth][] = $md . '|' . $cn;
                }
            }
        }

        return $tmp;
    }
    
    private function _compare($needle, array $haystack)
    {
        foreach ($haystack as $hay) {
            if (preg_match('/^(' . str_replace('|', '\|', $hay) . ')/i', $needle)) {
                return true;
            }
        }
        
        return false;
    }
    
    private function _initLayout()
    {
        require_once 'Layout.php';
        $layout = Layout::startMvc(array());
        $layout->setLayoutPath($this->_getBaseDir() . 'views/layouts')
               ->setContentKey('content_for_layout')
               ->setDefaultLayout('default')
               ->setControllerLayout($this->_getParam('controller'))
               ->setViewSuffix('tpl');
    }
    
    private function _initVariables()
    {
        // register the current controller executing
        // @todo there's a better way in doing this.
        // @todo make the (flash) a singleton instance. In that way we can access it anywhere in the program.
        Env::set('currentController', $this); 
        
	    $this->session = new Zend_Session_Namespace(get_class($this), true);
	    $this->_flashMessenger = $this->_helper->getHelper('FlashMessenger');
        
        $this->db        = Env::get('db');
        $this->form      = Form_Data::getInstance();
        $this->validator = Validator::getInstance();
        $this->auth      = Auth::getInstance();
        $this->currentUser = $this->auth->getCurrentUser();
        $this->file      = new File_Render();
        $this->mailer    = new Mailer();

	    $this->aclRole = Acl_Role::getInstance();
	    $this->aclUser = Acl_User::getInstance();
	    $this->acl     = Acl::getInstance();
    }
    
    /**
     * Get all flash messages: success|error
     *
     * @return array
     */
    private function _getFlashMessages()
    {
        $messagesType = array('success', 'error');
        foreach ($messagesType as $msgType) {
    	    $this->_flashMessenger->setNamespace($msgType);
    	    $flashMessages = $this->_flashMessenger->getMessages();
    	    if (count($flashMessages)) {
    	        return array($msgType => $flashMessages);
    	    }
        }
        return array();
    }
    
    private function _getBaseDir()
    {
        $module = $this->getRequest()->getModuleName();
        $dirs   = $this->getFrontController()->getControllerDirectory();
        
        if (empty($module) || !isset($dirs[$module])) {
            $module = $this->getFrontController()->getDispatcher()->getDefaultModule();
        }
        
        return dirname($dirs[$module]) . DIRECTORY_SEPARATOR;
    }
}

/**
 * Use by InitAjaxContext to disable layout.
 */
function disableLayout()
{
    require_once 'Layout.php';
    $layout = Layout::getMvcInstance();
    if (null !== $layout) {
        $layout->disableLayout();
    }
}