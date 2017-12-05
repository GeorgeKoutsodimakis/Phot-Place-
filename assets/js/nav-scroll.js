$(document).ready(function() {

  // CHANGE NAVBAR COLOR ON SCROLL
  $(window).scroll(function(){

    var scrollLocation = $(window).scrollTop();

    if (scrollLocation <= 30) {
      $('.navbar-default').css('background-color','transparent');
      $('.navbar-default').css('background-color','transparent');
      $('.navbar-default').css('box-shadow','0 0 0 0 rgba(0,0,0,0)');

    } else if (scrollLocation > 30) {
      $('.navbar-default').css('background-color','rgba(34, 34, 34, 1)');
      $('.navbar-default').css('box-shadow','0 0 8px 0 rgba(0,0,0,.12)');
      $('.navbar-default').css('z-index','1');
      $('.navbar-nav').css('background-color','transparent');
    }
  });


});
