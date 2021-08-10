


<?php //注册信息验证
	session_start();
	header("Content-Type:text/html;charset=utf-8");
	//	链接数据库
	$link = mysqli_connect('localhost','root','12345678','food');

	if(!$link){
		exit('链接数据库失败：' . mysqli_connect_error());
	}
	mysqli_set_charset($link,'utf8');
	

	@$pass=$_POST['pass'];
	$sql = "UPDATE user SET password=" . $pass . " WHERE name = '" . $_SESSION['user'] . "'" ;
	if(mysqli_query($link,$sql)){
		echo "<script>alert('修改成功！请重新登录');</script>";
		unset($_SESSION['user']);
		header("location:index.php");
	}else{
		exit("sql[$sql]执行失败:". mysqli_error($link));
	}
?>



