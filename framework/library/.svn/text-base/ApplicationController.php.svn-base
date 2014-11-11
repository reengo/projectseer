<?php

class ApplicationController extends PageController
{
    public function preLoad()
    {
        // module|controller|action
        $this->_runBeforeFilter('requireLogin', $this->_getConfigForLogin());
    }
    
    protected function requireLogin()
    {
        $module = (string) $this->_getParam('module');
        $controller = $this->_getParam('controller');
        if (strlen(trim($module))) {
            if ($module == 'default') {
                $module = '';
            } else {
                $module .= '_';
            }
            $resource = $module . $controller;
        } else {
            $resource = $controller;
        }
        $action = (null !== ($action = $this->_getParam('action'))) ? $action : 'index';
        
        if (!$this->auth->hasIdentity() || !$this->acl->isAllowed($resource, $action)) {
            $this->flash('You don\'t have sufficient privilege to access this page.', 'error');
            
            // redirect to login page
            $request = $this->getRequest();
            $redirect = '?redirect=' . base64_encode($request->REQUEST_URI);
            
            $this->_redirect('/auth/login' . $redirect);
        }
    }
    
    private function _getConfigForLogin()
    {
        $except = (array) Env::get('except');
        $only   = (array) Env::get('only');

        return array('except' => $except, 'only' => $only);
    }
}