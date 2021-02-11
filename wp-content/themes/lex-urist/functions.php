<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'lex_urist_setup' ) ) :
	function lex_urist_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'Главное меню', 'lex-urist' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			array(
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'lex_urist_setup' );

function lex_urist_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lex-urist' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lex-urist' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lex_urist_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lex_urist_scripts() {

	wp_enqueue_style('lex-urist-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('lex-urist-reset', get_template_directory_uri() . '/assets/css/reset.css');
  wp_enqueue_style('lex-urist-bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.css');
	wp_enqueue_style('lex-urist-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
	wp_enqueue_style('lex-urist-styles', get_template_directory_uri() . '/assets/css/styles.css');
	wp_enqueue_style('lex-urist-extra-css', get_template_directory_uri() . '/assets/css/extra.css');
	wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', false, false, true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('lex-urist-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery', null, true);
	wp_enqueue_script('lex-urist-fancybox-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', 'jquery', null, true);
	wp_enqueue_script('lex-urist-maskedinput-js', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', 'jquery', null, true);
	wp_enqueue_script('lex-urist-headhesive-js', get_template_directory_uri() . '/assets/js/headhesive.js', 'jquery', null, true);
  wp_enqueue_script('lex-urist-script-js', get_template_directory_uri() . '/assets/js/script.js', 'jquery', null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lex_urist_scripts' );

