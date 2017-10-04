<?php

namespace Illuminate\Support\Facades;

/**
 * @method static \Illuminate\Validation\Validator make(array $data, array $rules, array $messages, array $customAttributes)
 * @method static void validate(array $data, array $rules, array $messages, array $customAttributes)
 * @method static void extend(string $rule, \Closure | string $extension, string $message)
 * @method static void extendImplicit(string $rule, \Closure | string $extension, string $message)
 * @method static void extendDependent(string $rule, \Closure | string $extension, string $message)
 * @method static void replacer(string $rule, \Closure | string $replacer)
 * @method static void resolver(\Closure $resolver)
 * @method static \Illuminate\Contracts\Translation\Translator getTranslator()
 * @method static \Illuminate\Validation\PresenceVerifierInterface getPresenceVerifier()
 * @method static void setPresenceVerifier(\Illuminate\Validation\PresenceVerifierInterface $presenceVerifier)
 *
 * @see \Illuminate\Validation\Factory
 */
class Validator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'validator';
    }
}
