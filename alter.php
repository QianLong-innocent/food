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
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<script type="text/javascript" src="js/jquery.indexSlidePattern.js"></script>
		<link href="css/imagehover.css" rel="stylesheet" media="all">
		<script language="javascript">
		$(document).ready(function(e){
			  var opt	=	{
				"speed"	:	"fast"		,	//变换速度,三速度可选 slow,normal,fast;
				"by"	:	"mouseover"		,	//触发事件,click或者mouseover;
				"auto"	:	true		,	//是否自动播放;
				"sec"	:	3000	 		//自动播放间隔;
			  };
		      $("#demo").IMGDEMO(opt);    
		});
		</script>
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
					<div id="top-right2"><a href="alter.php"><p class="re"><?php echo '欢迎 : '.$_SESSION['user'] ; ?></p></a></div>
					<div id="top-right2"><a href="exit.php"><p class="re" align="center"><?php echo '退出登录' ; ?></p></a></div>
				<?php } ?>
			</div>
		</div>
		
		<!--导航区域-->
		<div class="navbox">
			<nav class="nav">
				<ul style="list-style-type:none">
					<li class="navhover"><a href="index.php" >首页</a></li>
					<li><a href="all_food.php">菜谱大全</a></li>
					<li><a href="health_food.php">饮食健康</a></li>
					<li><a href="master.php">食材大全</a></li>
					<li><a href="evaluate_food.php">美食社区</a></li>
				</ul>
			</nav>
		</div>
		
		
		
		<?php
			require './view/init.php';
			require './view/common/add.html';
			
			$name = $_SESSION['user'];

			$sql = "select phone,email,password from user where name='" . $name . "'";
			mysqli_select_db( $link, 'food' );
			
			if(!$res = mysqli_query($link,$sql)){
				exit("sql[$sql]执行失败:". mysqli_error($link));
			}
			
			$data = mysqli_fetch_all($res,MYSQLI_ASSOC);
			mysqli_free_result($res); 
		?>

		<style>
			a{text-decoration: none}
			a:link{
				color: #000;
			}
			a:visited{
				color: #000;
			}
			a:hover{
				color: red;
			}
			a:active{
				color: red;
			}
		</style>
		<div style="background-color: #F7EED6;height: 550px;">
			
				<div style="float: left;margin-left: 32%;">
				<h2 align="left">个人信息</h2>
				<table border="2" bordercolor="black">
					<caption><?=@$_SESSION['user']?>的个人简历</caption>
					<tr>
						<th rowspan="2" align="left"><img src="http://r.photo.store.qq.com/psb?/V11uJonJ1SjzVr/Fzza50rhaVruvGK*0G1MX7EfdHEucwQclCcSsTSO.pE!/r/dLgAAAAAAAAA" height="200" width=""></img></th>
						<th>姓名</th>
						<td align="center"><?=@$_SESSION['user']?></td>
						<th>性别</th>
						<td align="center">XX</td>
					</tr>
					<tr>
						<th>手机电话</th>
						<td align="center"><?php echo $data[0]['phone'];?></td>
						<th>Email</th>
						<td align="center"><?php echo $data[0]['email'];?></td>
					</tr>
					<tr>
						<td colspan="5" align="center"><a href="xiugai.php?password=<?php echo $data[0]['password'];?>">修改个人密码</a></td>
					</tr>
				</table>
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