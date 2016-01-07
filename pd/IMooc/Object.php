<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-07
 * Time: 22:30
 */
namespace IMooc;

class Object
{
    protected $arr = [];

    function __set($key, $val){
        $this->arr[$key] = $val;
    }

    function __get($key){
        return $this->arr[$key];
    }

    function __call($func, $params){
        var_dump($func,$params);
        return "magic method";
    }

    static function __callStatic($func, $params){
        var_dump($func,$params);
        return "magic method";
    }

    function __toString(){
        return __CLASS__;
    }

    function __invoke($params)
    {
        var_dump($params);
        return __METHOD__;
    }

}