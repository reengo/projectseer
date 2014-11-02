<?php

class Helper_Html_Link extends Helper_Html_Element 
{
    protected $_href;
    
    protected $_content;
    
    public function setOptions($options)
    {
        parent::setOptions($options);
        $this->setConfirmation();
        $this->setHref();
        $this->setRemote();
        $this->setContent();
        return $this;
    }
    
    public function setRemote()
    {        
        if (null !== ($remote = $this->getOption('remote'))) {
            if ($remote === true) {
                require_once 'library/Helper/Remote.php';
                
                $remote = new Helper_Remote();
                $remote->setUrl($this->_href)
                       ->setConfirm($this->getOption('confirm'))
                       ->setOptions($this->getOptions() + array('method' => 'get'));
                
                if (null !== ($remoteScript = $remote->render())) {
                    $this->setOption('onclick', $remoteScript);
                }
            }
            
            $this->removeOption('remote');
        }
        
        return $this;
    }
    
    public function setConfirmation()
    {
        if (null !== ($confirm = $this->getOption('confirm'))) {
            $confirm = $this->getOption('confirm');
            $confirm = "return confirm('{$confirm}')";
            $this->setOption('onclick', $confirm);
        }
        return $this;
    }
    
    public function setHref()
    {
        if (null !== ($href = $this->getOption('href'))) {
            switch (true) {
                case $href == '#':
                case (bool) preg_match('/^(javascript:)/i', $href):
                    break;
                    
                default:
                    $href = $this->getRequest()->getBaseUrl() . '/' . ltrim($href, '/');
                    break;
            }
        } else {
            // autodiscover href
            $href = $this->_getDefaultLink();
        }
        $this->_href = $href;

        $this->removeOption('href');
        $this->removeOption('vars');
        $this->removeOption('module');
        $this->removeOption('controller');
        $this->removeOption('action');
        $this->removeOption('id');
        return $this;
    }
    
    public function setContent()
    {
        if (null === $this->_content) {
            $this->_content = $this->getOption('content');
            $this->removeOption('content');
        }
        return $this;
    }
    
    public function render()
    {
        $this->removeOption('confirm');
        $this->removeOption('update');
        $this->removeOption('loading');
        $this->removeOption('loaded');
        $this->removeOption('success');
        $this->removeOption('failure');
        $this->removeOption('complete');
        
        $attribs = $this->getOptions();
        
        $xhtml = '<a '
                 . 'href="' . $this->_href . '"'
                 . $this->_htmlAttribs($attribs)
                 . '>'
                 . $this->_content
                 . '</a>';
                 
        return $xhtml;
    }
    
    protected function _getDefaultLink()
    {
        $params = $this->getOptions();
        extract($params, EXTR_OVERWRITE);
    
        $redirector = Zend_Controller_Action_HelperBroker::getStaticHelper('Redirector');
        $dispatcher = Zend_Controller_Front::getInstance()->getDispatcher();
        $request    = $redirector->getRequest();
        
        $_module = $request->getModuleName();
        if ($_module == $dispatcher->getDefaultModule()) {
            $_module = '';
        }
        
        $_controller = $request->getControllerName();
        if (empty($_controller)) {
            $_controller = $dispatcher->getDefaultControllerName();
        }
        
        $_action = $request->getActionName();
        if (empty($_action)) {
            $_action = $dispatcher->getDefaultAction();
        }
    
        if ((isset($vars) && !empty($vars)) || null !== $id) {
            if (null === $action) $action = $_action;
            if (null === $controller) $controller = $_controller;
            if (null === $module) $module = $_module;
        } elseif (null !== $action) {
            if (null === $controller) $controller = $_controller;
            if (null === $module) $module = $_module;
        } elseif (null !== $controller) {
            if (null === $module) $module = $_module;
        }
    
        $otherOptions = array();
        if (isset($id)) {
            $otherOptions['id'] = $id;
        }
        if ((isset($vars) && !empty($vars))) {
            if (is_array($vars)) {
                $otherOptions = $vars;
            } else {
                $pairs = explode(',', $vars);
                foreach($pairs as $pair) {
                    list($name, $val) = explode('=', $pair);
                    $otherOptions[$name] = $val;
                }
            }
            unset($params['vars']);
        }
        
        $paramsNormalized = array();
        foreach ($otherOptions as $key => $value) {
            $paramsNormalized[] = $key . '/' . $value;
        }
        $paramsString = implode('/', $paramsNormalized);
    
        if (empty($paramsString) && $action == 'index') {
            $action = '';
        }
    
        if (strtolower($module) == 'default') {
            $module = '';
        }
        
        $url = $module . '/' . $controller . '/' . $action . '/' . $paramsString;
        $url = '/' . trim($url, '/');
    
        $base = rtrim($request->getBaseUrl(), '/');
        if (!empty($base) && ('/' != $base)) {
            $url = $base . '/' . ltrim($url, '/');
        }
    
        return $url;    

    }
}