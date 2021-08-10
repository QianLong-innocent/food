$(document).ready(function () {
    /*导航鼠标事件*/
    $(".nav li").mouseenter(function(){
        $(this).addClass("navhover").siblings("li").removeClass("navhover");
    });
    $(".nav").mouseleave(function(){
        $(".nav li:last").prev().addClass("navhover").siblings("li").removeClass("navhover");
    });
	
});