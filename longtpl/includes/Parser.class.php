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

    /**
     * 读取模板内容字段
     * @param $_tplFile
     */
    public function __construct($_tplFile){
        if(!$this->_tpl = file_get_contents($_tplFile)){
            exit('ERROR：模板文件读取错误');
        }
    }

    /**
     * if解析
     */
    private function parIf(){
        $patternIf = '/\{if\s+\$([\w]+)\}/';
        $patternEndIf = '/\{\/if\}/';
        $patternElse = '/\{else\}/';
        if(preg_match($patternIf, $this->_tpl)){
            if(preg_match($patternEndIf, $this->_tpl)){
                $this->_tpl = preg_replace($patternIf,"<?php if (\$this->_vars['$1']) { ?>", $this->_tpl);
                $this->_tpl = preg_replace($patternEndIf,"<?php } ?>", $this->_tpl);

                if(preg_match($patternElse, $this->_tpl)){
                    $this->_tpl = preg_replace($patternElse,"<?php } else { ?>", $this->_tpl);
                }

            }else{
                exit('ERROR：if语句没有关闭');
            }
        }
    }

    /**
     * 普通变量解析
     */
    public function parVal(){
        $_pattern = '/\{\$([\w]+)\}/';
        if(preg_match('/\{\$([\w]+)\}/',$this->_tpl)){
            $this->_tpl = preg_replace($_pattern,"<?php echo \$this->_vars['$1']; ?>", $this->_tpl);
        }
    }

    public function parCommon(){
        $_pattern = '/\{#\}(.*)\{#\}/';
        if(preg_match($_pattern, $this->_tpl)){
            $this->_tpl = preg_replace($_pattern, "<?php /*$1*/ ?>", $this->_tpl);
        }
    }

    public function parForeach(){
        $_patternForeach = '/\{foreach \$([\w]+)\(([\w]+),([\w]+)\)\}/';
        $_patternEndForeach = '/\{\/foreach\}/';
        if(preg_match($_patternForeach, $this->_tpl)){
            if(preg_match($_patternEndForeach, $this->_tpl)){
                $this->_tpl = preg_replace($_patternForeach, "<?php foreach(\$this->_vars['$1'] as \$$2=>\$$3): ?>", $this->_tpl);
                $this->_tpl = preg_replace($_patternEndForeach, "<?php endforeach; ?>", $this->_tpl);

                if(preg_match('/\{@([\w]+)\}/', $this->_tpl)){
                    $this->_tpl = preg_replace('/\{@([\w]+)\}/', "<?php echo \$$1; ?>", $this->_tpl);
                }
            }else{
                exit('ERROR：foreach语句没有关闭');
            }
        }
    }

    public function parInclude(){
        $_patternInclude = '/\{include\s+file=\"([\w\.\-]+)\"\}/';
        if(preg_match($_patternInclude, $this->_tpl, $_file)){
            if(!file_exists($_file[1]) || empty($_file)){
                exit('ERROR：引入文件出错，文件不存在');
            }
            $this->_tpl = preg_replace($_patternInclude, "<?php include '$1'; ?>", $this->_tpl);
        }
    }

    /**
     * 编译成php文件
     * @param $_parFile 编译文件路径
     */
    public function compile($_parFile){
        //解析模板内容
        $this->parIf();
        $this->parVal();
        $this->parCommon();
        $this->parForeach();
        $this->parInclude();
        //生成编译文件
        if(!file_put_contents($_parFile, $this->_tpl)){
            exit('ERROR：编译文件生成出错');
        }
    }
}