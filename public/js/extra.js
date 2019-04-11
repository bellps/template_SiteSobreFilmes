//mudança da navbar
$(window).scroll(function() {
    if ($('nav').offset().top > 300){
      $('nav').addClass('scrolled');
    }else{
      $('nav').removeClass('scrolled');
    }
  });


 