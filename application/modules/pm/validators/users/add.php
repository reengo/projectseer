<?php

class Admin_AddValidatorRule extends Validator_Rule 
{
    public function init()
    {
        $Uniqueness    = $this->_createRuleWithModel('Uniqueness', 'user_list');
        $ProfileUnique   = $this->_createRuleWithModel('Uniqueness', 'user_profile');
        $Between       = $this->_createRuleWithArgs('PasswordBetween', array(5, 15));
        
        $this->add('username', array('NotEmpty', 'Admin', $Uniqueness), true);
        $this->add('password', array('NotEmpty', $Between, 'PasswordMatch'), true, array('additional_fields' => array('confirm_password')));
        $this->add('firstname', array('NotEmpty', $ProfileUnique), true, array('additional_fields' => array('lastname')));
        $this->add('email', array('Email', $ProfileUnique), true);
        $this->add('role', 'NotEmpty');
    }
}