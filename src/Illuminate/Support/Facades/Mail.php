<?php

namespace Illuminate\Support\Facades;

use Illuminate\Support\Testing\Fakes\MailFake;

/**
 * @method static void alwaysFrom(string $address, string | null $name)
 * @method static void alwaysReplyTo(string $address, string | null $name)
 * @method static void alwaysTo(string $address, string | null $name)
 * @method static \Illuminate\Mail\PendingMail to(mixed $users)
 * @method static \Illuminate\Mail\PendingMail bcc(mixed $users)
 * @method static void raw(string $text, mixed $callback)
 * @method static void plain(string $view, array $data, mixed $callback)
 * @method static \Illuminate\View\View render(string | array $view, array $data)
 * @method static void send(string | array | \Illuminate\Mail\MailableContract $view, array $data, \Closure | string $callback)
 * @method static mixed queue(string | array | \Illuminate\Mail\MailableContract $view, string | null $queue)
 * @method static mixed onQueue(string $queue, string | array $view)
 * @method static mixed queueOn(string $queue, string | array $view)
 * @method static mixed later(\DateTimeInterface | \DateInterval | int $delay, string | array | \Illuminate\Mail\MailableContract $view, string | null $queue) Queue a new e-mail message for sending after (n)
 * @method static mixed laterOn(string $queue, \DateTimeInterface | \DateInterval | int $delay, string | array $view) Queue a new e-mail message for sending after (n)
 * @method static \Illuminate\Contracts\View\Factory getViewFactory()
 * @method static \Swift_Mailer getSwiftMailer()
 * @method static array failures()
 * @method static void setSwiftMailer(\Swift_Mailer $swift)
 * @method static $this setQueue(\Illuminate\Contracts\Queue\Factory $queue)
 * @method static void macro(string $name, object | callable $macro)
 * @method static void mixin(object $mixin)
 * @method static bool hasMacro(string $name)
 *
 * @see \Illuminate\Mail\Mailer
 */
class Mail extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return void
     */
    public static function fake()
    {
        static::swap(new MailFake);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mailer';
    }
}
