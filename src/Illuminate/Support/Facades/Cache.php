<?php

namespace Illuminate\Support\Facades;

/**
 * @method static \Illuminate\Contracts\Cache\Repository store(string | null $name)
 * @method static mixed driver(string $driver)
 * @method static \Illuminate\Cache\Repository repository(\Illuminate\Contracts\Cache\Store $store)
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver(string $name)
 * @method static $this extend(string $driver, \Closure $callback)
 * @method static bool has(string $key)
 * @method static mixed get(string $key, mixed $default=null)
 * @method static array many(array $keys)
 * @method static mixed pull(string $key, mixed $default)
 * @method static void put(string $key, mixed $value, \DateTimeInterface | \DateInterval | float | int $minutes)
 * @method static void putMany(array $values, \DateTimeInterface | \DateInterval | float | int $minutes)
 * @method static bool add(string $key, mixed $value, \DateTimeInterface | \DateInterval | float | int $minutes)
 * @method static int|bool increment(string $key, mixed $value)
 * @method static int|bool decrement(string $key, mixed $value)
 * @method static void forever(string $key, mixed $value)
 * @method static mixed remember(string $key, \DateTimeInterface | \DateInterval | float | int $minutes, \Closure $callback)
 * @method static mixed sear(string $key, \Closure $callback)
 * @method static mixed rememberForever(string $key, \Closure $callback)
 * @method static bool forget(string $key)
 * @method static bool True on success and false on failure. clear()
 * @method static \Illuminate\Cache\TaggedCache tags(array | mixed $names)
 * @method static float|int getDefaultCacheTime()
 * @method static $this setDefaultCacheTime(float | int $minutes)
 * @method static \Illuminate\Contracts\Cache\Store getStore()
 * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
 * @method static bool offsetExists(string $key)
 * @method static mixed offsetGet(string $key)
 * @method static void offsetSet(string $key, mixed $value)
 * @method static void offsetUnset(string $key)
 * @method static void macro(string $name, object | callable $macro)
 * @method static void mixin(object $mixin)
 * @method static bool hasMacro(string $name)
 * @method static mixed macroCall(string $method, array $parameters)
 * @method static \Illuminate\Contracts\Cache\Lock lock(string $name, int $seconds)
 * @method static bool flush()
 * @method static \Predis\ClientInterface connection()
 * @method static void setConnection(string $connection)
 * @method static \Illuminate\Contracts\Redis\Factory getRedis()
 * @method static string getPrefix()
 * @method static void setPrefix(string $prefix)
 *
 * @see \Illuminate\Cache\CacheManager
 * @see \Illuminate\Cache\Repository
 */
class Cache extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cache';
    }
}
