<?php



// //preg_match( $pattern, $subject, [array & $matches] )

// //preg_math_all( $pattern, $subject, array & $matches )


// $pattern = '/[0-9]/';
// $subject = 'sadyu1jsgd12941sday';

// $m1 = $m2 = [];

// $m1_rs = preg_match( $pattern, $subject, $m1 );
// $m2_rs2 = preg_match_all( $pattern, $subject, $m2 );

// show($m1);

// show($m2);

// echo $m1_rs.'||'.$m2_rs2;

//===================================================================
// preg_replace(), preg_filter()
// $pattern = '/[0-9]/';
// $subject = 'asdkj1213ms81234b198';
// $replacement = 'miaov';
//
// $str1 = preg_replace( $pattern, $replacement, $subject );
// $str2= preg_filter( $pattern, $replacement, $subject );
//
// show($str1);
// show($str2);
//===================================================================



//实例开始







$subject = '尊敬的15889686009客户，您当月个人流量套餐内流量共3072M，截至28日11时21分，已用861.11M，剩余2210.89M，其中：国内通用流量余2210.89M，更多流量详情请点击 gd.10086.cn/app24 下载“广东移动10086”APP 查询';
$pattern = '/流量共(\d+)M.*已用(\d+\.\d+)M.*剩余(\d+\.\d+)M/';
echo preg_match_all($pattern, $subject, $matches);

 print_r($matches);

// $all = preg_replace($pattern, '$1', $subject);
// echo $all;


































/**
 * debug show
 * @param  [type] $var [description]
 * @return [type]      [description]
 */
function show( $var = null ) {
	if( php_sapi_name() == 'cli' ) {
		if ( empty($var) ) {
			echo 'null';
		} elseif ( is_array( $var ) || is_object( $var ) ) {
			echo '<pre>';
			print_r( $var );
			echo '</pre>';
		} else {
			echo $var;
		}
		echo '\r';
	} else {
		if ( empty($var) ) {
			echo 'null';
		} elseif ( is_array( $var ) || is_object( $var ) ) {
			echo '<pre>';
			print_r( $var );
			echo '</pre>';
		} else {
			echo $var;
		}
		echo '<hr>';
	}



}