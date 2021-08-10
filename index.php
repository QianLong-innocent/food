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
			    <form class="parent" method="get" action="master.php">
			        <input type="text" class="search" placeholder="搜索菜名" name="f">
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
		
		<div style="background-color: #F7EED6;height: 1750px;">
			<style type="text/css">
				/* demo */
				/*五张图片在缩略图时所显示的位置调整*/
				#demo li:nth-of-type(1) img{ transform: translate(-210px);}
				#demo li:nth-of-type(2) img{ transform: translate(-180px);}
				#demo li:nth-of-type(3) img{ transform: translate(-380px);}
				#demo li:nth-of-type(4) img{ transform: translate(-450px);}
				#demo li:nth-of-type(5) img{ transform: translate(-320px);}
				#demo li:nth-of-type(6) img{ transform: translate(-320px);}
				#demo{width:100%;height:512px;margin:60px auto 0 auto;}    /* 标题的大小  */
				#demo img{width: 820px; height: 512px; max-width: 820px;}  	/* 显示时的图片大小  */
				#demo li{float:left;position:relative;width:200px;height:100%;overflow:hidden;cursor:pointer; transition:0.5s; transform-origin:bottom;filter:alpha(opacity=50);opacity:0.5;}
				#demo li img{transition:1.2s;}
				#demo li a{display:block;}
				#demo li div{position:absolute;bottom:0;left:0;width:100%;background:#000;line-height:32px;filter:alpha(opacity=70);opacity:0.7;text-indent:2em;}
				#demo li div a{color:#FFF;text-decoration:none;}
				#demo li div a:hover{color:#F00;text-decoration:none;}
				#demo li.active{cursor:pointer; transform:scale(1.02,1.08); z-index:3;width:820px;filter:alpha(opacity=100);opacity:1;}
				#demo li.active img{transform:translate(0px);}
				#demo li:nth-of-type(1){transform-origin:bottom left;}
				#demo li:nth-of-type(5){transform-origin:bottom right;}
			</style> 
			<div style="height: 520px;width: 100%;float: left;">
				<ul id="demo">
					<li class="active">
						
						<a href="master.php?f=10"><img src="http://p1.pstatp.com/large/pgc-image/e3ba9eb7798246dda32bb918855717c5"  /></a>
						<div><a href="#">莼菜</a></div>
					</li>
					<li>
						<a href="master.php?f=3"><img src="images/2.jpg"  /></a>
						<div><a href="#">绿豆面</a></div>
					</li>
					<li>
						<a href="master.php?f=11"><img src="images/1.jpg"  /></a>
						<div><a href="#">酸辣粉</a></div>
					</li>
					<li>
						<a href="master.php?f=9"><img src="http://p1.pstatp.com/large/pgc-image/95721771ff9b4df586e8300611027ca3"  /></a>
						<div><a href="#">阴米</a></div>
					</li>
					<li>
						<a href="master.php?f=8"><img src="http://p1.pstatp.com/large/pgc-image/98b3074358794cd29fe96066e7ab1b3f"  /></a>
						<div><a href="#">黄水烤全羊</a></div>
					</li>
					<li>
						<a href="master.php?f=2"><img src="http://p1.pstatp.com/large/pgc-image/2f8fc8420718469c988870a9e74a1a4b"  /></a>
						<div><a href="#">倒水流豆腐干</a></div>
					</li>
				</ul>
			</div>
			
			<div id="December">
				
				<p align="center" style="font-family: 黑体; font-size: 30px;">十二月，滋阴润肺，适当进补
					<span class="paixu">
						<a href="all_food.php">更多食材  ></a>
					</span>
				</p>
				
				<!--内容-选项卡区域-->
				<div class="conbox">
					<!--内容导航-->
					<div class="con-nav">
						<a href="####" class="connava">水果</a>
						<a href="####">蔬菜</a>
						<a href="####">五谷</a>
						<a href="####">生鲜</a>
					</div>
					<!--产品-->
					<div class="connent">
						<!--选项卡1内容-->
						<div class="con">
							<div class="con1">
								<a target="_blank" href="https://www.meishij.net/梨"><img src="https://s1.ig.meishij.net/p/20170330/35af0f27e89091fb1126f81cdb6ad5c4_150x150.jpg" width="120px" height="120px"/>
								<span class="name pngFix"><em class="notz"></em><strong>梨</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/山楂"><img src="https://s1.ig.meishij.net/p/20170330/1c8c9bcf7198593b7da9b79ba82683fd_150x150.jpg" width="120px" height="120px"/>
								<span class="name2 pngFix"><em class="notz"></em><strong>山楂</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/橙"><img src="https://s1.ig.meishij.net/p/20170330/dacf1e18c99c4fe2f056f0c8f3aacbce_150x150.jpg" width="120px" height="120px"/>
								<span class="name3 pngFix"><em class="notz"></em><strong>橙</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/苹果"><img src="https://s1.ig.meishij.net/p/20170330/96fa7d7510bd0da37ea9bb7960f163d0_150x150.jpg" width="120px" height="120px"/>
								<span class="name4 pngFix"><em class="notz"></em><strong>苹果</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/猕猴桃"><img src="https://s1.ig.meishij.net/p/20110822/6a89f9eeb6eeec4427e5807b4ed0cb02_150x150.jpg" width="120px" height="120px"/>
								<span class="name5 pngFix"><em class="notz"></em><strong>猕猴桃</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/甘蔗"><img src="https://s1.ig.meishij.net/p/20170330/3df43238975c0d2e094fa8e763a41f36_150x150.jpg" width="120px" height="120px"/>
								<span class="name6 pngFix"><em class="notz"></em><strong>甘蔗</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/香蕉"><img src="https://s1.ig.meishij.net/p/20170330/cbe31e4ef6176df562054b6b5297ca50_150x150.jpg" width="120px" height="120px"/>
								<span class="name7 pngFix"><em class="notz"></em><strong>香蕉</strong></span></a>
							</div>
						</div>
						<!--选项卡2内容-->
						<div class="con">
							
							<div class="con1">
								
								<a target="_blank" href="https://www.meishij.net/冬笋"><img src="https://s1.ig.meishij.net/p/20170330/9c415b8a48ea52d3c3dc3d50c186eb05_150x150.jpg" width="120px" height="120px"/>
								<span class="name pngFix"><em class="notz"></em><strong>冬笋</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/芹菜"><img src="https://s1.ig.meishij.net/p/20170330/f4154bbef9434a3057309f0b770f157a_150x150.jpg" width="120px" height="120px"/>
								<span class="name2 pngFix"><em class="notz"></em><strong>芹菜</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/胡萝卜"><img src="https://s1.ig.meishij.net/p/20111130/629aedacc88d9607d1d1caba2ec0af59_150x150.jpg" width="120px" height="120px"/>
								<span class="name3 pngFix"><em class="notz"></em><strong>胡萝卜</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/大白菜"><img src="https://s1.ig.meishij.net/p/20170330/b46999f5830b40b82c2232d496f2b05c_150x150.jpg" width="120px" height="120px"/>
								<span class="name4 pngFix"><em class="notz"></em><strong>大白菜</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/莴笋"><img src="https://s1.ig.meishij.net/p/20170330/31900af8bf909e61f5982c91313ef665_150x150.jpg" width="120px" height="120px"/>
								<span class="name5 pngFix"><em class="notz"></em><strong>莴笋</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/菜花"><img src="https://s1.ig.meishij.net/p/20140313/156de38977fee0b1463168e23396ef05_150x150.jpg" width="120px" height="120px"/>
								<span class="name6 pngFix"><em class="notz"></em><strong>菜花</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/油麦菜"><img src="https://s1.ig.meishij.net/p/20110830/7ca005000cad4f23ec2d8f9151cd6062_150x150.jpg" width="120px" height="120px"/>
								<span class="name7 pngFix"><em class="notz"></em><strong>油麦菜</strong></span></a>
							</div>
							
						</div>
						<!--选项卡3内容-->
						<div class="con">
							
							<div class="con1">
							
								<a target="_blank" href="https://www.meishij.net/板栗"><img src="https://s1.ig.meishij.net/p/20111019/638aa109b78183ae2faeb738ebfce1b8_150x150.jpg" width="120px" height="120px"/>
								<span class="name pngFix"><em class="notz"></em><strong>板栗</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/黑豆"><img src="https://s1.ig.meishij.net/p/20130507/0284ef6334fa8ba467cecf718fb96033_150x150.jpg" width="120px" height="120px"/>
								<span class="name2 pngFix"><em class="notz"></em><strong>黑豆</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/核桃"><img src="https://s1.ig.meishij.net/p/20170330/de64190a5636f1f8d8071f84b3dfc44b_150x150.jpg" width="120px" height="120px"/>
								<span class="name3 pngFix"><em class="notz"></em><strong>核桃</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/小米"><img src="https://s1.ig.meishij.net/p/20110715/6e5402c9f8c0b48e35ae1257d7e03683_150x150.jpg" width="120px" height="120px"/>
								<span class="name4 pngFix"><em class="notz"></em><strong>小米</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/燕麦"><img src="https://s1.ig.meishij.net/p/20150228/5bb1dda5bfa20c2772d81781c4a23f31_150x150.jpg" width="120px" height="120px"/>
								<span class="name5 pngFix"><em class="notz"></em><strong>燕麦</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/糯米"><img src="https://s1.ig.meishij.net/p/20111205/bcb208d4616ac2fc7ff70f7db18391c2_150x150.jpg" width="120px" height="120px"/>
								<span class="name6 pngFix"><em class="notz"></em><strong>糯米</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/干桂圆"><img src="https://s1.st.meishij.net/shicaiimg/104/shicai604_150x150.jpg" width="120px" height="120px"/>
								<span class="name7 pngFix"><em class="notz"></em><strong>干桂圆</strong></span></a>
							</div>
							
						</div>
						<!--选项卡4内容-->
						<div class="con">
							
							<div class="con1">
								<a target="_blank" href="https://www.meishij.net/排骨"><img src="https://s1.ig.meishij.net/p/20130415/de0be83bd4a94a93c64ccefc96015586_150x150.jpg" width="120px" height="120px"/>
								<span class="name pngFix"><em class="notz"></em><strong>排骨</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/虾"><img src="https://s1.ig.meishij.net/p/20170330/23da49e7bb0dd02111b14d640c2a90eb_150x150.jpg" width="120px" height="120px"/>
								<span class="name2 pngFix"><em class="notz"></em><strong>虾</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/羊肉"><img src="https://s1.ig.meishij.net/p/20120607/1f899fcb0e876187e8af3392faa9b9a8_150x150.jpg" width="120px" height="120px"/>
								<span class="name3 pngFix"><em class="notz"></em><strong>羊肉</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/带鱼"><img src="https://s1.ig.meishij.net/p/20170330/1cc4705a67b303ddf6e543d9ba33eff2_150x150.jpg" width="120px" height="120px"/>
								<span class="name4 pngFix"><em class="notz"></em><strong>带鱼</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/牛肉"><img src="https://s1.ig.meishij.net/p/20111019/a72016598763ceb63763b2f0efb75434_150x150.jpg" width="120px" height="120px"/>
								<span class="name5 pngFix"><em class="notz"></em><strong>牛肉</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/鱿鱼"><img src="https://s1.ig.meishij.net/p/20110822/020d8b27b4c8449c75bc0b6cafa4b626_150x150.jpg" width="120px" height="120px"/>
								<span class="name6 pngFix"><em class="notz"></em><strong>鱿鱼</strong></span></a>
								<a target="_blank" href="https://www.meishij.net/乌骨鸡"><img src="https://s1.ig.meishij.net/p/20130905/0134e2e8b86625973cff5f8249e5f2de_150x150.jpg" width="120px" height="120px"/>
								<span class="name7 pngFix"><em class="notz"></em><strong>乌骨鸡</strong></span></a>
							</div>
							
						</div>
					</div>
				</div>				
			</div>
			
			
			<div id="food_bottom">
				新红本日推荐菜谱
			</div>
			<div id="food_tupian">
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
					  <center><p style="line-height: 60px;width: 300px;height: 250px;">阴米</p></center>
					</figcaption><a href="master.php?f=9"></a>
				  </figure>
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