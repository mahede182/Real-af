$(function(){
    $(document).ready(function() {
        $("#owl-slide").owlCarousel({
         autoPlay: 3000,
              items : 4,
              itemsDesktop : [1199,4],
              itemsDesktopSmall : [979,3],
              itemsTablet : [768, 2],
              itemsMobile : [479, 1],
              navigation: true,
              navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
              pagination: false
        });
      });
})(jQuery)