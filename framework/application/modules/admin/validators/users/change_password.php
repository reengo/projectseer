<?php

class Admin_ChangePasswordValidatorRule extends Validator_Rule 
{
    public function init()
    {
        $Between = $this->_createRuleWithArgs('PasswordBetween', array(5, 15));
        $this->add('new_password', array('NotEmpty', $Between, 'PasswordMatch'), true, array('additional_fields' => array('confirm_password')));
    }
}