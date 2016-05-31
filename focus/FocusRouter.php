<?php

/**
 * Created by PhpStorm.
 * User: cbd
 * Date: 16/5/22
 * Time: 下午9:48
 */
class FocusRouter
{
    public $controller;
    public $action;

    public function __construct()
    {
        $this->url = parse_url($_SERVER['REQUEST_URI']);

        $path = explode('/', $this->url['path']);
        if ('index.php' == $path[1]) {
            $path = array_slice($path, 2);
        } else {
            $path = array_slice($path, 1);
        }

        $count_path = count($path);
        if (!empty($path[0]) and !empty($path[1])) {
            $this->controller = $path[0];
            $this->action = $path[1];
        } elseif (!empty($path[0]) and empty($path[1])) {
            //action缺失, 默认index
            $this->controller = $path[0];
            $this->action = 'index';
        } elseif (empty($path[0]) and empty($path[0])) {
            //controller action都缺失, 使用config中的设定
            $this->controller = config('ROOT_URL')['controller'];
            $this->action = config('ROOT_URL')['action'];
        }
    }


    /* Nginx + php-fpm, VHost config

server {

server_name junior.mbp;
root /Users/cbd/vm/learn/app_framework/junior_framework;
access_log /Users/cbd/vm/learn/app_framework/junior_framework/access.log;


listen 80;
index index.php;

location / {
rewrite ".+" "/index.php" last;
}

location ~ \.php$ {
fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include        fastcgi_params;
        }
    location ~ .*\.(map|html|woff|ttf|ico|css|js|gif|jpg|jpeg|png|bmp|swf)$ {
expires 90d;
    }
}

    */
}