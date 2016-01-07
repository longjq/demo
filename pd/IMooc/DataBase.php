<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-07
 * Time: 23:23
 */
namespace IMooc;

class DataBase
{
    protected static $db;

    private function __construct()
    {

    }

    static function getInstance()
    {
        if(self::$db)
        {
            return self::$db;
        }else{
            self::$db = new self();
            return self::$db;
        }

    }

    public $name = 'hello';

    public function where()
    {
        return $this;
    }

    public function order()
    {
        return $this;
    }

    public function limit()
    {
        return $this;
    }
}