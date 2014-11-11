<?php

abstract class Helper_Remote_Abstract
{
    protected $_url;
    
    protected $_confirm;
    
    protected $_domId;
    
    protected $_method = 'post';
    
    protected $_options = array();
    
    public function setOptions($options)
    {
        $this->_options = array_merge($this->_options, $options);
        return $this;
    }
    
    public function setOption($name, $value)
    {
        $this->_options[$name] = (string) $value;
        return $this;
    }
    
    public function getOptions()
    {
        return $this->_options;
    }
    
    public function getOption($name)
    {
        if (isset($this->_options[$name])) {
            return $this->_options[$name];
        }
        
        return null;
    }
    
    public function removeOption($name)
    {
        if (isset($this->_options[$name])) {
            unset($this->_options[$name]);
            return true;
        }
        
        return false;
    }
    
    public function setUrl($url)
    {
        $this->_url = (string) $url;
        return $this;
    }
    
    public function getUrl()
    {
        return $this->_url;
    }
    
    public function getVarsJavascript()
    {
        $params = '';
        if (null !== ($vars = $this->getOption('vars_javascript'))) {
            $vars = explode(',', $vars);
            
            // + '?var=foo&var1=foo1&var2=foo2'
            // + '?var=foo&var1=' + foo1 + '&var2=' + foo2
            // + '/var/foo?var1=foo1&var2=foo2'
            
            foreach ($vars as $var) {
                list($name, $value) = explode('=', $var);
                
                if (strpos($value, '%') !== false) {
                    $noQuote = true;
                    $delim   = " + '&";
                    $params .= $name . "=' + " . trim($value, '%') . $delim;
                } else {
                    $noQuote = false;
                    $delim   = "&";
                    $params .= $name . "=" . $value . $delim;
                }
            }
            $params = rtrim($params, $delim);
            
            $url = $this->getUrl();
            if (strpos($url, '?') === false) {
                $params = " + '?" . $params;
            } else {
                $params = " + '&" . $params;
            }
            $params = ($noQuote) ? $params : $params . "'";
            
            $this->removeOption('vars_javascript');
        }
        
        return $params;
    }
    
    public function setConfirm($confirm)
    {
        if ($confirm) {
            $this->_confirm = (string) $confirm;
        }
        return $this;
    }
    
    public function getConfirm()
    {
        return $this->_confirm;
    }
    
    public function setDomId($domId)
    {
        $this->_domId = (string) $domId;
        return $this;
    }
    
    public function getDomId()
    {
        return $this->_domId;
    }
    
    public function getMethod()
    {
        $method = $this->_method;
        
        if (null !== ($methodOpt = $this->getOption('method'))) {
            $method = $this->_method = $methodOpt;
            $this->removeOption('method');
        }
        
        return strtolower($method);
    }
    
    public function getCallbacks()
    {
        $callbacks = array(
            'loading'  => 'onLoading',
            'loaded'   => 'onLoaded',
            'success'  => 'onSuccess',
            'failure'  => 'onFailure',
            'complete' => 'onComplete',
        );
        
        $callbackScripts = array();
        foreach ($callbacks as $key => $callback) {
            if (null !== ($script = $this->getOption($key))) {
                $callbackScripts[] = $callback . ':function(transport){' . $script . '}';
            }
        }
        
        if (null === ($failure = $this->getOption('failure'))) {
            $callbackScripts[] = 'onFailure:function(transport){alert(\'Execution time limit exceeded.\')}';
        }
        
        if (count($callbackScripts)) {
            return implode(', ', $callbackScripts);
        } else {
            return null;
        }
    }
    
    public function includeReturn()
    {
        if (null !== ($return = $this->getOption('return'))) {
            return (bool) $return;
        }
        return true;
    }
    
    public function serializeForm()
    {
        if (null !== ($serialized = $this->getOption('serialize_form'))) {
            return (bool) $serialized;
        }
        return true;
    }
    
    public function render()
    {
        require_once 'library/Helper/Remote/Exception.php';
        throw new Helper_Remote_Exception('render() not implemented.');
    }
}