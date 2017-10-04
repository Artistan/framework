<?php

namespace Illuminate\Support\Facades;

use Illuminate\Contracts\Console\Kernel as ConsoleKernelContract;

/**
 * @method static int handle( \Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output = null)
 * @method static void terminate( \Symfony\Component\Console\Input\InputInterface $input, int $status)
 * @method static \Illuminate\Foundation\Console\ClosureCommand command( string $signature, \Closure $callback)
 * @method static void registerCommand( \Symfony\Component\Console\Command\Command $command)
 * @method static int call( string $command, array $parameters = [], \Symfony\Component\Console\Output\OutputInterface $outputBuffer = null)
 * @method static \Illuminate\Foundation\Bus\PendingDispatch queue( string $command, array $parameters = [])
 * @method static array all()
 * @method static string output()
 * @method static void bootstrap()
 * @method static void setArtisan( \Illuminate\Console\Application $artisan)
 *
 * @see \Illuminate\Contracts\Console\Kernel
 */
class Artisan extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ConsoleKernelContract::class;
    }
}
