
add_action( 'woocommerce_single_product_summary', 'dev_designs_show_sku', 10 );
function dev_designs_show_sku(){
    global $product;
    echo "<br><br><div class='stylenumber'><p>".'Style Number: ' . $product->get_sku()."</p></div>";
}
