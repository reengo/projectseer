<?php

function smarty_function_head_link($params, &$smarty)
{
    Zend_Loader::loadClass('Zend_View_Helper_HeadLink');
    $baseUrl = Zend_Controller_Front::getInstance()->getRequest()->getBaseUrl(); 
    
    $headLink = new Zend_View_Helper_HeadLink();
    
    if (!isset($params['rel'])) {
        $params['rel'] = 'stylesheet';
    }
    $params['rel'] = strtolower((string)$params['rel']);
    
    if (!isset($params['media'])) {
        $params['media'] = 'screen';
    }
    $params['media'] = strtolower($params['media']);
    
    if (!isset($params['type'])) {
        $params['type'] = 'text/css';
    }
    $params['type'] = strtolower($params['type']);
     
    if (!isset($params['title'])) {
        $params['title'] = '';
    }
    
    if (isset($params['href'])) {
        $params['href'] = preg_replace('/^(\/)/', '/', $params['href']);
        $href = $baseUrl . '/stylesheets/' . ltrim($params['href'], '/');
    } else {
        return '';
    }
    
    switch ($params['rel']) {
        case 'stylesheet':
            return $headLink->setStylesheet($href, $params['media']);
            
        case 'alternate':
            return $headLink->setAlternate($href, $params['type'], $params['title']);
    }
}