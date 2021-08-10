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
		
		<div style="background-color: #F7EED6;height: 3200px;width: 100%;">
			
			
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
				<p class="p4">冬季容易上火的原因</p>
				</center>
				
				<p class="p3">
				首先冬季由于天气寒冷，所以家里会采用一些保暖措施，从而导致室内和室外温度差太大，从而导致室内空间干燥，所以我们会经常有口干舌燥，咽喉肿痛等等上火的症状。
				</p>
				
				
				<center>
					<img src="images/上火1.png">
				</center>
				
				<p class="p3">其次冬季容易上火的原因也是跟我们的饮食有关系，严寒的冬季，我们经常会吃一些使身体感觉的暖和的食物，如经常吃火锅，吃一些辛辣的食物，当然这类食物也会引起上火。</p>
				<center>
					<img src="images/上火2.png">
				</center>
				<p class="p3">
					再次就是由于燥热的室内环境，再加上我们没有及时的给身体补充水分，从而导致人体器官粘膜净化作用变差，直接导致鼻腔、咽喉等发干，并影响人体新陈代谢的平衡和稳定，从而诱发了上火。
				</p>
				
			
				<center>
					<img src="images/上火3.png">
				</center>
			
			
				<p class="p3">
				冬季人们容易上火的还有可能是严寒的冬天，让人不愿意外出散步，从而导致每天缺乏运动量，从而减少出汗的几率，因为汗液可以将人体内的毒素排出体外，所以我们要经常的适当的运动。
				</p>
				<center>
					<img src="images/上火4.png">
				</center>
			
				<p class="p3">
					冬季人体容易上火的原因也有可能是繁忙的工作压力，让我们的饮食和睡眠都不规律，经常熬夜，作息时间不规律，夜晚休息时间不够也是容易上火的注意原因。
				</p>
				<center>
					<img src="images/上火5.png">
				</center>
				<p class="p3">最后一项就是对于那些经常吸烟喝酒的男性朋友们来说，经常大量的吸烟和过度的饮酒也会导致上火，所以我们要少吸烟喝酒，多喝开水，多吃水果。</p>
				<center>
					<img src="images/上火6.png">
				</center>
				<br><br>
			
				<div id="neirong-left"><a href="4.php"><p class="p5">←上一篇：三餐外如何补充营养</p></a></div>
				<div id="neirong-right"><a href="6.php"><p class="p5">→下一篇：如何补充营养更健康</p></a></div>
			
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