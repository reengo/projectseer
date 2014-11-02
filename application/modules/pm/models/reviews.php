<?php

class Pm_reviews extends Model 
{
    protected $_name = 'review_item'; // table name
    
    protected $_defendentTables = array('Admin_reviewsresource');
    
 	protected $_referenceMap = array(
        'projects' => array(
            'columns'       => 'id',
            'refTableClass' => 'Admin_projects',
            'refColumns'    => 'user_id'
        )
    );
    public function search()
    {
    	
    }
    public function setFromArray(array $data)
    {
        $data = $this->_normalizeFields($data);
        return parent::setFromArray($data);
    }
}