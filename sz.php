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
				
				$sql = "select * from guangdong limit " . (($page-1)*9) . "," . $page*9;
			
				mysqli_select_db( $link, 'food' );
				$result = mysqli_query($link,"SELECT COUNT(*) FROM guangdong");
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
							<dd><a href="cq.php">重庆</a></dd>
							<dd class="select-all selected"><a href="#">石柱</a></dd>
							<dd><a href="gd.php">广东</a></dd>
						</dl>
					</li>
				</ul>
				
			</div>
			
			
			<div id="food_top">
				欢迎来到新红之家
			</div>
			<script type="text/javascript" src="js/jquery.indexSlidePattern.js"></script>
			<link href="css/imagehover.css" rel="stylesheet" media="all">
			<div id="food_tupian" style="margin-left: 20%;">
				<div class="demo">
				  <figure class="imghvr-zoom-out"><img src="images/洋芋饭.png">
					<figcaption>
					  <center><p style="line-height: 60px;align-content: center;">柴火洋芋饭</p></center>
					</figcaption><a href="master.php?f=1"></a>
				  </figure>
				</div>
				<div class="demo">
				  <figure class="imghvr-hinge-down"><img src="images/倒水流豆腐干.png">
					<figcaption>
					  <center><p style="line-height: 60px;align-content: center;">倒水流豆腐干</p></center>
					</figcaption><a href="master.php?f=2"></a>
				  </figure>
				</div>
				<div class="demo">
				  <figure class="imghvr-hinge-right"><img src="images/绿豆面.png">
					<figcaption>
					  <center><p style="line-height: 60px;align-content: center;">绿豆面</p></center>
					</figcaption><a href="master.php?f=3"></a>
				  </figure>
				</div>
				<div class="demo">
				  <figure class="imghvr-flip-horiz"><img src="images/斑鸠叶豆腐.png">
					<figcaption>
					  <center><p style="line-height: 60px;align-content: center;">斑鸠叶豆腐</p></center>
					</figcaption><a href="master.php?f=4"></a>
				  </figure>
				</div>
				<div class="demo">
				  <figure class="imghvr-flip-diag-1"><img src="images/咂酒.png">
					<figcaption>
					  <center><p style="line-height: 60px;align-content: center;">咂酒</p></center>
					</figcaption><a href="master.php?f=5"></a>
				  </figure>
				</div>
				<div class="demo">
				  <figure class="imghvr-flip-diag-2"><img src="images/黄水烤全羊.png">
					<figcaption>
					  <center><p style="line-height: 60px;align-content: center;">黄水烤全羊</p></center>
					</figcaption><a href="master.php?f=6"></a>
				  </figure>
				</div>
				<div class="demo">
				  <figure class="imghvr-shutter-in-horiz"><img src="images/炕洋芋.png">
					<figcaption>
					  <center><p style="line-height: 60px;align-content: center;">炕洋芋</p></center>
					</figcaption><a href="master.php?f=7"></a>
				  </figure>
				</div>
				<div class="demo">
				  <figure class="imghvr-shutter-in-horiz"><img src="images/都巴粉.png">
					<figcaption>
					  <center><p style="line-height: 60px;align-content: center;">都巴粉</p></center>
					</figcaption><a href="master.php?f=8"></a>
				  </figure>
				</div>
				<div class="demo">
				  <figure class="imghvr-shutter-in-out-vert"><img src="images/阴米.png">
					<figcaption>
					  <center><p style="line-height: 60px;align-content: center;">阴米</p></center>
					</figcaption><a href="master.php?f=9"></a>
				  </figure>
				</div>	
				<!-- 分页链接 -->
				<div class="note-page" >
				  <?=page_html('./sz.php?page=', $num_rows, $page,9)?>
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