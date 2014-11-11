<?php

function smarty_function_form_checkbox($params, &$smarty)
{
    $form = Form::getInstance();
    $form->setParams($params);
    return $form->renderElement('checkbox');
}