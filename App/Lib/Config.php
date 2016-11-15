<?php

namespace App\Lib;

class Config
{
    protected static $settings = [];

    public static function get($key)
    {
        return isset(self::$settings[$key]) ? $settings[$key] : NULL ;
    }

    public static function set($key, $value)
    {
        self::$settings[$key] = $value;
    }
}