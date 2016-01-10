<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-10
 * Time: 23:40
 */

class SessionStorage{
    protected $name = 'longjq';
    protected $age = 26;

    public function fuck($say){
        return "name:$this->name,age:$this->age,say:$say";
    }
}

require 'Pimple.php';

$container = new Pimple();


// define some parameters
$container['cookie_name'] = 'SESSION_ID';
$container['session_storage_class'] = 'SessionStorage';

// define some services
$container['session_storage'] = function ($c) {
    return new $c['session_storage_class']($c['cookie_name']);
};

//$container['session'] = function ($c) {
//    return new Session($c['session_storage']);
//};

// get the session object
$session_storage = $container['session_storage'];
echo $session_storage->fuck('hhhhhhhhhhhhhhhhhh');
