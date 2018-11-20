// 메인 슬라이드
(function($){
    // main visual slide
    $(document).ready(function(){
       $('.main-slide').slick({
           autoplay: true,
           autoplaySpeed: 3000,
           arrows: false,
           dots: true
       });
    });
    
    // workview sldie
    $(document).ready(function(){
       $('.details-list').slick({
           autoplay: true,
           autoplaySpeed: 3000,
           dots: false,
           arrows: true,
           prevArrow: '<button class="prev slick-arrow"><img src="/assets/images/work/icon_left_btn.png" alt=""></button>',
           nextArrow: '<button class="next slick-arrow"><img src="/assets/images/work/icon_right_btn.png" alt=""></button>'
       });
    });
})(jQuery);