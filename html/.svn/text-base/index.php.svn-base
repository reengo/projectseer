<?php
define('ROOT', dirname(dirname(__FILE__)));
set_include_path(ROOT . PATH_SEPARATOR . get_include_path());
require 'common.php';

/**
 * Set base url, 
 */
$baseUrl = dirname(dirname($_SERVER['SCRIPT_NAME']));

$front = Zend_Controller_Front::getInstance();
$front->setControllerDirectory(Env::get('controller_directories'))
      ->setBaseUrl($baseUrl)
      ->setRouter(Env::get('router'))
      //->registerPlugin(new Form_Plugin_Load())
      ->registerPlugin(new Db_Plugin()) // initialize DB configuration
      ->dispatch(new Controller_Request_Http());