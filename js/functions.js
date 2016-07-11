/* RESPONSIVE SLIDE */
$(function() {
    $("#slide").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 500,
        timeout: 4000,
        namespace: "callback"
        });
});

/* RESPONSIVE MENU */
$(function main(){
    $('.menu-bar').click(function(){
        $('.nav-category').slideToggle(400, function(){
            $(this).toggleClass('nav-expanded').css('display', '');
        });
    });
});