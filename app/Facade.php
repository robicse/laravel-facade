<?php

namespace App;

class Facade
{
    public static function __callStatic($methodName, $arguments)
    {
        // dd(app('SomeService'));

        $instance = app(static::getFacadeAccessor());
        return $instance->$methodName(...$arguments);
    }

    protected static function getFacadeAccessor()
    {

    }
}
