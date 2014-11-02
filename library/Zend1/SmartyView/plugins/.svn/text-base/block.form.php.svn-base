<?php

function smarty_block_form($params, $content, &$smarty)
{
    $form = Form::getInstance();
    $form->setParams($params)
         ->setAction($params['action'])
         ->setMethod($params['method']);
         
    return $form->render($content);
}