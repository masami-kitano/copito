(function() {
    // ハンバーガーメニュー
    function toggleNav() {
        var body = document.body;
        var hamburger = document.getElementById('js-hamburger');
        var blackBg = document.getElementById('js-black-bg');
        

        hamburger.addEventListener('click', function() {
            body.classList.toggle('nav-open');
        });
        blackBg.addEventListener('click', function() {
            body.classList.remove('nav-open');
        });
        
        }
    toggleNav(); 

    jQuery(function(){
        　jQuery(window).scroll(function (){
            jQuery('.effect-fade').each(function(){
                var elemPos = jQuery(this).offset().top;
                var scroll = jQuery(window).scrollTop();
                var windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 100){
                    jQuery(this).addClass('effect-scroll');
                }
            });
        　});
    });

})();
    