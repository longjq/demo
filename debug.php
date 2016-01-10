<?php

$status = 'fuck';
$rs = '';
switch(true){
    case $status == 'hello' :
        $rs = 'this status is hello';
        break;
    case $status == 'hello2':
        $rs = 'this is hello2';
        break;
    case $status == 'fuck':
        $rs = '$this is fuck';
        break;
    default:
        $rs = 'sorry, no match!';
        break;
}

echo $rs;