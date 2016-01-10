<?php

require_once 'FirePHPCore/fb.php';

$list = [
    'name'   => 'longjq',
    'age'    => 26,
    'gender' => 'man',
    'addr'   => 'hnjs'
];

$list['name'] = null;

FB::info($list, 'log-打断点，显示list数组便利');

print_r($list);
echo '111111111111111111111111111';
//...
//..
//....

