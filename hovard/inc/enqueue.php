<?php
/**
 * Register Google fonts.
 *
 * @return string Google fonts URL for the theme.
 */
function hovard_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = '';

	/* Body font */
	if ( 'off' !== 'on' ) {
		$fonts[] = "IBM Plex Mono:300,400,500,600,700";
	}

	/* Heading font */
	if ( 'off' !== 'on' ) {
		$fonts[] = "Rufina:500,700";
	}

	$is_ssl = is_ssl() ? 'https' : 'http';

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), "$is_ssl://fonts.googleapis.com/css" );
	}

	return $fonts_url;
}

/**
 * Enqueue site scripts and styles
 */
function hovard_scripts() {
	$opt = get_option( 'hovard_opt' );

	/**
	 * Registering site's scripts and styles
	 */
	wp_enqueue_style( 'hovard-fonts', hovard_fonts_url(), array(), null );

	wp_enqueue_style( 'themify', HOVARD_DIR_CSS . '/themify-icons.css' );

	wp_enqueue_style( 'hovard-main', HOVARD_DIR_CSS . '/main-style.css' );

	wp_enqueue_style( 'hovard-root', get_stylesheet_uri() );

	wp_enqueue_style( 'hovard-wpd', HOVARD_DIR_CSS . '/wpd-style.css' );

	wp_enqueue_style( 'hovard-wp-custom', HOVARD_DIR_CSS . '/wp-custom.css' );

	hovard_helper()->hovard_inline_bg_css('hovard-wp-custom');

	wp_enqueue_style( 'hovard-dark', HOVARD_DIR_CSS . '/dark-mode.css' );

	wp_enqueue_style( 'hovard-responsive', HOVARD_DIR_CSS . '/responsive.css' );


	/**
	 * Register and enqueue theme script files
	 */
	wp_register_script( 'hovard-main', HOVARD_DIR_JS . '/bundle.js', array(  ), '1.0', true );
	wp_register_script( 'hovard-script', HOVARD_DIR_JS . '/script.js', array( 'jquery' ), '1.0', true );

	/**
	 * JavaScripts
	 */

	wp_enqueue_script('wow', HOVARD_DIR_VEND . '/wow/wow.min.js', array( 'jquery' ), '1.0', true);
	wp_enqueue_script('hovard-main');
	wp_enqueue_script('hovard-script');


	// Localize the script with new data
	$ajax_url              = admin_url( 'admin-ajax.php' );
	$wpml_current_language = apply_filters( 'wpml_current_language', null );
	if ( ! empty( $wpml_current_language ) ) {
		$ajax_url = add_query_arg( 'wpml_lang', $wpml_current_language, $ajax_url );
	}
	$privacy_bar_btn_txt = ! empty( $opt['privacy_bar_btn_txt'] ) ? $opt['privacy_bar_btn_txt'] : '';
	$privacy_bar_txt     = ! empty( $opt['privacy_bar_txt'] ) ? $opt['privacy_bar_txt'] : '';
	wp_localize_script( 'jquery', 'hovard_local_object',
		array(
			'ajaxurl'             => $ajax_url,
			'privacy_bar_btn_txt' => $privacy_bar_btn_txt,
			'privacy_bar_txt'     => $privacy_bar_txt,
			'HOVARD_DIR_CSS'        => HOVARD_DIR_CSS
		)
	);

	global $wp_query;
	$localized_settings = [
		'ajax_url'     => admin_url( 'admin-ajax.php' ),
		'hovard_nonce'   => wp_create_nonce( 'hovard-nonce' ),
		'hovard_parent'  => get_queried_object_id(),
		'posts'        => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
		'max_page'     => $wp_query->max_num_pages,
		'first_page'   => get_pagenum_link( 1 )
	];
	wp_localize_script(
		'hovard-forum',
		'HovardForum',
		$localized_settings
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'hovard_scripts' );
