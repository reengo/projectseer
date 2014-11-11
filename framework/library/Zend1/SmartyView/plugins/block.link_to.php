<?php

function smarty_block_link_to($params, $content, &$smarty)
{
    if (null !== $content) {
        $params = array_merge($params, array('content' => $content));
    }
    
    $html = Helper_Html::getInstance();
    $html->clearOptions();
    $html->setOptions($params);
    return $html->render('link');
}