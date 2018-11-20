(function($){
    // nav event
    $(document).on('click', '.nav-open', function(){
        $(this).addClass('nav-close');
        $(this).removeClass('nav-open');
        $('body').addClass('opened');
    });
    $(document).on('click', '.nav-close', function(){
        $(this).addClass('nav-open');
        $(this).removeClass('nav-close');
        $('body').removeClass('opened');
    });
    
    // quick top event
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });
    $(document).on('click', '.quick-top .btn-top', function(e) {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 150);
        e.preventDefault();
    });
})(jQuery);