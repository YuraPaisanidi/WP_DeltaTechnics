<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



//-----------------Change order-recieved title-----------------------
add_filter( 'the_title', 'truemisha_custom_order_received', 25, 2 );
 
function truemisha_custom_order_received( $title, $id ) {
 
	if( function_exists( 'is_order_received_page' ) && is_order_received_page() && $id === get_the_ID() ) {			
		$title = "";
	}
 
	return $title;
}

//-------------------Disable field on checkout page
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
 unset($fields['billing']['billing_company']);
 unset($fields['billing']['billing_address_1']);
 unset($fields['billing']['billing_address_2']);
 unset($fields['billing']['billing_city']);
 unset($fields['billing']['billing_postcode']);
 unset($fields['billing']['billing_country']);
 unset($fields['billing']['billing_state']);
    return $fields;}