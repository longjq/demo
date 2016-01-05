<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-04
 * Time: 22:32
 */
//定义输出编码
header('Content-type:text/html; charset=utf-8');
//定义文件根目录硬路径
define('ROOT_PATH', dirname(__FILE__));
//根据根目录定义模板路径
define('TPL_DIR', ROOT_PATH.'/templates/');
//根据根目录定义编译路径
define('TPL_C_DIR', ROOT_PATH.'/templates_c/');
//根据根目录定义缓存
define('CACHE', ROOT_PATH.'/cache/');
//引入模板类
require ROOT_PATH.'/includes/Templates.class.php';

//new出模板类
$_tpl = new Templates();


//声明变量
$_name = '龙建清123123';
//注入变量
$_tpl->assign('name',$_name);
$_tpl->assign('title','this is new world!');
$_tpl->assign('age',33333);
$_tpl->assign('gender',1<2);
$_tpl->assign('man','hello');
$arr = ['name'=>'longjq', 'age'=>23, 'gender'=>'man'];
$_tpl->assign('arr',$arr);
//模板加载
$_tpl->display('index.tpl');