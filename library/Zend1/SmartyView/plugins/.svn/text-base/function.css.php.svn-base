<?php

function smarty_function_css($params, &$smarty)
{
    $link = '<link %s />';
    
    if (!isset($params['type'])) {
        $params['type'] = 'text/css';
    }
    if (!isset($params['rel'])) {
        $params['rel'] = 'stylesheet';
    }
    
    if (isset($params['href'])) {
        unset($params['href']);
    }
    
    if (isset($params['name'])) {
        $cssFilename = $params['name'];
        unset($params['name']);
    } else {
        $cssFilename = '';
    }
    
    $request = Zend_Controller_Front::getInstance()->getRequest();
    
    $baseUrl = $request->getBaseUrl();
    if (strpos($baseUrl, 'index.php') !== false) {
        $baseUrl = str_replace('index.php', '', $baseUrl);
        $baseUrl = rtrim($baseUrl, '/');
    }
    $cssDirectory = $baseUrl . '/stylesheets';

    $params = array('href' => $cssDirectory . '/' . $cssFilename) + $params;
    
    $htmlAttribs = array();
    foreach($params as $prop => $val) {
        $htmlAttribs[] = $prop . '="' . $val . '"';
    }
    $htmlAttribs = implode(' ', $htmlAttribs);
    
    return sprintf($link, $htmlAttribs);
}