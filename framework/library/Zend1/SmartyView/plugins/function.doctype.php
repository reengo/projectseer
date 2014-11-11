<?php

function smarty_function_doctype($params, &$smarty)
{
    Zend_Loader::loadClass('Zend_View_Helper_Doctype');
    
    $types = array(
        'xstrict'       => Zend_View_Helper_Doctype::XHTML1_STRICT,
        'xtransitional' => Zend_View_Helper_Doctype::XHTML1_TRANSITIONAL,
        'xframeset'     => Zend_View_Helper_Doctype::XHTML1_FRAMESET,
        'hstrict'       => Zend_View_Helper_Doctype::HTML4_STRICT,
        'hloose'        => Zend_View_Helper_Doctype::HTML4_LOOSE,
        'hframeset'     => Zend_View_Helper_Doctype::HTML4_FRAMESET,
        'custxhtml'     => Zend_View_Helper_Doctype::CUSTOM_XHTML,
        'custom'        => Zend_View_Helper_Doctype::CUSTOM,
    );
    
    if (!isset($params['type']) || (isset($params['type']) && !in_array($params['type'], array_keys($types)))) {
        $params['type'] = null;
    } else {
        $params['type'] = strtolower($params['type']);
    }
    
    $doctype = new Zend_View_Helper_Doctype();
    return $doctype->doctype($types[$params['type']]);
}