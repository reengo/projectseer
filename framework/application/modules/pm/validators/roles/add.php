<?php

class Admin_AddValidatorRule extends Validator_Rule 
{
    public function init()
    {
        $this->add('name', array('NotEmpty', 'Admin'), true);
    }
}