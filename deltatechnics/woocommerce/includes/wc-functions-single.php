<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


//-------------------------------Remove actions-----------------------
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

//-------------------------------Add actions----------------------------------------
add_action( 'woocommerce_before_shop_loop_item_title', 'truemisha_sale_badge', 25 );
add_action( 'woocommerce_single_product_info', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_single_product_info', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_info', 'woocommerce_template_single_excerpt', 10 );
add_action( 'woocommerce_single_product_price', 'woocommerce_template_single_price', 20 );
add_action( 'woocommerce_single_product_price', 'woocommerce_template_single_add_to_cart', 30 );

//----------------Add to cart------------------------
add_filter( 'woocommerce_product_single_add_to_cart_text', 'tb_woo_custom_cart_button_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'tb_woo_custom_cart_button_text' );   
function tb_woo_custom_cart_button_text() {
				return __( 'Order', 'woocommerce' );
}


//--------------------------------------------похожі_товари--------------------------------
function my_related_products_args( $args ) {
	$args['posts_per_page'] = 4; // количество "Похожих товаров"
	$args['columns'] = 4; // количество колонок П.т
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'my_related_products_args' );
/** задаём количество похожих товаров, колонок */

// //-----------------Product gallery-------------------
// function schoolstudy_woocommerce_setup()
// {
// 	add_theme_support('woocommerce');
// 	add_theme_support('wc-product-gallery-zoom');
// 	add_theme_support('wc-product-gallery-lightbox');
// 	add_theme_support('wc-product-gallery-slider');
// }
// add_action('after_setup_theme', 'schoolstudy_woocommerce_setup');

