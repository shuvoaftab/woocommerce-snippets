function shoptimizer_child_enqueue_scripts() {
	$parent_style    = 'shoptimizer-style';
	$parent_base_dir = 'shoptimizer';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array(), wp_get_theme( $parent_base_dir ) ? wp_get_theme( $parent_base_dir )->get( 'Version' ) : '' );

	if ( is_rtl() ) {
		wp_enqueue_style( 'shoptimizer-rtl', get_template_directory_uri() . '/rtl.css', array(), wp_get_theme( $parent_base_dir ) ? wp_get_theme( $parent_base_dir )->get( 'Version' ) : '' );
	}

	wp_enqueue_style( 'shoptimizer-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'shoptimizer_child_enqueue_scripts' );