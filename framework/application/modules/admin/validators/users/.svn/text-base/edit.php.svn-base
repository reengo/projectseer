<?php

class Admin_EditValidatorRule extends Validator_Rule 
{
    public function init()
    {
        $UsernameUnique = $this->_createRuleWithModel('Uniqueness', 'user_list', array('table_id' => 'id', 'form_id' => 'id'));
        $ProfileUnique  = $this->_createRuleWithModel('Uniqueness', 'user_profile', array('table_id' => 'user_id', 'form_id' => 'id'));
        
        $this->add('username', array('NotEmpty', 'Admin', $UsernameUnique), true);
        $this->add('firstname', array('NotEmpty', $ProfileUnique), true, array('additional_fields' => array('lastname')));
        $this->add('email', array('Email', $ProfileUnique), true);
    }
}