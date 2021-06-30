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


//----------------Sale badge-----------------------
function truemisha_sale_badge() {
 
	// получаем объект текущего товара в цикле
	global $product;
 
	// есле не распродажа, ничего не делаем
	if ( ! $product->is_on_sale() ) {
		return;
	}
 
	if ( $product->is_type( 'simple' ) ) { // простые товары
 
		// рассчитываем процент скидки
		$percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
 
	} elseif ( $product->is_type( 'variable' ) ) { // вариативные товары
 
		$percentage = 0;
 
		// запускаем цикл для вариаций товара
		foreach ( $product->get_children() as $variation_id ) {
 
			// получаем объект вариации
			$variation = wc_get_product( $variation_id );
 
			// не распродажа? пропускаем итерацию цикла
			if( ! $variation->is_on_sale() ) {
				continue;
			}
 
			// обычная цена вариации
			$regular_price = $variation->get_regular_price();
			// цена распродажи вариации
			$sale_price = $variation->get_sale_price();
			// процент скидки вариации
			$variation_percentage = ( $regular_price - $sale_price ) / $regular_price * 100;
 
			if ( $variation_percentage > $percentage ) {
				$percentage = $variation_percentage;
			}
 
		}
 
	}
 
	if ( $percentage > 0 ) {
		echo '<span class="onsale">-' . round( $percentage ) . '%</span>';
	}
 
}

//----------------Add to cart------------------------
add_filter( 'woocommerce_product_single_add_to_cart_text', 'tb_woo_custom_cart_button_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'tb_woo_custom_cart_button_text' );   
function tb_woo_custom_cart_button_text() {
				return __( 'Замовити', 'woocommerce' );
}

//---------------Change currency symbol--------------
// add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

// function change_existing_currency_symbol( $currency_symbol, $currency ) {
//      switch( $currency ) {
//           case 'UAH': $currency_symbol = 'грн'; break;
//      }
//      return $currency_symbol;
// }


