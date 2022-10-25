jQuery(document).ready(function( $ ) {

  $(".toggle-mnu").click(function() {
    $(this).toggleClass("on");
    $(".top-mnu").slideToggle();
    return false;
  });

  $('body').click(function () {
    if( $(".toggle-mnu").hasClass("on") ){
      $(".toggle-mnu").removeClass("on");
      $(".top-mnu").fadeOut();
    }
  });


  $(".top-mnu").click(function (e) {
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
});






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

  $(".banner__video").fancybox({
  openEffect  : 'none',
  closeEffect : 'none',
  helpers : {
    media : {}
  }
});

$(".bvideo__w").fancybox({
  openEffect  : 'none',
  closeEffect : 'none',
  helpers : {
    media : {}
  }
});

$(".reviews__slide").fancybox({
  openEffect  : 'none',
  closeEffect : 'none',
  helpers : {
    media : {}
  }
});
  

}); //ready

