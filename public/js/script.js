	$(".header-minor").on("click", function(){	
	$(this).next(".body-minor").not(":animated").slideToggle();
	
	});

	$(".header-main").on("click", function(){
		$(this).next(".body-main").not(":animated").slideToggle();
	   
	});
