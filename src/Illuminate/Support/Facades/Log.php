<?php

namespace Illuminate\Support\Facades;

use Psr\Log\LoggerInterface;

/**
 * @method static boolean debug($message, $context = array())
 * @method static boolean info($message, $context = array())
 * @method static boolean notice($message, $context = array())
 * @method static boolean warning($message, $context = array())
 * @method static boolean error($message, $context = array())
 * @method static boolean critical($message, $context = array())
 * @method static boolean alert($message, $context = array())
 * @method static boolean emergency($message, $context = array())
 * @method static void log($level, $message, $context = array())
 * @method static void write($level, $message, $context = array())
 * @method static void useFiles($path, $level = 'debug')
 * @method static void useDailyFiles($path, $days = 0, $level = 'debug')
 * @method static \Psr\Log\LoggerInterface useSyslog($name = 'laravel', $level = 'debug', $facility = 8)
 * @method static void useErrorLog($level = 'debug', $messageType = 0)
 * @method static void listen($callback)
 * @method static \Monolog\Logger getMonolog()
 * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
 * @method static void setEventDispatcher($dispatcher)
 *
 *
 *
 * @see \Illuminate\Log\Logger
 */
class Log extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return LoggerInterface::class;
    }
}
