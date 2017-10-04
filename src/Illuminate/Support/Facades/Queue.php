<?php

namespace Illuminate\Support\Facades;

use Illuminate\Support\Testing\Fakes\QueueFake;

/**
 * @method static void before(mixed $callback)
 * @method static void after(mixed $callback)
 * @method static void exceptionOccurred(mixed $callback)
 * @method static void looping(mixed $callback)
 * @method static void failing(mixed $callback)
 * @method static void stopping(mixed $callback)
 * @method static bool connected(string $name)
 * @method static \Illuminate\Contracts\Queue\Queue connection(string $name)
 * @method static void extend(string $driver, \Closure $resolver)
 * @method static void addConnector(string $driver, \Closure $resolver)
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver(string $name)
 * @method static string getName(string $connection)
 * @method static bool isDownForMaintenance()
 * @method static int size(string $queue)
 * @method static mixed push(string $job, mixed $data, string $queue)
 * @method static mixed pushRaw(string $payload, string $queue, array $options)
 * @method static mixed later(\DateTimeInterface | \DateInterval | int $delay, string $job, mixed $data, string $queue)
 * @method static \Illuminate\Contracts\Queue\Job|null pop(string $queue)
 * @method static mixed pushOn(string $queue, string $job, mixed $data)
 * @method static mixed laterOn(string $queue, \DateTimeInterface | \DateInterval | int $delay, string $job, mixed $data)
 * @method static mixed bulk(array $jobs, mixed $data, string $queue)
 * @method static mixed getJobExpiration(mixed $job)
 * @method static string getConnectionName()
 * @method static $this setConnectionName(string $name)
 * @method static void setContainer(\Illuminate\Container\Container $container)
 *
 * @see \Illuminate\Queue\QueueManager
 * @see \Illuminate\Queue\Queue
 */
class Queue extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return void
     */
    public static function fake()
    {
        static::swap(new QueueFake(static::getFacadeApplication()));
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'queue';
    }
}
