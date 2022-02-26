
add_filter( 'woocommerce_cart_item_name', 'sku_replace_title_on_cart_checkout', 10, 3 );
function sku_replace_title_on_cart_checkout( $item_name, $cart_item, $cart_item_key ) {
    if( $sku = $cart_item['data']->get_sku() ) {
        if( is_cart() ) {
            $item_name = sprintf( '<a href="%s">%s</a>', esc_url( $cart_item['data']->get_permalink( $cart_item ) ), $sku );
        } else {
            $item_name = $sku;
        }
    }
    return $item_name;
}