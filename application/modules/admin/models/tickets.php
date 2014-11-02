<?php

class Admin_tickets extends Model 
{
    protected $_name = 'tickets'; // table name
    
    protected $_defendentTables = array('Admin_ticketssresource');
    
    protected $_referenceMap = array(
        'tickets' => array(
            'columns'       => 'id',
            'refTableClass' => 'Admin_UserList',
            'refColumns'    => 'form_id'
        )
    );
    
    public function search(){
    	
    }
}