<?php

namespace Illuminate\Support\Facades;

/**
 *
 * @method static \Illuminate\Support\Facades\Route get(string $uri, \Closure | array | string | null $action = null)
 * @method static \Illuminate\Support\Facades\Route post(string $uri, \Closure | array | string | null $action = null)
 * @method static \Illuminate\Support\Facades\Route put(string $uri, \Closure | array | string | null $action = null)
 * @method static \Illuminate\Support\Facades\Route patch(string $uri, \Closure | array | string | null $action = null)
 * @method static \Illuminate\Support\Facades\Route delete(string $uri, \Closure | array | string | null $action = null)
 * @method static \Illuminate\Support\Facades\Route options(string $uri, \Closure | array | string | null $action = null)
 * @method static \Illuminate\Support\Facades\Route any(string $uri, \Closure | array | string | null $action = null)
 * @method static \Illuminate\Support\Facades\Route fallback(\Closure | array | string | null $action = null)
 * @method static \Illuminate\Support\Facades\Route match(array | string $methods, string $uri, \Closure | array | string | null $action = null)
 * @method static void resources(array $resources)
 * @method static \Illuminate\Routing\PendingResourceRegistration resource(string $name, string $controller, array $options = [])
 * @method static \Illuminate\Routing\PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
 * @method static array mergeWithLastGroup(array $new)
 * @method static string getLastGroupPrefix()
 * @method static \Illuminate\Http\Response|\Illuminate\Http\JsonResponse dispatch(\Illuminate\Http\Request $request)
 * @method static mixed dispatchToRoute(\Illuminate\Http\Request $request)
 * @method static array gatherRouteMiddleware(\Illuminate\Support\Facades\Route $route)
 * @method static \Illuminate\Http\Response|\Illuminate\Http\JsonResponse prepareResponse(\Symfony\Component\HttpFoundation\Request $request, mixed $response)
 * @method static \Illuminate\Http\Response|\Illuminate\Http\JsonResponse toResponse(\Symfony\Component\HttpFoundation\Request $request, mixed $response) static version substituteBindings(\Illuminate\Support\Facades\Route $route)
 * @method static void matched(string | callable $callback)
 * @method static array getMiddleware()
 * @method static $this aliasMiddleware(string $name, string $class)
 * @method static bool hasMiddlewareGroup(string $name)
 * @method static array getMiddlewareGroups()
 * @method static $this middlewareGroup(string $name, array $middleware)
 * @method static $this prependMiddlewareToGroup(string $group, string $middleware)
 * @method static $this pushMiddlewareToGroup(string $group, string $middleware)
 * @method static void bind(string $key, string | callable $binder)
 * @method static void model(string $key, string $class, \Closure | null $callback)
 * @method static \Closure|null getBindingCallback(string $key)
 * @method static array getPatterns()
 * @method static void pattern(string $key, string $pattern)
 * @method static void patterns(array $patterns)
 * @method static bool hasGroupStack()
 * @method static array getGroupStack()
 * @method static mixed input(string $key, string $default)
 * @method static \Illuminate\Http\Request getCurrentRequest()
 * @method static \Illuminate\Support\Facades\Route getCurrentRoute()
 * @method static \Illuminate\Support\Facades\Route current()
 * @method static bool has(string $name)
 * @method static string|null currentRouteName()
 * @method static bool is(mixed $patterns)
 * @method static bool currentRouteNamed(mixed $patterns)
 * @method static string|null currentRouteAction()
 * @method static bool uses(array $patterns)
 * @method static bool currentRouteUses(string $action)
 * @method static void auth()
 * @method static void singularResourceParameters(bool $singular)
 * @method static void resourceParameters(array $parameters)
 * @method static array|null resourceVerbs(array $verbs)
 * @method static \Illuminate\Routing\RouteCollection getRoutes()
 * @method static void setRoutes(\Illuminate\Routing\RouteCollection $routes)
 * @method static void macro(string $name, object | callable $macro)
 * @method static void mixin(object $mixin)
 * @method static bool hasMacro(string $name)
 * @method static mixed macroCall(string $method, array $parameters)
 * @method static \Illuminate\Support\Facades\Route prefix(string $prefix)
 * @method static \Illuminate\Support\Facades\Route middleware(array | string | null $middleware)
 * @method static \Illuminate\Support\Facades\Route substituteBindings(\Illuminate\Support\Facades\Route $route)
 * @method static \Illuminate\Support\Facades\Route as(string $value)
 * @method static \Illuminate\Support\Facades\Route domain(string $value)
 * @method static \Illuminate\Support\Facades\Route name(string $value)
 * @method static \Illuminate\Support\Facades\Route namespace(string $value)
 * @method static \Illuminate\Support\Facades\Route where(array|string $name, string $expression = null)
 * @method static \Illuminate\Routing\Router group(\Closure|string|array $value)
 * @method static \Illuminate\Support\Facades\Route redirect(string $uri, string $destination, int $status = 301)
 * @method static \Illuminate\Support\Facades\Route view(string $uri, string $view, array $data = [])
 *
 * @see \Illuminate\Routing\Router
 * @see \Illuminate\Routing\Route
 */
class Route extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'router';
    }
}
