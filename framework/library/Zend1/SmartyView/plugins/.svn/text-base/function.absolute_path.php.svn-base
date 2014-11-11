<?php

function smarty_function_absolute_path($params, &$smarty)
{
    $request = Zend_Controller_Front::getInstance()->getRequest();
    $baseUrl = $request->getBaseUrl();
    if (strpos($baseUrl, 'index.php') !== false) {
        $baseUrl = str_replace('index.php', '', $baseUrl);
        $baseUrl = rtrim($baseUrl, '/');
    }
    $dir = 'http://' . $request->SERVER_NAME . $baseUrl . '/';
    return $dir;
}