<?php

class Admin_AclRole extends Model 
{
    protected $_name = 'acl_roles'; // table name
    
    protected $_defendentTables = array('Admin_AclRoleresource');
    
    protected $_referenceMap = array(
        'UserList' => array(
            'columns'       => 'id',
            'refTableClass' => 'Admin_UserList',
            'refColumns'    => 'role_id'
        )
    );
}