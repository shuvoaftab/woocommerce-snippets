
add_filter( 'woocommerce_product_add_to_cart_text', 'sh_woocommerce_custom_product_add_to_cart_text', 10 );
function sh_woocommerce_custom_product_add_to_cart_text() {
	global $product;
	if ( $product->is_type( 'variable' ) ) {
		$text = $product->is_purchasable() ? __( 'Select Your Size', 'woocommerce' ) : __( 'Read more', 'woocommerce' );
	}
	elseif( $product->is_type( 'simple' ) ){
		$text = $product->is_purchasable() ? __( 'View Product', 'woocommerce' ) : __( 'Read more', 'woocommerce' );
	}
	return $text;
}