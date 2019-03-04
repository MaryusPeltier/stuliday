var slider = $('.bxslider').bxSlider({
        controls:false,
        pager:false,
});


$('#slide0').click(function(){
  $('.slides').removeClass("active");
  $('#slide0').addClass("active");
   slider.goToSlide(0);
        return false;
});
$('#slide1').click(function(){
$('.slides').removeClass("active");
  $('#slide1').addClass("active");
   slider.goToSlide(1);
        return false;
});
$('#slide2').click(function(){
$('.slides').removeClass("active");
     $('#slide2').addClass("active");
  slider.goToSlide(2);
        return false;
});
$('#slide3').click(function(){
$('.slides').removeClass("active");
     $('#slide3').addClass("active");
  slider.goToSlide(3);
        return false;
});

var fixedElementOffset = $('.mapAnnonce').offset().top;
var footerOffset = $('.footer').offset().top - 220;

var fixedElementHeight = $('.mapAnnonce').height(); 

// Check every time the user scrolls
$(window).scroll(function (event) {

    // Y position of the vertical scrollbar
    var y = $(this).scrollTop();

    if ( y >= fixedElementOffset && ( y + fixedElementHeight ) < footerOffset ) {
        $('.mapAnnonce').addClass('fixed');
        $('.mapAnnonce').removeClass('bottom');          
    }
    else if ( y >= fixedElementOffset && ( y + fixedElementHeight ) >= footerOffset ) {
        $('.mapAnnonce').removeClass('fixed');           
        $('.mapAnnonce').addClass('bottom');
    }
    else {
        $('.mapAnnonce').removeClass('fixed bottom');
    }

 });