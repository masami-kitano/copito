<?php
/*
Template Name: access
*/
?>
<?php get_header(); ?>
<div class="custom-header">
	<img src="<?php bloginfo('template_directory'); ?>/img/copito-top1.png" alt="copitoメインイメージ">
</div>
<div class="ac-container">
    <div class="ac-flex-area cp-access-area">
        <div class="ac-flex-item ac-flex-item-access">
            <div class="cp-info-access">
                <div class="cp-main-title access-title cp-access-page-title">
                    <h2>Access</h2>
                </div>
                <div class="cp-address">大阪市中央区大手通2-1-7 ニュー大手ビル1階</div>
                <div class="cp-map cp-map-access">
                    <div class="google-map google-map-access">
                    <iframe
                        width="100%"
                        height="350"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAw4SbYKeAq-0CNYzZBJrDfWhrfXJ7REFI
                            &q=Copito" allowfullscreen>
                    </iframe>
                    </div>
                </div>
                <div class="cp-access-img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/copito-top3.png" alt="Copito Shop">
                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
