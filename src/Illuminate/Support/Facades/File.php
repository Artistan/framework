<?php

namespace Illuminate\Support\Facades;

/**
 * @method static bool exists(string $path)
 * @method static string get(string $path, bool $lock)
 * @method static string sharedGet(string $path)
 * @method static mixed getRequire(string $path)
 * @method static mixed requireOnce(string $file)
 * @method static string hash(string $path)
 * @method static int put(string $path, string $contents, bool $lock)
 * @method static int prepend(string $path, string $data)
 * @method static int append(string $path, string $data)
 * @method static mixed chmod(string $path, int $mode)
 * @method static bool delete(string | array $paths)
 * @method static bool move(string $path, string $target)
 * @method static bool copy(string $path, string $target)
 * @method static void link(string $target, string $link)
 * @method static string name(string $path)
 * @method static string basename(string $path)
 * @method static string dirname(string $path)
 * @method static string extension(string $path)
 * @method static string type(string $path)
 * @method static string|false mimeType(string $path)
 * @method static int size(string $path)
 * @method static int lastModified(string $path)
 * @method static bool isDirectory(string $directory)
 * @method static bool isReadable(string $path)
 * @method static bool isWritable(string $path)
 * @method static bool isFile(string $file)
 * @method static array glob(string $pattern, int $flags)
 * @method static array files(string $directory, bool $hidden)
 * @method static array allFiles(string $directory, bool $hidden)
 * @method static array directories(string $directory)
 * @method static bool makeDirectory(string $path, int $mode, bool $recursive, bool $force)
 * @method static bool moveDirectory(string $from, string $to, bool $overwrite)
 * @method static bool copyDirectory(string $directory, string $destination, int $options=null)
 * @method static bool deleteDirectory(string $directory, bool $preserve)
 * @method static bool cleanDirectory(string $directory)
 * @method static void macro(string $name, object | callable $macro)
 * @method static void mixin(object $mixin)
 * @method static bool hasMacro(string $name)
 *
 * @see \Illuminate\Filesystem\Filesystem
 */
class File extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'files';
    }
}
