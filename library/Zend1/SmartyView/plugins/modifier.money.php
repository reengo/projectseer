<?php

function smarty_modifier_money($string)
{
    $money = (float) $string;
    return number_format($money, 2, '.', ',');
}