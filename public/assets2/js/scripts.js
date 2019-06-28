(function ($) {
 "use strict";

	/*----------------------------
	 wow js active
	------------------------------ */
	 new WOW().init();

	/*------------- preloader js --------------*/
	$(window).on('load',function() { // makes sure the whole site is loaded
		$('.preloder-wrap').fadeOut(); // will first fade out the loading animation
		$('.loader').delay(150).fadeOut('slow'); // will fade out the white DIV that covers the website.
		$('body').delay(150).css({'overflow':'visible'})
	})

    // search
	$(".search-wrap ul li a").on("click", function(){
		$(".search-area").addClass("active");
	});
	$(".search-area span.closs-btn ").on("click", function(){
		$(".search-area").removeClass("active");
	});
	// // stickey menu
	$(window).on('scroll',function() {
		var scroll = $(window).scrollTop(),
			mainHeader = $('#sticky-header'),
			mainHeaderHeight = mainHeader.innerHeight();

		// console.log(mainHeader.innerHeight());
		if (scroll > 2) {
			$("#sticky-header").addClass("sticky");
		}else{
			$("#sticky-header").removeClass("sticky");
		}
	});

    // slicknav
	$('ul#navigation').slicknav({
		prependTo:".responsive-menu-wrap"
	});


	// slider-active
	$('.slider-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		animateOut: 'fadeOut',
		animateIn: 'FadepIn',
		nav:true,
		autoplay:true,
		autoplayTimeout:3000,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			450:{
				items:1
			},
			678:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})

	//slider-area background setting
    function sliderBgSetting() {
        if ($(".slider-area .slider-items").length) {
            $(".slider-area .slider-items").each(function() {
                var $this = $(this);
                var img = $this.find(".slider").attr("src");

                $this.css({
                    backgroundImage: "url("+ img +")",
                    backgroundSize: "cover",
                    backgroundPosition: "center center"
                })
            });
        }
    }

    //    home2 slider   //
    //Setting hero slider home page 1
    function heroSlider() {
        if ($(".slider-active2").length) {

            var time = 7, // time in seconds
                $progressBar,
                $bar,
                $elem,
                isPause,
                tick,
                percentTime,
                owl = $('.slider-active2');


            owl.owlCarousel({
                items : 1,
                smartSpeed:5000,
				margin:0,
				animateOut: 'slideOutDown',
				animateIn: 'slideInDown',
				nav:true,
                rtl:true,
				autoplay:true,
				autoplayTimeout:6000,
				loop:true,
				navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                onInitialized: progressBar
            });

            owl.on('changed.owl.carousel', function(event) {
               moved();
            })

            // progress bar
            function progressBar() {
                buildProgressBar();
                start();
            }

            function buildProgressBar(){
                $progressBar = $("<div>",{
                    id:"progressBar"
                });

                $bar = $("<div>",{
                    id:"bar"
                });

                $progressBar.append($bar).prependTo(owl);
            }

            function start() {
                percentTime = 0;
                isPause = false;
                tick = setInterval(interval, 10);
            };

            function interval() {
                if(isPause === false){
                    percentTime += 1 / time;

                    $bar.css({
                        width: percentTime+"%"
                    });

                    if(percentTime >= 500){
                        owl.trigger("next.owl.carousel");
                        percentTime = 0;
                    }
                }
            }

            function moved(){
                clearTimeout(tick);
                start();
            }
        }
    }

	heroSlider();

	// slider-active
	$(".slider-active2").on('translate.owl.carousel', function(){
		$('.slider-content h2').removeClass('fadeInUp animated').hide();
		$('.slider-content p').removeClass('fadeInUp animated').hide();
		$('.slider-content ul').removeClass('fadeInUp animated').hide();
	});

	$(".slider-active2").on('translated.owl.carousel', function(){
		$('.owl-item.active .slider-content h2').addClass('fadeInUp animated').show();
		$('.owl-item.active .slider-content p').addClass('slideInUp animated').show();
		$('.owl-item.active .slider-content ul').addClass('fadeInUp animated').show();
	});

    // slider-active
	$('.slider-active3').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:true,
		autoplay:true,
		autoplayTimeout:3000,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			450:{
				items:1
			},
			678:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})

    // slider-active
	$(".slider-active3").on('translate.owl.carousel', function(){
		$('.slider-content h2').removeClass('fadeInUp animated').hide();
		$('.slider-content p').removeClass('fadeInUp animated').hide();
		$('.slider-content ul').removeClass('fadeInUp animated').hide();
	});

	$(".slider-active3").on('translated.owl.carousel', function(){
		$('.owl-item.active .slider-content h2').addClass('fadeInUp animated').show();
		$('.owl-item.active .slider-content p').addClass('slideInUp animated').show();
		$('.owl-item.active .slider-content ul').addClass('fadeInUp animated').show();
	});
	/*==========================================================================
        WHEN DOCUMENT LOADING
    ==========================================================================*/
	$(window).on('load', function() {

		sliderBgSetting();

	});

    // Parallax background
    function bgParallax() {
        if ($(".parallax").length) {
            $(".parallax").each(function() {
                var height = $(this).position().top;
                var resize     = height - $(window).scrollTop();
                var parallaxSpeed = $(this).data("speed");
                var doParallax = -(resize / parallaxSpeed);
                var positionValue   = doParallax + "px";
                var img = $(this).data("bg-image");

                $(this).css({
                    backgroundImage: "url(" + img + ")",
                    backgroundPosition: "50%" + positionValue,
                    backgroundSize: "cover",
                });

                if ( window.innerWidth < 768) {
                    $(this).css({
                        backgroundPosition: "center center"
                    });
                }
            });
        }
    }
	$(window).on("scroll", function() {
		bgParallax();
	});


	// // stickey menu
	$(window).on('scroll',function() {
		var scroll = $(window).scrollTop(),
			mainHeader = $('#sticky-header'),
			mainHeaderHeight = mainHeader.innerHeight();

		// console.log(mainHeader.innerHeight());
		if (scroll > 1) {
			$("#sticky-header").addClass("sticky");
		}else{
			$("#sticky-header").removeClass("sticky");
		}
	});

	// hover effect
	$(".portfolio").snakeify({speed: 300});
	$(".team-wrap2 .team-img").snakeify({speed: 300});

	/*--------------------------
	 scrollUp
	---------------------------- */
	$.scrollUp({
		scrollText: '<i class="fa fa-arrow-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});

	/*--
	Magnific Popup
	------------------------*/
	$('.popup').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}

	});

	/* magnificPopup video view */
	$('.video-popup').magnificPopup({
		type: 'iframe',
		gallery:{
			enabled:true
		}
	});

	// counter up
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});

	/*-------------------------------------------------------
        blog details
    -----------------------------------------------------*/
    if ($(".about-area,.featured-area,.skill-area").length) {
        var post = $(".about-area .about-img, .featured-img,.skill-area .skill-img");

        post.each(function() {
            var $this = $(this);
            var entryMedia = $this.find("img");
			var entryMediaPic = entryMedia.attr("src");

            $this.css({
                backgroundImage: "url("+ entryMediaPic +")",
                backgroundSize: "cover",
                backgroundPosition: "center center",
            })
        })
    }

    function setTwoColEqHeight($col1, $col2) {
        var firstCol = $col1,
            secondCol = $col2,
            firstColHeight = $col1.innerHeight(),
            secondColHeight = $col2.innerHeight();

        if (firstColHeight > secondColHeight) {
            secondCol.css({
                "height": firstColHeight + 1 + "px"
            })
        } else {
            firstCol.css({
                "height": secondColHeight + 1 + "px"
            })
        }
    }


	$(window).on("load", function() {
		setTwoColEqHeight($(".about-area .about-img"), $(".about-area .about-wrap"));
		setTwoColEqHeight($(".featured-content .featured-img"), $(".featured-content .featured-info"));
		setTwoColEqHeight($(".skill-area .skill-img"), $(".skill-area .skill-wrap"));

	});


	// test-active
	$('.test-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:false,
		autoplay:true,
		autoplayTimeout:6000,
		loop:true,
		slideBy:2,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
				slideBy:1
			},
			450:{
				items:1,
				slideBy:1
			},
			678:{
				items:2
			},
			1000:{
				items:2
			}
		}
	})

    // pricing-active
	$('.pricing-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:true,
		loop:true,
		slideBy:2,
		navText:['<i class="fa fa-angle-right"></i>','<i class="fa fa-angle-left"></i>'],
		responsive:{
			0:{
				items:1,
			},
			450:{
				items:1,
			},
			600:{
				items:2,
			},
			800:{
				items:3,
			},
			1000:{
				items:3
			}
		}
	})

    // pricing-active
	$('.single-service-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:true,
		loop:true,
		slideBy:2,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
			},
			450:{
				items:1,
			},
			600:{
				items:1,
			},
			800:{
				items:1,
			},
			1000:{
				items:1
			}
		}
	})

    $('.grid').imagesLoaded( function() {

	// filter items on button click
	$('.portfolio-menu').on( 'click', 'button', function() {
    	  var filterValue = $(this).attr('data-filter');
    	  $grid.isotope({ filter: filterValue });
    	});

    	// init Isotope
    	var $grid = $('.grid').isotope({
    	  itemSelector: '.portfolio',
    	  percentPosition: true,
    	  masonry: {
    		// use outer width of grid-sizer for columnWidth
    		columnWidth: '.portfolio',
    	  }
    	});
	});

	$('.portfolio-menu button').on('click', function(event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	});

    // brand-active
	 $('.brand-active').owlCarousel({
        margin:0,
		loop:true,
		autoplay:true,
		autoplayTimeout:4000,
        nav:false,
		smartSpeed:800,
        navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
        URLhashListener:true,
        startPosition: 'URLHash',
        responsive:{
            0:{
                items:2
            },
            450:{
                items:2
            },
            768:{
                items:4
            },
            1000:{
                items:5
            }
        }
    });

    /*------------------------------------------
        Pricing table switcher
    -------------------------------------------*/
    if ($(".pricing-switcher-wrap").length) {
        var switcher = $(".pricing-switcher-wrap .pricing-switch");
        var pricingTab = $(".pricing-table");
        var tablist = $(".pricing-switcher-wrap .pricing-tablist");


        switcher.on("click", function() {
            var $this = $(this);
            $this.find(".pricing-slider").toggleClass("pricing-slide-off");
            pricingTab.children(".pricing-grids").toggleClass("active-price");
            tablist.children("span").toggleClass("active");
        })
    }
    /*---------------------
	 countdown
	--------------------- */
	$('[data-countdown]').each(function() {
		  var $this = $(this), finalDate = $(this).data('countdown');
		  $this.countdown(finalDate, function(event) {
			$this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
		});
	});
    
	/*===============================================
                    rtl-sj start
    =================================================*/

    // slider-active
	$('.rtl-slider-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		rtl:true,
		animateOut: 'fadeOut',
		animateIn: 'FadepIn',
		nav:true,
		autoplay:true,
		autoplayTimeout:3000,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			450:{
				items:1
			},
			678:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
    // test-active
	$('.rtl-test-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
        rtl:true,
		nav:false,
		autoplay:true,
		autoplayTimeout:6000,
		loop:true,
		slideBy:2,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
				slideBy:1
			},
			450:{
				items:1,
				slideBy:1
			},
			678:{
				items:2
			},
			1000:{
				items:2
			}
		}
	})

    // pricing-active
	$('.rtl-pricing-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:true,
		rtl:true,
		loop:true,
		slideBy:2,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
			},
			450:{
				items:1,
			},
			600:{
				items:2,
			},
			800:{
				items:3,
			},
			1000:{
				items:3
			}
		}
	})
    // brand-active
	 $('.rtl-brand-active').owlCarousel({
        margin:0,
		loop:true,
		rtl:true,
		autoplay:true,
		autoplayTimeout:4000,
        nav:false,
		smartSpeed:800,
        navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
        responsive:{
            0:{
                items:2
            },
            450:{
                items:2
            },
            768:{
                items:4
            },
            1000:{
                items:5
            }
        }
    });
    // pricing-active
	$('.rtl-single-service-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:true,
        rtl:true,
		loop:true,
		slideBy:2,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
			},
			450:{
				items:1,
			},
			600:{
				items:1,
			},
			800:{
				items:1,
			},
			1000:{
				items:1
			}
		}
	})
	
	// slider-active
	$('.rtl-slider-active3').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:true,
		rtl:true,
		autoplay:true,
		autoplayTimeout:3000,
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			450:{
				items:1
			},
			678:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})

    // slider-active
	$(".rtl-slider-active3").on('translate.owl.carousel', function(){
		$('.slider-content h2').removeClass('fadeInUp animated').hide();
		$('.slider-content p').removeClass('fadeInUp animated').hide();
		$('.slider-content ul').removeClass('fadeInUp animated').hide();
	});

	$(".rtl-slider-active3").on('translated.owl.carousel', function(){
		$('.owl-item.active .slider-content h2').addClass('fadeInUp animated').show();
		$('.owl-item.active .slider-content p').addClass('slideInUp animated').show();
		$('.owl-item.active .slider-content ul').addClass('fadeInUp animated').show();
	});
	
	
	    // pricing-active
	$('.rtl-single-service-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		nav:true,
		rtl:true,
		loop:true,
		slideBy:2,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
			},
			450:{
				items:1,
			},
			600:{
				items:1,
			},
			800:{
				items:1,
			},
			1000:{
				items:1
			}
		}
	})
    /*===============================================
                    rtl-sj end
    =================================================*/  

    /*---------------------
    // Ajax Contact Form
    --------------------- */

    $('.cf-msg').hide();
    $('form#cf button#submit').on('click', function() {
        var fname = $('#fname').val();
        var subject = $('#subject').val();
        var email = $('#email').val();
        var msg = $('#msg').val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!regex.test(email)) {
            alert('Please enter valid email');
            return false;
        }

        fname = $.trim(fname);
        subject = $.trim(subject);
        email = $.trim(email);
        msg = $.trim(msg);

        if (fname != '' && email != '' && msg != '') {
            var values = "fname=" + fname + "&subject=" + subject + "&email=" + email + " &msg=" + msg;
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: values,
                success: function() {
                    $('#fname').val('');
                    $('#subject').val('');
                    $('#email').val('');
                    $('#msg').val('');

                    $('.cf-msg').fadeIn().html('<div class="alert alert-success"><strong>Success!</strong> Email has been sent successfully.</div>');
                    setTimeout(function() {
                        $('.cf-msg').fadeOut('slow');
                    }, 4000);
                }
            });
        } else {
            $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please fillup the informations correctly.</div>')
        }
        return false;
    });

})(jQuery);
