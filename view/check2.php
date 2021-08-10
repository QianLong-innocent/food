<?php //注册信息验证

	//	链接数据库
	$link = mysqli_connect('localhost','root','12345678','food');

	if(!$link){
		exit('链接数据库失败：' . mysqli_connect_error());
	}
	mysqli_set_charset($link,'utf8');
	
	@$user=$_POST['user'];
	@$pass=$_POST['pass'];
	@$phone=$_POST['phone'];
	@$email=$_POST['email'];
	$sql = "insert into user(name,password,phone,email,Ulogtimes) values('$user','$pass','$phone','$email',0)";
	if(mysqli_query($link,$sql)){
		echo "<script>alert('注册成功！');history.go(-2);</script>";
		
	}
	echo "<script>alert('注册失败！该手机号已被注册！'); history.go(-1);</script>";
?>



