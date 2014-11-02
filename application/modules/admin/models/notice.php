<?php

class Admin_Notice extends Model 
{
    protected $_name = 'notice'; // table name
    
    protected $_defendentTables = array('Admin_Noticeresource');
    
 	protected $_referenceMap = array(
        'projects' => array(
            'columns'       => 'id',
            'refTableClass' => 'Admin_Users',
            'refColumns'    => 'form_id'
        )
    );
    public function setFromArray(array $data)
    {
        $data = $this->_normalizeFields($data);
        return parent::setFromArray($data);
    }
    
    public function search()
    {
    	
    }
}