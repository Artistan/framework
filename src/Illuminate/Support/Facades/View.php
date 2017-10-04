<?php

namespace Illuminate\Support\Facades;

/**
 * @method static \Illuminate\Contracts\View\View file(string $path, array $data, array $mergeData)
 * @method static \Illuminate\Contracts\View\View make(string $view, array $data, array $mergeData)
 * @method static \Illuminate\Contracts\View\View first(array $views, array $data, array $mergeData)
 * @method static string renderWhen(bool $condition, string $view, array $data, array $mergeData)
 * @method static string renderEach(string $view, array $data, string $iterator, string $empty)
 * @method static bool exists(string $view)
 * @method static \Illuminate\Contracts\View\Engine getEngineFromPath(string $path)
 * @method static mixed share(array | string $key, mixed $value)
 * @method static void incrementRender()
 * @method static void decrementRender()
 * @method static bool doneRendering()
 * @method static void addLocation(string $location)
 * @method static $this addNamespace(string $namespace, string | array $hints)
 * @method static $this prependNamespace(string $namespace, string | array $hints)
 * @method static $this replaceNamespace(string $namespace, string | array $hints)
 * @method static void addExtension(string $extension, string $engine, \Closure $resolver)
 * @method static void flushState()
 * @method static void flushStateIfDoneRendering()
 * @method static array getExtensions()
 * @method static \Illuminate\View\Engines\EngineResolver getEngineResolver()
 * @method static \Illuminate\View\ViewFinderInterface getFinder()
 * @method static void setFinder(\Illuminate\View\ViewFinderInterface $finder)
 * @method static void flushFinderCache()
 * @method static \Illuminate\Contracts\Events\Dispatcher getDispatcher()
 * @method static void setDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
 * @method static \Illuminate\Contracts\Container\Container getContainer()
 * @method static void setContainer(\Illuminate\Contracts\Container\Container $container)
 * @method static mixed shared(string $key, mixed $default)
 * @method static array getShared()
 * @method static void startComponent(string $name, array $data)
 * @method static string renderComponent()
 * @method static void slot(string $name, string | null $content)
 * @method static void endSlot()
 * @method static array creator(array | string $views, \Closure | string $callback)
 * @method static array composers(array $composers)
 * @method static array composer(array | string $views, \Closure | string $callback)
 * @method static void callComposer(\Illuminate\Contracts\View\View $view)
 * @method static void callCreator(\Illuminate\Contracts\View\View $view)
 * @method static void startSection(string $section, string | null $content)
 * @method static void inject(string $section, string $content)
 * @method static string yieldSection()
 * @method static string stopSection(bool $overwrite)
 * @method static string appendSection()
 * @method static string yieldContent(string $section, string $default)
 * @method static string parentPlaceholder(string $section)
 * @method static bool hasSection(string $name)
 * @method static mixed getSection(string $name, string $default)
 * @method static array getSections()
 * @method static void flushSections()
 * @method static void addLoop(\Countable | array $data)
 * @method static void incrementLoopIndices()
 * @method static void popLoop()
 * @method static \stdClass|null getLastLoop()
 * @method static array getLoopStack()
 * @method static void startPush(string $section, string $content)
 * @method static string stopPush()
 * @method static void startPrepend(string $section, string $content)
 * @method static string stopPrepend()
 * @method static string yieldPushContent(string $section, string $default)
 * @method static void flushStacks()
 * @method static void startTranslation(array $replacements)
 * @method static string renderTranslation()
 *
 * @see \Illuminate\View\Factory
 */
class View extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'view';
    }
}
