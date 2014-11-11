<?php

function smarty_function_remote_function($params, &$smarty)
{
    require_once 'library/Helper/Remote.php';
    
    $includeBaseUrl = true;
    if (isset($params['include_base_url'])) {
        if (false === $params['include_base_url']) {
            $includeBaseUrl = false;
        }
        unset($params['include_base_url']);
    }
    
    $baseUrl = '';
    if ($includeBaseUrl) {
        $request = Zend_Controller_Front::getInstance()->getRequest();
        $baseUrl = $request->getBaseUrl();
    }
    
    if (isset($params['url'])) {
        $url = $baseUrl . '/' . ltrim($params['url'], '/');
    } else {
        $url = $baseUrl;
    }
    
    $remote = new Helper_Remote();
    $remote->setUrl($url)
           ->setConfirm($params['confirm'])
           ->setOptions($params);
           
    return $remote->render();
}