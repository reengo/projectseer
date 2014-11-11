<?php

class Admin_AclRoleresource extends Model 
{
    protected $_name = 'acl_role_resources'; // table name
    
    protected $_referenceMap = array(
        'Role' => array(
            'columns'       => 'role_id',
            'refTableClass' => 'Admin_AclRole',
            'refColumns'    => 'id'
        )
    );
}