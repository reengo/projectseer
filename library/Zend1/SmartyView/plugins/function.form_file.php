<?php

function smarty_function_form_file($params, &$smarty)
{
    $form = Form::getInstance();
    $form->setParams($params);
    return $form->renderElement('file');
}