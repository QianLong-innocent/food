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
		
		<div style="background-color: #F7EED6;height: 1600px;">
			
			
			<center>
			<div style="width: 60%;height: 500px;"><img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=3279136779,3061545988&fm=26&gp=0.jpg" width=100%>
			</div></center>
			<br /><br /><br /><br /><br /><br /><br />
			<div id="food_top2">
				合理的饮食，是身体健康的第一要素
			</div>
			<!--
			<div id="health_div">
				
				<div id="health_content">
					<h3>数九寒天到，冬至如何养生</h3>
					<div id="health_content_con">
						<img src="https://i3.meishichina.com/attachment/article/2019/12/20/20191220157683286063010138013.jpg" style="width: 150px; height: 150px;" align="left"/>
						<p style="font-size: 15px;padding: 30px;text-indent: 2em;font-family: 宋体;line-height: 20px;">
						冬至，二十四节气中的第22个节气，标示着北半球的太阳高度最小，白昼时间最短，但是冬至日的温度不是最低。每到冬至南方有吃汤圆、北方有吃水饺的习俗，因此可以看出“吃”对冬至的重要性。那么冬至饮食保健，都有哪些最受欢迎的食物呢？
						</p>
					</div>
					
				</div>
				<div id="health_content">
					<h3>感冒来袭，如何预防？</h3>
					<div id="health_content_con">
						<img src="https://i3.meishichina.com/attachment/article/2019/12/20/20191220157683285357510138013.jpg" style="width: 150px; height: 150px;" align="left"/>
						<p style="font-size: 15px;padding: 30px;text-indent: 2em;font-family: 宋体;line-height: 20px;">
						进入冬季后天气寒冷，感冒是最常见的上呼吸道疾病，由于冬季天气寒冷，衣着稍有不慎，就会容易感受风寒，而感冒，特别是某些体质虚弱的人，每到了冬季都特别容易感冒，这要怎么调理呢？
						</p>
					</div>
				</div>
				<div id="health_content">
					<h3>去除湿气，这几个小方法很实用</h3>
					<div id="health_content_con">
						<img src="https://i3.meishichina.com/attachment/article/2019/12/20/20191220157682463564610169539.jpg" style="width: 150px; height: 150px;" align="left"/>
						<p style="font-size: 15px;padding: 30px;text-indent: 2em;font-family: 宋体;line-height: 20px;">
						都说湿气难除，尤其是对于长期生活在潮湿的环境下的人来说，想要排除湿气更是难上加难。但是难并不表示不可以，如果利用好一些祛湿配方或者偏方，还是有希望能够帮助身体排除湿气的，有哪些偏方能够祛湿呢？下面介绍一些实用的小方法。
						</p>
					</div>
				</div>
				<div id="health_content">
					<h3>三餐外如何有效补充营养？首选汤臣倍健营养软糖</h3>
					<div id="health_content_con">
						<img src="https://i3.meishichina.com/attachment/article/2019/12/18/20191218157666340576810138013.jpg" style="width: 150px; height: 150px;" align="left"/>
						<p style="font-size: 15px;padding: 30px;text-indent: 2em;font-family: 宋体;line-height: 20px;">
							日常中，虽然我们可以通过三餐来摄取营养，但是仅靠三餐的食物摄入，有时候却无法保证人体日常所需营养的摄取，在此种情况下，日常可以通过吃什么来补充机体所需营养，保证人体每日所需营养的充足摄入呢？
						</p>
					</div>
				</div>
				<div id="health_content">
					<h3>冬季易上火，多因这三个因素</h3>
					<div id="health_content_con">
						<img src="https://i3.meishichina.com/attachment/article/2019/12/19/20191219157674609592010169539.jpg" style="width: 150px; height: 150px;" align="left"/>
						<p style="font-size: 15px;padding: 30px;text-indent: 2em;font-family: 宋体;line-height: 20px;">
						冬季天冷很多人认为是不可能上火的。但其实恰恰相反。冬季天冷也很容易上火。这是为什么呢？如果你想要改善上火问题，请务必来看看原因，才能起到祛火效果。
						</p>
					</div>
				</div>
				<div id="health_content">
					<h3>冬季易上火，多因这三个因素</h3>
					<div id="health_content_con">
						<img src="http://images.meishij.net/p/20191009/249b12ded1c83d9c201f347602301517.jpg" style="width: 150px; height: 150px;" align="left"/>
						<p style="font-size: 15px;padding: 30px;text-indent: 2em;font-family: 宋体;line-height: 20px;">
						人体可以比作成是一台不断运作的大机器，而维生素和矿物质就像一颗一颗的小螺丝，不起眼却必不可少。因此日常生活中我们要特别注意维生素和矿物质的补充。
						</p>
					</div>
				</div>
			</div>   -->
			<style>
				#xinwen{
					height: 90px;
					width: 50%;
					border-bottom: 2px dashed #eee;
					border-bottom-color: #fff;
					margin: auto;
					padding: 20px;
				}
				
				.p5{font-size: 14px;text-indent: 2em}
				.p6{font-size: 12px;color: rgba(0,0,0,0.5)}
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
			<br /><br /><br /><br /><br />
			<div id="xinwen" >
				<a href="1.php" target="_blank"><img src="https://i3.meishichina.com/attachment/article/2019/12/20/20191220157683286063010138013.jpg" align="left" width=115px;height=86px"></a>
				<a href="1.php" target="_blank"><p class="p5">数九寒天到，冬至如何养生</p></a>
	
				<p class="p6">
				冬至，二十四节气中的第22个节气，标示着北半球的太阳高度最小，白昼时间最短，但是冬至日的温度不是最低...
				</p>
			</div>

			<div id="xinwen">
				<a href="2.php" target="_blank"><img src="https://i3.meishichina.com/attachment/article/2019/12/20/20191220157683285357510138013.jpg" align="left" width=115px;height=86px"></a>
				<a href="2.php" target="_blank">
				<p class="p5">感冒来袭，如何预防？</p></a>
				
				<p class="p6">
				进入冬季后天气寒冷，感冒是最常见的上呼吸道疾病，由于冬季天气寒冷，衣着稍有不慎，就会容易感受风寒，而感冒，特别是某些体质虚弱的人，每到了冬季都特别容易感冒...
				</p>
			</div>
			<div id="xinwen">
				<a href="3.php" target="_blank"><img src="https://i3.meishichina.com/attachment/article/2019/12/20/20191220157682463564610169539.jpg" align="left" width=115px;height=86px"></a>
				<a href="3.php" target="_blank">
				<p class="p5">去除湿气，这几个小方法很实用</p></a>
				
				<p class="p6">
				都说湿气难除，尤其是对于长期生活在潮湿的环境下的人来说，想要排除湿气更是难上加难。但是难并不表示不可以，如果利用好一些祛湿配方或者偏方...
				</p>
			</div>
			<div id="xinwen">
				<a href="4.php" target="_blank"><img src="https://i3.meishichina.com/attachment/article/2019/12/18/20191218157666340576810138013.jpg" align="left" width=115px;height=86px"></a>
				<a href="4.php" target="_blank">
				<p class="p5">三餐外如何有效补充营养？首选汤臣倍健营养软糖</p></a>
				
				<p class="p6">
				日常中，虽然我们可以通过三餐来摄取营养，但是仅靠三餐的食物摄入，有时候却无法保证人体日常所需营养的摄取...
				</p>
			
			</div>
			<div id="xinwen">
				<a href="5.php" target="_blank"><img src="https://i3.meishichina.com/attachment/article/2019/12/19/20191219157674609592010169539.jpg" align="left" width=115px;height=86px"></a>
				<a href="5.php" target="_blank">
				<p class="p5">冬季易上火，多因这三个因素</p></a>
				
				<p class="p6">
				冬季天冷很多人认为是不可能上火的。但其实恰恰相反。冬季天冷也很容易上火...
				</p>
			
			</div>
			<div id="xinwen">
				<a href="6.php" target="_blank"><img src="http://images.meishij.net/p/20191009/249b12ded1c83d9c201f347602301517.jpg" align="left" width=115px;height=86px"></a>
				<a href="6.php" target="_blank">
				<p class="p5">怎么补充营养更全面？吃点汤臣倍健多种维生素吧！</p></a>
				
				<p class="p6">
				人体可以比作成是一台不断运作的大机器，而维生素和矿物质就像一颗一颗的小螺丝，不起眼却必不可少。因此日常生活中我们要特别注意维生素...
				</p>
			
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