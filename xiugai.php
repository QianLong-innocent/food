<!!DOCTYPE html>
<html>
	
	<head>
		<meta charset="UTF-8">
		<title>新红美食城</title>
		<link href="http://localhost/%E7%BE%8E%E9%A3%9F/images/%E6%96%B0%E7%BA%A2%E7%BE%8E%E9%A3%9F%E5%9F%8E.ico" rel="SHORTCUT ICON" />
		<link href="css/index.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/register.css" rel="stylesheet"/>
		<link href="css/header.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/register.js"></script>
		<script type="text/javascript" src="js/check2.js"></script>
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
				<?php if(!@$_SESSION['user']){ ?>
					<div id="top-right1"><a href="login.php"><p class="login">用户登录</p></a></div>
					<div id="top-right1"><a href="register.php"><p class="register">用户注册</p></a></div>
				<?php }else{ ?>
					<div id="top-right2"><p class="re"><?php echo '欢迎 : '.$_SESSION['user'] ; ?></p></div>
					<div id="top-right2"><a href="exit.php"><p class="re" align="center"><?php echo '退出登录' ; ?></p></a></div>
				<?php } ?>
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
		
		
		<script>
			
			function checkLoog(){
				
				var inputNode = document.getElementById("userName");
				var spanNode = document.getElementById("userId");
				//获取输入框的内容
				var content  = inputNode.value;
				if(content == <?php echo $_GET['password'];?>){
					//符合规则
					spanNode.innerHTML = "√".fontcolor("green");
					return true;
				}else{
					//不符合规则
					spanNode.innerHTML = "x".fontcolor("red");
					return false;
				}	
				
				
			}
			//检查密码
			function checkPass1(){
				var inputNode = document.getElementById("surePass");
				var inputNode2 = document.getElementById("surepass1");
				var spanNode = document.getElementById("passspan");
				//获取输入框的内容
				var content  = inputNode.value;
				var content2 = inputNode2.value;
				if(content === content2 && content.length >= 1){
					//符合规则
					spanNode.innerHTML = "√".fontcolor("green");
					return true;
				}else{
					//不符合规则
					spanNode.innerHTML = "x".fontcolor("red");
					return false;
				}	
			}
			
			function checkAll1(){
				var userName = checkLoog();	
				if(!userName){
					alert('原密码不一致');
					return false;
				}
					
				var password = checkPass1();
				if(password){
					return true;
				}else{
					alert('两次密码不一致不一致');
					return false;
				}
			}
		</script>
		
		
		
		<div style="background-color: #F7EED6;height: 738px; float: left; width: 100%;">
			<div class="login2">
			    <div class="message">新红美食-在线修改</div>
			    <div id="darkbannerwrap"></div>
			    <form method="post" action="./gengxin.php" onsubmit="return checkAll1()">
					<input name="action" value="login" type="hidden">
					<input name="user" id="userName" placeholder="原密码" required="" type="password" class="search" onblur="checkLoog()" />
					<span id="userId" style="float: right;font-size: 25px;"></span>
					<hr class="hr15"><hr class="hr15"><hr class="hr15"><hr class="hr15">
					<input name="pass" id="surepass1"  placeholder="密码" required="" type="password" class="search">
					<hr class="hr15"><hr class="hr15"><hr class="hr15"><hr class="hr15">
					<input name="confirm" id="surePass" placeholder="确认密码" required="" type="password" class="search" onblur="checkPass1()" />
					<span id="passspan" style="float: right;font-size: 25px;"></span>
					<hr class="hr15"><hr class="hr15"><hr class="hr15"><hr class="hr15">
					<input value="确认修改" type="submit" id="log">
				</form>
			</div>
			
			
		</div>
		
		
		
		<div id="callme-3">
			Copyright &copy; 2019.12 - 2019.12 萧兮 . All Rights Reserved . 新红制作 版权所有 
		</div>
	</body>
</html>