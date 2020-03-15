(function() {
    
    // スライドショー
    const setImage = [
        "https://copito-stablo.com/wp-content/themes/copito/img/copito-top1.png",
        "https://copito-stablo.com/wp-content/themes/copito/img/copito-top3.png",
    ];
    const view = document.getElementById('view');
    const next = document.getElementById('next');

    let list;
    let image;
    let current = 0;
    let clickBtn = true;

    function createSlide() {
        for (let i = 0; i < setImage.length; i++) {
        list = document.createElement('li');
        image = document.createElement('img');
        image.src = setImage[i];
        list.appendChild(image);
        }
    }
    createSlide()

    next.addEventListener('click', function() {


        if (clickBtn === true) {
        clickBtn = false;
        view.classList.add("appear");
        current++;
        if (current > setImage.length - 1) {
            current = 0;
        }
        view.src = setImage[current];
        setTimeout('view.classList.remove("appear");', 2100);
        setTimeout(function() {
            clickBtn = true;
        }, 5000);
        } else {
        return false;
        }
    });

    function autoPlay() {
        setTimeout(function() {
        next.click();
        autoPlay();
        }, 5000);
    }
    window.onload = autoPlay();

    jQuery('.bg-lunch').hover(
        function() {
            jQuery('.lunch-time').fadeIn();
            jQuery('.lunch-time-bg').fadeIn();
        },
        function() {
            jQuery('.lunch-time').fadeOut();
            jQuery('.lunch-time-bg').fadeOut();
        }
    );
    
    jQuery('.bg-takeout').hover(
        function() {
            jQuery('.takeout-time').fadeIn();
            jQuery('.takeout-time-bg').fadeIn();
        },
        function() {
            jQuery('.takeout-time').fadeOut();
            jQuery('.takeout-time-bg').fadeOut();
        }
    );

    jQuery('.bg-dinner').hover(
        function() {
            jQuery('.dinner-time').fadeIn();
            jQuery('.dinner-time-bg').fadeIn();
        },
        function() {
            jQuery('.dinner-time').fadeOut();
            jQuery('.dinner-time-bg').fadeOut();
        }
    );

    jQuery('.sns-item1 a').hover(
        function() {
            jQuery('.box1 span').fadeIn();
        },
        function() {
            jQuery('.box1 span').fadeOut();
        },
    ); 

    jQuery('.sns-item2 a').hover(
        function() {
            jQuery('.box2 span').fadeIn();
        },
        function() {
            jQuery('.box2 span').fadeOut();
        },
    ); 

})();
    