<?php

/**
 * Display errors to form.
 * 
 * @param array $params
 * @param Smarty $smarty
 */
function smarty_function_display_errors($params, &$smarty)
{
    $form = Form::getInstance();
    
    require_once 'library/Form/Decorator/Errors.php';
    $formErrors = new Form_Decorator_Errors();
    $formErrors->setElement($form);
    return $formErrors->render('');
}