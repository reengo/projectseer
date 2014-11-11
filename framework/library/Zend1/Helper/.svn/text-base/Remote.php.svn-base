<?php
require_once 'library/Helper/Remote/Abstract.php';

/**
 * callbacks:
 * - loading
 * - loaded
 * - interactive
 * - success
 * - failure
 * - complete
 */
class Helper_Remote extends Helper_Remote_Abstract 
{
    private $_type = 'Request';
    
    public function getType()
    {
        $type = $this->_type;
        
        if (null !== ($domId = $this->getOption('update'))) {
            $type = $this->_type = 'Updater';
            
            $this->removeOption('update');
        }
        
        $this->setDomId($domId);
        return $type;
    }
    
    public function render()
    {
        $type = $this->getType();
        $class = 'Helper_Remote_' . $type;
        if ($this->_loadClass($class)) {
            $remote = new $class();
            $remote->setUrl($this->getUrl())
                   ->setDomId($this->getDomId())
                   ->setConfirm($this->getConfirm())
                   ->setOptions($this->getOptions());
            
            return $remote->render();
        } else {
            throw new Helper_Remote_Exception("Class ($class) does not exists.");
        }
    }
    
    protected function _loadClass($class)
    {
        $ds = DIRECTORY_SEPARATOR;
        $filename = '..' . $ds . 'library' . $ds . str_replace('_', $ds, $class) . '.php';
        if (file_exists($filename)) {
            require_once $filename;
        }
        
        return class_exists($class);
    }
}