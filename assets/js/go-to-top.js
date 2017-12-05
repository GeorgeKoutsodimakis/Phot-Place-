$(function() {
        $('ul a').click(function() {
             var $anchor = $(this);

                $('html, body').animate({
                     scrollTop: $($anchor.attr('href')).offset().top
                      }, 2000);
                         return false;
                            helpers : {
                               }
                                });
   });



//go to top
   $(function(){
       $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span></div>');
          $(window).scroll(function () {
               if ($(this).scrollTop() != 0) {
                     $('#toTop').fadeIn();
                      } else {
                            $('#toTop').fadeOut();
                             }
                             });
                             $('#toTop').click(function(){
                               $("html, body").animate({ scrollTop: 0 }, 600);
                               return false;
                             });
   });
