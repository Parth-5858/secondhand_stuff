jQuery(document).ready(function(){
	
	fullSize(); //fullSize() Function initialize
	/*--------------fullHeight---------*/
	function fullSize() {
		var heights = window.innerHeight;
		jQuery(".fullHt").css('min-height', (heights + 0) + "px");
		if(window.innerWidth < 1024){
			jQuery(".fullHt").css("min-height", "100%");
			} 
	} 
	jQuery(".collection-hed").click(function(){
		jQuery(".collection-content").fadeToggle();
	})
	jQuery(".header-search").click(function(){
		jQuery("body").toggleClass("open-slide");
	});
	
	jQuery(".closed-slide").click(function(){
		jQuery("body").removeClass("open-slide");
	})

	jQuery(".filter-btn").click(function(){
		jQuery("body").toggleClass("open-filter");
	});
	
	jQuery(".closed-filter").click(function(){
		jQuery("body").removeClass("open-filter");
	});
	
	/*----------------remove class click anywhere on body------------*/
	jQuery(document).mouseup(function(e)
	{
		var container = jQuery("body"); // class we have to remove from
		if (!container.is(e.target) // if the target of the click isn't the container...
				&& container.has(e.target).length === 0) // ... nor a descendant of the container
		{
			  jQuery("body").removeClass("open-slide"); 
		}
	});  

	$('[data-toggle="popover"]').popover({
        placement : 'top',
        trigger : 'hover'
    });

	/********* Sticky Header ************/	
	jQuery(window).scroll(function(){
	var sticky = jQuery('body'),
		scroll = jQuery(window).scrollTop();	
	if(scroll >= 200) sticky.addClass('sticky-header');
	else sticky.removeClass('sticky-header');	
	});

	/********* Sliders ************/	
	jQuery('#main-slide').owlCarousel({
		loop:true,
		items:1,
		nav:true,
		dots:false,
		autoplay:true, 
		margin:10,
		autoplayTimeout:5000,
		smartSpeed:1500,
		navText: [
					"<i class='fa fa-long-arrow-left'></i>",
					"<i class='fa fa-long-arrow-right'></i>"
				]
				
	});
	
	jQuery('.ou-mis-slide1').owlCarousel({
		loop:true,
		items:1,
		nav:true, 
		dots:false,
		autoplay:false,
		margin:30,
		autoplayTimeout:5000,
		smartSpeed:1500,
		navText: [
					"<i class='fa fa-long-arrow-left'></i>",
					"<i class='fa fa-long-arrow-right'></i>"
				],
		/*animateOut: 'slideOutUp',
		animateIn: 'slideInUp',*/			   
				
	});
	jQuery('.ou-mis-slide').owlCarousel({
		loop:true,
		items:5,
		nav:true, 
		dots:false,
		autoplay:false,
		margin:30,
		autoplayTimeout:5000,
		smartSpeed:1500,
		navText: [
					"<i class='fa fa-long-arrow-left'></i>",
					"<i class='fa fa-long-arrow-right'></i>"
				],
		/*animateOut: 'slideOutUp',
		animateIn: 'slideInUp',*/			   
				
	});

	// jQuery('[data-toggle="popover"]').popover();
	// $(".custom-checkbox").click(function(){
    //     $(".stitching-size").slideToggle();
    // });
});
