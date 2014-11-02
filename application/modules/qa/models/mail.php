<?php

class Qa_mail extends Model 
{
    protected $_name = 'projects'; // table name
    
    protected $_defendentTables = array('Admin_projectsresource');
    
    protected $_referenceMap = array(
        'forms' => array(
            'columns'       => 'id',
            'refTableClass' => 'Admin_UserList',
            'refColumns'    => 'role_id'
        )
    );
    