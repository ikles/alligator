




jQuery(document).ready(function( $ ) {


	$('.toggle-mnu').click(function() {
		$(this).toggleClass('on');		
		$('.top-mnu').slideToggle().toggleClass('flex');		
		$('.top-mnu ul').toggleClass('flex');
		return false;
	});
	$('body').click(function() {		
		if($('.toggle-mnu').hasClass('on')){
			$('.toggle-mnu').removeClass('on');			
			$('.top-mnu').fadeOut();
		}
	});

	$('.top-mnu').click(function (e) {
		e.stopPropagation();
	});



	if( $("div").is(".graph-main") ) {
		var block_show = null;
		function scrollTracking(){
			var wt = $(window).scrollTop();
			var wh = $(window).height();
			var et = $('.graph-main').offset().top;
			var eh = $('.graph-main').outerHeight();
			var dh = $(document).height();

			/*if (et >= wt && et + eh <= wh + wt)*/
			if (wt + wh >= et || wh + wt == dh || eh + et < wh)
			{
				if (block_show == null || block_show == false) {
					$('.chart-col').addClass('anim');
					/*$('#console').html('Блок active полностью виден');*/
				}
				block_show = true;
			} else {
				if (block_show == null || block_show == true) {
					$('#console').html('');
				}
				block_show = false;
			}
		}
	}

	if( $("div").is(".graph-portfolios-1") ) {
		var block_show = false;

		function scrollTracking1(){
			if (block_show) {
				return false;
			}

			var wt = $(window).scrollTop();
			var wh = $(window).height();
			var et = $('.graph-portfolios-1').offset().top;
			var eh = $('.graph-portfolios-1').outerHeight();
			var dh = $(document).height();   

			if (wt + wh >= et || wh + wt == dh || eh + et < wh){
				block_show = true;

				$('.chart-col-1').addClass('anim');

			}
		}
	}

	if( $("div").is(".graph-portfolios-2") ) {
		var block_show2 = false;

		function scrollTracking2(){
			if (block_show2) {
				return false;
			}

			var wt = $(window).scrollTop();
			var wh = $(window).height();
			var et = $('.graph-portfolios-2').offset().top;
			var eh = $('.graph-portfolios-2').outerHeight();
			var dh = $(document).height();   

			if (wt + wh >= et || wh + wt == dh || eh + et < wh){
				block_show2 = true;

				$('.chart-col-2').addClass('anim');

			}
		}
	}


/*
	if( $("div").is(".graph-portfolios-2") ) {
		var block_show = null;
		function scrollTracking2(){
			var wt = $(window).scrollTop();
			var wh = $(window).height();
			var et = $('.graph-portfolios-2').offset().top;
			var eh = $('.graph-portfolios-2').outerHeight();

			if (et >= wt && et + eh <= wh + wt){
				if (block_show == null || block_show == false) {
					$('.chart-col-2').addClass('anim');					
				}
				block_show = true;
			} else {
				if (block_show == null || block_show == true) {
					$('#console').html('');
				}
				block_show = false;
			}
		}
	}
	*/


	$(window).scroll(function(){
		if (typeof scrollTracking == 'function') {
			scrollTracking();
		}		
	});


	$(window).scroll(function(){
		if (typeof scrollTracking1 == 'function') {
			scrollTracking1();
		}		
	});

	$(window).scroll(function(){
		if (typeof scrollTracking2 == 'function') {
			scrollTracking2();
		}		
	});












	var play_butt = $('.play-butt');
	$('.vp-a').prepend(play_butt);


	$('.chart-col').each(function () {
		var h = $(this).attr('data-height');
		$(this).css('height', h);
	});

/*
	if ($(window).width() < 768) {
		$('.center').after($('.left'));
	}
	*/


	
	
	if (typeof scrollTracking == 'function') {
		scrollTracking();
	}

	if (typeof scrollTracking1 == 'function') {
		scrollTracking1();
	}

	if (typeof scrollTracking2 == 'function') {
		scrollTracking2();
	}


	$('.portfolios-items').slick({    
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		speed: 900,
		autoplay: false,
		autoplaySpeed: 4000,
		cssEase: 'ease',
		dots: true,
		responsive: [

		{
			breakpoint: 990,
			settings: {
				slidesToShow: 1        
			}
		},
		{
			breakpoint: 640,
			settings: {
				slidesToShow: 1
			}
		}
		]
	});

	$('.news-items').slick({    
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		speed: 900,
		autoplay: false,
		autoplaySpeed: 4000,
		cssEase: 'ease',
		dots: true,
		responsive: [

		{
			breakpoint: 990,
			settings: {
				slidesToShow: 1        
			}
		},
		{
			breakpoint: 640,
			settings: {
				slidesToShow: 1
			}
		}
		]
	});	

	$('.portfolios-w .slick-arrow').click(function (e) {
		e.preventDefault();
		var numm = $('.portfolios-w .slick-dots .slick-active button').text();
		$('.num-active span').text(numm);
	});


	$('input[type="email"], input[type="text"]').attr('autocomplete', 'off')
	
	var pattern = /^[A-z0-9_.-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;

	$('.join-form .wpcf7-submit').click(function () {
		var mail = $('.join-form input[type="email"]');
		var valid = $('.join-form #valid');
		var submit = $('.join-form .wpcf7-submit');
		if(mail.val() != ''){
			if (mail.val().search(pattern) != 0){
				valid.removeClass('ok').text('Ooops! Some mistakes here.');
				return false;
			} 
			else {				
				valid.addClass('ok').text('Thanks');
			}
		}
		else {						
			valid.removeClass('ok').text('Enter your e-mail');
			return false;
		}
	});
	
	$('.subscr-form .wpcf7-submit').click(function () {
		var mail = $('.subscr-form input[type="email"]');
		var valid = $('.subscr-form #valid');
		var submit = $('.subscr-form .wpcf7-submit');
		if(mail.val() != ''){
			if (mail.val().search(pattern) != 0){
				valid.removeClass('ok').text('Ooops! Some mistakes here.');
				return false;
			} 
			else {				
				valid.addClass('ok').text('Thanks');
			}
		}
		else {
			valid.removeClass('ok').text('Enter your e-mail');
			return false;
		}	
	});
	


	$(".perc").each(function () {
		var n = $(this).text();
		n = parseInt(n) * 1;
		if(n >= 0 && n != -0){			
		}
		else {
			$(this).addClass('perc-min');
		}
	});





var arr_perc = [];
var arr_countries = [];
var i = 0;
var i_1 = 0;

$('.donut-list li').each(function () {		
	//console.log( Number($(this).find('.donut-num').html()) );
	arr_perc[i] = Number((Number($(this).find('.donut-num').html()) / 100).toFixed(3)) ;
	i++;
});

$('.donut-list li').each(function () {		
	//console.log( $(this).find('.dunut-text').html() );
	arr_countries[i_1] = $(this).find('.dunut-text').html();
	i_1++;
});










/*
items: Array(10)
0: {label: "United States", value: 0.29100000000000004}
1: {label: "United Kingdom", value: 0.223}
2: {label: "Canada", value: 0.116}
3: {label: "China", value: 0.097}
4: {label: "Germany", value: 0.061}
5: {label: "France", value: 0.053}
6: {label: "Japan", value: 0.049}
7: {label: "Sweden", value: 0.043}
8: {label: "Hong Kong", value: 0.036}
9: {label: "Other", value: 0.031}
*/

//console.log(mychart);
//console.log(mychart.spec.items[0]['value']);
// первый элемент массива

/*
var items_new_1 = [
	{label: "United States", value: 0.29100000000000004},
	{label: "United Kingdom", value: 0.223}
]
*/

console.log(arr_perc);
//console.log(arr_countries);

var items_new_1 = [];

for (var i = 0; i <= arr_perc.length - 1; i++) {
	items_new_1[i] = {label: arr_countries[i] , value: arr_perc[i]}
}

console.log(items_new_1)




var chart_div = document.getElementById("mychart");

var label_1 = Number($('.donut-num').html()) / 100;


/*
var mychart = new DonutChart(chart_div, {
	r: 180,
	stroke: 66,
	scale: 100,
	items: [
	{ label: "United States", value: .291 },
	{ label: "United Kingdom", value: .223 },
	{ label: "Canada", value: .116 },           
	{ label: "China", value: .097 },           
	{ label: "Germany", value: .061 },           
	{ label: "France", value: .053 },           
	{ label: "Japan", value: .049 },           
	{ label: "Sweden", value: .043 },           
	{ label: "Hong Kong", value: .036 },           
	{ label: "Other", value: .031 }           
	]
});
*/

var mychart = new DonutChart(chart_div, {
	r: 180,
	stroke: 66,
	scale: 100,
	items: items_new_1
});







}); //ready

