<?php
try 
{
    //连接数据库错误代码，这里有可能会出错
    //比如我电脑mysql的密码是root，不是123456，所有会报错
    if (@mysql_connect('localhost','root','123456')){
        //连接成功时的提示
        echo 'success!';
    }else{
        //自己代码new一个错误类出来，里面传入一些参数，例如这里传入错误信息
        throw new Exception('ERROR:这里是我自定义的错误哦，原有的php错误提示被我改成了这样了<br>'.mysql_error());
    }
 
} catch (Exception $e) {
  //这里是出错时，该怎么出来的代码块
  //echo一下错误代码，输出的内容就是我在上面传入的内容
  //后面在加上xxxxxxxxx字符串，测试
  echo $e->getMessage().'xxxxxxxxxxxxxxxxxx';
}
?>