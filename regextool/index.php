<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-02
 * Time: 16:39
 */

require_once 'regexTool.class.php';

//$email = "8739494@qq.com";
//
//$regex = new regextTool(1);
//$regex->setFixMode( 'U' );
//$rs = $regex->isEmail( $email );
//show($rs);

$regex = new regextTool();
if( !$regex->noEmpty($_POST['username']) ) exit('用户名必须输入');
if( !$regex->noEmpty($_POST['password']) ) exit('密码必须输入');
if( !$regex->isEmail($_POST['mobile']) ) exit('手机号不正确');


/**
 * debug show
 * @param  [type] $var [description]
 * @return [type]      [description]
 */
function show( $var = null, $isdump = false ) {
    $func = $isdump ? 'var_dump' : 'print_r';
    if ( empty( $var ) ) {
        echo 'null';
    } elseif ( is_array( $var ) || is_object( $var ) ) {
        echo '<pre>';
        $func( $var );
        echo '</pre>';
    } else {
        $func( $var );
    }
    echo '<hr>';



}