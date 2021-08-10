<?php //注册信息验证

	//	链接数据库
	$link = mysqli_connect('localhost','root','12345678','food');

	if(!$link){
		exit('链接数据库失败：' . mysqli_connect_error());
	}
	mysqli_set_charset($link,'utf8');
	

	
	@$name=$_POST['name'];
	@$color=$_POST['color'];
	@$content=$_POST['content'];
	@$password=$_POST['password'];
	
	// 限制名称最多占用12个字符位置（1个汉字占用2个位置）
	$name = mb_strimwidth($name, 0, 12);
	// 当名称为空时，使用“匿名”作为默认值
	$name = $name ? $name : "匿名";
	// 限制颜色值在合法范围内，使用“green”作为默认值
	if (!in_array($color, ['blue', 'yellow', 'green', 'red'])) {
		$color = 'green';
	}
	
	// 限制内容长度最多占用80个字符位置
	$content = mb_strimwidth($content, 0, 225);
	
	// 限制密码长度最多为6位
	$password = (string) substr($password, 0, 6);
	
	// 保存用户的发布时间
	$time = time();
	
	$result = mysqli_query($link,"SELECT max(id) FROM wish");
	list($id) = mysqli_fetch_row($result);
	$id++;
	$sql = "insert into wish(name,color,content,password,time,id) values('$name','$color','$content','$password','$time','$id')";
	if(mysqli_query($link,$sql)){
		echo "<script>alert('发布成功！');</script>";
		header('Location: ../evaluate_food.php');
	}


?>

