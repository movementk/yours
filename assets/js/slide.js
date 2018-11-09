// 메인 슬라이드
(function($){
    // main visual slide
    $(document).ready(function(){
       $('.main-slide').slick({
           autoplay: true,
           autoplaySpeed: 6000,
           arrows: false,
           dots: true
       });
    });
    
    // workview sldie
    $(document).ready(function(){
       $('.details-list').slick({
           autoplay: true,
           autoplaySpeed: 6000,
           dots: false,
           arrows: true,
           prevArrow: '<button class="prev slick-arrow"><i class="icon-left-open"></i></button>',
           nextArrow: '<button class="next slick-arrow"><i class="icon-right-open"></i></button>'
       });
    });
})(jQuery);