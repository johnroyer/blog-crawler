<?php

namespace Crawler;

class Cache
{
    private static $list = [];

    public static function set(string $url): void
    {
        $hash = md5($url);
        static::$list[$hash] = 1;
    }

    public static function has(string $url): bool
    {
        $hash = md5($url);
        return key_exists($hash, static::$list);
    }
}
