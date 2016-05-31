<?php
/**
 * Created by PhpStorm.
 * User: cbd
 * Date: 16/5/22
 * Time: 下午6:12
 */

//系统路径分隔符
define('DS', DIRECTORY_SEPARATOR);

//项目根目录
define('ROOT_PATH', dirname(__FILE__) . DS);

//Focus框架路径
define("FOCUS_PATH", ROOT_PATH . 'focus' . DS);
//app应用路径
define("APP_PATH", ROOT_PATH . 'app' . DS);


//加载框架启动文件
include FOCUS_PATH . DS . 'FocusCore.php';