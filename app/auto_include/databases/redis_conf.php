<?php
/**
 * Created by PhpStorm.
 * User: cbd
 * Date: 16/5/31
 * Time: 下午2:13
 */

//本机Redis
config(
    'redis_local',
    array(
        'host' => '127.0.0.1',
        'port' => 6379,
        'db' => 0,
    )
);