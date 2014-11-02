<?php

class Admin_AddResourceValidatorRule extends Validator_Rule 
{
    public function init()
    {
        $this->add('resource_name', 'NotEmpty');
    }
}