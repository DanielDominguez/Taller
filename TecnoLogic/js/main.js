$(window).load(function(){
	var a = $(".meGusta");

	a.on("click", function(){
		$(this).addClass("clickedButton");
	});

	a.on("dblclick", function(){
		$(this).removeClass("clickedButton");
	});

});