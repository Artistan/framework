<?php

namespace Illuminate\Support\Facades;

/**
 * @method static bool hasForLocale(string $key, string | null $locale)
 * @method static bool has(string $key, string | null $locale, bool $fallback)
 * @method static string|array|null trans(string $key, array $replace, string $locale)
 * @method static string|array|null get(string $key, array $replace, string | null $locale, bool $fallback)
 * @method static string getFromJson(string $key, array $replace, string $locale)
 * @method static string transChoice(string $key, int | array | \Countable $number, array $replace, string $locale)
 * @method static string choice(string $key, int | array | \Countable $number, array $replace, string $locale)
 * @method static void addLines(array $lines, string $locale, string $namespace)
 * @method static void load(string $namespace, string $group, string $locale)
 * @method static void addNamespace(string $namespace, string $hint)
 * @method static void addJsonPath(string $path)
 * @method static array parseKey(string $key)
 * @method static \Illuminate\Translation\MessageSelector getSelector()
 * @method static void setSelector(\Illuminate\Translation\MessageSelector $selector)
 * @method static \Illuminate\Contracts\Translation\Loader getLoader()
 * @method static string locale()
 * @method static string getLocale()
 * @method static void setLocale(string $locale)
 * @method static string getFallback()
 * @method static void setFallback(string $fallback)
 * @method static void setParsedKey(string $key, array $parsed)
 * @method static void macro(string $name, object | callable $macro)
 * @method static void mixin(object $mixin)
 * @method static bool hasMacro(string $name)
 *
 * @see \Illuminate\Translation\Translator
 */
class Lang extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'translator';
    }
}
