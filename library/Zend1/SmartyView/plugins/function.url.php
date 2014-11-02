<?php

/**
 * assembles a url
 *
 * @todo add another attribute: given a route name, will assemble the url
 * @param array $params
 * @param Smarty $smarty
 * @return string
 */
function smarty_function_url($params, &$smarty)
{
    extract($params, EXTR_OVERWRITE);

    $redirector = Zend_Controller_Action_HelperBroker::getStaticHelper('Redirector');
    $dispatcher = Zend_Controller_Front::getInstance()->getDispatcher();
    $request    = $redirector->getRequest();
    
    $_module = $request->getModuleName();
    if ($_module == $dispatcher->getDefaultModule()) {
        $_module = '';
    }
    
    $_controller = $request->getControllerName();
    if (empty($_controller)) {
        $_controller = $dispatcher->getDefaultControllerName();
    }
    
    $_action = $request->getActionName();
    if (empty($_action)) {
        $_action = $dispatcher->getDefaultAction();
    }

    if (isset($params['vars']) || null !== $id) {
        if (null === $action) $action = $_action;
        if (null === $controller) $controller = $_controller;
        if (null === $module) $module = $_module;
    } elseif (null !== $action) {
        if (null === $controller) $controller = $_controller;
        if (null === $module) $module = $_module;
    } elseif (null !== $controller) {
        if (null === $module) $module = $_module;
    }

    $otherOptions = array();
    if (isset($id)) {
        $otherOptions['id'] = $id;
    }
    if (isset($params['vars'])) {
        if (is_array($params['vars'])) {
            $otherOptions = $params['vars'];
        } else {
            $pairs = explode(',', $params['vars']);
            foreach($pairs as $pair) {
                list($name, $val) = explode('=', $pair);
                $otherOptions[$name] = $val;
            }
        }
        unset($params['vars']);
    }
    
    $paramsNormalized = array();
    foreach ($otherOptions as $key => $value) {
        $paramsNormalized[] = $key . '/' . $value;
    }
    $paramsString = implode('/', $paramsNormalized);

    if (empty($paramsString) && $action == 'index') {
        $action = '';
    }

    if (strtolower($module) == 'default') {
        $module = '';
    }
    
    $url = $module . '/' . $controller . '/' . $action . '/' . $paramsString;
    $url = '/' . trim($url, '/');

    $base = rtrim($request->getBaseUrl(), '/');
    if (!empty($base) && ('/' != $base)) {
        $url = $base . '/' . ltrim($url, '/');
    }

    return $url;    
}