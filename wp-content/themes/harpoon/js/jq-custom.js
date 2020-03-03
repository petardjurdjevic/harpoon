	$(window).scroll(function(){
  			var fixed = $("div.page-number");
  
  			var fixed_position = $("div.page-number").offset().top;
  	    	var fixed_height = $("div.page-number").height();

  			var section_2_position = $(".section-2").offset().top;
  			var section_2_height = $(".section-2").height();

  			var section_3_position = $(".section-3").offset().top;
  			var section_3_height = $(".section-3").height();

  			var section_4_position = $(".section-4").offset().top;
  			var section_4_height = $(".section-4").height();

  			var section_5_position = $(".section-5").offset().top;
  			var section_5_height = $(".section-5").height();


  			if (fixed_position + fixed_height  > section_2_position) { // element enters the div
    			fixed.addClass('page-number-2'); // adds class background
  			} else if (fixed_position < section_2_position + section_2_height) { // element leaves the div
    			fixed.removeClass('page-number-2'); // removes added background
  			} else {
    		// fixed.addClass('page-number');
  			}

  			if (fixed_position + fixed_height  > section_3_position) { // element enters the div
    			fixed.addClass('page-number-3'); // adds class background
  			} else if (fixed_position < section_3_position + section_3_height) { // element leaves the div
    			fixed.removeClass('page-number-3'); // removes added background
  			} else {
    		// fixed.addClass('page-number');
  			}

  			if (fixed_position + fixed_height  > section_4_position) { // element enters the div
    			fixed.addClass('page-number-4'); // adds class background
  			} else if (fixed_position < section_4_position + section_4_height) { // element leaves the div
    			fixed.removeClass('page-number-4'); // removes added background
  			} else {
    		// fixed.addClass('page-number');
  			}

  			if (fixed_position + fixed_height  > section_5_position) { // element enters the div
    			fixed.addClass('page-number-5'); // adds class background
  			} else if (fixed_position < section_5_position + section_5_height) { // element leaves the div
    			fixed.removeClass('page-number-5'); // removes added background
  			} else {
    		// fixed.addClass('page-number');
  			}

	 	});

  $("#link-scroll").click(function(){   //id of the link which is being clicked
      $('html, body').animate({
             scrollTop: $("#section-2").offset().top   //id of div to be scrolled
      }, 1000);
});