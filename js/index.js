// JavaScript Document
$(document).ready(function(){
		//导航鼠标事件
		$(".nav li").mouseenter(function(){
			$(this).addClass("navhover").siblings("li").removeClass("navhover");
		});
		$(".nav").mouseleave(function(){
			$(".nav li:first").addClass("navhover").siblings("li").removeClass("navhover");
		});
		//内容选项卡鼠标事件！
		$(".con-nav>a").mouseenter(function(){
			  $(this).stop().addClass("connava").siblings("a").removeClass("connava");
			  var indexNO=$(this).index();
			  $(".connent>.con ").eq(indexNO).css("display","block").siblings().css("display","none");
		});
		$(".nav").mouseleave(function(){
			$(".nav li:first").addClass("navhover").siblings("li").removeClass("navhover");
		});
});

/*
function over(){
	var x = document.getElementById("s").style.backgroundColor="red";
}
function out(){
	var x = document.getElementById("s").style.backgroundColor="#fff";
}

function over1(){
	var x = document.getElementById("ss").style.backgroundColor="red";
}
function out1(){
	var x = document.getElementById("ss").style.backgroundColor="#fff";
}

function over2(){
	var x = document.getElementById("sss").style.backgroundColor="red";
}
function out2(){
	var x = document.getElementById("sss").style.backgroundColor="#fff";
}

function over3(){
	var x = document.getElementById("ssss").style.backgroundColor="red";
}
function out3(){
	var x = document.getElementById("ssss").style.backgroundColor="#fff";
}
*/

