<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-07
 * Time: 22:16
 */

define('BASE_DIR', __DIR__.'/');


require BASE_DIR.'IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

//php��������ħ������
//$obj = new IMooc\Object();

//$obj->title = 'hello';
//echo $obj->title;

//echo $obj->show('hello', 123);

//IMooc\Object::show('hello', 123);

//echo $obj;

//echo $obj("invoke");


//����ģʽ�ͻ��˴���
$db = IMooc\Factory::CreateDataBase();
//echo $db->name;
////��ʽ��������
//$db->where()->limit()->order();
//
////����ģʽ
//$db = IMooc\DataBase::getInstance();
//$db = IMooc\DataBase::getInstance();
//$db = IMooc\DataBase::getInstance();
//$db = IMooc\DataBase::getInstance();
//$db = IMooc\DataBase::getInstance();
//$db = IMooc\DataBase::getInstance();
//$db = IMooc\DataBase::getInstance();
//$db = IMooc\DataBase::getInstance();
//echo $db->name;

//ע����ģʽ
$db = \IMooc\Register::get('db1');


//
//
//spl_autoload_register('autoload1');
//spl_autoload_register('autoload2');
//
//
//test1::test();
//test2::test();
//
//function autoload1($classname){
//    require __DIR__.'/'.$classname.'.php';
//}
//function autoload2($classname){
//    require __DIR__.'/'.$classname.'.php';
//}


