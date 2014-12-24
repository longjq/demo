<?php

class person{
    private $name;
    private $age;
        //__get()方法用来获取私有属性 
    public function __get($property_name) 
    { 
        echo "在直接获取私有属性值的时候，自动调用了这个__get()方法<br>"; 
        if(isset($this->$property_name)) 
        { 
            return($this->$property_name); 
        } 
        else 
        { 
            return(NULL); 
        } 
    } 

    //__set()方法用来设置私有属性 
    public function __set($property_name, $value) 
    { 
        echo "在直接设置私有属性值的时候，自动调用了这个__set()方法为私有属性赋值<br>"; 
        $this->$property_name = $value; 
    } 

}


$p = new person();
$p->name = 'lee';
echo $p->name;