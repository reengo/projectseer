<?php

class Login_User extends Validator_Rule_Abstract 
{
    const USER_INVALID = 'userInvalid';
    
    protected $_messageTemplates = array(
        self::USER_INVALID => 'Invalid user login',
    );
    
    public function isValid($value)
    {
        extract($this->_getFieldsData(), EXTR_OVERWRITE);
        if (!empty($username) && !empty($password)) {
            $error = false;
            
            $auth = Auth::getInstance();
            $result = $auth->authenticate($username, $password);
            if ($result->isValid()) {
                return true;
            } else {
                $error = true;
            }
            
            if ($error) {
                $this->_error(self::USER_INVALID);
                return false;
            }
        }
        
        return true;
    }
}