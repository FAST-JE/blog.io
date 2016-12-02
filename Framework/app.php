<?php

require_once 'Config/Config.php';

spl_autoload_extensions('.php');
spl_autoload_register(function ($class) {
    $file = ROOT . DS . str_replace('\\', DS, $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    } else {
        throw new Exception('Failed to include class: '.$class);
    }
});