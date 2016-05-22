<?php
/**
 * Created by PhpStorm.
 * User: cbd
 * Date: 16/5/22
 * Time: 上午9:34
 */

/**
 * 获取/设置 全局配置
 *
 * @param $confName
 * @param null $confValue
 * @return null
 */
function config($confName = null, $confValue = null)
{
    if (is_null($confName)) {
        return FocusCore::$FocusConfig;
    } else {
        if (is_null($confValue)) {
            return FocusCore::$FocusConfig[$confName];
        } else {
            FocusCore::$FocusConfig[$confName] = $confValue;
            return null;
        }
    }
}


/**
 * 简单调试用的断点
 *
 * @param string $var
 */
function break_point($var)
{
    echo "\n<br>STOP>>><br>\n";
    echo json_encode($var);
    echo "\n<br>STOP<<<<br>\n";
    
    die();
}

/**
 * 获取变量的变量名字面值
 * 如果存在多变量间的引用,返回最先定义的变量名
 * 参考: http://www.laruence.com/2010/12/08/1716.html
 *
 * @param $var
 * @param null $scope
 * @return mixed
 */
function get_variable_name(&$var, $scope = NULL)
{
    if (NULL == $scope) {
        $scope = $GLOBALS;
    }
    $tmp = $var;
    $var = "tmp_exists_" . mt_rand();
    $name = array_search($var, $scope, TRUE);
    $var = $tmp;

    return $name;
}