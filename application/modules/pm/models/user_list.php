<?php

class Pm_UserList extends Model 
{
    protected $_name = 'user_lists'; // table name
    
    protected $_defendentTables = array('Admin_UserProfile');
}