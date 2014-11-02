<?php

interface Form_Method_Interface
{
    public function __construct($request);
    
    public function isSubmitted();
}