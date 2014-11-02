<?php

class Form_Decorator_Form extends Form_Decorator_Abstract
{
    protected $_helper = 'form';
    
    protected $_displayError = true;
    
    public function getOptions()
    {
        if (null !== ($element = $this->getElement())) {
            if ($element instanceof Form) {
                $element->getAction();
                $method = $element->getMethod();
                if ($method == Form::METHOD_POST) {
                    $this->setOption('enctype', 'application/x-www-form-urlencoded');
                }
                foreach ($element->getAttribs() as $key => $value) {
                    $this->setOption($key, $value);
                }
            }
        }
        
        if (null !== ($multipart = $this->getOption('multipart'))) {
            if ($multipart === true) {
                $this->setOption('enctype', 'multipart/form-data');
            }
            $this->removeOption('multipart');
        }
        $this->setDisplayError();
        $this->setRemote();
        
        return $this->_options;
    }
    
    public function setRemote()
    {
        if (null !== ($remote = $this->getOption('remote'))) {
            if ($remote === true) {
                require_once 'library/Helper/Remote.php';
                
                if (null !== ($element = $this->getElement())) {
                    $action = $element->getAction();
                    
                    if (!isset($_GET['format'])) {
                        $formatQuery = (strpos($action, '?') === false) ? '?format=html' : '&format=html';
                    } else {
                        $formatQuery = '';
                    }
                    
                    $remote = new Helper_Remote();
                    $remote->setUrl($action . $formatQuery)
                    //$remote->setUrl('/i-cas_coop-admin/testing')
                           ->setConfirm($this->getOption('confirm'))
                           ->setOptions($this->_options);
                    
                    if (null !== ($remoteScript = $remote->render())) {
                        $this->setOption('onsubmit', $remoteScript);
                    }
                }
            }
            
        }

        $optionsToRemove = array(
            'remote', 'update', 'confirm', 'loading', 'loaded', 'success', 'failure', 'complete'
        );
        
        foreach ($optionsToRemove as $optName) {
            $this->removeOption($optName);
        }
        
        return $this;
    }
    
    public function setDisplayError()
    {
        if (null !== ($displayError = $this->getOption('display_error'))) {
            $this->_displayError = (bool) $displayError;
            $this->removeOption('display_error');
        }
        
        return $this;
    }
    
    public function isDisplayError()
    {
        return $this->_displayError;
    }
    
    public function render($content)
    {
        $form = $this->getElement();
        $view = $form->getView();
        
        $helper = $this->_getHelper();
        $helper->setView($view);
        $content = $helper->form($form->getName(), $this->getOptions(), $content);
        
        if ($this->isDisplayError()) {
            require_once 'library/Form/Decorator/Errors.php';
            $errors = new Form_Decorator_Errors();
            $errors->setElement($form);
            
            return $errors->render($content);
        } else {
            return '<span class=errors>' .$content . '</span>';
        }
    }
}