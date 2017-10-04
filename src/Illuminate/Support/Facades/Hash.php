<?php

namespace Illuminate\Support\Facades;

/**
 * @method static string make(string $value, array $options)
 * @method static bool check(string $value, string $hashedValue, array $options)
 * @method static bool needsRehash(string $hashedValue, array $options)
 * @method static $this setRounds(int $rounds)
 *
 * @see \Illuminate\Hashing\BcryptHasher
 */
class Hash extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hash';
    }
}
