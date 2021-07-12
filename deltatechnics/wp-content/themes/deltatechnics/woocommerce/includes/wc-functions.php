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