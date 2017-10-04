<?php

namespace Illuminate\Support\Facades;

/**
 * @method static array getSessionConfig()
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver(string $name)
 * @method static mixed driver(string $driver)
 * @method static $this extend(string $driver, \Closure $callback)
 * @method static array getDrivers()
 * @method static bool start()
 * @method static bool save()
 * @method static void ageFlashData()
 * @method static array all()
 * @method static bool exists(string | array $key)
 * @method static bool has(string | array $key)
 * @method static mixed get(string $key, mixed $default)
 * @method static mixed pull(string $key, string $default)
 * @method static bool hasOldInput(string $key)
 * @method static mixed getOldInput(string $key, mixed $default)
 * @method static void replace(array $attributes)
 * @method static void put(string | array $key, mixed $value)
 * @method static mixed remember(string $key, \Closure $callback)
 * @method static void push(string $key, mixed $value)
 * @method static mixed increment(string $key, int $amount)
 * @method static int decrement(string $key, int $amount)
 * @method static void flash(string $key, mixed $value)
 * @method static void now(string $key, mixed $value)
 * @method static void reflash()
 * @method static void keep(array | mixed $keys)
 * @method static void flashInput(array $value)
 * @method static mixed remove(string $key)
 * @method static void forget(string | array $keys)
 * @method static void flush()
 * @method static bool invalidate()
 * @method static bool regenerate(bool $destroy)
 * @method static bool migrate(bool $destroy)
 * @method static bool isStarted()
 * @method static string getName()
 * @method static void setName(string $name)
 * @method static string getId()
 * @method static void setId(string $id)
 * @method static bool isValidId(string $id)
 * @method static void setExists(bool $value)
 * @method static string token()
 * @method static void regenerateToken()
 * @method static string|null previousUrl()
 * @method static void setPreviousUrl(string $url)
 * @method static \SessionHandlerInterface getHandler()
 * @method static bool handlerNeedsRequest()
 * @method static void setRequestOnHandler(\Illuminate\Http\Request $request)
 *
 * @see \Illuminate\Session\SessionManager
 * @see \Illuminate\Session\Store
 */
class Session extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'session';
    }
}
