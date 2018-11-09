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
})(jQuery);