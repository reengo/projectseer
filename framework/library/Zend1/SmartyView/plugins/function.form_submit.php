<?php

function smarty_function_form_submit($params, &$smarty)
{
    $form = Form::getInstance();
    $form->setParams($params);
    return $form->renderElement('submit');
}