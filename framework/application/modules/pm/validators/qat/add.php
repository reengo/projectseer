<?php

class Admin_AddValidatorRule extends Validator_Rule 
{
    public function init()
    {
    	$Uniqueness    = $this->_createRuleWithModel('Uniqueness', 'reviews');
        
        $this->add('page', array('NotEmpty', $Uniqueness), true);
    }
}