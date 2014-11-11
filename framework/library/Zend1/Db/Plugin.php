<?php
require_once 'Zend/Controller/Plugin/Abstract.php';
require_once 'Exception.php';

class Db_Plugin extends Zend_Controller_Plugin_Abstract
{
    public function routeStartup(Zend_Controller_Request_Abstract $request)
    {
        $database = Env::get('database');
        if (is_array($database)) {
            require_once 'Zend/Config.php';
            require_once 'Zend/Db.php';
            
            $config = new Zend_Config(array(
                'database' => array(
                    'adapter' => isset($database['adapter']) ? $database['adapter'] : '',
                    'params'  => array(
                        'host'     => isset($database['host']) ? $database['host'] : '',
                        'dbname'   => isset($database['dbname']) ? $database['dbname'] : '',
                        'username' => isset($database['user']) ? $database['user'] : '',
                        'password' => isset($database['pass']) ? $database['pass'] : '',
                        'driver_options' => array( 'port' => isset($database['port']) ? $database['port'] : '' ),
                    )
                )
            ));
            
    		$db = Zend_Db::factory($config->database);
    		$db->getConnection();
    		$db->getProfiler()->setEnabled(true);
            Env::set('db', $db);
        }
    }
}