<?php

function smarty_function_form_reset($params, &$smarty)
{
    $form = Form::getInstance();
    $form->setParams($params);
    return $form->renderElement('reset');
}