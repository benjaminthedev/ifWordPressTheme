(function ($) {

	'use strict';

	$(document).ready(function() {

		//alert("Hey DipShit!");

		//Turd
		//$("li#field_1_10").insertAfter(".gform_footer");
		$("footer li.gchoice_1_10_1").insertAfter("footer .gform_footer");

		// Comments
		$('.commentlist li').addClass('card');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

    // Pagination fix for ellipsis
    $('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here

		//Makes a perfect dropdown
		$('ul#menu-main-navigation li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});


		// $('li.nav-item .nav-link:first').addClass('active');

		//Opens first tab!
		 $('.panel-collapse.in.collapse:first').addClass('show');
		 //$('.newPanel.panel-collapse.in.collapse:first').addClass('show');


//Button
		 $(".scroll").click(function() {
		    $('html, body').animate({
		        scrollTop: $("#gform_fields_1").offset().tops
		    }, 2000);
		});



$(".panel-heading.newHeadingPanel").click(function(){
	//console.log("youyuyyoyyouyuo");

$('i.fa').toggleClass('yosel');
});


//Fun Forms!!
$( '<h5 class="newHeadinsss">Date of birth</h5>' ).insertAfter( "li#field_3_19" );
$(".step_one_next").click(function(){
		console.log('step_one_next');
    $("li#field_3_1, li#field_3_3, li#field_3_3, li#field_3_19, li#field_3_6, li#field_3_7, li#field_3_8, .step_one_next, .h-one, .form-section-one").hide();
		$(" li#field_3_12, li#field_3_13, li#field_3_15, li#field_3_17, .h-two, .form-section-two-right").show();

		$('.circle.one').removeClass('active');
		$('.circle.one').addClass('visited');
		$('.circle.two').addClass('active');
		$('.twoText').addClass('activeText');

		$( '<h2 class="heavy"><span class="blue">Basic</span> information</h2>' ).insertBefore( "li#field_3_6" );

});




$(".step_two_next").click(function(){
		console.log('step_one_next');
    $(" li#field_3_12, li#field_3_15, li#field_3_17, .step_two_next, .h-two, .form-section-two-left, .form-section-two-right, .form-section-two-left-second, .form-section-two-right-second").hide();
		$(" li#field_3_18, li#field_3_20, li#field_3_21, input#gform_submit_button_3, .h-three, .form-section-three").show();
		$( "li#field_3_18, li#field_3_20, li#field_3_21, input#gform_submit_button_3" ).wrapAll( "<div class='form-section-three' />");
		$('.circle.two').removeClass('active');
		$('.circle.two').addClass('visited');

		$('.circle.thee').addClass('active');
		$('.circle.three').addClass('visited');
		$('.threeText').addClass('activeText');
		$('.heavy').hide();
		$( '<h2 class="heavyNew"><span class="blue">Pick your</span> insurance</h2>' ).insertBefore( "li#field_3_20" );


});

//Forms section one
$( "li#field_3_1, li#field_3_3, li#field_3_6, li#field_3_7, li#field_3_8, li#field_3_19, .step_one_next, .newHeadinsss" ).wrapAll( "<div class='form-section-one' />");
$( '<h2><span class="blue">About</span> You</h2>' ).insertBefore( "li#field_3_1" );

//Form section two
$( "li#field_3_15, li#field_3_17, li#field_3_12, li#field_3_13, .step_two_next" ).wrapAll( "<div class='form-section-two-right' />");

$('li#field_3_6').append('<div class="text-center dobIN">DD</div>');
$('li#field_3_7').append('<div class="text-center dobIN">MM</div>');
$('li#field_3_8').append('<div class="text-center dobIN">YYYY</div>');





//Form section two
// $( "li#field_3_15" ).wrapAll( "<div class='form-section-two-right' />");



//Form section two - second
// $( "li#field_3_17" ).wrapAll( "<div class='form-section-two-left-second' />");

//Form section two
//$( "li#field_3_12, li#field_3_13" ).wrapAll( "<div class='form-section-two-right-second' />");

//$(".form-section-two-right").after('<div class="clearfix"></div>');


// Form Section Three left

//$( "li#field_3_20" ).wrapAll( "<div class='form-section-three-left' />");

// Form Section Three right
//$( "li#field_3_18, input#gform_submit_button_3" ).wrapAll( "<div class='form-section-three-right' />");
//$("a.small-logo").hide();




//End Forms



//Sticky Nav
$(function(){
 var shrinkHeader = 160;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('header.main').addClass('shrink');
					 //console.log("de");
        }
        else {
            $('header.main').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});



 //Nav stick OLD
// $(window).scroll(function(){
//
// 	if( $(window).scrollTop() > 160){
//
// 			$('.dark-menu').addClass('stickyNav');
// 			$('header').addClass('mainHeaderFixed');
// 			$(".menu-second-menu-container").hide();
// 			$(".menu-first-menu-container").addClass('new-end');
// 			$("a.main-logo").hide();
// 			$("a.small-logo").show();
// 			$(".bp-phone").addClass("stickyNumber");
// 			$("img.telephoneIconHeader").addClass("stickyImg");
// 			$("a.topHeaderMailto").addClass("stickyaa");
// 	}	else	{
// 			$('.dark-menu').removeClass('stickyNav');
// 			$("a.topHeaderMailto").removeClass("stickyaa");
// 			$('header').removeClass('mainHeaderFixed');
// 			$(".menu-second-menu-container").show();
// 			$(".menu-first-menu-container").removeClass('new-end');
// 			$("a.main-logo").show();
// 			$("a.small-logo").hide();
// 			$(".bp-phone").removeClass("stickyNumber");
// 			$("img.telephoneIconHeader").removeClass("stickyImg");
// 	}

$( '<h5>* All fields required</h5>' ).insertAfter( ".partial_entry_warning" );


// input#input_3_1_3, input#input_3_1_6, input#input_3_3,
$(' input#input_3_8 ').on('keyup keydown keypress change paste', function() {
  if ($(this).val() == '') {
    $('.step_one_next').removeClass('okay').addClass('not-okay');
  } else {
    $('.step_one_next').addClass('okay').removeClass('not-okay');
		$('.step_one_next').show();
  }
});


$(' input#input_3_13').on('keyup keydown keypress change paste', function() {
  if ($(this).val() == '') {
    $('.step_two_next').removeClass('okay').addClass('not-okay');
  } else {
    $('.step_two_next').addClass('okay').removeClass('not-okay');
		$('.step_two_next').show();
  }
});








	});

}(jQuery));
