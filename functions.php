<?php
/**
 * Bloom — kindergarten block theme.
 *
 * Theme setup, asset loading, block styles, and pattern registration.
 *
 * @package Bloom
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BLOOM_VERSION', '1.0.0' );

/**
 * Theme setup: supports, menus, widget areas.
 */
function bloom_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 120,
		'width'       => 320,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary menu', 'bloom' ),
		'footer'  => __( 'Footer menu', 'bloom' ),
	) );

	register_sidebar( array(
		'name'          => __( 'Footer widgets', 'bloom' ),
		'id'            => 'bloom-footer',
		'description'   => __( 'Widgets shown in the site footer.', 'bloom' ),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	load_theme_textdomain( 'bloom', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'bloom_setup' );

/**
 * Enqueue front-end assets.
 */
function bloom_assets() {
	// Google Fonts: Baloo 2 (display) + Quicksand (body).
	wp_enqueue_style(
		'bloom-fonts',
		'https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Quicksand:wght@400;500;600;700&display=swap',
		array(),
		BLOOM_VERSION
	);

	wp_enqueue_style(
		'bloom-style',
		get_stylesheet_uri(),
		array( 'bloom-fonts' ),
		BLOOM_VERSION
	);

	wp_enqueue_script(
		'bloom-theme',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		BLOOM_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'bloom_assets' );

/**
 * Enqueue editor assets.
 */
function bloom_editor_assets() {
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'bloom_editor_assets' );

/**
 * Register custom block styles.
 */
function bloom_block_styles() {
	register_block_style( 'core/button', array(
		'name'  => 'bloom-sunny',
		'label' => __( 'Sunny', 'bloom' ),
		'inline_style' => '.wp-block-button.is-style-bloom-sunny .wp-block-button__link{background-color:var(--wp--preset--color--sunny);color:var(--wp--preset--color--ink);}',
	) );

	register_block_style( 'core/button', array(
		'name'  => 'bloom-sky',
		'label' => __( 'Sky', 'bloom' ),
		'inline_style' => '.wp-block-button.is-style-bloom-sky .wp-block-button__link{background-color:var(--wp--preset--color--sky);color:#fff;}',
	) );

	register_block_style( 'core/button', array(
		'name'  => 'bloom-grass',
		'label' => __( 'Grass', 'bloom' ),
		'inline_style' => '.wp-block-button.is-style-bloom-grass .wp-block-button__link{background-color:var(--wp--preset--color--grass);color:#fff;}',
	) );

	register_block_style( 'core/image', array(
		'name'  => 'bloom-sticker',
		'label' => __( 'Sticker', 'bloom' ),
		'inline_style' => '.wp-block-image.is-style-bloom-sticker img{border-radius:1.5rem;border:5px solid #fff;box-shadow:4px 4px 0 0 #2e2a26;transform:rotate(-1.5deg);}',
	) );

	register_block_style( 'core/group', array(
		'name'  => 'bloom-soft-card',
		'label' => __( 'Soft card', 'bloom' ),
		'inline_style' => '.wp-block-group.is-style-bloom-soft-card{border-radius:1.75rem;box-shadow:0 12px 32px -12px rgba(46,42,38,.18);}',
	) );

	register_block_style( 'core/quote', array(
		'name'  => 'bloom-big',
		'label' => __( 'Big & sunny', 'bloom' ),
		'inline_style' => '.wp-block-quote.is-style-bloom-big{border-left:8px solid var(--wp--preset--color--sunny);font-size:1.5rem;border-radius:0 1rem 1rem 0;}',
	) );
}
add_action( 'init', 'bloom_block_styles' );

/**
 * Register the Bloom pattern category.
 */
function bloom_pattern_category() {
	register_block_pattern_category( 'bloom', array(
		'label' => __( 'Bloom', 'bloom' ),
	) );
}
add_action( 'init', 'bloom_pattern_category' );

/**
 * Custom excerpt length: short and friendly.
 *
 * @param int $length Default length.
 * @return int
 */
function bloom_excerpt_length( $length ) {
	return 28;
}
add_filter( 'excerpt_length', 'bloom_excerpt_length' );

/**
 * Friendly "keep reading" link for excerpts.
 *
 * @param string $more Default more string.
 * @return string
 */
function bloom_excerpt_more( $more ) {
	return sprintf(
		' &hellip; <a class="bloom-more" href="%1$s">%2$s</a>',
		esc_url( get_permalink() ),
		esc_html__( 'Keep reading', 'bloom' )
	);
}
add_filter( 'excerpt_more', 'bloom_excerpt_more' );

/**
 * Inline SVG icon helper.
 *
 * @param string $name Icon name: sun, star, heart, leaf, balloon, rainbow.
 * @return string
 */
function bloom_icon( $name ) {
	$icons = array(
		'sun'     => '<circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/>',
		'star'    => '<path d="M12 2l2.9 6.3 6.9.8-5.1 4.7 1.4 6.8L12 17.2 5.9 20.6l1.4-6.8L2.2 9.1l6.9-.8z"/>',
		'heart'   => '<path d="M12 21C7 16.5 2 12.5 2 8.5 2 5.5 4.5 3 7.5 3c1.7 0 3.4.9 4.5 2.3C13.1 3.9 14.8 3 16.5 3 19.5 3 22 5.5 22 8.5c0 4-5 8-10 12.5z"/>',
		'leaf'    => '<path d="M5 21c0-9 5-16 16-16 0 11-7 16-16 16zm0 0c3-3 6-6 9-9"/>',
		'balloon' => '<path d="M12 2a6 6 0 0 0-6 6c0 4 4 7 6 7s6-3 6-7a6 6 0 0 0-6-6zm0 15v5"/>',
		'rainbow' => '<path d="M3 18a9 9 0 0 1 18 0M6.5 18a5.5 5.5 0 0 1 11 0M10 18a2 2 0 0 1 4 0"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return sprintf(
		'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">%s</svg>',
		$icons[ $name ]
	);
}

/**
 * Render a back-to-top button in the footer.
 */
function bloom_back_to_top() {
	echo '<button class="bloom-top" aria-label="' . esc_attr__( 'Back to top', 'bloom' ) . '">&#8593;</button>';
}
add_action( 'wp_footer', 'bloom_back_to_top' );

