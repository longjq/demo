<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-07
 * Time: 22:33
 */
namespace IMooc;

class Loader
{
    public static function autoload($classname)
    {
        require BASE_DIR.str_replace('\\','/', $classname).'.php';
    }
}