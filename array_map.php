<?php 

$arr = ['name'=>'longjq','age'=>26,'gender'=>'man'];

$a = array_map(function($v){
    $v.'===';
}, $arr);
print_r($a);
 ?>