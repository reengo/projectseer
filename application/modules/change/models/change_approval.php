<?php

class Change_ChangeApproval extends Model 
{
    protected $_name = 'change_approval'; // table name
    
    protected $_defendentTables = array('Admin_projectsresource');
    
    protected $_referenceMap = array(
        'forms' => array(
            'columns'       => 'id',
            'refTableClass' => 'Admin_UserList',
            'refColumns'    => 'role_id'
        )
    );
    
    public function search(){
    	
    }
}