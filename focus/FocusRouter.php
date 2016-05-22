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
        $url = explode('/', $_SERVER['REQUEST_URI']);
        if ('index.php' == $url[1]) {
            $this->controller = $url[2];
            $this->action = $url[3];
        } else {
            $this->controller = $url[1];
            $this->action = $url[2];
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