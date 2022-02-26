add_filter('gettext', 'translate_woocommerce', 10, 3);
/**
 * Change SKU Label
 * @link https://gist.github.com/dannyconnolly/da6f1a2d95dc826ccdcd
 * @since 1.0.0
 */

function translate_woocommerce($translation, $text, $domain) {
   if ($domain == 'woocommerce') {
        switch ($text) {
            case 'SKU Number':
                $translation = 'Style Number:';
                break;
            case 'SKU:':
                $translation = 'Style Number:';
                break;
        }
   }
    return $translation;
}
