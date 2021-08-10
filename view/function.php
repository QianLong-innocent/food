<?php

//	对于网站上的get，post操作由于做的非常频繁
//	因此，需要制作一个外部输入函数

/*
    method 用于保存是get还是post
    name 变量名
    type 类型的字符串
    default 如果不存在则使用默认值
	
*/
function page_sql($page, $size)
{
    return ($page - 1) * $size . ',' . $size;
}
function page_html($url, $total, $page, $size)
{
    // 计算总页数
    $maxpage = max(ceil($total / $size), 1);
    if ($page == 1) {
        $first = '<span>首页</span>';
        $prev = '<span>上一页</span>';
    } else {
        $first = "<a href=\"{$url}1\">首页</a>";
        $prev = '<a href="' . $url . ($page - 1) . '">上一页</a>';
    }
    if ($page == $maxpage) {
        $next = '<span>下一页</span>';
        $last = '<span>尾页</span>';
    } else {
        $next = '<a href="' . $url . ($page + 1) . '">下一页</a>';
        $last = "<a href=\"{$url}{$maxpage}\">尾页</a>";
    }
    // 组合最终样式
    return "<p>当前位于：$page/$maxpage</p>$first $prev $next $last";
}
function input($method,$name,$type = 's',$default = ''){
	
	switch($method){
		case 'get':$method = $_GET ;break;
		case 'post':$method = $_POST ;break;
	}
	
	//	此函数用于查看是否为空
	$data = isset($method[$name]) ? $method[$name] : $default;
	
	//	s 字符串；d 整型；a 数组；b 布尔型；f 浮点型
	//  对数据进行过滤
	switch($type){
		
		case 's' : return is_string($data) ? $data : $default;
		case 'd' : return (int)$data;
		case 'b' : return (bool)$data;
		case 'f' : return (float)$data;
		case 'a' : return is_array($data) ? $data : [];
		default : 
		    trigger_error('不存在的过滤类型“' . $type . '”');
	}
}

//	对时间戳的一个格式化，使得更具有观看性
function format_date($time){
	
	$diff = time() - $time;
	$format = [86400 => '天' , 3600 => '小时' , 60 => '分钟' , 1 => '秒'];
	foreach ($format as $k => $v){
		$result = floor($diff / $k);
		if($result){
			return $result . $v;
		}
	}
	return '0.5秒';
}

function die1(){
	
	static $a = 1;
	if($a == 1){
		$_SESSION['user'] = '';
		$a++;
	}
	
}
?>