<?php
	session_start();
	header("Content-Type:text/html;charset=utf-8");
?>

<!!DOCTYPE html>
<html>
	
	<head>
		<meta charset="UTF-8">
		<title>新红美食城</title>
		<link href="http://localhost/%E7%BE%8E%E9%A3%9F/images/%E6%96%B0%E7%BA%A2%E7%BE%8E%E9%A3%9F%E5%9F%8E.ico" rel="SHORTCUT ICON" />
		<link href="css/index.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/login.css" rel="stylesheet"/>
		<link href="css/header.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
	</head>
	
	<body>
		<div id="top">
			<div id="top-left">
				<a href="index.php"><img src="images/logo.jpg" height="100px"></a>
			</div>
			<div class="container">
			    <form class="parent" method="get" action="all_food.php">
			        <input type="text" class="search" placeholder="搜索菜名">
			        <input type="submit" value="" class="btn">
			    </form>
				<br /><br />
				<span class="t-gjc">关键词：<span style="color: #cf3232;">酸辣粉</span>&nbsp; 洋芋片
				&nbsp; 洋芋姣姣</span>
			</div>
			<div id="top-right">
				<div id="top-right1"><a href="login.php"><p class="login">用户登录</p></a></div>
				<div id="top-right1"><a href="register.php"><p class="register">用户注册</p></a></div>
			</div>
		</div>
		
		<!--导航区域-->
		<div class="navbox">
			<nav class="nav">
				<ul style="list-style-type:none">
					<li><a href="index.php" >首页</a></li>
					<li><a href="all_food.php">菜谱大全</a></li>
					<li><a href="health_food.php">饮食健康</a></li>
					<li><a href="master.php">食材大全</a></li>
					<li><a href="evaluate_food.php">美食社区</a></li>
				</ul>
			</nav>
		</div>
		
		<div style="background-color: #F7EED6;height: 738px; float: left; width: 100%;">
			<div class="login2">
			    <div class="message">新红美食-在线登录</div>
			    <div id="darkbannerwrap"></div>
			    <form method="post" action="./view/check.php">
					<input name="action" value="login" type="hidden">
					<input name="user" placeholder="手机号" required="" type="text" class="search">
					<hr class="hr15"><hr class="hr15"><hr class="hr15"><hr class="hr15">
					<input name="pass" placeholder="密码" required="" type="password" class="search">
					<hr class="hr15"><hr class="hr15"><hr class="hr15"><hr class="hr15">
					
					<!-- 验证码 -->
					<input name="codeNum" placeholder="验证码" required="" type="text" class="search" style="float: left;width: 6%;"/>
					<div id="cap">
						<img  id="captcha_img" border="1" src="./sure/captcha.php?r=<?php echo rand(); ?>" alt="" width="100" height="30">
						<a href="login.php" οnclick="document.getElementById('captcha_img').src='./sure/captcha.php?r='+Math.random() ">换一个?</a>
					</div>
					
					<hr class="hr15"><hr class="hr15"><hr class="hr15"><hr class="hr15"><hr class="hr20">
					<input value="登录" type="submit" id="log" onclick="Sure()">
					<hr class="hr20"><hr class="hr20">
					<input value="注册" type="button" onclick="window.location = 'register.php'"  id="log">
					
					<!--  时间不够了 <input value="忘记密码?" type="button" id="log" onclick="window.location = 'forget.php'"> -->
				</form>
			</div>
		</div>
		
		
		
		<div id="callme-3">
			Copyright &copy; 2019.12 - 2019.12 萧兮 . All Rights Reserved . 新红制作 版权所有 
		</div>
	</body>
</html>