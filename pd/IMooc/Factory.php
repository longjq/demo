<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-07
 * Time: 23:24
 */
namespace IMooc;

class Factory
{
    static function CreateDataBase(){
        //调用单例模式
        $db = DataBase::getInstance();
        //调用注册树模式
        Register::set('db1',$db);

        return $db;
    }
}