jQuery(document).ready(function ($) {
	//Sliders
	
	const feedSlider = document.querySelector('.feed .swiper');
	if (feedSlider) {
		new Swiper('.feed .swiper', {
			navigation: {
				nextEl: '.feed .next',
				prevEl: '.feed .prev',
			},
			breakpoints: {
				300: {
					slidesPerView: 1,
					spaceBetween: 20,
				},
				1215: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
			},
		});
	}

	const caseSlider = document.querySelector('.cases .swiper');
	if (caseSlider) {
		new Swiper('.cases .swiper', {
			navigation: {
				nextEl: '.cases .next',
				prevEl: '.cases .prev',
			},
			breakpoints: {
				300: {
					slidesPerView: 1,
					spaceBetween: 0,
				}
			},
		});
	}

	if (window.screen.width <= 767) {
		const howSlider = document.querySelector('.how .swiper');
		if (howSlider) {
			new Swiper('.how .swiper', {
				breakpoints: {
					300: {
						slidesPerView: 1,
						spaceBetween: 20,
					},
					579: {
						slidesPerView: 2,
						spaceBetween: 20,
					},
				},
			});
		}
	}
	if (window.screen.width <= 992) {
		const howSlider = document.querySelector('.process .swiper');
		if (howSlider) {
			new Swiper('.process .swiper', {
				breakpoints: {
					300: {
						slidesPerView: 1,
						spaceBetween: 20,
					},
					579: {
						slidesPerView: 2,
						spaceBetween: 40,
					},
				},
			});
		}
	}
	

	$('.single .cases .swiper-wrapper').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery: {
			enabled: true
		}
	});


/* const links = document.querySelectorAll('a');

if (links) {
	links.forEach((elem) => {
		if (elem.href.indexOf('#') != -1) {
			elem.classList.add('click');
		}
	});
} */



		
  $(".wpcf7").on('wpcf7mailsent', function(event){
		if (event.detail.contactFormId == '426') {
			$('#thx-sub').fadeIn(200);
			$('.popup').addClass('popup-thx');
			$('#thx-sub').removeClass('popup-thx');
			$('.overlay').fadeIn(300);
		} else {
			$('#thx').fadeIn(200);
			$('.popup').addClass('popup-thx');
			$('#thx').removeClass('popup-thx');
			$('.overlay').fadeIn(300);
		}

		setTimeout(() => {
			$('.popup').fadeOut(300);
			$('.overlay').fadeOut(300);
			$('#thx').removeClass('popup-thx');
			$('.popup').removeClass('popup-thx');
		}, 3000);
  });
  $(".wpcf7").on('wpcf7invalid', function(event){
    alert('Заполните все поля и попробуйте снова.');
  });
  $(".wpcf7").on('wpcf7mailfailed', function(event){
    alert('Ошибка отправки, попробуйте позже или свяжитесь напрямую по телефону.');
  });
	$('.call-consult').on('click', function() {
		$('.popup.callback').fadeIn(300);
		$('.overlay').fadeIn(300);
	});
	$('.call-tarif').on('click', function() {
		$('.popup.tarif').fadeIn(300);
		$('.overlay').fadeIn(300);
		$('input.input-tarif').val($(this).attr('data-tarif'));
	});
	$('.overlay').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('#thx').removeClass('popup-thx');
		$('.popup').removeClass('popup-thx');
	});
	/* $('.popup .close-button').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('#thx').removeClass('popup-thx');
		$('.popup').removeClass('popup-thx');
	}); */
	//Header
	
	if (window.screen.width <= 992) {
		$(window).scroll(function() { 
			if ($(window).scrollTop() > 200) {
				$('.header').addClass('active');
			} else {
				$('.header').removeClass('active');
			}
		});
		$('.burger').on('click', function() {
			$('.menu-mob').slideDown(200);
		});
		$('.menu-mob .close').on('click', function() {
			$('.menu-mob').slideUp(200);
		});

		$('li.menu-item-has-children > a').click(function(e) {
			e.preventDefault();
			$(this).next().next('ul').slideToggle(200);
			$(this).toggleClass('active');
		});
	} else {
		$('li.menu-item-has-children').hover(function() {
			$(this).children('ul').slideToggle(100);
		});
		$(window).scroll(function() { 
			if ($(window).scrollTop() > 200) {
				$('.header').addClass('active');
			} else {
				$('.header').removeClass('active');
			}
		});
	}

	
	//Header end
/* 	$('.about-us-video ').on('click', function() {
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
			$(this).children('img').fadeOut(0);
			$(this).children('iframe').fadeIn(300);
			$(this).children('iframe').attr('src', $(this).children('img').attr('data-video'))
		}
		
	}); */

	/* wow = new WOW({
		boxClass:     'wow',      // default
		animateClass: 'animated', // default
		offset:       0,          // default
		mobile:       true,       // default
		live:         true        // default
	});
	wow.init();
 */

		const pricessItems = document.querySelectorAll('.process .item p');
		if (pricessItems.length > 0) {
			let height = 214;
			if (window.screen.width <= 1245) {
				height = 148;
			} 
			if (window.screen.width <= 578) {
				height = 106;
			}

			pricessItems.forEach(item => {
				if (item.scrollHeight >= height) {
					const newBtn = document.createElement('div');
					newBtn.classList.add('show');
					newBtn.textContent = 'Подробнее';
					item.parentElement.appendChild(newBtn);
					item.parentElement.classList.add('show-item');
					item.style.height = `${height}px`;
					newBtn.addEventListener('click', () => {
						item.style.height = 'auto';
						item.parentElement.classList.remove('show-item');
						newBtn.remove();
					});
				}
			});
			
		}




	const accelerator = document.querySelectorAll('a');

	accelerator.forEach(e => {
		if (e.href.indexOf('accelerator') != -1) {
			e.remove();
			setTimeout(() => {
				if (e) {
					e.remove();
				}
			}, 5000);
		}
	});

	const formSmall = document.querySelectorAll('.form small');
	if (formSmall.length > 0) {
		formSmall.forEach(item => {

			const submitBtn = item.parentElement.querySelector('.button');
			submitBtn.classList.add('disabled');
			item.classList.add('uncheck');
			item.addEventListener('click', (event) => {
				console.log(event.target)
				if (event.target.classList.contains('uncheck')) {
					event.target.classList.remove('uncheck');
					submitBtn.classList.remove('disabled');
				} else {
					event.target.classList.add('uncheck');
					submitBtn.classList.add('disabled');
				}
			})
		})
	}
	const inputPhones = document.querySelectorAll('.wpcf7-tel');

	if (inputPhones.length > 0) {
		inputPhones.forEach(input => {
			IMask(input, {mask: '+{7} (000) 000-00-00'})
		});
	}

	$('.faq .item-title').on('click', function() {
		$(this).toggleClass('active');
		$(this).next().slideToggle(200);
	});

	const cases = document.querySelectorAll('.cases-wrap .item');

	if (cases.length > 0) {
		cases.forEach(item => item.addEventListener('click', (event) => event.preventDefault()))
	}

}); //end