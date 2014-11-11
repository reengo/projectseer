<?php

class AuthController extends ApplicationController 
{
    public function loginAction()
    {
        $this->setNoLayout();
        if ($this->form->isSubmitted()) {
           $this->useValidationRules('login');
           if ($this->validator->login->isValid()) {
               $this->currentUser = $this->auth->getCurrentUser();
               
	            // resolved home redirection
	            $params = $this->getRequest()->getParams();
	            if (isset($params['redirect']) && strlen(trim($params['redirect']))) {
	                $url = base64_decode($params['redirect']);
	                $url = str_replace($this->getRequest()->getBaseUrl(), '', $url);
	            } else {
	                $roleInfo = $this->aclRole->getInfo($this->currentUser->role_id);
	                $url = $roleInfo['home_location'];
	            }
	            
	            $this->aclUser->registerLogin($this->currentUser->id);
	            $this->_redirect($url);
            }
        }
    }
   
    
    public function logoutAction()
    {
        $this->aclUser->registerLogout($this->currentUser->id);
        $this->auth->clearIdentity();
	    $this->flash('You\'ve successfully signed out.');
	    $this->_redirect('/auth/login');
    }
}