<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

use calderawp\calderaforms\pro\admin\scripts;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		// wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/styles/styles.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		// wp_enqueue_script( 'understrap-scripts', '/scripts/jquery.slicknav.min.js', array(), $js_version, true );
		// wp_enqueue_script( 'script', get_template_directory_uri() . '/src/jquery.slicknav.min.js', array ( 'jquery' ), 1.1, true);
		// wp_enqueue_script( 'script-custom', get_template_directory_uri() . '/src/js/custom-javascript.js', array ( 'jquery' ), 1.1, true);
		wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', null, null, true );
		wp_enqueue_script('bootstrap');
		wp_enqueue_script( 'greenaway', get_template_directory_uri() . '/js/greenaway.js', array ( 'jquery' ), null, true);
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

// <link rel="stylesheet" href="SlickNav/slicknav.css" />
// <script src="SlickNav/jquery.slicknav.min.js"></script>
