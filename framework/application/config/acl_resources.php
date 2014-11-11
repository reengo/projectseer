<?php
/**
 * ACL Resources
 * 
 * @package config
 */

Env::set('resources', array(
    'admin' => array(
        'index' => array('index', 'show'),
        'projects' => array('index','list', 'view', 'edit', 'del', 'view_qat','add'),
        'tickets' => array('index','list','listbug','view','view-pending','view-revised','view-completed','del','update','add','update-all'),
        'settings' => array('index','list','notice'),
        'qat' => array('index','list','view','add','edit','delete','report'),
        'change' => array('index','list'),
        'uat' => array('index','add','edit','list','report','view')
    ),
    
    'pm' => array(
        'index' => array('index', 'show'),
        'projects' => array('index','list', 'view', 'edit', 'del', 'view_qat','add'),
        'qat' => array('report'),
        'tickets' => array('index','list','listbug','view','view-pending','view-revised','view-completed','view-detail','del','update','add','complete','revise'),
        'change' => array('index','list')
    ),
    
    'dev' => array(
        'index' => array('index', 'show'),
        'tickets' => array('index','list','listbug','view','view-pending','view-revised','view-completed','view-detail','update'),
        'change' => array('index','list')
    ),
    
    'qa' => array(
        'index' => array('index', 'show'),
        'projects' => array('index','list', 'view', 'edit', 'del', 'view_qat','add'),
        'qat' => array('index','list','view','add','edit','delete','report'),
        'plugins' => array('index','list')
    ),
        
    'change' => array(
        'index' => array('index','eva','approve','list','add', 'edit', 'ticket')
    ),
    
    'default' => array(
        'index' => array('index')
    ),
));

/**
 * List of all home locations
 */
Env::set('home_locations', array(
    'admin' => '/admin',
    'pm' => '/pm',
    'dev' => '/dev',
    'qa' => '/qa',
));