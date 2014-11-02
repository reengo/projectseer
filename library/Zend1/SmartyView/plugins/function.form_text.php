<?php

function smarty_function_form_text($params, &$smarty)
{
    $form = Form::getInstance();
    $form->setParams($params);
    return $form->renderElement('text');
}