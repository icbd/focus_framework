<?php

/**
 * Created by PhpStorm.
 * User: cbd
 * Date: 16/5/22
 * Time: 下午10:44
 */
class Hello
{
    public function hi()
    {
        $hello = new HelloDao();
        $name = $hello->redis->get('name');

        include APP_PATH . 'view/Hello.php';
    }
}