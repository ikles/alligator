jQuery(document).ready(function( $ ) {

 $('.toggle-mnu').click(function (e) {
    e.preventDefault();
    $('.top__mnu').addClass('open');
    $('.overlay').fadeIn();
  });

  $('.overlay, .open-mnu-close').click(function () {    
    $('.top__mnu').removeClass('open');
    $('.overlay').fadeOut();
  });


  $(".top__mnu").click(function (e) {
    e.stopPropagation();
  });





/************************************/

/*$('.wrapper').prepend('<span class="eye-3"></span>');
$('body').addClass('active');


$('.eye-3').click(function (e) {
  e.preventDefault();  
  $('body').toggleClass('active');  


});*/

/************************************/






$('.reviews__slider').slick({
  infinite: true,    
  speed: 900,
  slidesToScroll: 1,
  autoplay: true,    
  slidesToShow: 3,
  cssEase: 'linear',
  autoplay: false,
  autoplaySpeed: 0,  
  arrows: true,
  pauseOnHover: true,  
  responsive: [

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2        
      }
    },
      {
      breakpoint: 481,
      settings: {
        slidesToShow: 1        
      }
    },
    ]
});



$('.sboat__slider').slick({
  infinite: true,    
  speed: 900,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,    
  cssEase: 'linear',
  autoplay: false,
  autoplaySpeed: 0,  
  arrows: true,
  dots: true,
  pauseOnHover: true, 
});

  if( $(window).width() < 641 ) {
    $(".ctable__content").mCustomScrollbar({
      axis: "x",
      theme: "dark-3",
      mouseWheel: 0,
    scrollInertia: '230'
    });    
  }

  if( $(window).width() > 640 ) {
    $(".ctable__content").mCustomScrollbar("destroy");
  }


function tabs(element) {    
  $(element).find('.tabs__list-item').click(function () {
    $(element).find('.tabs__list-item').removeClass('active');
    $(this).addClass('active');    
    let num = $(this).index();
    $(element).find('.tabs__content-list-item').removeClass('active');
    $(element).find('.tabs__content-list-item').eq(num).addClass('active');    
  });
}

tabs('.scard-main__tabs');


function popup(openLink, windowEl, closeEl) {  
  $(openLink).click(function(e) {
    e.preventDefault();
    $(windowEl).fadeIn();
    $('body').addClass('ohi');
  });
  $(closeEl).click(function(e) {
    e.preventDefault();
    $(windowEl).fadeOut();
    $('body').removeClass('ohi');
  });
  $('.modal-overlay').click(function () {
    $(this).fadeOut();
    $('body').removeClass('ohi');
  });
  $('.modal-form__block').click(function (e) {
    e.stopPropagation();  
  });
  
}

popup('.link2', '.modal-overlay_2', '.modal-close_2');
popup('.link', '.modal-overlay_1', '.modal-close_1');


$('a[href*=\\#]:not([href=\\#])').click(function () {
  elementClick = $(this).attr("href");
  destination = $(elementClick).offset().top;
  $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination - 85}, 1100);
  return false;
});


$(window).scroll(function(){
  var wt = $(window).scrollTop();  
  var wh = $(window).height();    
  if (wt > 600) {
    $('.serv-arr-up').show(400);
  }
  else {
   $('.serv-arr-up').hide();
 }
});

if($('select').length) {
  $('select').select2({
    minimumResultsForSearch: -1
  });
}



  $('[data-fancybox="gallery-1"]').fancybox({
    arrows: true,
    infobar: true,
    smallBtn: false,
    toolbar: true,
    iframe : {
      css : {
        width : '950px'
      }
    },    
    slideClass: "myClass",
    baseClass: "myclass"
  });

    $('[data-fancybox="gallery-2"]').fancybox({
    arrows: true,
    infobar: true,
    smallBtn: false,
    toolbar: true,
    iframe : {
      css : {
        width : '950px'
      }
    },    
    slideClass: "myClass",
    baseClass: "myclass"
  });

      $('[data-fancybox="gallery-3"]').fancybox({
    arrows: true,
    infobar: true,
    smallBtn: false,
    toolbar: true,
    iframe : {
      css : {
        width : '950px'
      }
    },    
    slideClass: "myClass",
    baseClass: "myclass"
  });

  $(".banner__video").fancybox({
  openEffect  : 'none',
  closeEffect : 'none',
  helpers : {
    media : {}
  }
});

$(".review__item, .bvideo__w, .charact__video-link, .reviews__slide").fancybox({
  openEffect  : 'none',
  closeEffect : 'none',
  helpers : {
    media : {}
  }
});


$(".phone_input").mask("+7 (999) 999-99-99");


$('.charact__w:odd').each(function () {
  let self = $(this);
  let charact__h = self.find('.charact__h');
  let charact__contnet = self.find('.charact__contnet');

  self.removeClass('rcpadding').addClass('lcpadding');
  charact__h.removeClass('lcpadding').addClass('rcpadding');
  charact__contnet.removeClass('lcpadding').addClass('rcpadding');
})

  

}); //ready

