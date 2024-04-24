AOS.init();

// $(".testimonial-sec").ripples({ resolution: 512, dropRadius: 20, perturbance: 0.04 });

$('.service-slider .owl-carousel').owlCarousel({
	loop: false,
	margin: 0,
	nav: true,
	dots: false,
	autoplay: true,
	autoplayTimeout: 4000,
	navText: ["<img src='./images/serv-slider-prev-img.png'>", "<img src='./images/serv-slider-next-img.png'>"],
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 1
		},
		1000: {
			items: 3
		}
	}
})


$('#demo').carousel({
	interval: 2000,
	cycle: true
});


$('.package-slider-box .owl-carousel').owlCarousel({
	loop: true,
	margin: 10,
	nav: true,
	navText: ["<img src='./images/package-prev-img.png'>", "<img src='./images/package-next-img.png'>"],
	dots: false,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 1
		},
		991: {
			items: 2
		},
		1000: {
			items: 3
		}
	}
})


$('.creation-slider .owl-carousel').owlCarousel({
	loop: true,
	margin: 10,
	nav: true,
	autoplay: true,
	autoplayTimeout: 4000,
	navText: ["<img src='./images/creation-prev-img.png'>", "<img src='./images/creation-next-img.png'>"],
	dots: false,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 2
		},
		1000: {
			items: 3
		}
	}
})

$('.testimonial-slider .owl-carousel').owlCarousel({
    animateOut: 'fadeOut',
    items:1,
    margin:30,
    stagePadding:30,
    smartSpeed:450,
	nav: true,
	navText: ["<img src='./images/test-prev-img.png'>", "<img src='./images/test-next-img.png'>"],
	autoplay: true,
	autoplayTimeout: 5000,
})


$('.tlt').textillate({
	loop: true,
	in: {
		effect: 'fadeInLeft',
		delayScale: 8,
		sync: false,
		shuffle: false,
		reverse: true
	},
	out: {
		effect: 'fadeOutRight',
		delayScale: 8,
		sync: false,
		shuffle: false,
		reverse: true
	},
});


$('.tlt-2').textillate({
	loop: true,
	in: {
		effect: 'bounceIn',
		delayScale: 8,
		sync: false,
		shuffle: false,
		reverse: false,
		sequence: true
	},
	out: {
		effect: 'bounceOut',
		delayScale: 8,
		sync: false,
		shuffle: false,
		reverse: false,
		sequence: true
	},
});

$('.tlt-3').textillate({
	loop: true,
	in: {
		effect: 'bounceIn',
		delayScale: 8,
		sync: false,
		shuffle: false,
		reverse: false,
		sequence: true
	},
	out: {
		effect: 'bounceOut',
		delayScale: 8,
		sync: false,
		shuffle: false,
		reverse: false,
		sequence: true
	},
});



function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}

$(window).width() <= 991 &&
	0 != ".counter-responsive-slider".length &&
	($(".counter-responsive-slider").addClass("owl-carousel owl-theme"),
		$(".counter-responsive-slider").owlCarousel({
			loop: !1,
			margin: 0,
			nav: !1,
			dots: !1,
			autoplay: !1,
			autoplayTimeout: !1,
			autoplayHoverPause: !1,
			mouseDrag: !0,
			responsive: {
				0: {
					items: 1
				},
				460: {
					items: 1
				},
				991: {
					items: 4
				}
			},
		}));


$(window).width() <= 991 &&
	0 != ".awards-responsive-slider".length &&
	($(".awards-responsive-slider").addClass("owl-carousel owl-theme"),
		$(".awards-responsive-slider").owlCarousel({
			loop: !1,
			margin: 0,
			nav: !1,
			dots: !1,
			autoplay: !1,
			autoplayTimeout: !1,
			autoplayHoverPause: !1,
			mouseDrag: !0,
			responsive: {
				0: {
					items: 2
				},
				460: {
					items: 3
				},
				767: {
					items: 3
				},
				991: {
					items: 3
				}
			},
		}));


$(window).width() <= 991 &&
	0 != ".about-services-responsive-slider".length &&
	($(".about-services-responsive-slider").addClass("owl-carousel owl-theme"),
		$(".about-services-responsive-slider").owlCarousel({
			loop: !1,
			margin: 0,
			nav: !1,
			dots: !1,
			autoplay: !1,
			autoplayTimeout: !1,
			autoplayHoverPause: !1,
			mouseDrag: !0,
			responsive: {
				0: {
					items: 1
				},
				460: {
					items: 1
				},
				767: {
					items: 1
				},
				991: {
					items: 1
				}
			},
		}));

$('.feature-slider-box .owl-carousel').owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	dots: true,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 2
		},
		1000: {
			items: 4
		}
	}
});


