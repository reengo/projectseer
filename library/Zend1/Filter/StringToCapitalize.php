<?php
require_once 'Zend/Filter/Interface.php';

class Filter_StringToCapitalize implements Zend_Filter_Interface 
{
    public function filter($value)
    {
        return ucwords(strtolower((string) $value));
    }
}