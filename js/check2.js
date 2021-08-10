//检查用户名
function checkName(){
	var inputNode = document.getElementById("userName");
	var spanNode = document.getElementById("userId");
	//获取输入框的内容
	var content  = inputNode.value;
	
	if(content.length >= 1){
		//符合规则
		spanNode.innerHTML = "√".fontcolor("green");
		return true;
	}else{
		//不符合规则
		spanNode.innerHTML = "x".fontcolor("red");
		return false;
	}	
}

//检查密码
function checkPass(){
	var inputNode = document.getElementById("surePass");
	var inputNode2 = document.getElementById("surepass1");
	var spanNode = document.getElementById("passspan");
	//获取输入框的内容
	var content  = inputNode.value;
	var content2 = inputNode2.value;
	if(content === content2 && content.length >= 1){
		//符合规则
		spanNode.innerHTML = "√".fontcolor("green");
		return true;
	}else{
		//不符合规则
		spanNode.innerHTML = "x".fontcolor("red");
		return false;
	}	
}

//检查电话号
function checkPhone(){
	var inputNode = document.getElementById("surePhone");
	var spanNode = document.getElementById("phonespan");
	//获取输入框的内容
	var content  = inputNode.value;
	
	if(content.length == 8 || content.length == 11){
		//符合规则
		spanNode.innerHTML = "√".fontcolor("green");
		return true;
	}else{
		//不符合规则
		spanNode.innerHTML = "x".fontcolor("red");
		return false;
	}	
}

//检查邮箱
function checkEmail(){
	var email = document.getElementById("email").value;
	var spanNode = document.getElementById("emailspan");
	
	//编写邮箱的正则       13456@qq.com  13456@qq.net  13456@qq.com.cn
	var reg = /^[a-z0-9]\w+@[a-z0-9]+(\.[a-z]{2,3}){1,2}$/i; 
	if(reg.test(email)){
		//符合规则
		spanNode.innerHTML = "√".fontcolor("green");
		return true;
	}else{
		//不符合规则
		spanNode.innerHTML = "x".fontcolor("red");
		
		return false;
	}	
}

function checkAll(){
	var userName = checkName();	
	var password = checkPass();
	var phone = checkPhone();
	var email = checkEmail();
	if(userName&&email&&phone&&password){
		return true;
	}else{
		alert('注册失败！请检查检查~~~');
		return false;
	}
}
