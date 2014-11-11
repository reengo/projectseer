<?php

class Change_UserProfile extends Model 
{
    protected $_name = 'user_profiles';  // table name
    
    protected $_referenceMap = array(
        'UserList' => array(
            'columns'       => 'user_id',
            'refTableClass' => 'Admin_UserList',
            'refColumns'    => 'id'
        )
    );
}