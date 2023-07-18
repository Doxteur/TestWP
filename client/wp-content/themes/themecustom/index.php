<?php

use Timber\Timber;

$context = Timber::context();
Timber::render( 'woo/product-list.twig', $context );

?>
