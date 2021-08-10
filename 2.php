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
				<p class="p4">感冒来袭，如何预防？</p>
				</center>
				
				<p class="p3">
				夏季感冒的原因种种，大都是包括内因和外因，内因是由于天气太热，消耗量过大，天气炎热休息不好，活动太少等，外因包括经常冲凉水解热，空调温度太低，睡觉不盖毯子裸腹而睡，长时间吹电扇等。夏季感冒包括多种类型，这几种感冒也有各自的症状。
				</p>
				
				
				<center>
					<img src="images/感冒1.png">
				</center>
				
				
				<p class="p3">
					<pre>
	1、暑热感冒：

因暑热侵袭，出现发热、微恶风寒、汗出热不退、心烦、口渴等症状。

	2、热伤风：

因内有热外又贪凉而导致，会出现鼻子堵塞、流鼻涕，也有些患者出现喉咙痛、咳嗽等，其症状相对较轻。

	3、暑湿感冒：

在暑湿季节里感受暑湿之邪所导致的感冒多见发热、食欲不振、胸闷、头身困重等现象。

	4、肠胃型感冒：

多表现为肠道消化不适症状，如发热、胃口不好、食不下咽、恶心、呕吐、腹痛、腹泻等症状。

那么夏季感冒要怎样预防呢？1、经常洗手 保持自己手部的干净，使病毒细菌难从手部侵入身体2、注意饮食  夏季要多吃清淡食物，少吃油腻辛辣食品 3、吃富含维生素的食物    多吃新鲜营养丰富的瓜果蔬菜，增强身体抵抗力。
					</pre>
				</p>
			
			
				<center>
					<img src="images/感冒2.png">
				</center>
			
			
				<p class="p3">
				冬天因为天气寒冷，冷气侵袭，身体容易感受风寒，当身体受到寒冷的侵袭，身体受寒，身体抵抗力就会大大下降，随之病毒就有机可乘大肆活动。冬季感冒大又称风寒感冒，其多诱发于冬季，发病较快，会有发热、畏寒、寒战、鼻塞、流清涕、咳嗽、头痛、食欲减退、舌苔薄白等症状。冬季感冒大多因风寒所导致，因此入冬以后要注意防风保暖，及时添加衣物，感冒后要大量喝水，并补充维生素，可以多喝一些含维生素C高的鲜榨果蔬汁，比如：猕猴桃汁、橙汁、柠檬汁等，以增强免疫抵抗力。
				</p>
			
				<center>
					<img src="images/感冒3.png">
				</center>
				
				<br><br>
			
				<div id="neirong-left"><a href="1.php"><p class="p5">←上一篇：数九寒天到，冬至如何养生？</p></a></div>
				<div id="neirong-right"><a href="3.php"><p class="p5">→下一篇：去除湿气，这几个方法很管用</p></a></div>
			
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