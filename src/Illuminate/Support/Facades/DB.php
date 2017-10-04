<?php

namespace Illuminate\Support\Facades;

/**
 * @method static \Illuminate\Database\Connection connection(string $name)
 * @method static void purge(string $name)
 * @method static void disconnect(string $name)
 * @method static \Illuminate\Database\Connection reconnect(string $name)
 * @method static string getDefaultConnection()
 * @method static void setDefaultConnection(string $name)
 * @method static array supportedDrivers()
 * @method static array availableDrivers()
 * @method static void extend(string $name, callable $resolver)
 * @method static array getConnections()
 * @method static \Illuminate\Database\Schema\SQLiteBuilder getSchemaBuilder()
 * @method static void useDefaultQueryGrammar()
 * @method static void useDefaultSchemaGrammar()
 * @method static void useDefaultPostProcessor()
 * @method static \Illuminate\Database\Query\Builder table(string $table)
 * @method static \Illuminate\Database\Query\Builder query()
 * @method static mixed selectOne(string $query, array $bindings, bool $useReadPdo)
 * @method static array selectFromWriteConnection(string $query, array $bindings)
 * @method static array select(string $query, array $bindings, bool $useReadPdo)
 * @method static \Generator cursor(string $query, array $bindings, bool $useReadPdo)
 * @method static bool insert(string $query, array $bindings)
 * @method static int update(string $query, array $bindings)
 * @method static int delete(string $query, array $bindings)
 * @method static bool statement(string $query, array $bindings)
 * @method static int affectingStatement(string $query, array $bindings)
 * @method static bool unprepared(string $query)
 * @method static array pretend(\Closure $callback)
 * @method static void bindValues(\PDOStatement $statement, array $bindings)
 * @method static array prepareBindings(array $bindings)
 * @method static void logQuery(string $query, array $bindings, float | null $time)
 * @method static void listen(\Closure $callback)
 * @method static \Illuminate\Database\Query\Expression raw(mixed $value)
 * @method static void recordsHaveBeenModified(bool $value)
 * @method static bool isDoctrineAvailable()
 * @method static \Doctrine\DBAL\Schema\Column getDoctrineColumn(string $table, string $column)
 * @method static \Doctrine\DBAL\Schema\AbstractSchemaManager getDoctrineSchemaManager()
 * @method static \Doctrine\DBAL\Connection getDoctrineConnection()
 * @method static \PDO getPdo()
 * @method static \PDO getReadPdo()
 * @method static $this setPdo(\PDO | \Closure | null $pdo)
 * @method static $this setReadPdo(\PDO | \Closure | null $pdo)
 * @method static $this setReconnector(callable $reconnector)
 * @method static string|null getName()
 * @method static mixed getConfig(string | null $option)
 * @method static string getDriverName()
 * @method static \Illuminate\Database\Query\Grammars\Grammar getQueryGrammar()
 * @method static void setQueryGrammar(\Illuminate\Database\Query\Grammars\Grammar $grammar)
 * @method static \Illuminate\Database\Schema\Grammars\Grammar getSchemaGrammar()
 * @method static void setSchemaGrammar(\Illuminate\Database\Schema\Grammars\Grammar $grammar)
 * @method static \Illuminate\Database\Query\Processors\Processor getPostProcessor()
 * @method static void setPostProcessor(\Illuminate\Database\Query\Processors\Processor $processor)
 * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
 * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
 * @method static bool pretending()
 * @method static array getQueryLog()
 * @method static void flushQueryLog()
 * @method static void enableQueryLog()
 * @method static void disableQueryLog()
 * @method static bool logging()
 * @method static string getDatabaseName()
 * @method static string setDatabaseName(string $database)
 * @method static string getTablePrefix()
 * @method static void setTablePrefix(string $prefix)
 * @method static \Illuminate\Database\Grammar withTablePrefix(\Illuminate\Database\Grammar $grammar)
 * @method static void resolverFor(string $driver, \Closure $callback)
 * @method static mixed getResolver(string $driver)
 * @method static mixed transaction(\Closure $callback, int $attempts)
 * @method static void beginTransaction()
 * @method static void commit()
 * @method static void rollBack(int | null $toLevel)
 * @method static int transactionLevel()
 *
 * @see \Illuminate\Database\DatabaseManager
 * @see \Illuminate\Database\Connection
 */
class DB extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'db';
    }
}
