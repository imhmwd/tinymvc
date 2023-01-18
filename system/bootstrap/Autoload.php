<?php

namespace System\Bootstrap;

class Autoload
{

    public function autoloader()
    {
        global $base_dir;
        spl_autoload_register(function ($className) use ($base_dir) {
            $className  = str_replace('\\', DIRECTORY_SEPARATOR, $className);
            include_once $_SERVER['DOCUMENT_ROOT'] . $base_dir . $className . '.php';
        });
    }

}