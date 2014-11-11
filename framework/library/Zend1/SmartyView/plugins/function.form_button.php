<?php

function smarty_function_form_button($params, &$smarty)
{
    require_once $smarty->_get_plugin_filepath('function', 'url');
    
    if (isset($params['location'])) {
        $_reserved = array();
        $_others   = array();
        
        if (strpos($params['location'], ',') !== false || strpos($params['location'], '=') !== false) {
            $reserved = array('module', 'controller', 'action');
            $pairs = explode(',', $params['location']);
            foreach($pairs as $pair) {
                list($name, $val) = explode('=', $pair);
                if (in_array($name, $reserved)) {
                    $_reserved[$name] = $val;
                } else {
                    $_others[$name] = $val;
                }
            }
            $options = $_reserved + array('vars' => $_others);
            $url = smarty_function_url($options, $smarty);
        } else {
            $request = Zend_Controller_Front::getInstance()->getRequest();
            
            $url = ltrim($params['location'], '/');
            $url = $request->getBaseUrl() . '/' . $url;
        }
        
        if (isset($params['confirm'])) {
            $confirm = "if (confirm('{$params['confirm']}')) { %s }";
            unset($params['confirm']);
        } else {
            $confirm = "%s";
        }
        
        
        $location = "window.location='" . $url  . "'";
        $params['onclick'] = sprintf($confirm, $location) . '; return false;';
        unset($params['location']);
    }
    
    $form = Form::getInstance();
    $form->setParams($params);
    return $form->renderElement('button');
}