<?php
require_once 'vendors/smarty/Smarty.class.php';
require_once 'vendors/smarty/SmartyPaginate.class.php';

class Smarty extends _Smarty 
{
    function trigger_error($error_msg, $error_type = E_USER_WARNING)
    {
        require_once 'Zend/View/Exception.php';
        throw new Zend_View_Exception($error_msg);
    }
}