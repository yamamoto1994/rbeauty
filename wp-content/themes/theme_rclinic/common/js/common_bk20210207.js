$(function(){
	$('body').delay(500).animate({ opacity: 1}, 500 );
	/*setTimeout(function(){
		$.cookie('btnFlg') == 'on'?$(".pop_area").hide():$(".pop_area").fadeIn(100);
		//$('.pop_area').fadeIn(100);
	},5000);
	$('.pop_close').click(function(){
		$.cookie('btnFlg', 'on', { expires: 1,path: '/' });
		$('.pop_area').fadeOut(300);
	});	*/
    var ua = navigator.userAgent;
	if((ua.indexOf('Android') > 0 && ua.indexOf('Mobile') == -1) || ua.indexOf('iPad') > 0 || ua.indexOf('Kindle') > 0 || ua.indexOf('Silk') > 0){
			 $('head').prepend('<meta name="viewport" content="width=1050">');

	} else if ((ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) || ua.indexOf('iPhone') > 0 || ua.indexOf('Blackberry') > 0 || ua.indexOf('iPhone') > 0){
			$('head').prepend('<meta name="viewport" content="width=device-width,initial-scale=1">');
	}else {
			$('head').prepend('<meta name="viewport" content="width=device-width,initial-scale=1">');
	}
	
	$('.navBtn').click(function(){
		if ($('.gNav').css('display') == 'none') {
			$('.gNav').slideDown();
			$('.navBtn').addClass('is-open');
			$('body').css({overflow:'hidden'});
			$('.fv .logo').css({display:'none'});
		} else {
			$('.gNav').slideUp();
			$('.navBtn').removeClass('is-open');
			$('body').css({overflow:'inherit'});
			$('.fv .logo').fadeIn();
		}
	});	
	$('.current_list span').click(function(){
		$('.sub_menu').slideUp();
		$('.current_list span').removeClass('active');
		if ($(this).next('.sub_menu').css('display') == 'none') {
			$(this).next('.sub_menu').slideDown();
			$(this).addClass('active');
		} else {
			$(this).next('.sub_menu').slideUp();
			$(this).removeClass('active');
		}
	});

/* ------------------------------------------
   *
   *  SP/PC画像置き換え
   *
------------------------------------------ */
//$(window).load(function(){

/* ------------------------------------------
   *
   *  js_accordion
   *
  ------------------------------------------ */
	$('.js_accordion_content').hide();
	$('.js_accordion .js_accordion_openbar').click(function(){
		$(this).next('.js_accordion_content').slideToggle();
		$(this).toggleClass('active');
	});
/* ------------------------------------------
   *
   *  scroll action
   *
------------------------------------------ */
    var topBtn = $('.pageTop');    
    topBtn.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });

 /* ------------------------------------------
   *
   *  js_accordion
   *
   ------------------------------------------ */
   const tab_menu = $('.js-tab-menu');
    /*$('.js-tab-menu').on('click', function(){
        $('.is-active').removeClass('is-active');
        $(this).addClass('is-active');
        const key = tab_menu.index(this);
        $('.access__body').removeClass('is-show').eq(key).addClass('is-show');
    });*/
    $('.js-tab-menu').on('click', function(){
        const key = tab_menu.index(this);
        $(this).siblings().removeClass('is-active');
        $(this).addClass('is-active');
		$(this).closest('.js-tab-menu_parent').siblings('.tab__body').removeClass('is-show');
        $('.tab__body').eq(key).addClass('is-show');
    });
    $('.current_list').hover(function(){
        if ($(this).children('.sub_menu').css('display') == 'none') {
            $(this).children('.sub_menu').fadeIn(0).stop(false, true).animate({marginTop:'20px', opacity:1},400);
            //$(this).addClass('active');
        } else {
            $(this).children('.sub_menu').fadeOut(0).stop(false, true).animate({marginTop:'0px', opacity:0},400);
            $(this).removeClass('active');
        }
    });
});

$(window).on('load', function() {
	var url = $(location).attr('href');
	if(url.indexOf("#") != -1){
		var anchor = url.split("#");
		var target = $('#' + anchor[anchor.length - 1]);
		if(target.length){
			var pos = Math.floor(target.offset().top) - 100;
			$("html, body").animate({scrollTop:pos}, 500);
		}
	}
    var wi = $(window).width();
    var xw = 767;
    if (wi > xw) {
        var headerHight = 120;
        $('a[href^="#"]').not('.inline_contents').click(function(){
          var href = $(this).attr('href');
          var target = $(href == '#' || href === '' ? 'html' : href);
          var position = target.offset().top - headerHight;
          $('html,body').animate({scrollTop : position}, 500);
          return false;
        });
	}else{
	    var headerHight = 60;
        $('a[href^="#"]').not('.inline_contents').click(function(){
          var href = $(this).attr('href');
          var target = $(href == '#' || href === '' ? 'html' : href);
          var position = target.offset().top - headerHight;
          $('html,body').animate({scrollTop : position}, 500);
          return false;
        });	
	}

});
$(window).on('load scroll', function(){
   $(".fadein").each(function(){
      var imgPos = $(this).offset().top;    
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > imgPos - windowHeight + windowHeight/3){
          $(this).addClass('on');
      }
    });
   $(".fadein_list").each(function(){
      var imgPosLi = $(this).offset().top;    
      var scrollLi = $(window).scrollTop();
      var windowHeightLi = $(window).height();
      if (scrollLi > imgPosLi - windowHeightLi + windowHeightLi/5){
          $(this).addClass('on_list');
      }
    });
});