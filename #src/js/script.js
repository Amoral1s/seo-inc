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

	if (window.screen.width <= 767) {
		const howSlider = document.querySelector('.how .swiper');
		if (howSlider) {
			new Swiper('.how .swiper', {
				breakpoints: {
					300: {
						slidesPerView: 2,
						spaceBetween: 20,
					},
				},
			});
		}
	}
	
/* 
	$('.magnific-about').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery: {
			enabled: true
		}
	});
*/

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
	$('.overlay').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('#thx').removeClass('popup-thx');
		$('.popup').removeClass('popup-thx');
	});
	$('.popup .close-button').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('#thx').removeClass('popup-thx');
		$('.popup').removeClass('popup-thx');

	});
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
	/* $('.search-toggle').on('click', function() {
		$('.popup-search').fadeIn(300);
		$('.overlay').fadeIn(300)
	}); */
	
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

	/* if (window.screen.width <= 578) {
		const destWrap = document.querySelector('.destination-wrap')
		if (destWrap && destWrap.scrollHeight > 230) {
			const newBtn = document.createElement('div');
			newBtn.classList.add('button');
			newBtn.textContent = 'Show more';
			destWrap.parentElement.appendChild(newBtn);
			destWrap.style.height = '230px';
			destWrap.classList.add('show-more');
			newBtn.addEventListener('click', () => {
				destWrap.style.height = 'auto';
				destWrap.classList.remove('show-more');
				newBtn.remove();
			});
		}
	} */

	


/* 	const starRatingFunc = () => {
		const stars = document.querySelectorAll('.popup.review .form-stars img');
		const starsWrap = stars[0].parentElement;

		stars.forEach((e, i) => {
			e.addEventListener('click', (event) => {
				starsWrap.classList.add('selected');
				$('.stars-input').val(i + 1)
				stars.forEach(e => {
					e.classList.remove('active')
				})
				for (let r = 0; r < i + 1; r++) {
					stars[r].classList.add('active');
				}
				
			})
		})
		
		$(stars).hover(function() {
			if (!starsWrap.classList.contains('selected')) {
				$(this).addClass('active');
				$(this).prev().addClass('active');
				$(this).prev().prev().addClass('active');
				$(this).prev().prev().prev().addClass('active');
				$(this).prev().prev().prev().prev().addClass('active');
			}
		}, function() {
			if (!starsWrap.classList.contains('selected')) {
				$(this).removeClass('active');
				$(this).prev().removeClass('active');
				$(this).prev().prev().removeClass('active');
				$(this).prev().prev().prev().removeClass('active');
				$(this).prev().prev().prev().prev().removeClass('active');
			}

			
		});

	}
	 */

/* 	const blogBreadcrumbs = document.querySelector('.blog-bread > span');

	if (blogBreadcrumbs) {
		const blogLink = document.createElement('span');
		blogLink.innerHTML = `<span><a href="/our-blog/">Our blog</a></span> / `;
		const referenceElement = blogBreadcrumbs.querySelector('.breadcrumb_last');
		blogBreadcrumbs.insertBefore(blogLink, referenceElement);
	} */

	/* const singlePage = document.querySelector('.only-single-page');

	if (singlePage) {
		const navWrap = document.querySelector('.single-nav-wrap');
		const navWrapParent = navWrap.parentElement;
		const content = document.querySelector('.content');
		const contentBlocks = content.querySelectorAll('*');
		let elems = 0;
		contentBlocks.forEach((elem, index) => {
			if (elem.id) {
				const navLink = document.createElement('a');
				navLink.href = `#${elem.id}`;
				navLink.classList.add('anchor');
				navLink.textContent = elem.id.replace(/\-/g, ' ');
				navWrap.appendChild(navLink);
				elems++;
			}
		});
		if (elems === 0) {
			navWrapParent.remove();
		}
		const rating = document.querySelector('.wpd-rating-stars').cloneNode(true);
		const ratngTopWrap = document.querySelector('.new-rating');
		const ratngVotes = document.querySelector('.wpd-rating-value .wpdrc').textContent;
		const votes = document.querySelector('.votes');

		ratngTopWrap.appendChild(rating);
		votes.textContent = ratngVotes;
	} */
	/* $(".anchor").click(function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top - 50;
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
		return false;
	}); */


	/* const accelerator = document.querySelectorAll('a');

	accelerator.forEach(e => {
		if (e.href.indexOf('accelerator') != -1) {
			e.remove();
			setTimeout(() => {
				if (e) {
					e.remove();
				}
			}, 5000);
		}
	}); */
	
	/* const phonesInputs = document.querySelectorAll('.wpcf7-validates-as-tel');

	if (phonesInputs.length > 0) {
		phonesInputs.forEach(phone => {
			phone.addEventListener('input', () => {
				phone.value = phone.value.replace(/[^0-9\+\-\)\(]/g, '');
			});
		})
	} */

	const formSmall = document.querySelectorAll('.form small');
	if (formSmall.length > 0) {
		formSmall.forEach(item => {
			const submitBtn = item.parentElement.querySelector('.button');
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
}); //end