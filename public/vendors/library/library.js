$(function(){
	/* auto complete */
	$('input[type=text]').attr({'autocomplete':'off'});

	/* notifications */
	$('.alert').on('click', function(){
		$(this).fadeOut();
	});

	/* print area */
	$('.print').click(function(){
		$($(this).attr('data-elementToPrint')).printArea();
		return false;
	});

	/* back to top */
	(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ? '' : $('body').prepend('<div id="backToTop" class="formTooltip" title="Back to Top"></div>');

	/* alert message for ie 6 & 7 */
	if((/\bMSIE 6/.test(navigator.userAgent) || /\bMSIE 7/.test(navigator.userAgent)) && !window.opera){
		$('body').prepend('<div id="browserCheck">Your browser is out of date. It may not display all features of this and other websites. It is recommended to upgrade your browser to a newer version.</div>');
		$('body').css({marginTop:$('#browserCheck').outerHeight()});
		$('#browserCheck').on('click', function(){
			$(this).fadeOut(function(){
				$('body').css({marginTop:0});
			});
		});
	}

	/* image width fix */
	$('img').each(function(){
		if($(this).attr('width') > $(this).parent().outerWidth()){
			$(this).attr({width:'', height:''});
		}
	});

	/* tooltips */
	jQuery().tooltip ? $('.formTooltip').tooltip({toggle:'tooltip'}) : '';

	/* popover */
	jQuery().popover ? $('.formPopover').popover({html:true, trigger:'focus', container:'body', toggle:'popover', placement:'right'}) : '';

	/* custom radio and checkbox */
	$('input[type=radio]').each(function(){
		if($(this).parent().prop('tagName') == 'LABEL'){
			$(this).parent().addClass('radio' + ($(this).prop('disabled') == true ? ' disabled' : '')).prepend('<div'+($(this).prop('disabled') == true ? ' class="disabled"' : '')+'></div>');
			if($(this).prop('checked') == true){
				$(this).parent().children('div').addClass('checked');
			}
		}
	}).on('click change', function(){
		if($(this).prop('checked') == true){
			$('[name='+$(this).attr('name')+']').parent().children('div').removeClass('checked');
			$(this).parent().children('div').addClass('checked');
		}
	});
	$('.ratings').find('input[type=radio]').on('click', function(){
		$(this).siblings().addClass('active').parent().prevAll().children().addClass('active');
		$(this).parent().nextAll().children().removeClass('active');
	});
	$('input[type=checkbox]').each(function(){
		if($(this).parent().prop('tagName') == 'LABEL'){
			$(this).parent().addClass('checkbox' + ($(this).prop('disabled') == true ? ' disabled' : '')).prepend('<div'+($(this).prop('disabled') == true ? ' class="disabled"' : '')+'></div>');
			if($(this).prop('checked') == true){
				$(this).parent().children('div').addClass('checked');
			}
		}
	}).bind('click change', function(){
		if($(this).prop('checked') == true){
			$(this).parent().children('div').addClass('checked');
		}else{
			$(this).parent().children('div').removeClass('checked');
		}
	});
	$('form').on('reset', function(){
		$('input[type=radio').each(function(){
			if($(this).prop('defaultChecked') != true){
				$(this).siblings().removeClass('checked');
				$(this).removeClass('active').siblings().removeClass('active');
			}else{
				$(this).siblings().addClass('checked');
				$(this).addClass('active').siblings().addClass('active');
			}
		});
	});

	/* table */
	$('.table').find('thead').find('th, td').hover(
		function(){
			index = $(this).index() + 1;
			$(this).parent().parent().siblings('tbody').find('th:nth-child(' + index + '), td:nth-child(' + index + ')').addClass('hover');
		}, function(){
			index = $(this).index() + 1;
			$(this).parent().parent().siblings('tbody').find('th:nth-child(' + index + '), td:nth-child(' + index + ')').removeClass('hover');
		}
	);

	/* button */
	$('.btn-group-vertical').find('.btn').last().addClass('last');

	/* pretty photo */
	if(jQuery().prettyPhoto){
		$('a[rel^=prettyPhoto]').prettyPhoto();
		$('a[rel^=prettyPhotoNoSocialMedia]').prettyPhoto({social_tools:false});
		$('a[rel^=prettyModal]').prettyPhoto({theme:'default', social_tools:false, allow_resize:false});
	}

	/* select 2 */
	jQuery().select2 ? $(".select2").select2({placeholder:'-- Select --'}) : '';

	/* validation */
	var withError = submitted = false;
	var errMsg = '';
	// $('form').on('submit', function(){
	// 	if($(this).hasClass('formPreloader')){
	// 		var loader = ' \
	// 			<div class="formLoader"> \
	// 				<div class="message"> \
	// 					<div class="progress progress-striped active"> \
	// 						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> \
	// 							Form is being processed. Please wait... \
	// 						</div> \
	// 					</div> \
	// 				</div> \
	// 			</div> \
	// 		';
	// 		$(this).find('*').blur();
	// 		$(this).css({position:'relative'}).append(loader);
	// 		$(this).find('.formLoader').css({height:$(this).height()}).children().css({width:$(this).width() / 2, left:($(this).width() / 2) / 2, top:($(this).height() / 2) - ($(this).find('.formLoader').find('.progress').height() / 2)});
	// 		if(parseInt($(this).width()) <= 20){
	// 			$(this).find('.formLoader').find('.message').text('');
	// 		}
	// 	}
	//
	// 	withError = false;
	// 	submitted = true;
	//
	// 	$(this).find('.required').each(function(){
	// 		validateRequired($(this));
	// 	});
	//
	// 	$(this).find('.email.required').each(function(){
	// 		validateEmail($(this));
	// 	});
	//
	// 	if(withError){
	// 		$(this).find('.formLoader').remove();
	// 		return false;
	// 	}
	// });

	$('.required, .email').on('focus', function(){
		if(submitted)
			removeValidation($(this));
	});

	$('.required').on('blur', function(){
		if(submitted)
			validateRequired($(this));
	});

	$('.email').bind('blur keyup', function(){
		if(submitted)
			validateEmail($(this));
	});

	$('.digits').on('keydown', function(e){
    	if(!e.shiftKey){
            var theKey = String.fromCharCode(e.keyCode);
            if(/[^0-9-()+\d]/.test(theKey)==true & e.keyCode!=8 & e.keyCode!=9 & e.keyCode!=37 & e.keyCode!=38 & e.keyCode!=39 & e.keyCode!=40 & e.keyCode!=96 & e.keyCode!=97 & e.keyCode!=98 & e.keyCode!=99 & e.keyCode!=100 & e.keyCode!=101 & e.keyCode!=102 & e.keyCode!=103 & e.keyCode!=104 & e.keyCode!=105){
                e.preventDefault();
            }
        }else{
       		e.preventDefault();
        }
    });``
	$('.digits.minimum').on('keyup', function(){
		$(this).val($(this).val() == '' || $(this).val() == 0 ? 1 : $(this).val());
	});

	function validateRequired(el){
		if($(el).val() == '' || $(el).val() == null){
			withError = true;
			errMsg = 'This field is required';
			fnError($(el));
		}else{
			removeValidation($(el));
		}
	}

	function validateEmail(el){
		if(/^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/.test($(el).val())==false){
			withError = true;
			errMsg = 'Invalid e-mail address';
			fnError($(el));
		}else{
			removeValidation($(el));
		}
	}

	function removeValidation(el){
		$(el).closest('.form-group').removeClass('has-error');
		$(el).siblings('.validation').slideUp(400, function(){
			$(this).remove();
		});
	}

	function fnError(el){
		if($(el).siblings('.validation').size() == 0){
			if($(el).closest('.preferredDateAndTime').size() == 0)
				$(el).parent().append('<div class="validation">' + errMsg + '</div>');
			$(el).closest('.form-group').addClass('has-error');
			$(el).siblings('.validation').stop(true, true).slideDown(400);
		}

		$('.validation').click(function(){
			$(this).siblings().first().focus();
		});
	}

});

/* for responsive purposes */
$(window).bind('orientationchange resize load', function(e){

	$('form').each(function(){
		$(this).find('.formLoader').css({height:$(this).height()}).children().css({width:$(this).width() / 2, left:($(this).width() / 2) / 2, top:($(this).height() / 2) - ($(this).find('.formLoader').find('.progress').height() / 2)});
		if(parseInt($(this).width()) <= 20){
			$(this).find('.formLoader').find('.message').text('');
		}
	});

	/* validation positions */
	$('.required, .email').each(function(){
		$(this).siblings('.validation').css({left:$(this).outerWidth() - $(this).siblings('.validation').outerWidth() - 45, top:$(this).position().top + $(this).css('padding-top')}).stop(true, true);
	});

	/* fixing heights */
	if($('.leftHeight').outerHeight() > $('.rightHeight').outerHeight())
		$('.rightHeight').css({height:$('.leftHeight').height()});
	else if($('.leftHeight').outerHeight() < $('.rightHeight').outerHeight())
		$('.leftHeight').css({height:$('.rightHeight').height()});

	/* button force block */
	if($(window).width() < 480)
		$('.btn').not('.btn-group > .btn').addClass('btn-force-block');
	else
		$('.btn').not('.btn-group > .btn').removeClass('btn-force-block');

}).trigger('resize').load(function(){

	/* preloader */
	$('.preloader').delay(500).fadeOut(function(){
		$(this).remove();
	});

}).scroll(function(){

	/* back to top */
	var coor = $(window).scrollTop();
	if(coor>42 && $(window).width() >= 1024){
		$('#backToTop').fadeIn();
	}
	if(coor<42){
		$('#backToTop').fadeOut();
	}
	$('#backToTop').click(function(){
		$('body, html').stop(true).animate({scrollTop:0}, 1000);
		return false;
	});

});

/* adding commas */
function addCommas(nStr){
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

/* functions to make sure that custom checkboxes, radio buttons and dropdown selects are working when change event is triggered */
$.attrHooks.checked = {
	set:function(el, value){
		if(el.checked !== value){
			el.checked = value;
			$(el).trigger('change');
		}
	}
};
$.propHooks.checked = {
	set:function(el, value){
		if(el.checked !== value){
			el.checked = value;
			$(el).trigger('change');
		}
	}
};
$.attrHooks.selected = {
	set:function(el, value){
		if(el.selected !== value){
			el.selected = value;
			$(el).trigger('change');
		}
	}
};
$.propHooks.selected = {
	set:function(el, value){
		if(el.selected !== value){
			el.selected = value;
			$(el).trigger('change');
		}
	}
};
