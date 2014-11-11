<?php

function smarty_function_image_tag($params, &$smarty)
{
    $image = '<img %s />';
    
    if (isset($params['name'])) {
        $imageFilename = $params['name'];
        unset($params['name']);
    } else {
        $imageFilename = '';
    }
    
    $request = Zend_Controller_Front::getInstance()->getRequest();
    $baseUrl = $request->getBaseUrl();
    if (strpos($baseUrl, 'index.php') !== false) {
        $baseUrl = str_replace('index.php', '', $baseUrl);
        $baseUrl = rtrim($baseUrl, '/');
    }
    $imageDirectory = $baseUrl . '/images';

    if (isset($params['src'])) {
        unset($params['src']);
    }
    $params = array('src' => $imageDirectory . '/' . ltrim($imageFilename, '/')) + $params;
    
    $htmlAttribs = array();
    foreach($params as $prop => $val) {
        $htmlAttribs[] = $prop . '="' . $val . '"';
    }
    $htmlAttribs = implode(' ', $htmlAttribs);
    
    return sprintf($image, $htmlAttribs);
}