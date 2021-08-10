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
		
		<div style="background-color: #F7EED6;height: 540px;">
		
<?php
	require './view/init.php';
	require './view/common/add.html';
	if(! @$page = $_GET['page'])
		$page = 1;	
	
	$sql = "select * from wish ORDER BY time desc limit " . (($page-1)*6) . "," . $page*6;

	mysqli_select_db( $link, 'food' );
	$result = mysqli_query($link,"SELECT COUNT(*) FROM wish");
	list($num_rows) = mysqli_fetch_row($result);
	
	if(!$res = mysqli_query($link,$sql)){
		exit("sql[$sql]执行失败:". mysqli_error($link));
	}
	
	$data = mysqli_fetch_all($res,MYSQLI_ASSOC);
	mysqli_free_result($res); 
?>
		
			
<?php
	// 编辑或删除愿望
	$id = max(input('get', 'id', 'd'), 0);
	$action = input('get', 'action', 's');
	if ($id) {
		$password = input('post', 'password', 's');
		$sql = 'SELECT `name`,`content`,`color`,`password` FROM `wish` WHERE `id`=' . $id;
		if (!$res = mysqli_query($link, $sql)) {
			exit("SQL[$sql]执行失败：" . mysqli_error($link) . $sql);
		}
		if (!$edit = mysqli_fetch_assoc($res)) {
			exit;
		}
		mysqli_free_result($res);
		$checked = isset($_POST['password']) || empty($edit['password']);
		if ($checked && $password !== $edit['password']) {
			$tips = '密码不正确！';
			$checked = false;
		}
		// 删除愿望
		if ($checked && $action == 'delete') {
			$sql = 'DELETE FROM `wish` WHERE `id`=' . $id;
			if (!mysqli_query($link, $sql)) {
				exit('SQL执行失败：' . mysqli_error($link));
			}
			header('Location: evaluate_food.php');
			exit;
		}
		// 编辑愿望
		if ($checked && $action == 'edit') {
			header("location:modif.php?id=<?=$id?>");
			$sql = 'DELETE FROM `wish` WHERE `id`=' . $id;
			if (!mysqli_query($link, $sql)) {
				exit('SQL执行失败：' . mysqli_error($link));
			}
			exit;
		}
	}
?>
					
			
			
			
			
			<div class="note-layer" style="float: left;">
			  <div class="note-edit" style="float: left;">
			    <div class="note-edit-title">验证密码</div>
				<span id="pass"></span>
			    <form method="post">
			      <table class="note-edit-table">
			        <?php if(isset($tips)): ?>
			        <tr>
			          <td colspan="2"><?=$tips?></td>
			        </tr>
			        <?php endif; ?>
			        <tr>
			          <td class="note-edit-table-w">
			            输入密码：
			            <input class="note-edit-pwd" type="password" name="password" placeholder="6个字符以内">
			          </td>
			          <td>
			            <input class="note-edit-submit" type="submit" value="验证">
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