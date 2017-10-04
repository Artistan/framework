<?php

namespace Illuminate\Support\Facades;

use Illuminate\Filesystem\Filesystem;

/**
 * @method static \Illuminate\Filesystem\FilesystemAdapter drive(string $name)
 * @method static \Illuminate\Filesystem\FilesystemAdapter disk(string $name)
 * @method static \Illuminate\Filesystem\FilesystemAdapter cloud()
 * @method static \Illuminate\Filesystem\FilesystemAdapter createLocalDriver(array $config)
 * @method static \Illuminate\Filesystem\FilesystemAdapter createFtpDriver(array $config)
 * @method static \Illuminate\Contracts\Filesystem\Cloud createS3Driver(array $config)
 * @method static \Illuminate\Contracts\Filesystem\Cloud createRackspaceDriver(array $config)
 * @method static void set(string $name, mixed $disk)
 * @method static string getDefaultDriver()
 * @method static string getDefaultCloudDriver()
 * @method static $this extend(string $driver, \Closure $callback)
 * @method static void assertExists(string $path)
 * @method static void assertMissing(string $path)
 * @method static bool exists(string $path)
 * @method static string path(string $path)
 * @method static string get(string $path)
 * @method static bool put(string $path, string | resource $contents, mixed $options=[])
 * @method static string|false putFile(string $path, \Illuminate\Http\File | \Illuminate\Http\UploadedFile $file, array $options)
 * @method static string|false putFileAs(string $path, \Illuminate\Http\File | \Illuminate\Http\UploadedFile $file, string $name, array $options)
 * @method static string getVisibility(string $path)
 * @method static void setVisibility(string $path, string $visibility)
 * @method static int prepend(string $path, string $data, string $separator)
 * @method static int append(string $path, string $data, string $separator)
 * @method static bool delete(string | array $paths)
 * @method static bool copy(string $from, string $to)
 * @method static bool move(string $from, string $to)
 * @method static int size(string $path)
 * @method static string|false mimeType(string $path)
 * @method static int lastModified(string $path)
 * @method static string url(string $path)
 * @method static string temporaryUrl(string $path, \DateTimeInterface $expiration, array $options)
 * @method static string getAwsTemporaryUrl(\League\Flysystem\AwsS3v3\AwsS3Adapter $adapter, string $path, \DateTimeInterface $expiration, array $options)
 * @method static void getRackspaceTemporaryUrl()
 * @method static array files(string | null $directory = null, bool $recursive=false)
 * @method static array allFiles(string | null $directory = null)
 * @method static array directories(string | null $directory= null, bool $recursive = false)
 * @method static array allDirectories(string | null $directory= null) Get all (recursive)
 * @method static bool makeDirectory(string $path)
 * @method static bool deleteDirectory(string $directory)
 * @method static \League\Flysystem\FilesystemInterface getDriver()
 *
 * @see \Illuminate\Filesystem\FilesystemManager
 */
class Storage extends Facade
{
    /**
     * Replace the given disk with a local testing disk.
     *
     * @param  string|null  $disk
     *
     * @return void
     */
    public static function fake($disk = null)
    {
        $disk = $disk ?: self::$app['config']->get('filesystems.default');

        (new Filesystem)->cleanDirectory(
            $root = storage_path('framework/testing/disks/'.$disk)
        );

        static::set($disk, self::createLocalDriver(['root' => $root]));
    }

    /**
     * Replace the given disk with a persistent local testing disk.
     *
     * @param  string|null  $disk
     * @return void
     */
    public static function persistentFake($disk = null)
    {
        $disk = $disk ?: self::$app['config']->get('filesystems.default');

        static::set($disk, self::createLocalDriver([
            'root' => storage_path('framework/testing/disks/'.$disk),
        ]));
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'filesystem';
    }
}
