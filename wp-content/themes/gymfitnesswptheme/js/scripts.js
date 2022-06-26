jQuery(document).ready(function($){
    //make the menu responsive
    $('#menu-main-navigation').slicknav({
        appendTo : '.site-header'
    });

    //RUN THE BXSLIDER ON TESTIMONIALS

    $('.testimonials-list').bxSlider({
        controls:false,
        mode: 'fade',
    });
});