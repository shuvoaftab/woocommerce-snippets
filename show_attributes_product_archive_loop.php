
function sh_display_brand( $product, $taxonomy = 'pa_product-brand') {
    $value = $product->get_attribute( $taxonomy );
    if ( ! empty($value) && $product->is_in_stock() ) {
        $label = wc_attribute_label( $taxonomy );
        echo "<div class='sh_archive_title'>" . $label . ': ' . $value . '</div>';
    }
}
function sh_display_size( $product, $taxonomy = 'pa_size') {
    $value = $product->get_attribute( $taxonomy );
    if ( ! empty($value) && $product->is_in_stock() ) {
        $label = wc_attribute_label( $taxonomy );
        echo "<div class='sh_archive_title'>" . $label . ': ' . $value . '</div>';
    }
}
function sh_display_tog( $product, $taxonomy = 'pa_tog-rating') {
    $value = $product->get_attribute( $taxonomy );
    if ( ! empty($value) && $product->is_in_stock() ) {
        $label = wc_attribute_label( $taxonomy );
        echo "<div class='sh_archive_title'>" . $label . ': ' . $value . '</div>';
    }
}
function sh_display_colour( $product, $taxonomy = 'pa_colour') {
    $value = $product->get_attribute( $taxonomy );
    if ( ! empty($value) && $product->is_in_stock() ) {
        $label = wc_attribute_label( $taxonomy );
     	echo "<div class='sh_archive_title'>" . $label . ': ' . $value . '</div>';
    }
}
function sh_display_category( $product, $taxonomy = 'pa_category-2') {
    $value = $product->get_attribute( $taxonomy );
    if ( ! empty($value) && $product->is_in_stock() ) {
        $label = wc_attribute_label( $taxonomy );
        echo "<div class='sh_archive_title'>" . $label . ': ' . $value . '</div>';
    }
}
function sh_display_styleno( $product) {
    $value = $product->get_sku();
    if ( ! empty($value) && $product->is_in_stock() ) {
        //$label = wc_attribute_label( $taxonomy );
        //echo "<div class='sh_archive_title'>" . $label . ': ' . $value . '</div>';
		echo "<div class='sh_archive_title'>" . 'Style No: '. $value . '</div>';
    }
}

add_action( 'woocommerce_after_shop_loop_item', 'sh_product_archives', 10 );
function sh_product_archives() {
    global $product;

	echo "<div class='sh_products_meta'>";
	
	sh_display_styleno($product);
    //sh_display_brand( $product );
	sh_display_size( $product );
	sh_display_colour( $product );
	sh_display_category( $product );
	sh_display_tog( $product );
	echo "</div>";
	
	if ( ! $product->is_in_stock() ) {
        echo __("Sold Out", "woocommerce");
    }

}
