<?php

namespace Illuminate\Bus;

trait Queueable
{
    /**
     * The name of the connection the job should be sent to.
     *
     * @var string|null
     */
    public $connection;

    /**
     * The name of the queue the job should be sent to.
     *
     * @var string|null
     */
    public $queue;

    /**
     * The number of seconds before the job should be made available.
     *
     * @var \DateTimeInterface|\DateInterval|int|null
     */
    public $delay;

    /**
     * The jobs that should run if this job is successful.
     *
     * @var array
     */
    public $chained = [];

    /**
     * Set the desired connection for the job.
     *
     * @param  string|null  $connection
     * @return $this
     */
    public function onConnection($connection)
    {
        $this->connection = $connection;

        return $this;
    }

    /**
     * Set the desired queue for the job.
     *
     * @param  string|null  $queue
     * @return $this
     */
    public function onQueue($queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Set the desired delay for the job.
     *
     * @param  \DateTimeInterface|\DateInterval|int|null  $delay
     * @return $this
     */
    public function delay($delay)
    {
        $this->delay = $delay;

        return $this;
    }

    /**
     * Set the jobs that should run if this job is successful.
     *
     * @param  array  $chain
     * @return $this
     */
    public function chain($chain)
    {
        $this->chained = collect($chain)->map(function ($job) {
            return serialize($job);
        })->all();

        return $this;
    }

    /**
     * Dispatch the next job on the chain.
     *
     * @return void
     */
    public function dispatchNextJobInChain()
    {
        if (! empty($this->chained)) {
            dispatch(tap(unserialize(array_shift($this->chained)), function (Queueable $next) {
                $next->chained = $this->chained;
            }));
        }
    }
/**

public function dispatchNextJobInChain()
{
if (! empty($this->chained)) {
dispatch(tap(unserialize(array_shift($this->chained)), function (Queueable $next) {
$next->chained = $this->chained;
$next->onConnection($next->connection ?: $this->connection);
$next->onQueue($next->queue ?: $this->queue);
}));
}
}
 *
 * all on queue or all on connection implies that you cannot override the behavior.
maybe withChain should have optional parameters for queue and connection.
These would be the default for the chain, unless the chained job is already defined.
These params can then be passed down through the chain.

```php
protected $chain_connection=null;
protected $chain_queue=null;

/**
 * Set the jobs that should run if this job is successful.
 *
 * @param  array  $chain
 * @param  null|string  $queue
 * @param  null|string  $connection
 * @return \Illuminate\Foundation\Bus\PendingChain
 * /
public static function withChain(array $chain,string $queue=null,string $connection=null)
{
    $this->chain_queue = $queue;
    $this->chain_connection = $connection;
    return new PendingChain(get_called_class(), $chain);
}

/// example
JobA::withChain( [a,b,c], 'QueueName', 'ConnectionName');
```

     */
}
