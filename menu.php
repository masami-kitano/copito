<?php
/*
Template Name: menu
*/
?>

<?php get_header(); ?>

<div class="cp-menu-wrap">
    <div class="menu-side-img">
        <img src="<?php bloginfo('template_directory'); ?>/img/paella2.png" alt="Copito" class="side-copito-img1 pc-side-img menu-side-img"> 
        <img src="<?php bloginfo('template_directory'); ?>/img/menu-shrimp.png" alt="Copito" class="side-copito-img2 pc-side-img menu-side-img"> 
        <img src="<?php bloginfo('template_directory'); ?>/img/paella1.png" alt="Copito" class="side-copito-img3 pc-side-img menu-side-img"> 
        <img src="<?php bloginfo('template_directory'); ?>/img/menu-salad.png" alt="Copito" class="side-copito-img4 pc-side-img menu-side-img"> 
        <img src="<?php bloginfo('template_directory'); ?>/img/paella3.png" alt="Copito" class="side-copito-img5 pc-side-img menu-side-img">
        <img src="<?php bloginfo('template_directory'); ?>/img/menu-meat.png" alt="Copito" class="side-copito-img6 pc-side-img menu-side-img"> 
    </div>
    <div class="cp-menu-container">
        <div id="menu">

            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>

            <div class="post">
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div><!-- /post -->

            <?php
                endwhile;
            else:
            ?>

            <p>ページはありません！</p>

            <?php
            endif;
            ?>

        </div><!-- /posts -->
    </div>
</div>

<?php get_footer(); ?>