<?php

$method = $_SERVER["REQUEST_METHOD"];

eval("\$method();");

function add(){
    echo 'add';
    echo $method;
}

function post(){
    echo 'post';
    echo $method;
}

function put(){
    echo 'put';
    echo $method;
}

function delete(){
    echo 'delete';
    echo $method;
}