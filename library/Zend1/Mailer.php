<?php
require_once 'Zend/Mail.php';
require_once 'Zend/Mail/Transport/Smtp.php';

class Mailer
{
    /**
     * @var Zend_Mail
     */
    private $_mailer;
    
    /**
     * @var Smarty
     */
    private $_view;
    
    private $_baseDir;
    
    public function __construct(Array $config = array())
    {
        $this->_mailer = new Zend_Mail();
        
        if (isset($config['transport'])) {
            Zend_Mail::setDefaultTransport($config['transport']);
        }
        
        $this->_setView();
        $this->_setBaseDir();
    }
    
    public function setBody($body)
    {
        $this->_mailer->setBodyText($body);
        return $this;
    }
    
    public function setBodyTemplate($name, Array $vars = array())
    {
        $this->_view->assign($vars);
        $file = $this->_script($name);
        
        $this->_mailer->setBodyHtml($this->_view->fetch($file));
        return $this;
    }
    
    public function setAddressTo($email, $name, $type = null)
    {
        $type = strtolower($type);
        if (!in_array($type, array('bcc', 'cc'))) {
            $type = null;
        }
        
        switch ($type) {
            case 'bcc':
                $this->_mailer->addBcc($email);
                break;
                
            case 'cc':
                $this->_mailer->addCc($email, $name);
                break;
                
            default:
                $this->_mailer->addTo($email, $name);
                break;
        }
        
        return $this;
    }
    
    public function setAddressFrom($email, $name = '')
    {
        $this->_mailer->setFrom($email, $name);
        return $this;
    }
    
    public function setSubject($subject)
    {
        $this->_mailer->setSubject($subject);
        return $this;
    }
    
    public function send($transport)
    {
        return $this->_mailer->send($transport);
    }
    
    private function _setView()
    {
        $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
        $this->_view = $viewRenderer->view->getEngine();
    }
    
    private function _script($name)
    {
        $ds = DIRECTORY_SEPARATOR;
        $dir = $this->_baseDir . 'views' . $ds . 'emails' . $ds;
        if (is_readable($dir . $name . '.tpl')) {
            return realpath($dir . $name . '.tpl');
        }

        require_once 'library/Mailer/Exception.php';
        throw new Mailer_Exception("script '$name.tpl' not found in path (" . $dir . ")");
    }

    private function _setBaseDir()
    {
        $module = Zend_Controller_Front::getInstance()->getRequest()->getModuleName();
        $dirs   = Zend_Controller_Front::getInstance()->getControllerDirectory();
        
        if (empty($module) || !isset($dirs[$module])) {
            $module = Zend_Controller_Front::getInstance()->getDispatcher()->getDefaultModule();
        }
        
        $this->_baseDir = dirname($dirs[$module]) . DIRECTORY_SEPARATOR;
    }
}