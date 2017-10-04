<?php

namespace Illuminate\Support\Facades;

/**
 * @method static string full()
 * @method static string current()
 * @method static string previous(mixed $fallback)
 * @method static string to(string $path, mixed $extra, bool | null $secure)
 * @method static string secure(string $path, array $parameters)
 * @method static string asset(string $path, bool | null $secure)
 * @method static string secureAsset(string $path)
 * @method static string assetFrom(string $root, string $path, bool | null $secure)
 * @method static string formatScheme(bool | null $secure)
 * @method static string route(string $name, mixed $parameters, bool $absolute)
 * @method static string action(string $action, mixed $parameters, bool $absolute)
 * @method static array formatParameters(mixed | array $parameters)
 * @method static string formatRoot(string $scheme, string $root)
 * @method static string format(string $root, string $path)
 * @method static bool isValidUrl(string $path)
 * @method static void defaults(array $defaults)
 * @method static void forceScheme(string $schema)
 * @method static void forceRootUrl(string $root)
 * @method static $this formatHostUsing(\Closure $callback)
 * @method static $this formatPathUsing(\Closure $callback)
 * @method static \Closure pathFormatter()
 * @method static \Illuminate\Http\Request getRequest()
 * @method static void setRequest(\Illuminate\Http\Request $request)
 * @method static $this setRoutes(\Illuminate\Routing\RouteCollection $routes)
 * @method static $this setSessionResolver(callable $sessionResolver)
 * @method static $this setRootControllerNamespace(string $rootNamespace)
 * @method static void macro(string $name, object | callable $macro)
 * @method static void mixin(object $mixin)
 * @method static bool hasMacro(string $name)
 *
 * @see \Illuminate\Routing\UrlGenerator
 */
class URL extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'url';
    }
}
