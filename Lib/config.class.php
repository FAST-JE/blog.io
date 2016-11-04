<?php

namespace Lib\Config;

class Config
{
    protected $settings = [];

    public static function get($key)
    {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }
}