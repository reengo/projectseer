<?php
/**
 * ROUTER
 * 
 * example:
 * $router->add('name', array('type', array( ':controller/:action' => array(
 *      'controller' => 'controller_name', 'action' => 'action_name'
 * ) )))
 */

$router->add('auth', array('auth' => array('controller' => 'auth', 'action' => 'login')));
$router->add('logout', array('logout' => array('controller' => 'auth', 'action' => 'logout')));