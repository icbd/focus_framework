<?php

/**
 * Created by PhpStorm.
 * User: cbd
 * Date: 16/5/22
 * Time: 下午10:44
 */
class Hello
{
    public function index()
    {
        require_once FOCUS_PATH . 'Twig/Autoloader.php';
        Twig_Autoloader::register();

        $html = file_get_contents(APP_PATH . 'view/index.html');

        if ($html) {
            $loader = new Twig_Loader_Array(array(
                'index' => $html,
            ));
            $twig = new Twig_Environment($loader);
        }


        $helloDao = new HelloDao();
        $name = $helloDao->redis->get('name');


        echo $twig->render('index', array('name' => $name));
    }
}