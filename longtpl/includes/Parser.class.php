<?php

/**
 * 模板类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-01-04
 * Time: 22:38
 */
class Parser
{
    private $_tpl;

    public function __construct($_tplFile){
        if(!$this->_tpl = file_get_contents($_tplFile)){
            exit('ERROR：模板文件读取错误');
        }
    }

    private function parIf(){
        $patternIf = '/\{if\s+\$([\w]+)\}/';
        $patternEndIf = '/\{\/if\}/';
        if(preg_match($patternIf, $this->_tpl)){
            if(preg_match($patternEndIf, $this->_tpl)){
                $this->_tpl = preg_replace($patternIf,"<?php if (\$this->_vars['$1']) { ?>", $this->_tpl);
                $this->_tpl = preg_replace($patternEndIf,"<?php } ?>", $this->_tpl);
            }else{
                exit('ERROR：if语句没有关闭');
            }
        }
    }

    //解析普通变量
    public function parVal(){
        $_pattern = '/\{\$([\w]+)\}/';
        if(preg_match('/\{\$([\w]+)\}/',$this->_tpl)){
            $this->_tpl = preg_replace($_pattern,"<?php echo \$this->_vars['$1']; ?>", $this->_tpl);
        }
    }

    public function compile($_parFile){
        //解析模板内容
        $this->parIf();
        $this->parVal();
        //生成编译文件
        if(!file_put_contents($_parFile, $this->_tpl)){
            exit('ERROR：编译文件生成出错');
        }
    }
}