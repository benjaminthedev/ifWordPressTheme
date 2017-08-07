<?php
/*
All the functions are in the PHP pages in the `functions/` folder.
*/

	require get_template_directory() . '/functions/cleanup.php';
	require get_template_directory() . '/functions/setup.php';
	require get_template_directory() . '/functions/enqueues.php';
	//require get_template_directory() . '/functions/navbar.php';
	require get_template_directory() . '/functions/widgets.php';
	require get_template_directory() . '/functions/search-widget.php';
	require get_template_directory() . '/functions/index-pagination.php';
	require get_template_directory() . '/functions/split-post-pagination.php';
	require get_template_directory() . '/functions/feedback.php';
	require get_template_directory() . '/functions/remove-query-string.php';

// General Functions
	function general_styles() {
			wp_enqueue_style( 'focus-general-styles', get_template_directory_uri() . '/theme/css/general.css' );
			wp_enqueue_style( 'focus-animate-styles', get_template_directory_uri() . '/theme/css/animate.css' );
			wp_enqueue_style( 'focus-responsive-styles', get_template_directory_uri() . '/theme/css/general-responsive.css' );
	}
	add_action( 'wp_enqueue_scripts', 'general_styles' );



// Additional Custom Menus


	//Navigation

	function register_my_menus() {

	register_nav_menus(
	array(
	'first-menu' => __( 'First Menu' ),
	'second-menu' => __( 'Second Menu' ),
	'third-menu' => __( 'Third Menu' ),
	'responsive-menu' => __( 'Responsive Menu' ),
	'useful-links' => __( 'Useful Links' )
	));
}
	add_action( 'init', 'register_my_menus' );




	/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more-blogs" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );







/**
 * Fix Gravity Form Tabindex Conflicts
 * http://gravitywiz.com/fix-gravity-form-tabindex-conflicts/
 */
add_filter( 'gform_tabindex', 'gform_tabindexer', 10, 2 );
function gform_tabindexer( $tab_index, $form = false ) {
    $starting_index = 1000; // if you need a higher tabindex, update this number
    if( $form )
        add_filter( 'gform_tabindex_' . $form['id'], 'gform_tabindexer' );
    return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
}
