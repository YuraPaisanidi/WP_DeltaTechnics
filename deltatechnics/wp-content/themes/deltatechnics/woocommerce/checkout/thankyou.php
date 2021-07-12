<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="woocommerce-order">

	<?php
	if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() );
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

		<div class="thanks__container container">
			<p class="thanks__title"><?php the_field('order_title', pll_current_language ( 'slug' ) ); ?></p>
			<p class="thanks__subtitle"><?php the_field('order_num', pll_current_language ( 'slug' ) ); ?> <?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<p class="thanks__desc">
				<?php the_field('order_text', pll_current_language ( 'slug' ) ); ?>
			</p>

			<div class="thanks__map map">
				<?php the_field('map', pll_current_language ( 'slug' ) ); ?>
			</div>

			<div class="thanks__contacts">
				<div class="thanks__contacts_item">
					<img src="img/pin-black.png" alt="">
					<a href="https://www.google.com.ua/maps/place/%D1%83%D0%BB.+%D0%A1%D1%82%D0%B0%D1%80%D0%BE%D0%BA%D0%B8%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F,+10,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4530261,30.4717139,17z/data=!3m1!4b1!4m5!3m4!1s0x40d4ce86da083dbd:0x5c858ea2c065d298!8m2!3d50.4530227!4d30.4739026?hl=ru"
						target="_blank">
						<?php the_field('address', pll_current_language ( 'slug' ) ); ?>
					</a>
				</div>
				<div class="thanks__contacts_item">
					<img src="img/tel-icon.png" alt="">
					<a href="<?php the_field('tel_url', 'option'); ?>"><?php the_field('tel', 'option'); ?></a>
				</div>
				<div class="thanks__contacts_item">
					<img src="img/tel-icon.png" alt="">
					<a href="<?php the_field('tel_url', 'option'); ?>"><?php the_field('tel_1', 'option'); ?></a>
				</div>
			</div>
		</div>


		<?php endif; ?>

	<?php else : ?>

	<?php endif; ?>

</div>
