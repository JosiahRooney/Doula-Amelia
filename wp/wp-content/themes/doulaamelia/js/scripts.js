jQuery(document).ready(function ($) {

	// Animate border of search box
	$('input').focus(
		function(){
			$(this, '.search-icon').addClass('selected');
			$('.search-icon').addClass('selected');
		});
	$('input').blur(
		function(){
			$(this).removeClass('selected');
			$('.search-icon').removeClass('selected');
		});
	
	// Mobile menu functionality
	$('.mobile-menu h3, .mobile-menu i').on('click', function(){
		if ($('.slide-out').hasClass('active')) {
			$('.slide-out').stop().slideUp('fast').removeClass('active');
		} else {
			$('.slide-out').stop().slideDown('fast').addClass('active');
		}
	});
	$("html").click(function() {
		if ($('.slide-out').hasClass('active')) {
			$(".slide-out").stop().slideUp('fast').removeClass('active');
		}
	});
	$(".mobile-menu h3, .mobile-menu i, .slide-out").click(function(e) {
	    e.stopPropagation();
	});

	var open = false;

	// Expandable items
	$( '.expandable strong' ).on('click',function(){
		if( $( window ).width() <= 768 ) {
			// Look for open containers
			if (open == false) {
				$(this).parent().find('.fa').removeClass('fa-plus-square').addClass('fa-minus-square');
				$(this).parent().find('p, ul').show();
				open = true;
			} else {
				if ($(this).parent().find('.fa').hasClass('fa-plus-square')) {
					$('.expandable').find('.fa').removeClass('fa-minus-square').addClass('fa-plus-square');
					$('.expandable').find('p, ul').hide();
					$(this).parent().find('.fa').removeClass('fa-plus-square').addClass('fa-minus-square');
					$(this).parent().find('p, ul').show();
					open = true;
				} else {
					$('.expandable').find('.fa').removeClass('fa-minus-square').addClass('fa-plus-square');
					$('.expandable').find('p, ul').hide();
					open = false;
				}	
			}
		}
	});



	// Footer menu
	if ($('html').hasClass('home')) {
		$('.f-home').addClass('f-active');
	} else if ($('html').hasClass('about')) {
		$('.f-about').addClass('f-active');
	} else if ($('html').hasClass('packages')) {
		$('.f-packages').addClass('f-active');
	} else if ($('html').hasClass('contact')) {
		$('.f-contact').addClass('f-active');
	}


	// Sidebar
	//var parenHeight = $('.sidebar').parent().height();
	//$('.sidebar').css('min-height', parenHeight - 52 );

});