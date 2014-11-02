<?php

class Admin_EditValidatorRule extends Validator_Rule 
{
    public function init()
    {
        $Unique = $this->_createRuleWithModel('Uniqueness', 'acl_role', array('table_id' => 'id', 'form_id' => 'id'));
        $this->add('name', array('NotEmpty', 'Admin', $Unique), true);
    }
}