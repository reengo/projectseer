<?php

function smarty_function_flash($params, &$smarty)
{
    //$div = '<div %s><p>%s</p></div>';
	$div = '<div class="flash" %s><p>%s</p></div>';  
	  
    if (isset($smarty->_tpl_vars['flash_messages'])) {
        $flashMessages = $smarty->_tpl_vars['flash_messages'];
        
        if (isset($flashMessages['success'])) {
            $className = 'flash-success';
            $messages  = $flashMessages['success'];
        } else if (isset($flashMessages['error'])) {
            $className = 'flash-error';
            $messages  = $flashMessages['error'];
        } else {
            $className = 'flash';
            $messages  = array();
        }
        
        if (!isset($params['class'])) {
            $params['class'] = $className;
        }
        
        // set attributes for div
        $attrs = array();
        foreach ($params as $_attr => $value) {
            $attrs[] = $_attr . '="' . $value . '"';
        }
        
        if (count($messages) > 0) {
            return sprintf($div, implode(' ', $attrs), implode('<br>', $messages));
        }
    }
}