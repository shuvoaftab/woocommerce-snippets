
add_filter( 'woocommerce_loop_add_to_cart_link', 'sh_replacing_add_to_cart_button', 10, 2 );
function sh_replacing_add_to_cart_button( $button, $product  ) {
	if ( $product->is_type( 'simple' ) ) {
		$button_text = __("View product", "woocommerce");
		$button = '<a class="button" href="' . $product->get_permalink() . '">' . $button_text . '</a>';
	}
	return $button;
}
