<?php

function smarty_function_head_title($params, &$smarty)
{
    Zend_Loader::loadClass('Zend_View_Helper_HeadTitle');
    
    $params = Zend_Controller_Front::getInstance()->getRequest()->getParams();
    
    $subjects = array(
        'module'     => $params['module'],
        'controller' => $params['controller'],
        'action'     => $params['action']
    );
    
    $except   = array('default', 'index');
    
    foreach ($subjects as $type => $subject) {
        if (!in_array($subject, $except)) {
            $tmp = new Inflector($subject);
            $$type = $tmp->humanize();
        } else {
            $$type = '';
        }
    }

    if ($projectName = Env::get('project_name')) {
        if ($module || $controller || $action) {
            $projectName .= ' : ';
        }
    }
    $headTitle = new Zend_View_Helper_HeadTitle();
    
    $headTitle->headTitle($module)
              ->headTitle($controller)
              ->headTitle($action)
              ->setSeparator(' / ');
    //return preg_replace('/^(<title>)/i', '\\0' . $projectName, $headTitle);
    return '<title>' . $projectName . ' Quality Control System</title>';
}