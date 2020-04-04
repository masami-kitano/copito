<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="https://copito-stablo.com/wp-content/themes/copito/img/Copito.ico">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="google-site-verification" content="uA7m7oLy7i_dN8oEYcWdrnNesF7B67MbFeonGYIKCqw" />
<meta name="twitter:image" content="https://copito-stablo.com/wp-content/uploads/2020/04/copito-sns.png">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<header class="cp-header container">
        <h1 class="cp-header-logo">
            <a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/copito-logo.png" alt="Copito コピート" class="cp-logo-img"></a>
        </h1>
        <nav class="cp-header-nav">
            <?php wp_nav_menu(); ?>
        </nav>
        <div class="header-insta">
            <a href="https://www.instagram.com/copito_stablo/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div id="js-hamburger" class="hamburger">
                <span class="hamburger__line hamburger__line--1"></span>
                <span class="hamburger__line hamburger__line--2"></span>
                <span class="hamburger__line hamburger__line--3"></span>
        </div>
        <div id="js-black-bg" class="black-bg"></div>
    </header>

	<div class="site-content-contain">
		<div id="content" class="site-content">
