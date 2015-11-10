<?php 
$image = imagecreatetruecolor(100,100);  
          
        //设定颜色以后备用，从变量名中就可看出是什么颜色了  
        $white = imagecolorallocate($image,0xFF,0xFF,0xFF);  
        $gray  = imagecolorallocate($image,0xC0,0xC0,0xC0);  
        $darkgray = imagecolorallocate($image,0x90,0x90,0x90);  
        $navy = imagecolorallocate($image,0x00,0x00,0x80);  
        $darknavy = imagecolorallocate($image,0x00,0x00,0x50);  
        $red = imagecolorallocate($image,0xFF,0x00,0x00);  
        $darkred = imagecolorallocate($image,0x90,0x00,0x00);  
          
        //制作3D效果  
        for ($i = 60;$i > 50;$i--){  
                imagefilledarc($image,50,$i,100,50,0,45,$darknavy,IMG_ARC_PIE);    //我要在$image上画一个圆心（50,$i）长100宽50，0（3点钟位置）——45度，颜色为darknavy的椭圆，最后一个参数不懂  
                imagefilledarc($image,50,$i,100,50,45,75,$darkgray,IMG_ARC_PIE);  
                imagefilledarc($image,50,$i,100,50,75,360,$darkred,IMG_ARC_PIE);  
        }    //此处的for循环是将柄状图的高体现出来，百分比的体现和下面一样  
        imagefilledarc($image,50,50,100,50,0,45,$navy,IMG_ARC_PIE);  
        imagefilledarc($image,50,50,100,50,45,75,$gray,IMG_ARC_PIE);  
        imagefilledarc($image,50,50,100,50,75,360,$red,IMG_ARC_PIE);  
          
        //输出图像  
        header("Content-type: image/png");  
        imagepng($image);  
          
        imagedestroy($image);  