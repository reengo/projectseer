<?php

class Admin_EditValidatorRule extends Validator_Rule 
{
    public function init()
    {
        $Unique = $this->_createRuleWithModel('Uniqueness', 'projects', array('table_id' => 'id', 'form_id' => 'id'));
    }
}