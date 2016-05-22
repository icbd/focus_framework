<?php

/**
 * Created by PhpStorm.
 * User: cbd
 * Date: 16/5/22
 * Time: 下午11:29
 */
class HelloDao
{
    public $redis;

    public function __construct()
    {
        $this->redis = new Redis();
        $this->redis->connect(config('redis_local')['host'], config('redis_local')['port']);
        $this->redis->select(config('redis_local')['db']);
    }
}