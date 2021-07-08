<?php 
//-----------------Woocommerce support---------------------
function deltatechnics_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}

add_action( 'after_setup_theme', 'deltatechnics_add_woocommerce_support' );


if (!function_exists('schoolstudy_woocommerce_cart_link_fragment')) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function schoolstudy_woocommerce_cart_link_fragment($fragments)
	{
		ob_start();
		schoolstudy_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter('woocommerce_add_to_cart_fragments', 'schoolstudy_woocommerce_cart_link_fragment');

if (!function_exists('schoolstudy_woocommerce_cart_link')) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function schoolstudy_woocommerce_cart_link()
	{
?>
	<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'schoolstudy'); ?>">
		<?php
		$item_count_text = sprintf(
			/* translators: number of items in the mini cart. */
			_n('%d item', '%d items', WC()->cart->get_cart_contents_count(), 'schoolstudy'),
			WC()->cart->get_cart_contents_count()
		);
		?>
		<span class="amount"><?php echo wp_kses_data(WC()->cart->get_cart_subtotal()); ?></span> <span class="count"><?php echo esc_html($item_count_text); ?></span>
	</a>
<?php
	}
}

if (!function_exists('schoolstudy_woocommerce_header_cart')) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function schoolstudy_woocommerce_header_cart()
	{
		if (is_cart()) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
?>
	<ul id="site-header-cart" class="site-header-cart">
		<li class="<?php echo esc_attr($class); ?>">
			<?php schoolstudy_woocommerce_cart_link(); ?>
		</li>
		<li>
			<?php
			$instance = array(
				'title' => '',
			);

			the_widget('WC_Widget_Cart', $instance);
			?>
		</li>
	</ul>
<?php
	}
}

add_action('wp_ajax_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');

add_action('wp_ajax_nopriv_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');

function ql_woocommerce_ajax_add_to_cart()
{

	$product_id = apply_filters('ql_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));

	$quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);

	$variation_id = absint($_POST['variation_id']);

	$passed_validation = apply_filters('ql_woocommerce_add_to_cart_validation', true, $product_id, $quantity);

	$product_status = get_post_status($product_id);

	if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {

		do_action('ql_woocommerce_ajax_added_to_cart', $product_id);

		if ('yes' === get_option('ql_woocommerce_cart_redirect_after_add')) {

			wc_add_to_cart_message(array($product_id => $quantity), true);
		}

		WC_AJAX::get_refreshed_fragments();
	} else {

		$data = array(

			'error' => true,

			'product_url' => apply_filters('ql_woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id)
		);

		echo wp_send_json($data);
	}

	wp_die();
}