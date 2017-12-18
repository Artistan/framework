<?php

namespace Illuminate\Support\Facades;

use Illuminate\Notifications\ChannelManager;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Testing\Fakes\NotificationFake;

/**
 * @method static void send(\Illuminate\Support\Collection | array | mixed $notifiables, mixed $notification)
 * @method static void sendNow(\Illuminate\Support\Collection | array | mixed $notifiables, mixed $notification, array | null $channels)
 * @method static mixed channel(string | null $name)
 * @method static string getDefaultDriver()
 * @method static string deliversVia()
 * @method static void deliverVia(string $channel)
 * @method static mixed driver(string $driver)
 * @method static $this extend(string $driver, \Closure $callback)
 * @method static array getDrivers()
 *
 * @see \Illuminate\Notifications\ChannelManager
 */
class Notification extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return \Illuminate\Support\Testing\Fakes\NotificationFake
     */
    public static function fake()
    {
        static::swap($fake = new NotificationFake);

        return $fake;
    }

    /**
     * Begin sending a notification to an anonymous notifiable.
     *
     * @param  string  $channel
     * @param  mixed  $route
     * @return \Illuminate\Notifications\AnonymousNotifiable
     */
    public static function route($channel, $route)
    {
        return (new AnonymousNotifiable)->route($channel, $route);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ChannelManager::class;
    }
}
