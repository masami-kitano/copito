<?php

function copito_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support( 'html5', array( /* HTML5のタグで出力 */
	  'search-form',
	  'comment-form',
	  'comment-list',
	  'gallery',
	  'caption',
	) );
  }
  add_action( 'after_setup_theme', 'copito_setup' );

function copito_menu_init() {
register_nav_menus( array(
	'global'  => 'グローバルメニュー',
	'utility' => 'ユーティリティメニュー',
	'drawer'  => 'ドロワーメニュー',
) );
}
add_action( 'init', 'copito_menu_init' );

// css js
function copito_enqueue_scripts() {
	// css
	wp_enqueue_style( 
		'reset-style', 
		get_template_directory_uri() . '/assets/css/reset.css', 
		array(), '1.0.0', 'all' 
	);

	wp_enqueue_style( 
		'common-style', 
		get_template_directory_uri() . '/assets/css/common.css', 
		array(), '1.0.0', 'all' 
	);

	wp_enqueue_style( 
		'main-style', 
		get_template_directory_uri() . '/style.css', 
		array(), '1.0.0', 'all' 
	);

	wp_enqueue_style(
		'fontawesome',
		'https://use.fontawesome.com/releases/v5.8.2/css/all.css'
	);
	

	// js
	wp_enqueue_script( 
		'common-script', 
		get_template_directory_uri() . '/assets/js/cp_common.js',
		array('jquery'),
		false,
		true
	);

	if( is_front_page() ) wp_enqueue_script( 
		'home-script', 
		get_template_directory_uri() . '/assets/js/cp_home.js',
		array( 'jquery' ),
		false,
	  	true
	  );

	  if ( is_page( 'menu' ) ) wp_enqueue_script( 
		'menu-script', 
		get_template_directory_uri() . '/assets/js/cp_menu.js',
		array( 'jquery' ),
		false,
	  	true
	  );

  }
  add_action( 'wp_enqueue_scripts', 'copito_enqueue_scripts' );


// Sidebar
function copito_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'copito' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);	
}
add_action( 'widgets_init', 'copito_widgets_init' );