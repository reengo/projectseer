<?php

function smarty_function_display_name($params, &$smarty)
{
    if (!isset($params['position']) || (isset($params['position']) && !in_array($params['position'], array('fml', 'lfm')))) {
        $position = 'lfm';
    } else {
        $position = strtolower($params['position']);
    }
    
    extract($params, EXTR_OVERWRITE);
    $firstName  = $name['FirstName'];
    $middleName = $name['MiddleName'];
    $lastName   = $name['LastName'];
    
    $fullName = '';
    for ($i = 0; $i < strlen($position); $i++) {
        switch ($position{$i}) {
            case 'f':
                $fullName .= $firstName . ' ';
                break;
                
            case 'm':
                if (!empty($middleName)) {
                    $fullName .= ' ' . substr($middleName, 0, 1) . '. ';
                }
                break;
                
            case 'l':
                $fullName .= $lastName . ', ';
                break;
        }
    }
    
    $fullName = rtrim($fullName, ' ');
    $fullName = rtrim($fullName, ', ');
    
    if (trim($fullName) != '') {
        return ucwords(strtolower($fullName));
    } else {
        return '-';
    }
}