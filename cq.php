<?php
	session_start();
	header("Content-Type:text/html;charset=utf-8");
?>
<link href="css/style.css" rel="stylesheet">
			<?php
				require './view/init.php';
				require './view/common/add.html';
				require './view/function.php';
				if(! @$page = $_GET['page'])
					$page = 1;	
				
				$sql = "select * from chongqing limit " . (($page-1)*9) . "," . $page*9;
			
				mysqli_select_db( $link, 'food' );
				$result = mysqli_query($link,"SELECT COUNT(*) FROM chongqing");
				list($num_rows) = mysqli_fetch_row($result);
				
				if(!$res = mysqli_query($link,$sql)){
					exit("sql[$sql]执行失败:". mysqli_error($link));
				}
				
				$data = mysqli_fetch_all($res,MYSQLI_ASSOC);
				mysqli_free_result($res); 
				$a = 0;
			?>

<!!DOCTYPE html>
<html>
	
	<head>
		<meta charset="UTF-8">
		<title>新红美食城</title>
		<link href="http://localhost/%E7%BE%8E%E9%A3%9F/images/%E6%96%B0%E7%BA%A2%E7%BE%8E%E9%A3%9F%E5%9F%8E.ico" rel="SHORTCUT ICON" />
		<link href="css/index.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/header.css" rel="stylesheet" />
		<link href="css/all_food.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/style2.css" />
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/all_food.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
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
					<li class="navhover"><a href="all_food.php">菜谱大全</a></li>
					<li><a href="health_food.php">饮食健康</a></li>
					<li><a href="master.php">食材大全</a></li>
					<li><a href="evaluate_food.php">美食社区</a></li>
				</ul>
			</nav>
		</div>
		
		<div style="background-color: #F7EED6;height: 1200px;">
			
			<?php if(@$_GET['photos']){ 
				Header("Location: health_food.php");  
			}?>
			
			<div class="demo" style="width: 28%;margin-left: 30%;">
			
				<ul class="select">
					<li class="select-list">
						<dl id="select1">
							<dt>地区：</dt>
							<dd><a href="all_food.php">全部</a></dd>
							<dd class="select-all selected"><a href="#">重庆</a></dd>
							<dd><a href="sz.php">石柱</a></dd>
							<dd><a href="gd.php">广东</a></dd>
						</dl>
					</li>
				</ul>
				
			</div>
			
			
			<div id="food_top">
				做一个吃货无忧无虑，当一个痴货无牵无挂
			</div>
			<script type="text/javascript" src="js/jquery.indexSlidePattern.js"></script>
			<link href="css/imagehover.css" rel="stylesheet" media="all">
			
			<?php $t = 0 ; ?>
			
			<div id="food_tupian" style="margin-left: 21%;">
				<!-- 输出评论 -->
				<?php foreach($data as $v): ?>
					<div class="demo">
					  <figure class="imghvr-zoom-out"><img src="<?=$v['cover_image_url']; ?>">
						<figcaption>
						  <center><p style="line-height: 120px;align-content: center;"><?=$v['name'];?></p></center>
						</figcaption><a href="master.php<?php  echo "?id=" . $v['id']; ?>"></a>
					  </figure>
					</div>
					<?php $t++;if($t == 9){break;}?>
				<?php endforeach; ?>
				
				<!-- 分页链接 -->
				<div class="note-page" >
				  <?=page_html('./cq.php?page=', $num_rows, $page,9)?>
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