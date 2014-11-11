<?php

function smarty_format_time($time)
{
    if (preg_match('!^-\d+$!', $time)) {
        // negative timestamp, use date()
        $time = date('Y-m-d', $time);
    }
    // If $time is not in format yyyy-mm-dd
    if (preg_match('/^(\d{0,4}-\d{0,2}-\d{0,2})/', $time, $found)) {
        $time = $found[1];
    } else {
        // use smarty_make_timestamp to get an unix timestamp and
        // strftime to make yyyy-mm-dd
        $time = strftime('%Y-%m-%d', smarty_make_timestamp($time));
    }
    return $time;
}