<?php

namespace Illuminate\Support\Facades;

/**
 * @method static \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard guard(string $name)
 * @method static \Illuminate\Auth\SessionGuard createSessionDriver(string $name, array $config)
 * @method static \Illuminate\Auth\TokenGuard createTokenDriver(string $name, array $config)
 * @method static string getDefaultDriver()
 * @method static void shouldUse(string $name)
 * @method static void setDefaultDriver(string $name)
 * @method static $this viaRequest(string $driver, callable $callback)
 * @method static \Closure userResolver()
 * @method static $this resolveUsersUsing(\Closure $userResolver)
 * @method static $this extend(string $driver, \Closure $callback)
 * @method static $this provider(string $name, \Closure $callback)
 * @method static \Illuminate\Contracts\Auth\UserProvider|null createUserProvider(string | null $provider)
 * @method static string getDefaultUserProvider()
 * @method static \Illuminate\Foundation\Auth\User|null user()
 * @method static int|null id()
 * @method static bool once(array $credentials)
 * @method static \Illuminate\Foundation\Auth\User|false onceUsingId(mixed $id)
 * @method static bool validate(array $credentials)
 * @method static Response|null basic(string $field, array $extraConditions)
 * @method static Response|null onceBasic(string $field, array $extraConditions)
 * @method static bool attempt(array $credentials, bool $remember)
 * @method static \Illuminate\Foundation\Auth\User|false loginUsingId(mixed $id, bool $remember)
 * @method static void login(\Illuminate\Contracts\Auth\Authenticatable $user, bool $remember)
 * @method static void logout()
 * @method static void attempting(mixed $callback)
 * @method static \Illuminate\Foundation\Auth\User getLastAttempted()
 * @method static string getName()
 * @method static string getRecallerName()
 * @method static bool viaRemember()
 * @method static \Illuminate\Contracts\Cookie\QueueingFactory getCookieJar()
 * @method static void setCookieJar(\Illuminate\Contracts\Cookie\QueueingFactory $cookie)
 * @method static \Illuminate\Contracts\Events\Dispatcher getDispatcher()
 * @method static void setDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
 * @method static \Illuminate\Contracts\Session\Session. getSession()
 * @method static \Illuminate\Foundation\Auth\User|null getUser()
 * @method static $this setUser(\Illuminate\Contracts\Auth\Authenticatable $user)
 * @method static Request getRequest()
 * @method static Request $request)
 * @method static \Illuminate\Foundation\Auth\User authenticate()
 * @method static bool check()
 * @method static bool guest()
 * @method static \Illuminate\Contracts\Auth\UserProvider getProvider()
 * @method static void setProvider(\Illuminate\Contracts\Auth\UserProvider $provider)
 * @method static void macro(string $name, object | callable $macro)
 * @method static void mixin(object $mixin)
 * @method static bool hasMacro(string $name)
 *
 * @see \Illuminate\Auth\AuthManager
 * @see \Illuminate\Contracts\Auth\Factory
 * @see \Illuminate\Contracts\Auth\Guard
 * @see \Illuminate\Contracts\Auth\StatefulGuard
 */
class Auth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth';
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @return void
     */
    public static function routes()
    {
        static::$app->make('router')->auth();
    }
}
