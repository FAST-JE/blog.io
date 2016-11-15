<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    define('ROOT', dirname(__FILE__));
    define('DS', DIRECTORY_SEPARATOR);

    spl_autoload_extensions('.php');
    spl_autoload_register(function ($class) {
        // replace the namespace prefix with the base directory, replace namespace
        // separators with directory separators in the relative class name, append
        // with .php
        $file = ROOT . DS . str_replace('\\', DS, $class) . '.php';

        // if the file exists, require it
        if (file_exists($file)) {
            require $file;
        }
    });

    new \App\Lib\Config;
    echo '<br>';
    new \App\Config\Router;
