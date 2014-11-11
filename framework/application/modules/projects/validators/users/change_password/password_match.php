<?php

class Admin_ChangePassword_PasswordMatch extends Validator_Rule_Abstract 
{
    const NOT_MATCH = 'notMatch';
    
    protected $_messageTemplates = array(
        self::NOT_MATCH => 'Password does not match confirmation password.',
    );
    
    public function isValid($value)
    {
        $this->_setValue($value);
        
        $data = $this->_getFieldsData();
        $confirm = $this->getAdditionalFields();
        if ($value != $data[$confirm[0]]) {
            $this->_error(self::NOT_MATCH);
            return false;
        }
        
        return true;
    }
}