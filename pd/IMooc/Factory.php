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
        //���õ���ģʽ
        $db = DataBase::getInstance();
        //����ע����ģʽ
        Register::set('db1',$db);

        return $db;
    }
}