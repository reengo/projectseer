<?php

class Admin_Add_PasswordBetween extends Validator_Rule_Abstract 
{
    const NOT_BETWEEN = 'notBetween';
    
    protected $_messageTemplates = array(
        self::NOT_BETWEEN => "Password length must be from '%min%' to '%max%' characters"
    );
    
    protected $_messageVariables = array(
        'min' => '_min',
        'max' => '_max'
    );
    
    protected $_min;
    
    protected $_max;
    
    public function __construct($min, $max)
    {
        $this->_min = $min;
        $this->_max = $max;
    }
    
    public function isValid($value)
    {
        $value = (string) $value;
        $this->_setValue($value);
        
        $len = strlen($value);
        if (!($len >= $this->_min && $len <= $this->_max)) {
            $this->_error(self::NOT_BETWEEN);
            return false;
        }
        
        return true;
    }
}