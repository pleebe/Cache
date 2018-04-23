<?php

namespace Foolz\Cache;

class FoolVoid
{
    /**
     * We don't need more than one of these
     *
     * @var  \Foolz\Cache\FoolVoid
     */
    public static $instance = null;

    /**
     * Returns the instance of FoolVoid
     *
     * @return  \Foolz\Cache\FoolVoid  The instance
     */
    public static function forge()
    {
        if (static::$instance === null) {
            static::$instance = new \Foolz\Cache\FoolVoid;
        }

        return static::$instance;
    }
}
