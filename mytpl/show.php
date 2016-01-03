<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-03
 * Time: 1:55
 */

require_once 'template.class.php';

$baseDir = str_replace('\\', '/', dirname(__FILE__));

$temp = new template($baseDir.'/source/', $baseDir.'/complied/');

$temp->assign('pagetitle', 'fuck world!!!');
$temp->assign('test', 'fuck world test!!!!!!!!!!!!!!!!!!!!');
$temp->getSourceTemplate('index');
$temp->comileTemplate();
$temp->display();
