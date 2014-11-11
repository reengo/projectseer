<?php

function smarty_function_head_meta($params, &$smarty)
{
    Zend_Loader::loadClass('Zend_View_Helper_HeadMeta');
    $meta = new Zend_View_Helper_HeadMeta();

    /**
     * Clear previous
     */
    if ($meta->count() > 0) {
        foreach ($meta->getContainer()->getKeys() as $key) {
            if ($meta->offsetExists($key)) {
                $meta->offsetUnset($key);
            }
        }
    }

    if (!isset($params['httpequiv']) && !isset($params['name']) && !isset($params['refresh'])) {
        $meta->appendHttpEquiv('Content-Type', 'text/html; charset=utf-8')
             ->appendHttpEquiv('Content-Language', 'en-us');
    } elseif (isset($params['httpequiv']) && isset($params['content'])) {
        $meta->appendHttpEquiv($params['httpequiv'], $params['content']);
    } elseif (isset($params['refresh']) && $params['refresh'] === true && isset($params['url'])) {
        $meta->appendHttpEquiv('Refresh', $params['url']);
    } elseif (isset($params['name']) && isset($params['content'])) {
        $meta->setName($params['name'], $params['content']);
    }

    return ($meta->count() > 0) ? $meta : null;
}