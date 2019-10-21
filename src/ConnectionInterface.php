<?php

namespace Mix\Redis;

/**
 * Interface ConnectionInterface
 * @package Mix\Redis
 * @author liu,jian <coder.keda@gmail.com>
 *
 * @method bool psetex($key, $ttl, $value)
 * method array|bool sScan($key, $iterator, $pattern = '', $count = 0)
 * method array|bool scan(&$iterator, $pattern = null, $count = 0)
 * method array|bool zScan($key, $iterator, $pattern = '', $count = 0)
 * method array hScan($key, $iterator, $pattern = '', $count = 0)
 * @method mixed client($command, $arg = '')
 * @method mixed slowlog($command)
 * @method bool open($host, $port = 6379, $timeout = 0.0, $retry_interval = 0)
 * @method popen($host, $port = 6379, $timeout = 0.0, $persistent_id = null)
 * method close()
 * @method bool setOption($name, $value)
 * @method int getOption($name)
 * @method string ping()
 * @method string|bool get($key)
 * @method bool set($key, $value, $timeout = 0)
 * @method bool setex($key, $ttl, $value)
 * @method bool setnx($key, $value)
 * @method int del($key1, $key2 = null, $key3 = null)
 * @method int delete($key1, $key2 = null, $key3 = null)
 * @method multi($mode = \Redis::MULTI)
 * @method array exec()
 * method discard() 被覆盖为其他功能，需使用 __call 调用
 * @method watch($key)
 * @method unwatch()
 * @method subscribe(array $channels, $callback)
 * @method unsubscribe(array $channels)
 * @method psubscribe($patterns, $callback)
 * @method punsubscribe($patterns)
 * @method int publish($channel, $message)
 * @method array|int pubsub($keyword, $argument)
 * @method bool exists($key)
 * @method int incr($key)
 * @method float incrByFloat($key, $increment)
 * @method int incrBy($key, $value)
 * @method int decr($key)
 * @method int decrBy($key, $value)
 * @method array getMultiple(array $keys)
 * @method int|bool lPush($key, $value1, $value2 = null, $valueN = null)
 * @method int|bool rPush($key, $value1, $value2 = null, $valueN = null)
 * @method int lPushx($key, $value)
 * @method int rPushx($key, $value)
 * @method string lPop($key)
 * @method string rPop($key)
 * @method array blPop(array $keys, $timeout)
 * @method array brPop(array $keys, $timeout)
 * @method int lLen($key)
 * @method lSize($key)
 * @method lIndex($key, $index)
 * @method lGet($key, $index)
 * @method lSet($key, $index, $value)
 * @method array lRange($key, $start, $end)
 * @method lGetRange($key, $start, $end)
 * @method array lTrim($key, $start, $stop)
 * @method listTrim($key, $start, $stop)
 * @method int lRem($key, $value, $count)
 * @method lRemove($key, $value, $count)
 * @method int lInsert($key, $position, $pivot, $value)
 * @method int sAdd($key, $value1, $value2 = null, $valueN = null)
 * @method sAddArray($key, array $values)
 * @method int sRem($key, $member1, $member2 = null, $memberN = null)
 * @method sRemove($key, $member1, $member2 = null, $memberN = null)
 * @method bool sMove($srcKey, $dstKey, $member)
 * @method bool sIsMember($key, $value)
 * @method sContains($key, $value)
 * @method int sCard($key)
 * @method string sPop($key)
 * @method string|array sRandMember($key, $count = null)
 * @method array sInter($key1, $key2, $keyN = null)
 * @method int sInterStore($dstKey, $key1, $key2, $keyN = null)
 * @method array sUnion($key1, $key2, $keyN = null)
 * @method int sUnionStore($dstKey, $key1, $key2, $keyN = null)
 * @method array sDiff($key1, $key2, $keyN = null)
 * @method int sDiffStore($dstKey, $key1, $key2, $keyN = null)
 * @method array sMembers($key)
 * @method sGetMembers($key)
 * @method string getSet($key, $value)
 * @method string randomKey()
 * @method bool select($dbindex)
 * @method bool move($key, $dbindex)
 * @method bool rename($srcKey, $dstKey)
 * @method renameKey($srcKey, $dstKey)
 * @method bool renameNx($srcKey, $dstKey)
 * @method bool expire($key, $ttl)
 * @method bool pExpire($key, $ttl)
 * @method setTimeout($key, $ttl)
 * @method bool expireAt($key, $timestamp)
 * @method bool pExpireAt($key, $timestamp)
 * @method array keys($pattern)
 * @method getKeys($pattern)
 * @method int dbSize()
 * @method bool auth($password)
 * @method bool bgrewriteaof()
 * @method bool slaveof($host = '127.0.0.1', $port = 6379)
 * @method string object($string = '', $key = '')
 * @method bool save()
 * @method bool bgsave()
 * @method int lastSave()
 * @method int wait($numSlaves, $timeout)
 * @method int type($key)
 * @method int append($key, $value)
 * @method string getRange($key, $start, $end)
 * @method substr($key, $start, $end)
 * @method string setRange($key, $offset, $value)
 * @method int strlen($key)
 * @method int bitpos($key, $bit, $start = 0, $end = null)
 * @method int getBit($key, $offset)
 * @method int setBit($key, $offset, $value)
 * @method int bitCount($key)
 * @method int bitOp($operation, $retKey, ...$keys)
 * @method bool flushDB()
 * @method bool flushAll()
 * @method array sort($key, $option = null)
 * @method string info($option = null)
 * @method bool resetStat()
 * @method int ttl($key)
 * @method int pttl($key)
 * @method bool persist($key)
 * @method bool mset(array $array)
 * @method array mget(array $array)
 * @method int msetnx(array $array)
 * @method string rpoplpush($srcKey, $dstKey)
 * @method string brpoplpush($srcKey, $dstKey, $timeout)
 * @method int zAdd($key, $score1, $value1, $score2 = null, $value2 = null, $scoreN = null, $valueN = null)
 * @method array zRange($key, $start, $end, $withscores = null)
 * @method int zRem($key, $member1, $member2 = null, $memberN = null)
 * @method int zDelete($key, $member1, $member2 = null, $memberN = null)
 * @method array zRevRange($key, $start, $end, $withscore = null)
 * @method array zRangeByScore($key, $start, $end, array $options = [])
 * @method array zRevRangeByScore($key, $start, $end, array $options = [])
 * @method array zRangeByLex($key, $min, $max, $offset = null, $limit = null)
 * @method array zRevRangeByLex($key, $min, $max, $offset = null, $limit = null)
 * @method int zCount($key, $start, $end)
 * @method int zRemRangeByScore($key, $start, $end)
 * @method zDeleteRangeByScore($key, $start, $end)
 * @method int zRemRangeByRank($key, $start, $end)
 * @method zDeleteRangeByRank($key, $start, $end)
 * @method int zCard($key)
 * @method zSize($key)
 * @method float zScore($key, $member)
 * @method int zRank($key, $member)
 * @method int zRevRank($key, $member)
 * @method float zIncrBy($key, $value, $member)
 * @method int zUnion($Output, $ZSetKeys, array $Weights = null, $aggregateFunction = 'SUM')
 * @method int zInter($Output, $ZSetKeys, array $Weights = null, $aggregateFunction = 'SUM')
 * @method int|bool hSet($key, $hashKey, $value)
 * @method bool hSetNx($key, $hashKey, $value)
 * @method string hGet($key, $hashKey)
 * @method int hLen($key)
 * @method int|bool hDel($key, $hashKey1, $hashKey2 = null, $hashKeyN = null)
 * @method array hKeys($key)
 * @method array hVals($key)
 * @method array hGetAll($key)
 * @method bool hExists($key, $hashKey)
 * @method int hIncrBy($key, $hashKey, $value)
 * @method float hIncrByFloat($key, $field, $increment)
 * @method bool hMset($key, $hashKeys)
 * @method array hMGet($key, $hashKeys)
 * @method array config($operation, $key, $value)
 * @method mixed evaluate($script, $args = [], $numKeys = 0)
 * @method mixed evalSha($scriptSha, $args = [], $numKeys = 0)
 * @method evaluateSha($scriptSha, $args = [], $numKeys = 0)
 * @method mixed script($command, $script)
 * @method string|null getLastError()
 * @method bool clearLastError()
 * @method string dump($key)
 * @method bool restore($key, $ttl, $value)
 * @method bool migrate($host, $port, $key, $db, $timeout, $copy = false, $replace = false)
 * @method array time()
 * @method bool pfAdd($key, array $elements)
 * @method int pfCount($key)
 * @method bool pfMerge($destkey, array $sourcekeys)
 * @method mixed rawCommand($command, $arguments)
 * @method int getMode()
 */
interface ConnectionInterface
{

    /**
     * 连接
     * @return bool
     * @throws \RedisException
     */
    public function connect();

    /**
     * 关闭连接
     * @return bool
     */
    public function close();

    /**
     * 执行命令
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($command, $arguments);

    /**
     * 遍历key
     * @param $iterator
     * @param string $pattern
     * @param int $count
     * @return array|bool
     */
    public function scan(&$iterator, $pattern = '', $count = 0);

    /**
     * 遍历set key
     * @param $key
     * @param $iterator
     * @param string $pattern
     * @param int $count
     * @return array|bool
     */
    public function sScan($key, &$iterator, $pattern = '', $count = 0);

    /**
     * 遍历zset key
     * @param $key
     * @param $iterator
     * @param string $pattern
     * @param int $count
     * @return array|bool
     */
    public function zScan($key, &$iterator, $pattern = '', $count = 0);

    /**
     * 遍历hash key
     * @param $key
     * @param $iterator
     * @param string $pattern
     * @param int $count
     * @return array
     */
    public function hScan($key, &$iterator, $pattern = '', $count = 0);

    /**
     * 释放连接
     * @return bool
     */
    public function release();

    /**
     * 丢弃连接
     * @return bool
     */
    public function discard();

}
