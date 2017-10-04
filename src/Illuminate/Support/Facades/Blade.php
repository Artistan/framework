<?php

namespace Illuminate\Support\Facades;

/**
 * @method static void compile(string $path)
 * @method static string getPath()
 * @method static void setPath(string $path)
 * @method static string compileString(string $value)
 * @method static string stripParentheses(string $expression)
 * @method static void extend(callable $compiler)
 * @method static array getExtensions()
 * @method static void if (string $name, callable $callback)
 * @method static bool check(string $name, array $parameters)
 * @method static void directive(string $name, callable $handler)
 * @method static array getCustomDirectives()
 * @method static void setEchoFormat(string $format)
 * @method static string getCompiledPath(string $path)
 * @method static bool isExpired(string $path)
 * @method static string compileEchoDefaults(string $value)
 *
 * @see \Illuminate\View\Compilers\BladeCompiler
 */
class Blade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return static::$app['view']->getEngineResolver()->resolve('blade')->getCompiler();
    }
}
