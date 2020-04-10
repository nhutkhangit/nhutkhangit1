(function($) {
"use strict";
var KANG = KANG || {};
	
	KANG.Owlcarousel = function (){
		$('.owl-kang').each(function(){
			$(this).owlCarousel({
				items : $(this).data('column'), //column items above 1000px browser width
				itemsDesktop : [1400, $(this).data('column')], //column items between 1000px and 901px
				itemsDesktopSmall : [1024, $(this).data('tabletsmall')], // column items betweem 900px and 601px
				itemsTablet: [768, $(this).data('tablet')], //column items between 600 and 0;
				itemsMobile : [479, $(this).data('mobile')], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination: false,
				autoPlay: $(this).data('auto')
			});
		});
	}
	
	KANG.flexslider = function () {
		$('.home-flexslider').each(function () {
			$(this).flexslider({
				directionNav: true,
				controlNav: false,
				animation: "fade",
				prevText: '',
				nextText: '',
			});
		});
	}
	
	/* Lightbox
	--------------------------------------------------------------------------------------------- */
	KANG.lightbox = function(){
		if ( $().magnificPopup) {
			/* gallery */
			$('.kang-popup-gallery').magnificPopup({
				delegate	: 'a', // the selector for gallery item
				type		: 'image',
				gallery: {
				  enabled:true
				}
				// other options
			});
			
		}; // if magnificPopup exists
	};	// lightbox
	
	/* Check mail is true */
	function KangIsEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}
	
	$(document).ready(function(){
		
		/* Nivo Slider */
		KANG.flexslider();
		
		/* Owlcarousel */
		KANG.Owlcarousel();
		
		/* Lightbox */
		KANG.lightbox();
		
		/* Scroll mouse to show/hide go to top */
		$(window).scroll(function(){
			if ($(this).scrollTop() > 500 ) {
				$('a.k-gototop').fadeIn();
			} else {
				$('a.k-gototop').fadeOut();
			}
		});
		
		/* Click to to top */
		$('a.k-gototop').click(function(){
			$("html, body").animate({ scrollTop: 0 }, "normal");
			return false;
		});
		
		/* Run animation when scroll mouse */
		$('.come-on').each(function(){
			var $this=$(this),
				delay = $this.data('delay');
			if ( typeof delay != 'undefined' ){
				$this.one('inview', function(event, isInView, visiblePartX, visiblePartY) {
					setTimeout(function(){						 
						$this.addClass("animated");
					}, delay );
				}); // inview
			}
		}); // each
		
		/* Single product preview image */
		$('.list-view-images a').click(function(){
			var $this = $(this),
				fullhref = $this.data('href'),
				href = $this.children().attr('src');
			var appendHTML = '<span class="message-popup"><i class="fa fa-search"></i>Click để xem ảnh lớn hơn</span><a href="'+fullhref+'" class="large-view"><img src="'+href+'" alt="Lager thumbnail" /></a>';
			$('#ksingle-lager-view').html('');
			$('<div></div>').appendTo("#ksingle-lager-view").hide().append(appendHTML).fadeIn(500);
		});
		
		/* Click to slideDown banner right */
		$('.bn-right .kclose-btn').click(function (){
			var $this_banner = $(this).closest('.bn-right'),
				banner_height = $this_banner.height();
			$this_banner.css('bottom', '-' + banner_height + 'px');
		});
		
		/* Click to hide/open banner right */
		$('.bn-right .khide-btn').click(function (){
			var $this = $(this),
				$this_banner = $this.closest('.bn-right'),
				banner_height = $this_banner.height();
			if( !$this.hasClass('hide-popup') ){
				$this.text('+');
				$this_banner.css('bottom', '-' + ( banner_height - 24 ) + 'px');
				$this.addClass('hide-popup');
			} else {
				$this.text('-');
				$this_banner.css('bottom', '0');
				$this.removeClass('hide-popup');
			}
		});
		
		/* Click to open / close menu mobile */
		$('a.k-toogle-menu').click(function (){
			$(this).next().find('ul.nav-menu').slideToggle('fast');
		});
		
		/* Click to open popup order product */
		$('a.close-order').click(function(){
			$(this).parent().parent().removeClass('open-popup');
			$('.kang-overlay').remove();
		});
		
		/* Click to order-room */
		$('a.order-this-now').click(function(){
			$("html, body").animate({ scrollTop: 0 }, "normal");
			$('body').append('<div class="kang-overlay"></div>');
			$('.kang-overlay').addClass('fadeIn');
			$('.kang-form-order').addClass('open-popup');
		});
		
		/* Check require form */
		$('a.btn-order-popup').click(function(){
			var sex = $('.client-fill #gioi-tinh').val();
			var name = $('.client-fill #your-name').val();
			var phone = $('.client-fill #your-phone').val();
			var email = $('.client-fill #your-email').val();
			var address = $('.client-fill #your-address').val();
			var nameProduct = $(this).data('name');
			var URLSEND = $(this).data('url');
			
			if( name === '' || phone === ''){
				$('.kang-form-order .client-fill p.message').text('Bạn vui lòng nhập thông tin vào các trường có dấu *');
				$('.kang-form-order .client-fill #your-name, .kang-form-order .client-fill #your-phone').addClass('red');
			} else {
				$('.kajaxloading').fadeIn();
				$.post(
					URLSEND,
					{sex: sex, name: name, phone: phone, email: email, address: address, nameProduct: nameProduct,},
					function(data){
						if(data === 'success'){
							$('.order-success').addClass('open-popup');
						} else {
							$('.order-failed').addClass('open-popup');
						}
						$('.kang-form-order').removeClass('open-popup');
						$('.kajaxloading').fadeOut();
					}
				);
			}
		});
		
		/* CONTACT TO ME */
		$('a.kct-sendmail').click(function(){
			var nameCT = $('.kcontact-us .ct-name').val();
			var addressCT = $('.kcontact-us .ct-address').val();
			var phoneCT = $('.kcontact-us .ct-phone').val();
			var emailCT = $('.kcontact-us .ct-email').val();
			var messageCT = $('.kcontact-us .ct-message').val();
			var URLSEND = $(this).data('href');
			
			if( nameCT === '' || addressCT === '' || phoneCT === '' || emailCT === '' || messageCT === ''){
				$('.kcontact-us .message-contact').text('Bạn vui lòng nhập đầy đủ thông tin vào các mục');	
			} else if( KangIsEmail(emailCT) === false ) {
				$('.kcontact-us .message-contact').text('Bạn vui lòng nhập một địa chỉ email chính xác');
			} else {
				$('.kcontactloading').fadeIn('normal');
				$.post(
					URLSEND,
					{nameCT: nameCT, addressCT: addressCT, phoneCT: phoneCT, emailCT: emailCT, messageCT: messageCT,},
					function(data){
						if(data === 'success'){
							$('.kcontact-us .ct-name').val('');
							$('.kcontact-us .ct-address').val('');
							$('.kcontact-us .ct-phone').val('');
							$('.kcontact-us .ct-email').val('');
							$('.kcontact-us .ct-message').val('');
							$('.kcontact-us .message-contact').text('Tin nhắn của bạn đã được gửi đi, xin cám ơn bạn');
						} else {
							$('.kcontact-us .message-contact').text('Có lỗi xảy ra trong quá trình gửi tin nhắn. Bạn vui lòng thử lại sau ít phút hoặc liên hệ với người quản trị web');
						}
						$('.kcontactloading').fadeOut('normal');
					}
				);
			}
		});
		
		$('a.kct-cancel').click(function(){
			$('.kcontact-us .ct-name').val('');
			$('.kcontact-us .ct-address').val('');
			$('.kcontact-us .ct-phone').val('');
			$('.kcontact-us .ct-email').val('');
			$('.kcontact-us .ct-message').val('');
		});
		
	});

})(jQuery);	// End of file