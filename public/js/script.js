$(function(){
	var eric_width = window.screenX + "px";
	//banners
	if(typeof fx != 'undefined' || typeof timePeriod != 'undefined' || typeof transPeriod != 'undefined')
		$('#mastHead').camera({fx:fx, time:timePeriod, transPeriod:transPeriod, height:'auto', pagination:true,
		//width: eric_width,
		//onStartLoading: function(){
		//	$('.imgLoaded').css('height', 'auto').css('width', window.screenX+'px');
		//},
		autoAdvance: true});
	if($('#subBanner').size() > 0)
		$('#subBanner').css({background:"url(" + $('#subBanner').attr('data-image') + ") center center", backgroundSize:'cover'});
	
	//$('.camera_wrap').bind("DOMSubtreeModified",function(){
	//  $('.imgLoaded').css('height', 'auto').css('width', window.screenX+'px');
	//});
	
	//side navigation
	$('#navToggle').on('click', function(){
		
		//if side nav is not yet shown
		if(!$(this).hasClass('clicked')){
		
			$('#sideNavigation').stop(true, true).animate({right:0}, 200, 'easeInOutBounce', function(){
				$(this).addClass('shown').removeAttr('style');
			});
			$('body').stop(true, true).animate({right:'220px'}, 200, 'easeInOutBounce', function(){
				$(this).addClass('moved').removeAttr('style');
			});
			$(this).addClass('clicked');
		
		//if shown
		}else{
			
			$('#sideNavigation').stop(true, true).animate({right:'-220px'}, 200, 'easeInOutBounce', function(){
				$(this).removeClass('shown').removeAttr('style');
			});
			$('body').stop(true, true).animate({right:'0'}, 200, 'easeInOutBounce', function(){
				$(this).removeClass('moved').removeAttr('style');
			});
			$(this).removeClass('clicked');
		
		}
		
	});
	$(document).mouseup(function(e){
		var container = $('#navToggle, #sideNavigation');
		!container.is(e.target) && container.has(e.target).length === 0 && $(container).hasClass('clicked') ? container.click() : '';
		
		var quickButton = $('.quickButton, #quickLogin');
		!quickButton.is(e.target) && quickButton.has(e.target).length === 0 && $(quickButton).hasClass('clicked') ? $(quickButton).click() : '';
	});
	
	//quick login
	$('.quickButton').on('click', function(){
		
		if(!$(this).hasClass('clicked')){
			
			$(this).addClass('clicked').hide().siblings('.dashboard').fadeIn();
			$(this).addClass('shown').fadeIn();
			
		}else{
		
			$(this).removeClass('clicked').hide().siblings('.dashboard').hide();
			$(this).removeClass('shown').fadeIn();
		
		}
		
		return false;
		
	});
	
	//date and time picker
	if(jQuery().datepicker){
		if($('.preferredDateAndTime .datepicker').size() == 0){
			$('.datepicker').datepicker({
				changeMonth		: true,
				changeYear		: true,
				yearRange		: '1940:3000',
				dateFormat		: 'yy-mm-dd',
				showButtonPanel	: true,
				minDate			: 0
			});
		}else{
			$('.preferredDateAndTime .datepicker').datepicker({
				changeMonth		: true,
				changeYear		: true,
				yearRange		: '1940:3000',
				dateFormat		: 'yy-mm-dd',
				showButtonPanel	: true,
				minDate			: 0,
				onClose			: function(selectedDate){
					setDates(selectedDate);
				}
			});
		}
	}
	
	function setDates(selectedDate){
		
		var d = new Date();
		var selectedDate = new Date(selectedDate);
		$('.preferredDateAndTime [name=meridiem]').find('option[value=AM]').prop('disabled', selectedDate.getMonth() == d.getMonth() & selectedDate.getDate() == d.getDate() & d.getHours() >= 12 ? true : false);
		
	}
	
});

$(window).on('load', function(){
	
	//header animation
	$('#header.forAnimation').show().stop(true, true).animate({height:'165px'}, function(){
		$('#pattern').slideDown(function(){
			$('#logo').fadeIn(function(){
				$('#pattern').find('#navigation').stop(true, true).animate({left:0, opacity:1}, function(){
					$(this).removeClass('animate').removeAttr('style');
				});
			});
		});
	});
	
	//clone navigation
	$('#navigation').clone().appendTo('#sideNavigation');

}).bind('orientationchange resize load', function(){
	
	if($(window).width() > 1024){
		
		$('#navToggle').removeClass('clicked');
		$('#sideNavigation').removeClass('shown').removeAttr('style');
		$('body').removeClass('moved').removeAttr('style');
	
	}
	
});