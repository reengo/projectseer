<?php
require_once 'Zend/Validate/EmailAddress.php';

class Admin_Edit_Email extends Zend_Validate_EmailAddress 
{
    public function isValid($value)
    {
        $value = trim($value);

        if (!empty($value)) {
            return parent::isValid($value);
        }
        
        return true;
    }
}