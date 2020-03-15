(function() {
    
    jQuery(function(){
        　jQuery(window).scroll(function (){
            jQuery('.menu-sun').each(function(){
                var elemPos = jQuery(this).offset().top;
                var scroll = jQuery(window).scrollTop();
                var windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight){
                    jQuery(this).addClass('sun-scroll');
                }
            });
        　});
    });

    jQuery(function(){
        　jQuery(window).scroll(function (){
            jQuery('.menu-star').each(function(){
                var elemPos = jQuery(this).offset().top;
                var scroll = jQuery(window).scrollTop();
                var windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 400){
                    jQuery(this).addClass('star-scroll');
                }
            });
        　});
    });

    jQuery(function(){
        　jQuery(window).scroll(function (){
            jQuery('.cp-menu-star2').each(function(){
                var elemPos = jQuery(this).offset().top;
                var scroll = jQuery(window).scrollTop();
                var windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 400){
                    jQuery(this).addClass('animation-star2');
                }
            });
        　});
    });

    jQuery(function(){
        　jQuery(window).scroll(function (){
            jQuery('.cp-menu-star3').each(function(){
                var elemPos = jQuery(this).offset().top;
                var scroll = jQuery(window).scrollTop();
                var windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 400){
                    jQuery(this).addClass('animation-star3');
                }
            });
        　});
    });

})();
    