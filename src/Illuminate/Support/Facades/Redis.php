<?php

namespace Illuminate\Support\Facades;

/**
 * @method static \Illuminate\Redis\Connections\Connection connection(string | null $name)
 * @method static \Illuminate\Redis\Connections\Connection resolve(string | null $name)
 * @method static void createSubscription(array|string $channels, \Closure $callback, string $method = 'subscribe')
 * @method static \Illuminate\Redis\Limiters\ConcurrencyLimiterBuilder funnel(string $name)
 * @method static \Illuminate\Redis\Limiters\DurationLimiterBuilder throttle(string $name)
 * @method static \Predis\Client client()
 * @method static void subscribe( array|string|null $channels, \Closure $callback)
 * @method static void psubscribe(array|string|null $channels, \Closure $callback)

 * @method static array connections()
 *
 * @see \Illuminate\Redis\RedisManager
 * @see \Illuminate\Contracts\Redis\Factory
 */
class Redis extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redis';
    }
}
