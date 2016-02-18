<?php

namespace Chernoff\Events\Hooks;

/**
 * Class Hook
 * @package Chernoff\Events\Hooks
 */
abstract class Hook
{
    /** @var array */
    protected static $expectedReturn = [];

    /**
     * @param $name
     * @return string|null
     */
    public static function getExpectedReturn($name)
    {
        return (!empty(static::$expectedReturn[$name])) ? static::$expectedReturn[$name] : null;
    }

    /**
     * @return array
     */
    public static function getHooks()
    {
        return static::$expectedReturn;
    }
}
