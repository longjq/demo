<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-04
 * Time: 22:32
 */
header('Content-type:text/html; charset=utf-8');

define('ROOT_PATH', dirname(__FILE__));

define('TPL_DIR', ROOT_PATH.'/templates/');

define('TPL_C_DIR', ROOT_PATH.'/templates_c/');

define('CACHE', ROOT_PATH.'/cache/');

require ROOT_PATH.'/includes/Templates.class.php';

$_tpl = new Templates();


//声明变量
$_name = '龙建清123123';
//注入变量
$_tpl->assign('name',$_name);
$_tpl->assign('title','this is new world!');
$_tpl->assign('age',33333);
$_tpl->assign('gender',11<22);
//模板加载
$_tpl->display('index.tpl');