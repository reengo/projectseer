<?php
require_once 'Zend/Controller/Router/Rewrite.php';
require_once 'Zend/Controller/Router/Route/Module.php';
require_once 'Zend/Controller/Router/Route/Regex.php';
require_once 'Zend/Controller/Router/Route/Static.php';

/**
 * Router
 */
class Router extends Zend_Controller_Router_Rewrite
{
    /**
     * @param string $name
     * @param array $route
     * @return void
     */
	function add($name, array $route)
	{
		if (isset($route[0]) && is_string($route[0])) {
			$_type = $route[0];
			$type = '_' . ucwords($route[0]);
			$route = $route[1];
		} else {
			$type = '';
			if (isset($route[0])) $route = $route[0];
		}
		
		$routeClass = "Zend_Controller_Router_Route{$type}";
		if (!class_exists($routeClass)) {
		    require_once 'Zend/Controller/Router/Exception.php';
		    throw new Zend_Controller_Router_Exception('Router class (' . $routeClass . ') does not exists.');
		}
		
		if ($_type == 'module') {
    		$dispatcher = $this->getFrontController()->getDispatcher();
    		$request = $this->getFrontController()->getRequest();
			$this->addRoute($name, new $routeClass($route[key($route)]), $dispatcher, $request);
		} else {
			$this->addRoute($name, new $routeClass(key($route), $route[key($route)]));
		}
	}
	
	/**
	 * Alias for add
	 * 
	 * @param string $name
	 * @param array $route
	 * @return void
	 */
	function connect($name, array $route)
	{
		$this->add($name, $route);
	}
}