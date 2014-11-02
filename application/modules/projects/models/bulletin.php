<?php

class Dev_bulletin extends Model 
{
    protected $_name = 'bulletin'; // table name
    
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