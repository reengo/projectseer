<?php

function smarty_function_display_roleinherited($params, &$smarty)
{
    $parents = array();
    
    if (is_array($params['parents']) && count($params['parents'])) {
        foreach ($params['parents'] as $parent) {
            $parents[] = $parent['name'];
        }
    }
    
    if (count($parents) > 0) {
        return implode(',', $parents);
    }
    
    return '-';
}