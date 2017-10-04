<?php

namespace Illuminate\Support\Facades;

/**
 * @method static \Symfony\Component\HttpFoundation\Cookie make(string $name, string $value, int $minutes, string $path, string $domain, bool $secure, bool $httpOnly, bool $raw, string | null $sameSite)
 * @method static \Symfony\Component\HttpFoundation\Cookie forever(string $name, string $value, string $path, string $domain, bool $secure, bool $httpOnly, bool $raw, string | null $sameSite)
 * @method static \Symfony\Component\HttpFoundation\Cookie forget(string $name, string $path, string $domain)
 * @method static bool hasQueued(string $key)
 * @method static \Symfony\Component\HttpFoundation\Cookie queued(string $key, mixed $default)
 * @method static void queue(array $parameters)
 * @method static void unqueue(string $name)
 * @method static $this setDefaultPathAndDomain(string $path, string $domain, bool $secure, string $sameSite)
 * @method static array getQueuedCookies()
 *
 * @see \Illuminate\Cookie\CookieJar
 */
class Cookie extends Facade
{
    /**
     * Determine if a cookie exists on the request.
     *
     * @param  string  $key
     * @return bool
     */
    public static function has($key)
    {
        return ! is_null(static::$app['request']->cookie($key, null));
    }

    /**
     * Retrieve a cookie from the request.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return string
     */
    public static function get($key = null, $default = null)
    {
        return static::$app['request']->cookie($key, $default);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cookie';
    }
}
