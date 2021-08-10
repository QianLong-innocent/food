<?php
	session_start();
	require './view/function.php';
	header("Content-Type:text/html;charset=utf-8");
?>

<!!DOCTYPE html>
<html>
	
	<head>
		<meta charset="UTF-8">
		<title>新红美食城</title>
		<link href="http://localhost/%E7%BE%8E%E9%A3%9F/images/%E6%96%B0%E7%BA%A2%E7%BE%8E%E9%A3%9F%E5%9F%8E.ico" rel="SHORTCUT ICON" />
		<link href="css/index.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/header.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/evaluate_food.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/evaluate_food.js"></script>
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
					<li class="navhover"><a href="evaluate_food.php">美食社区</a></li>
				</ul>
			</nav>
		</div>
		
		<div style="background-color: #F7EED6;height: 1000px;">
			
		<div style="margin-left: 35%;width: 22%;margin-top: 10%;float: left;height: 300px;background-color: #FFFFFF;padding: 60px;">
			
			<div class="note-edit-title">我要评论</div>
			  <form method="post" action="./view/evaluate_food_check.php">
			    <table class="note-edit-table">
			      <tr>
			        <td class="note-edit-table-w">
			          <p>我的名字：</p>
			          <input class="note-edit-name" type="text" name="name" placeholder="匿名">
			        </td>
			        <td>
			          <p>贴纸颜色：</p>
			          <label class="note-edit-green"><input type="radio" name="color" value="green" checked></label>
			          <label class="note-edit-blue"><input type="radio" name="color" value="blue"></label>
			          <label class="note-edit-yellow"><input type="radio" name="color" value="yellow"></label>
			          <label class="note-edit-red"><input type="radio" name="color" value="red"></label>
			        </td>
			      </tr>
			      <tr>
			        <td colspan="2">
			          <p>我的评论：</p>
			          <textarea class="note-edit-content" name="content" placeholder="225个字符以内（中文占2个字符位）"></textarea>
			        </td>
			      </tr>
			      <tr>
			        <td>
			          保护密码：
			          <input class="note-edit-pwd" type="password" name="password" placeholder="6个字符以内">
			        </td>
			        <td>
			          <input class="note-edit-submit" type="submit" value="提交">
			          <input class="note-edit-cancel" type="button" value="取消" onclick="location='evaluate_food.php'">
			        </td>
			      </tr>
			    </table>
			  </form>
			</div>
			
		</div>
			
			
			
			
			
			
			
		</div>
		<div id="callme">
				<div id="callme-top"></div>
				<div id="callme-2"></div>
				<div id="callme-1">
					学校名称：重庆大学城市科技学院<br>
					地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址：重庆市永川区光彩大道368号<br>
					电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：023-49481068
				</div>
				<div id="callme-1">
					微信公号：新红美食城<br>
					官方邮箱：335947416@qq.com<br>
					私人电话：10086
				</div>
		</div>
		<div id="callme-3">
			Copyright &copy; 2019.12 - 2019.12 萧兮 . All Rights Reserved . 新红制作 版权所有 
		</div>
	</body>
</html>