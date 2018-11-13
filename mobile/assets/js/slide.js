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
           arrows: false,
           dots: true
       });
    });
})(jQuery);