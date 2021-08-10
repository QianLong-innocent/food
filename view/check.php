<?php  //登陆信息验证

	//	链接数据库
	$link = mysqli_connect('localhost','root','12345678','food');

	if(!$link){
		exit('链接数据库失败：' . mysqli_connect_error());
	}
	mysqli_set_charset($link,'utf8');

	session_start();
	if($_SESSION['authcode'] != $_POST['codeNum']){
		echo"<script>alert('验证码错误，登陆失败!');history.go(-1);</script>";
	}else{
		
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		
		$check_user="select * from user where phone='$user' and password='$pass'";
		$result_user=mysqli_query($link,$check_user);
		$row_user=mysqli_fetch_array($result_user,MYSQLI_NUM);

		if(!is_null($row_user))
		{
			$check_logintimes="select * from user where phone='$user' and Ulogtimes <= 5" ;
			$result_logintimes=mysqli_query($link,$check_logintimes);
			$row_logintimes=mysqli_fetch_array($result_logintimes,MYSQLI_NUM);
			
			if(!is_null($row_logintimes)){
				$restore="update user set Ulogtimes=0 where phone= '$user'";
				//登陆错误次数归零
				@$result = mysqli_query($link,$restore);
				$name="select name from user where phone='$user'" ;
				$name2=mysqli_query($link,$name);
				$name3=mysqli_fetch_array($name2);
				$_SESSION['user'] = $name3['name'];
				echo "<script>alert('登录成功！'); </script>";
				header("location:../index.php");
			}
			else {
				echo "<script>alert('输入密码错误次数过多，已禁止登陆!');history.back();</script>";
			}
			
		}
		else  //登陆错误，若ID或用户名正确，记录登陆错误次数
		{   
			$check="select * from user where phone='$user'";
			$result=mysqli_query($link,$check);
			$row=mysqli_fetch_array($result,MYSQLI_NUM);
			if(!is_null($row))//用户名存在,登陆错误次数加一
			{   
				$check="update user set Ulogtimes=Ulogtimes+1 where phone='$user'";
				@$result = mysqli_query($link,$check);
			}
			echo "<script>alert('密码错误，登陆失败!');history.back();</script>";
		} 
		
	}
?>
