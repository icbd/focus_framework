<?php
/**
 * Created by PhpStorm.
 * User: cbd
 * Date: 16/5/15
 * Time: 上午11:10
 */
error_reporting(E_ERROR);

include "Model.php";

date_default_timezone_set('PRC');
$now = date("Y-m-d H:i");

$keys = $redis->keys('*');

include "View.html.php";
