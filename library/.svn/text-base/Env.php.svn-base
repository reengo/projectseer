<?php
/** Zend_Registry */
require_once 'Zend/Registry.php';

class Env extends Zend_Registry 
{
    /**
     * Loads an environment
     *
     * @param string $env
     * @return boolean
     * @throws Zend_Exception
     */
    public static function load($env)
    {
        /** normalize */
        $env = strtolower($env);
        if (!in_array($env, array('development', 'production', 'staging'))) {
            $env = 'development';
        }
        
        $file  = ROOT . '/application/config/environments/' . $env . '.php';
        if (!file_exists($file)) {
            Env::printMessage("Environment configuration ('$env') not found in ('application/config/environments/')");
            exit();
        }
        
        require $file;
        return true;
    }
    
    /**
     * Determines whether this environment is development or not.
     *
     * @return boolean
     */
    public static function isDevelopment()
    {
	    require_once 'Zend/Controller/Request/Http.php';
	    $request = new Zend_Controller_Request_Http();

		$isLocalhost = $request->HTTP_HOST == 'localhost' || $request->HTTP_HOST == '127.0.0.1';
		$isPrivateIP = preg_match('/^(192\.168\.)/', $request->SERVER_ADDR);
		return $isLocalhost || $isPrivateIP;
    }
    
    /**
     * getter method, basically same as offsetGet().
     *
     * This method can be called from an object of type Zend_Registry, or it
     * can be called statically.  In the latter case, it uses the default
     * static instance stored in the class.
     * 
     * This method does not throws any exception.
     *
     * @param string $index - get the value associated with $index
     * @return mixed
     */
    public static function get($index)
    {
        try {
            $value = parent::get($index);
        } catch (Zend_Exception $e) {
            $value = null;
        }
        
        return $value;
    }
    
	/**
	 * Prints error message
	 *
	 * @param string $msg
	 * @return void
	 */
	public static function printMessage($msg)
	{
	    require_once 'Zend/Controller/Request/Http.php';
	    $request = new Zend_Controller_Request_Http();
	    
		$html = '<html><head><title>%s - Error</title><style type="text/css">' .
				'body { font-family: verdana; font-size: 12px; } h1 { font-size: 18px; }' .
				'div { padding: 1px 0 1px 15px; background-color: #bbb; } ' .
				'</style></head><body>%s</body></html>';
		echo sprintf($html, $request->HTTP_HOST, $msg);
	}
}