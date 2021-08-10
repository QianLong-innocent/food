<?php
  
//	链接数据库
$link = mysqli_connect('localhost','root','12345678');

if(!$link){
	exit('链接数据库失败：' . mysqli_connect_error());
}
mysqli_set_charset($link,'utf8');


?>