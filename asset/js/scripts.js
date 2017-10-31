

	function myFuckcomment() {
			
			document.getElementById("delta").classList.remove('hidden');
			document.getElementById("submit").attr('disabled','disabled');
			var name = document.getElementById("nama").value;
			var email = document.getElementById("mail").value;
			var pesan = document.getElementById("comment_id").value;
			var comit = document.getElementById("comit").value;
			var pid = document.getElementById("pid").value;

			var dataString = {'name1': name, 'email1': email, 'pesan1': pesan, 'comit1': comit, 'pid1': pid };
			
				$.ajax({
				type: "POST",
				url: "http://[::1]/kurniawan/crud/tambah_komentar",
				data: dataString,
				success: function(data) {
					if(data == 'sukses'){
						document.getElementById("alpha").classList.remove('hidden');
						document.getElementById("delta").classList.add('hidden');
					}else{
						document.getElementById("beta").classList.remove('hidden');	
						document.getElementById("delta").classList.add('hidden');
					}
					 alert(data);
					}
				});

			
			return false;
		}


(function ($) {
	"use strict";


	$(document).ready(function () {
		$('#wtf').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		  var recipient = button.data('whatever') 
		  var modal = $(this)
		  modal.find('.modal-title').text('New message to ' + recipient)
		  modal.find('.modal-body input').val(recipient)
		})

		$('.tool-tip').tooltip();
		$('.progress-bar').on('inview', function (event, isInView) {
			if (isInView) {
				$(this).css('width',  function() {
					return ($(this).attr('aria-valuenow')+'%');
				});
			}
		});
		$('.dial').on('inview', function (event, isInView) {
			if (isInView) {
				var $this = $(this);
				var myVal = $this.attr("value");
				var color = $this.attr("data-color");
				$this.knob({
					readOnly: true,
					width: 200,
					rotation: 'anticlockwise',
					thickness: .05,
					inputColor: '#232323',
					fgColor: color,
					bgColor: '#e8e8e8',
					'draw' : function () { 
						$(this.i).val(this.cv + '%')
					}
				});
				$({
					value: 0
				}).animate({
					value: myVal
				}, {
					duration: 1000,
					easing: 'swing',
					step: function() {
						$this.val(Math.ceil(this.value)).trigger('change');
					}
				});
			}
		});

		/*==========  Alerts  ==========*/
		$('.alert').on('inview', function (event, isInView) {
			if (isInView) {
				$(this).addClass('in');
			}
		});
		$(function() {
			$('[data-hide]').on('click', function() {
				$(this).closest('.' + $(this).attr('data-hide')).fadeOut();
			});
		});

		/*==========  Accordion  ==========*/
		$('.panel-heading a').on('click', function() {
			$('.panel-heading').removeClass('active');
			$(this).parents('.panel-heading').addClass('active');
		});

		/*==========  Responsive Navigation  ==========*/
		$('.main-nav').children().clone().appendTo('.responsive-nav');
		$('.responsive-menu-open').on('click', function(event) {
			event.preventDefault();
			$('body').addClass('no-scroll');
			$('.responsive-menu').addClass('open');
		});
		$('.responsive-menu-close').on('click', function(event) {
			event.preventDefault();
			$('body').removeClass('no-scroll');
			$('.responsive-menu').removeClass('open');
		});

		/*==========  Popup  ==========*/
		$('.share').on('click', function(event) {
			event.preventDefault();
			$('.popup').fadeToggle(250);
		});
		$('.slide-out-share').on('click', function(event) {
			event.preventDefault();
			$('.slide-out-popup').fadeToggle(250);
		});

		/*==========  Slide Out  ==========*/
		$('.header-action-button').on('click', function(event) {
			event.preventDefault();
			$('.slide-out-overlay').fadeIn(250);
			$('.slide-out').addClass('open');
		});
		$('.slide-out-close').on('click', function(event) {
			event.preventDefault();
			$('.slide-out-overlay').fadeOut(250);
			$('.slide-out').removeClass('open');
		});
		$('.slide-out-overlay').on('click', function(event) {
			event.preventDefault();
			$('.slide-out-overlay').fadeOut(250);
			$('.slide-out').removeClass('open');
		});

		

		/*==========  Portfolio  ==========*/
		var $portfolioContainer = $('#portfolio').imagesLoaded(function() {
			$portfolioContainer.isotope({
				itemSelector: '.item',
				layoutMode: 'masonry'
			});
			horizontalSections();
		});
		$('#portfolio-filters').on('click', 'button', function() {
			var filterValue = $(this).attr('data-filter');
			$portfolioContainer.isotope({filter: filterValue});
		});

		/*==========  Blog  ==========*/
		var $blogContainer = $('#blog-masonry').imagesLoaded(function() {
			$blogContainer.isotope({
				itemSelector: '.blog-post',
				layoutMode: 'masonry',
				masonry: {
					columnWidth: $blogContainer.find('.blog-grid-sizer')[0]
				}
			});
			horizontalSections();
		});

		/*==========  Horizontal Scroll  ==========*/
		var hash = window.location.hash;
		var url = 1;
		var count = $('.sections-wrapper section').length;
		if (location.hash) {
			setTimeout(function() {
				window.scrollTo(0, 0);
			}, 1);
			slide('link');
		}
		function horizontalSections() {
			var vWidth = $(window).width();
			var vheight = $(window).height();
			$('.sections-wrapper > section').css('width', vWidth);
			$('.sections-wrapper').css('width', vWidth * count).css('height', $('.sections-wrapper section.active').outerHeight());
		}
		function disableButtons(url) {
			if (url == count) {
				$('.section-nav a.forward').addClass('disabled');
				$('.section-nav a.backward').removeClass('disabled');
			} else if (url == 1) {
				$('.section-nav a.backward').addClass('disabled');
				$('.section-nav a.forward').removeClass('disabled');
			} else {
				$('.section-nav a.forward').removeClass('disabled');
				$('.section-nav a.backward').removeClass('disabled');
			}
		}
		function slide($type, $this) {
			if ($type == 'forward') {
				url = url+1;
				$this.attr({ href: '#section' + url });
				$this.parent().attr({ class: 'section' + url });
			} else if ($type == 'backward') {
				url = url-1;
				$this.attr({ href: '#section' + url });
				$this.parent().attr({ class: 'section' + url });
			} else if ($type == 'mainNav') {
				var sectionNum = $this.attr('href');
				sectionNum = sectionNum.replace( /[^\d.]/g, '' );
				sectionNum = parseInt(sectionNum, 10);
				url = sectionNum;
			} else if ($type == 'link') {
				var sectionNum = hash;
				sectionNum = sectionNum.replace( /[^\d.]/g, '' );
				sectionNum = parseInt(sectionNum, 10);
				url = sectionNum;
			}
			$('.sections-wrapper section').removeClass('active');
			$('.main-nav .active').removeClass('active');
			$('.responsive-nav .active').removeClass('active');
			$('#section'+url).addClass('active');
			$('.main-nav a[href="#section'+url+'"]').parent().addClass('active');
			$('.responsive-nav a[href="#section'+url+'"]').parent().addClass('active');
			$('.sections-wrapper').css('height', $('.sections-wrapper section.active').outerHeight());
			disableButtons(url);
		}
		horizontalSections();
		$(window).on('resize', function() {
			horizontalSections();
		});
		disableButtons(url);
		$('.section-nav a.forward').on('click', function() {
			slide('forward', $(this));
		});
		$('.section-nav a.backward').on('click', function() {
			slide('backward', $(this));
		});
		$('.main-nav a').on('click', function() {
			slide('mainNav', $(this));
		});
		$('.responsive-nav a').on('click', function() {
			slide('mainNav', $(this));
			$('body').removeClass('no-scroll');
			$('.responsive-menu').removeClass('open');
		});
		$('.available').on('click', function() {
			slide('mainNav', $(this));
		});
		$('a.forward, .section-nav a.backward, .main-nav a, .responsive-nav a, .available').smoothScroll();

		/*==========  Testimonial Slider  ==========*/
		$('.testimonial-slider').owlCarousel({
			items: 1,
			autoplay: true,
			loop: true
		});

		/*==========  Portfolio Slider  ==========*/
		$('.portfolio-slider').owlCarousel({
			items: 1,
			autoplay: true,
			loop: true,
			nav: true,
			navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			dots: false
		});

	});
	
	/*==========  Validate Email  ==========*/
	function validateEmail($validate_email) {
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if( !emailReg.test( $validate_email ) ) {
			return false;
		} else {
			return true;
		}
	}
	 /* login submit */
	  $("#login-form").validate({
	 submitHandler: submitForm
	});
	   function submitForm() {		
			var data = $("#login-form").serialize();
			$.ajax({	
			type : 'POST',
			url  : '<?php echo base_url("login/aksi_login"); ?>',
			data : data,
			beforeSend: function() {	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; kirimkan ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						$("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Masuk ...');
						setTimeout(' window.location.href = "home.php"; ',4000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Masuk');
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
	var map;
	function initialize_map() {
		if ($('.map').length) {
			var myLatLng = new google.maps.LatLng(-37.814199, 144.961560);
			var mapOptions = {
				zoom: 15,
				center: myLatLng,
				scrollwheel: false,
				panControl: false,
				zoomControl: true,
				scaleControl: false,
				mapTypeControl: false,
				streetViewControl: false
			};
			map = new google.maps.Map(document.getElementById('map'), mapOptions);
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				title: 'Kurniawan',
				icon: './images/marker.png'
			});
		} else {
			return false;
		}
	}
	google.maps.event.addDomListener(window, 'load', initialize_map);

})(jQuery);
