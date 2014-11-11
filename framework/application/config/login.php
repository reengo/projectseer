<?php
/**
 * sample:
 * module|controller|action1,action2
 * 
 */

Env::set('except', array(
    'default|auth','default|index', 'default|error'
));

Env::set('only', array(
    
));
