<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-09
 * Time: 21:51
 */
class SayHello

<<<<<<< HEAD
{   

=======
{
			
>>>>>>> a18da2202a755628950c562666475499dabb5e96
    //todo 没思路了，写了数据库访问而已，逻辑代码没写
    public function printHello()

    {

        echo 'Hello';

        return 'Hello';

    }

}


class testhello extends PHPUnit_Framework_TestCase
{
    public function testHello(){
        $hi = new SayHello();
        $this->assertTrue($hi->printHello() == 'Hello');

    }
}