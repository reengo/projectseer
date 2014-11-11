<?php

function smarty_function_javascript_include_tag($params, &$smarty)
{
    $javascript = '<script %s></script>';
    
    if (!isset($params['language'])) {
        $params['language'] = 'javascript';
    }
    
    if (isset($params['name'])) {
        $jsFilename = $params['name'];
        unset($params['name']);
    } else {
        $jsFilename = '';
    }
    
    $request = Zend_Controller_Front::getInstance()->getRequest();

    $baseUrl = $request->getBaseUrl();
    if (strpos($baseUrl, 'index.php') !== false) {
        $baseUrl = str_replace('index.php', '', $baseUrl);
        $baseUrl = rtrim($baseUrl, '/');
    }
    $cssDirectory = $baseUrl . '/javascripts';
    
    $params['src'] = $cssDirectory . '/' . $jsFilename;
    
    $htmlAttribs = array();
    foreach($params as $prop => $val) {
        $htmlAttribs[] = $prop . '="' . $val . '"';
    }
    $htmlAttribs = implode(' ', $htmlAttribs);
    
    return sprintf($javascript, $htmlAttribs);
}