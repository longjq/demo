<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-04
 * Time: 22:38
 */
class Templates
{
    //存变量
    private $_vars = [];

    /**
     * 构造方法
     */
    public function __construct(){

        //构造方法验证各个目录是否存在
        if(!is_dir(TPL_DIR) || !is_dir(TPL_C_DIR) || !is_dir(CACHE)){
            exit('ERROR：模板目录或编译目录或缓存目录不存在');
        }

    }

    /**
     * 注入变量
     * @param $_var 变量名
     * @param $_value 值
     */
    public function assign($_var, $_value){
        if(isset($_var) && !empty($_var)){
            $this->_vars[$_var] = $_value;
        }else{
            exit('ERROR：请设置变量');
        }
    }


    /**
     * 模板展现
     * @param $_file 文件路径
     */
    public function display($_file){
        //定义模板目录下的文件地址
        $_tplFile = TPL_DIR.$_file;
        //判断模板文件是否存在
        if(!file_exists($_tplFile)){
            exit('ERROR：模板文件不存在，'.$_tplFile);
        }

        //定义编译目录下的文件地址
        $_parFile = TPL_C_DIR.md5($_file).$_file.'.php';

        //验证是否已经生成编译文件或者模板文件修改过就生成编译文件
        if(!file_exists($_parFile) || filemtime($_parFile) < filemtime($_tplFile)){
            //引入模板解析类
            require ROOT_PATH.'/includes/Parser.class.php';
            //new出模板解析类，传入模板目录地址
            $_parser = new Parser($_tplFile);
            //根据编译文件路径，编译文件
            $_parser->compile($_parFile);
        }

        //载入编译文件
        include $_parFile;
    }
}