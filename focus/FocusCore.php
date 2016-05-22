<?php

/**
 * Created by PhpStorm.
 * User: cbd
 * Date: 16/5/22
 * Time: 上午9:31
 */
class FocusCore
{

    public static $FocusConfig;

    public function __construct()
    {
        //引入全局方法
        include 'FocusMethods.php';

        $config = array();
        //引入用户自动加载目录下的所有
        $auto_include = APP_PATH . DS . 'auto_include/';
        foreach (glob("{$auto_include}*.php") as $per2include) {
            include $per2include;
        }
        self::$FocusConfig = $config;

        spl_autoload_register(array($this, 'autoload'));
    }

    /**
     * new Class,Class未定义时再自动加载
     *
     * @param $class_name
     */
    private function autoload($class_name)
    {
        if (($class_file = FOCUS_PATH . DS . $class_name . '.php') && is_file($class_file)) {
            include_once $class_file;
        }

        if (($class_file = APP_PATH . DS . 'controller' . DS . $class_name . '.php') && is_file($class_file)) {
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