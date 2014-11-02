<?php

function smarty_function_scriptaculous($params, &$smarty)
{
    require_once $smarty->_get_plugin_filepath('function', 'javascript_include_tag');
    
    $scriptaculous  = smarty_function_javascript_include_tag(array('name' => 'prototype.js'), $smarty) . "\n";
    $scriptaculous .= smarty_function_javascript_include_tag(array('name' => 'scriptaculous.js'), $smarty);
    return $scriptaculous;
}