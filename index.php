<?php
       
//定义一个抽象的读写类www
abstract class ParamHandler {
    protected $sourceFile;
    protected $params = [];
    
    function __construct( $source ) {
        $this->sourceFile = $source;
    }

    function addParams( $key, $val ) {
        $this->params[$key] = $val;
    }

    function getAllParams() {
        return $this->params;
    }

    //该处验证传入的文件类型，然后返回相应操作的对象
    static function getInstance( $filename ) { 
        if ( preg_match("/\.xml$/i", $filename) ) {
            return new XmlParseHandler( $filename );
        }
        return new TextParseHandler( $filename );
    }

    abstract function write();
    abstract function read();
}

//定义具体xml的实现子类
class XmlParseHandler extends ParamHandler {
    function write() {
        //实现xml的写方法
    }

    function read() {
        //实现xml的读方法    
    }

}

$test =

function readParams( $sourceFile ) {
    $params = [];
    if (preg_match( "/\.xml$/i", $sourceFile )) {
        // 执行xml方式的读取文件配置方法
    } else {
        // 执行txt方式的读取文件配置方法
    }
    return $params;
}

function writeParams( $params, $sourceFile ) {
    if ( preg_match( "/\.txt$/i", $sourceFile )) {
        // 执行写xml的写文件配置方法
    } else {
        // 执行写txt的写文件配置方法
    }
}

//客户端调用代码
$file = './param.txt';
$arr['k1'] = 'v1';
$arr['k2'] = 'v2';
$arr['k3'] = 'v3';
writeParams( $arr, $file );     // 将数组写入指定文件中
$output = readParams( $file );  //从文件读取数组
print_r($output);