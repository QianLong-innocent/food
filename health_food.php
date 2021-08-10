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
		<link href="css/header.css" rel="stylesheet" />
		<link href="css/health_food.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/health_food.js"></script>
		
		<script type="text/javascript">
		window.onload = function(){
			function $(param){
				if(arguments[1] == true){
					return document.querySelectorAll(param);
				}else{
					return document.querySelector(param);
				}
			}
			var $box = $(".box");
			var $box1 = $(".box-1 ul li",true);
			var $box2 = $(".box-2 ul");
			var $box3 = $(".box-3");
			var $length = $box1.length;
			
			var str = "";
			for(var i =0;i<$length;i++){
				if(i==0){
					str +="<li class='on'>"+(i+1)+"</li>";
				}else{
					str += "<li>"+(i+1)+"</li>";
				}
			}
			$box2.innerHTML = str;
			
			var current = 0;
			
			var timer;
			timer = setInterval(go,2000);
			function go(){
				for(var j =0;j<$length;j++){
					$box1[j].style.display = "none";
					$box2.children[j].className = "";
				}
				if($length == current){
					current = 0;
				}
				$box1[current].style.display = "block";
				$box2.children[current].className = "on";
				current++;
			}
			
			for(var k=0;k<$length;k++){
				$box1[k].onmouseover = function(){
					clearInterval(timer);
				}
				$box1[k].onmouseout = function(){
					timer = setInterval(go,2000);
				}
			}
			for(var p=0;p<$box3.children.length;p++){
				$box3.children[p].onmouseover = function(){
					clearInterval(timer);
				};
				$box3.children[p].onmouseout = function(){
					timer = setInterval(go,2000);
				}
			}
			
			for(var u =0;u<$length;u++){
				$box2.children[u].index  = u;
				$box2.children[u].onmouseover = function(){
					clearInterval(timer);
					for(var j=0;j<$length;j++){
						$box1[j].style.display = "none";
						$box2.children[j].className = "";
					}
					this.className = "on";
					$box1[this.index].style.display = "block";
					current = this.index +1;
				}
				$box2.children[u].onmouseout = function(){
					timer = setInterval(go,2000);
				}
			}
			
			$box3.children[0].onclick = function(){
				back();
			}
			$box3.children[1].onclick = function(){
				go();
			}
			function back(){
				for(var j =0;j<$length;j++){
					$box1[j].style.display = "none";
					$box2.children[j].className = "";
				}
				if(current == 0){
					current = $length;
				}
				$box1[current-1].style.display = "block";
				$box2.children[current-1].className = "on";
				current--;
			}
		}
		</script>
		<style>
			#neirong{
				width: 60%;
				height: 500px;
				margin: 0px auto;
			}
			.p1{color: #fff;font-size: 23px;}
			#mid-mid{
				height: 28px;
				width: 120px;
				background-color: rgb(0,150,0);
				margin-top: 50px;
			}
			#neirong-neirong{
				width: 250px;
				height: 150px;
				padding: 40px;
				margin-left: 20px;
				float:left;
			}
			#aaaaaaaa{
				width: 280px;
				height: 200px;
			}
		</style>
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
					<li class="navhover"><a href="health_food.php">饮食健康</a></li>
					<li><a href="master.php">食材大全</a></li>
					<li><a href="evaluate_food.php">美食社区</a></li>
				</ul>
			</nav>
		</div>
		
		<div style="background-color: #F7EED6;height: 1200px;">
			
			<div class="box">
				<div class="box-1">
					<ul>
						<li>
							<a href="1.php">
							<img src="https://i3.meishichina.com/attachment/article/2019/12/20/20191220157683286063010138013.jpg" alt="这里是第一张图片"></img>
							</a>
							<h2>数九寒天到，冬至如何养生</h2>
						</li>
						<li>
							<a href="2.php">
							<img src="https://i3.meishichina.com/attachment/article/2019/12/20/20191220157683285357510138013.jpg" alt="这里是第二张图片"></img></a>
							<h2>感冒来袭，如何预防？</h2>
							
						</li>
						<li>
							<a href="3.php">
							<img src="https://i3.meishichina.com/attachment/article/2019/12/20/20191220157682463564610169539.jpg" alt="这里是第三张图片"></img></a>
							<h2>去除湿气，这几个小方法很实用</h2>
						</li>
						<li>
							<a href="4.php">
							<img src="https://i3.meishichina.com/attachment/article/2019/12/18/20191218157666340576810138013.jpg" alt="这里是第四张图片"></img></a>
							<h2>三餐外如何有效补充营养？首选汤臣倍健营养软糖</h2>
						</li>
						<li>
							<a href="5.php">
							<img src="https://i3.meishichina.com/attachment/article/2019/12/19/20191219157674609592010169539.jpg" alt="这里是第五张图片"></img></a>
							<h2>冬季易上火，多因这三个因素</h2>
						</li>
						<li>
							<a href="6.php">
							<img src="http://images.meishij.net/p/20191009/249b12ded1c83d9c201f347602301517.jpg" alt="这里是第六张图片"></img></a>
							<h2>怎么补充营养更全面？吃点汤臣倍健多种维生素吧！</h2>
						</li>
					</ul>
				</div>
				<div class="box-2">
					<ul>
					</ul>
				</div>
				<div class="box-3">
					<span class="prev"> < </span>
					<span class="next"> > </span>
				</div>
			</div>
			
			
			
			<div id="mid-mid" style="margin-left: 46%;"><a href="health_news.php"><p class="p1" align="center">新闻资讯</p></a></div>
			
			
			<div id="neirong">
				<div id="neirong-neirong"><a href="1.php"><img src="images/news-1.png" id="aaaaaaaa"></a></div>
				<div id="neirong-neirong"><a href="2.php"><img src="images/news-2.png" id="aaaaaaaa"></a></div>
				<div id="neirong-neirong"><a href="3.php"><img src="images/news-3.png" id="aaaaaaaa"></a></div>
				<div id="neirong-neirong"><a href="4.php"><img src="images/news-4.png" id="aaaaaaaa"></a></div>
				<div id="neirong-neirong"><a href="5.php"><img src="images/news-5.png" id="aaaaaaaa"></a></div>
				<div id="neirong-neirong"><a href="6.php"><img src="images/news-6.png" id="aaaaaaaa"></a></div>
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