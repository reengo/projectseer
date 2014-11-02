<?php
/**
 * Starts the session
 */
require_once 'Zend/Session.php';
Zend_Session::start();

/**
 *  Set Routes
 */
$router = new Router();
require_once 'application/config/routes.php';
Env::set('router', $router);

/**
 * Initializes the smarty template
 */
$view = new SmartyView();

$viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer($view);
$viewRenderer->setViewSuffix('tpl');

Zend_Controller_Action_HelperBroker::addHelper($viewRenderer);

/**
 * Initialize the environment configurations
 */
if ($env = Env::get('environment')) {
    Env::load($env);
} else {
    if (Env::isDevelopment()) {
        Env::load('development');
    } else {
        Env::load('production');
    }
}