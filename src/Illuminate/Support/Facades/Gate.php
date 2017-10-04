<?php

namespace Illuminate\Support\Facades;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;

/**
 * @method static bool has(string | array $ability)
 * @method static $this define(string $ability, callable | string $callback)
 * @method static $this resource(string $name, string $class, array $abilities)
 * @method static $this policy(string $class, string $policy)
 * @method static $this before(callable $callback)
 * @method static $this after(callable $callback)
 * @method static bool allows(string $ability, array | mixed $arguments)
 * @method static bool denies(string $ability, array | mixed $arguments)
 * @method static bool check(\Illuminate\Auth\Access\iterable | string $abilities, array | mixed $arguments)
 * @method static bool any(\Illuminate\Auth\Access\iterable | string $abilities, array | mixed $arguments)
 * @method static \Illuminate\Auth\Access\Response authorize(string $ability, array | mixed $arguments)
 * @method static mixed getPolicyFor(object | string $class)
 * @method static mixed resolvePolicy(object | string $class)
 * @method static static forUser(\Illuminate\Contracts\Auth\Authenticatable | mixed $user)
 * @method static array abilities()
 * @method static array policies()
 *
 * @see \Illuminate\Contracts\Auth\Access\Gate
 */
class Gate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return GateContract::class;
    }
}
