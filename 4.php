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
		
		<div style="background-color: #F7EED6;height: 2600px;width: 100%;">
			
			
			<center>
			<div style="width: 60%;height: 500px;"><img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=3279136779,3061545988&fm=26&gp=0.jpg" width=100%>
			</div></center>
			<br /><br /><br /><br /><br /><br /><br />
			
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
				#neirong{
					width: 50%;
					margin: 0px auto;
				}
				#neirong-left{
					height: 20px;
					float: left;
				}
				#neirong-right{
					height: 20px;
					float: right;
				}
				.p3{font-size: 15px;padding: 10px;text-indent: 2em;font-family: 宋体}
				.p4{font-size: 23px;font-family: 微软雅黑}
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
			
			<div id="neirong" style="width: 60%;">
				<center>
				<p class="p4">三餐外如何有效补充营养</p>
				</center>
				
				<p class="p3">
				现在，上高中的孩子学习压力比较大，大脑活动一直处于高度紧张状态，特别是在反反复复复习，进行考试期间，大脑对氧和某些营养素的消耗和需求比平时多。特别是碳水化合物、维生素C、B 族维生素以及铁的需求。
				</p>
				
				
				<center>
					<img src="//inews.gtimg.com/newsapp_bt/0/9346353529/1000">
				</center>
				
				<p class="p4">一、不同年级的营养补充</p>
				
				<p class="p3">
					<pre>
	高一高二期间
	
每天，能量供给要充足，每天的谷物约在400-500克。 要保证鱼、蛋、肉、奶、豆类和蔬菜的摄入。每天所需的蛋白质一半以上为优质蛋白质。也就是说，每天膳食中应含有充足的动物性蛋白和大豆类食物。
	
除此之外，还要参加体力活动，避免盲目节食。
	
	高三，复习考试期间
	
不应刻意注重”营养”而改变饮食习惯或进食过多，这样反而影响大脑功能的发挥。
					</pre>
				</p>
			
			
				<center>
					<img src="//inews.gtimg.com/newsapp_bt/0/9346354115/1000">
				</center>
			
			
				<p class="p4">
				二、掌握好以下几点就好
				</p>
				
			
				<p class="p3">
					<pre>
	1、早餐一定要吃，而且要吃好，血糖是大脑能直接利用的唯一能量，不吃早餐，血糖水平下降，影响上午的学习效率，而且反应迟钝。如果孩子
由于紧张，没有食欲，可给孩子带上一小块巧克力或一片面包和一瓶牛奶或酸奶，在上午10点左右吃。
			
	2、主食数量要充足，天气炎热，要选择孩子平时爱吃的食物，变着花样做一些可口的，可增加一些富含B 族维生素的杂粮、豆类以增进食欲。
					</pre>
				</p>
				<center>
					<img src="//inews.gtimg.com/newsapp_bt/0/9346354630/1000">
				</center>
				
				<br><br>
			
				<div id="neirong-left"><a href="3.php"><p class="p5">←上一篇：去除湿气的最好的办法</p></a></div>
				<div id="neirong-right"><a href="5.php"><p class="p5">→下一篇：冬季容易上火的原因</p></a></div>
			
				<br><br>
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