<?php
/**
 * Created by PhpStorm.
 * User: cbd
 * Date: 16/5/15
 * Time: 上午11:10
 */
include "conf/redis-conf.php";

$redis = new Redis();
$redis->connect($config['redis_local']['host'], $config['redis_local']['post'], 3);
$redis->select($config['redis_local']['db']);



