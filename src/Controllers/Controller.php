<?php

namespace Root\FirstPackage\Controllers;

class Controller 
{
    public function __construct($request)
    {
        pretty_print($request);
    }
}