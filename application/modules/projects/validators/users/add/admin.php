<?php

class Admin_Add_Admin extends Validator_Rule_Abstract 
{
    const IS_ADMIN = 'isAdmin';
    
    protected $_messageTemplates = array(
        self::IS_ADMIN => "'%value%' is a reserved username.",
    );
    
    public function isValid($value)
    {
        $this->_setValue($value);
        
        $value = strtolower($value);
        if (strpos($value, 'admin') !== false) {
            $this->_error(self::IS_ADMIN);
            return false;
        }
        
        return true;
    }
}