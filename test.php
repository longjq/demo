<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-09
 * Time: 21:51
 */
class SayHello

{
			
    //todo û˼·�ˣ�д�����ݿ���ʶ��ѣ��߼�����ûд
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