$(window).width() <= 991 &&
	0 != ".video-anim-process-responsive-slider".length &&
	($(".video-anim-process-responsive-slider").addClass("owl-carousel owl-theme"),
		$(".video-anim-process-responsive-slider").owlCarousel({
			loop: !1,
			margin: 0,
			nav: !1,
			dots: !1,
			autoplay: !1,
			autoplayTimeout: !1,
			autoplayHoverPause: !1,
			mouseDrag: !0,
			responsive: {
				0: {
					items: 1
				},
				460: {
					items: 1
				},
				767: {
					items: 1
				},
				991: {
					items: 2
				}
			},
		}));


$(window).width() <= 991 &&
	0 != ".content-serv-sec-responsive-slider".length &&
	($(".content-serv-sec-responsive-slider").addClass("owl-carousel owl-theme"),
		$(".content-serv-sec-responsive-slider").owlCarousel({
			loop: !1,
			margin: 0,
			nav: !1,
			dots: !1,
			autoplay: !1,
			autoplayTimeout: !1,
			autoplayHoverPause: !1,
			mouseDrag: !0,
			responsive: {
				0: {
					items: 1
				},
				460: {
					items: 1
				},
				767: {
					items: 2
				},
				991: {
					items: 2
				}
			},
		}));


$(window).width() <= 991 &&
	0 != ".features-box-responsive-slider".length &&
	($(".features-box-responsive-slider").addClass("owl-carousel owl-theme"),
		$(".features-box-responsive-slider").owlCarousel({
			loop: !1,
			margin: 0,
			nav: !1,
			dots: !1,
			autoplay: !1,
			autoplayTimeout: !1,
			autoplayHoverPause: !1,
			mouseDrag: !0,
			responsive: {
				0: {
					items: 1
				},
				460: {
					items: 1
				},
				767: {
					items: 1
				},
				991: {
					items: 2
				}
			},
		}));


$(window).width() <= 991 && 0 != ".seo-process-responsive-slider".length &&
	($(".seo-process-responsive-slider").addClass("owl-carousel owl-theme"),
		$(".seo-process-responsive-slider").owlCarousel({
			loop: !1,
			margin: 0,
			nav: !1,
			dots: !1,
			autoplay: !1,
			autoplayTimeout: !1,
			autoplayHoverPause: !1,
			mouseDrag: !0,
			responsive: {
				0: {
					items: 1
				},
				460: {
					items: 1
				},
				767: {
					items: 1
				},
				991: {
					items: 1
				}
			},
		}));





		$('.branding-content-serv-slider .owl-carousel').owlCarousel({
			loop:false,
			margin:10,
			nav:false,
			dots:false,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:4
				}
			}
		})
		


		//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}


$(".package-main-box .package-content .slim-scroll ul").slimScroll({
	height: "400px",
	color: "#db1e5a"
}), 0 != $(".scroll").length && $(".scroll").slimScroll({
	height: "150px",
	size: "6px",
	color: "#2582eb",
	alwaysVisible: !0,
	distance: "16px",
	railVisible: !0,
	railColor: " #2582eb",
	railOpacity: 1,
	railBorderRadius: "0px",
	wheelStep: 10,
	disableFadeOut: !1
});





$(document).ready(function () {
	$('.dmenu').hover(function () {
			$(this).find('.sm-menu').first().stop(true, true).slideDown();
		}, function () {
			$(this).find('.sm-menu').first().stop(true, true).slideUp()
		});
	}); 
	 
		$(document).ready(function() {
		$(".megamenu").on("click", function(e) {
			e.stopPropagation();
		});
	});
	



var a = 0;
$(window).scroll(function () {
	var e = $("#counter").offset().top - window.innerHeight;
	0 == a &&
		$(window).scrollTop() > e &&
		($(".counter-value").each(function () {
				var e = $(this),
					s = e.attr("data-count");
				$({
					countNum: e.text()
				}).animate({
					countNum: s
				}, {
					duration: 7e3,
					easing: "swing",
					step: function () {
						e.text(Math.floor(this.countNum));
					},
					complete: function () {
						e.text(this.countNum);
					},
				});
			}),
			(a = 1));
});

$(".order-package").on("click", function () {
	let ele = $(this);
	let popup_form = $('#popupformpackage');
	popup_form.find('input[name="lead_area"]').val(ele.attr('data-price'));
	popup_form.find('input[name="lead_org_price"]').val(ele.attr('data-price-text'));
	popup_form.find('input[name="short_desc"]').val(ele.attr('data-title'));
});

$('.pricing-tabs-box a').on('click', function () {
	$('#popupformpackage').find('input[name="package[]"]').val($(this).attr('data-package-type'));
});