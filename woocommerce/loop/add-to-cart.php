<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

echo apply_filters(
	'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
	sprintf(
		'<a href="%s" data-quantity="%s" class="%s" %s><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" viewBox="0 0 52 52" xml:space="preserve"><path d="M20.1 26H44c.7 0 1.4-.5 1.5-1.2l4.4-15.4c.3-1.1-.5-2-1.5-2H11.5l-.6-2.3C10.6 4 9.6 3.3 8.6 3.3h-4c-1.3 0-2.5 1-2.6 2.3C1.9 7 3.1 8.2 4.4 8.2h2.3l7.6 25.7c.3 1.1 1.2 1.8 2.3 1.8h28.2c1.3 0 2.5-1 2.6-2.3.1-1.4-1.1-2.6-2.4-2.6H20.2c-1.1 0-2-.7-2.3-1.7V29c-.5-1.5.7-3 2.2-3z"></path><circle cx="20.6" cy="44.6" r="4"></circle><circle cx="40.1" cy="44.6" r="4"></circle></svg></a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
		esc_html( $product->add_to_cart_text() )
	),
	$product,
	$args
);
