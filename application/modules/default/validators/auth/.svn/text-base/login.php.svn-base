<?php

class LoginValidatorRule extends Validator_Rule 
{
    public function init()
    {
        $this->add('username', 'NotEmpty');
        $this->add('password', 'NotEmpty');
        $this->add('', 'User', false, array('additional_fields' => array('username', 'password')));
    }
}