Zepto(function($) {

	//信托资管 banner
	new Swiper('.xtzg-swiper', {
		pagination: '.pagination1',
		loop: true,
		paginationClickable: true,
		autoplayDisableOnInteraction: false,
		autoplay: 5000
	});

	//信托资管 热销产品
	new Swiper('.xtzg-hot-swiper', {
		loop: false,
		// paginationClickable: true,
		slidesPerView: 1.5,
		spaceBetween: '2.5%',
		grabCursor: true,
		autoplayDisableOnInteraction: false
	});

	//信托资管 列表分类
	new Swiper('.xtzg-lstAll-classify-swiper', {
		loop: false,
		// paginationClickable: true,
		slidesPerView: 'auto',
		spaceBetween: '5%',
		grabCursor: true,
		autoplayDisableOnInteraction: false
	});

	new Swiper('.xtzg-lstAll-classify-swiper2', {
		loop: false,
		// paginationClickable: true,
		slidesPerView: 'auto',
		spaceBetween: '10%',
		grabCursor: true,
		autoplayDisableOnInteraction: false
	});

	setTab($('.xtzg-lstAll-tabBox'), '.xtzg-lstAll-tabLst', '.xtzg-lstAll-tabMnc', 'on', null, 'tap', true);

	//阳光私募
	setTab($('.ygsm-proMainBox'), '.ygsm-proMainLst span', '.ygsm-proMainMnc', 'on', null, 'tap', true);
	//setTab($('.ygsm-chartBox'), '.ygsm-chartLst span', '.ygsm-chartData', 'on', null, 'tap',true);
	$('.ygsm-proDetail-explain').tap(function() {
		$('.ygsm-proDetail-explainPop').show();
		$(window).scrollTop(0);
	});
	$('.explainPop-click').tap(function() {
		$('.ygsm-proDetail-explainPop').hide();
	});
	$('.ygsm-selectionTime').tap(function() {
		$('.ygsm-selectionTime-popBy,.ygsm-selectionTime-popMnc').toggleClass('disnone');
	});



});