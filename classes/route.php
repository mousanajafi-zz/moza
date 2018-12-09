<?php

function route()
{
    $controller = '';
    if(isset($controller) && empty($controller))
    {
        $controller = 'index';
    }

    include_once(_MZ_VIEW_DIR_.$controller.'.php');
}