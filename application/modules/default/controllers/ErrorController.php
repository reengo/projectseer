<?php

class ErrorController extends ApplicationController 
{
    public function errorAction()
    {
        $this->setNoLayout();
        $errors = $this->_getParam('error_handler');
        
        if (Env::get('error_handler')) {
            $exception = $errors->exception;
            $msg = $exception->getMessage() . "\n\n" . $exception->getTraceAsString() . "\n\n";
        } else {
            $msg = '';
        }
		
		switch ($errors->type) {
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:
                // 404 error -- controller or action not found
                if (Env::get('redirect_no_page') !== true) {
                    $this->getResponse()->setRawHeader('HTTP/1.1 404 Not Found');
                    if (!$msg) {
                        $msg = 'The page you requested was not found.';
                    }
                } else {
                    $this->_redirect('404.html');
                }
                break;
                
            default:
                // application error
                if (Env::get('redirect_internal_server_error') !== true) {
                    if (!$msg) {
                        $msg = 'Server Error. Please try again later.';
                    }
                } else {
                    $this->_redirect('500.html');
                }
                break;
        }
        $content = '<h1>Error!</h1><div><p><pre>' . $msg . '</pre></p></div>';
        
        // Clear previous content
        $this->getResponse()->clearBody();
        $this->view->content = $content;
		$this->view->title   = $this->getRequest()->HTTP_HOST;
    }
}