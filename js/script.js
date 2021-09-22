(function($) {
	$('.accordion-item-head').click(function(){
        $('.accordion-item.open').removeClass('open');
        $(this).parent('.accordion-item').toggleClass('open');
    });

    $('#slider-1').slick({
        dots: false,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 580,
                settings: {
                    arrows: false
                } 
            }
        ]
    });

    $('#slider-2').slick({
        dots: false,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 580,
                settings: {
                    arrows: false
                } 
            }
        ]
    });

    $('.menu-toggle').click(function(){
        $('.nav').toggleClass('open');
    });
    $('.search-toggle').click(function(){
        $('.search-form').toggleClass('open');
    });
})( jQuery );
