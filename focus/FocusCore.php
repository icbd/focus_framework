<?php

/**
 * Created by PhpStorm.
 * User: cbd
 * Date: 16/5/22
 * Time: 上午9:31
 */
class FocusCore
{

    public static $FocusConfig = array();


    /**
     * include file by DFS
     *
     * @param $path
     */
    private static function include_all($path)
    {
        foreach (glob("{$path}*") as $per_sub) {
            if (is_dir($per_sub)) {
                self::include_all($per_sub . DS);
            } else {
                include_once $per_sub;
            }
        }
    }

    /**
     * 构造方法
     *
     * FocusCore constructor.
     */
    public function __construct()
    {
        //引入全局方法
        include_once 'FocusMethods.php';
        //引入路由器
        include_once 'FocusRouter.php';

        //引入用户自动加载目录下的所有(递归引入)
        $auto_include_folder = APP_PATH . 'auto_include' . DS;
        self::include_all($auto_include_folder);

        spl_autoload_register(array($this, 'autoload'));
    }

    /**
     * new Class,Class未定义时再自动加载
     *
     * @param $class_name
     */
    private function autoload($class_name)
    {
        if (($class_file = APP_PATH . 'controller' . DS . $class_name . '.php') && is_file($class_file)) {
            include_once $class_file;
        } elseif (($class_file = APP_PATH . 'model' . DS . $class_name . '.php') && is_file($class_file)) {
            include_once $class_file;
        }

    }

    public function run()
    {
        $router = new FocusRouter();
        $controllerObj = new $router->controller;
        $actionName = $router->action;
        $controllerObj->$actionName();
    }
}