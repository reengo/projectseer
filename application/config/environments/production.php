<?php
/**
 * Production configuration
 */

Env::set('database', array(
	'adapter' => 'Pdo_Mysql',
	'host'    => 'localhost',
	'user'    => 'root',
	'pass'    => 'kolokoi',
	'dbname'  => 'pseer',
//    'dbname'  => 'postgres',
//	  'port'    => '2000',
));

Env::set('authentication', array(
    'tableName'           => 'user_lists',
    'identityColumn'      => 'username',
    'credentialColumn'    => 'password',
    'credentialTreatment' => 'MD5(?)',
));

Env::set('error_handler', true);