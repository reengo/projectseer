<?php

function smarty_function_form_hidden($params, &$smarty)
{
    $form = Form::getInstance();
    $form->setParams($params);
    return $form->renderElement('hidden');
}