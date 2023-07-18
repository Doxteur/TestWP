<?php

$timber = new \Timber\Timber();
\Timber\Timber::$autoescape = true;

function theme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
function timber_set_product( $post ) {
    global $product;

    if ( is_woocommerce() ) {
        $product = wc_get_product( $post->ID );
    }
}

add_action( 'after_setup_theme', 'theme_add_woocommerce_support' );
