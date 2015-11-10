<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}

.selectbox{width:500px;height:220px;margin:40px auto 0 auto;}
.selectbox div{float:left;}
.selectbox .select-bar{padding:0 20px;}
.selectbox .select-bar select{width:150px;height:200px;border:4px #A0A0A4 outset;padding:4px;}
.selectbox .btn{width:50px; height:30px; margin-top:10px; cursor:pointer;}
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    
    //移到右边
    $('#add').click(function(){
        //获取选中的选项，删除并追加给对方
        $('#select1 option:selected').appendTo('#select2'); 
    });
    
    //移到左边
    $('#remove').click(function(){
        $('#select2 option:selected').appendTo('#select1');
    });
    
    //全部移到右边
    $('#add_all').click(function(){
        //获取全部的选项,删除并追加给对方
        $('#select1 option').appendTo('#select2');
    });
    
    //全部移到左边
    $('#remove_all').click(function(){
        $('#select2 option').appendTo('#select1');
    });
    
    //双击选项
    $('#select1').dblclick(function(){ //绑定双击事件
        //获取全部的选项,删除并追加给对方
        $("option:selected",this).appendTo('#select2'); //追加给对方
    });
    
    //双击选项
    $('#select2').dblclick(function(){
        $("option:selected",this).appendTo('#select1');
    });
    
});
</script>

</head>
<body>

<div id="search">
	<form action="./" method="post">
	<select name="cat_id">
		<option value="0">请选择</option>
		<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["Count"]) > "1"): ?><option value="<?php echo ($vo["cat_id"]); ?>"><?php echo (str_repeat("&nbsp;",$vo["Count"])); ?> <?php echo ($vo["cat_name"]); ?></option>
		<?php else: ?>
		<option value="<?php echo ($vo["cat_id"]); ?>"><?php echo ($vo["cat_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</select>
	
	<select name="brand_id">
		<option value="0">请选择</option>
		<?php if(is_array($brand)): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["brand_id"]); ?>"><?php echo ($vo["brand_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	</select>
	
	<input type="text" name="keyword" />
	
	<input type="submit" name="send" value="提交" />
	</form>
</div>

<div class="selectbox">

    <div class="select-bar">
        <select multiple="multiple" id="select1">
            <option value="超级管理员">超级管理员</option>
            <option value="普通管理员">普通管理员</option>
            <option value="信息发布员">信息发布员</option>
            <option value="财务管理员">财务管理员</option>
            <option value="产品管理员">产品管理员</option>
            <option value="资源管理员">资源管理员</option>
            <option value="管理员">管理员</option>
        </select>
    </div>
    
    <div class="btn-bar">
        <span id="add"><input type="button" class="btn" value=">"/></span><br />
        <span id="add_all"><input type="button" class="btn" value=">>"/></span><br />
        <span id="remove"><input type="button" class="btn" value="<"/></span><br />
        <span id="remove_all"><input type="button" class="btn" value="<<"/></span>
    </div>
    <form action="./data.php" method="post">
    <div class="select-bar"><select multiple="multiple" name="s2[]" id="select2"></select></div>
    <input type="submit" value="提交">
    </form>
</div>

</body>
</html>