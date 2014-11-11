<?php

abstract class Acl_Abstract
{
    /**
     * @var array
     */
    private $_models = array();
    
    /**
     * Get the model
     *
     * @param string $model
     * @param string $module
     * @return Model
     */
    protected function _getModel($model, $module = 'default')
    {
        if (!isset($this->_models[$module][$model]) && !$this->_models[$module][$model] instanceof Model) {
            $this->_models[$module][$model] = loadModel($model, $module);
        }
        
        return $this->_models[$module][$model];
    }
    
    /**
     * Sets the error messages 
     *
     * @param string $msg
     * @return void
     */
    protected function _error($msg)
    {
        $validator = $this->_getValidator();
        $validator->setMessages(null, array($msg));
        
        $this->_setFlash($msg);
    }
    
    /**
     * Get the validator instance
     *
     * @return Validator
     */
    protected function _getValidator()
    {
        return Validator::getInstance();
    }
    
    /**
     * Get the DB Adapter
     *
     * @return Zend_Db_Adapter_Abstract
     */
    protected function _getDbAdapter()
    {
        return Env::get('db');
    }
    
    /**
     * Set a flash message
     *
     * @param string $msg
     * @return void
     */
    private function _setFlash($msg)
    {
        $currentController = Env::get('currentController');
        $currentController->flash($msg, 'error');
    }
}