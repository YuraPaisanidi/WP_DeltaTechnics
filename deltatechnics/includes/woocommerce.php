<?php 
//-----------------Woocommerce support---------------------
function deltatechnics_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}

add_action( 'after_setup_theme', 'deltatechnics_add_woocommerce_support' );