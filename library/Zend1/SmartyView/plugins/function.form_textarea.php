<?php

function smarty_function_form_textarea($params, &$smarty)
{
    $form = Form::getInstance();
    $form->setParams($params);
    return $form->renderElement('textarea');
}