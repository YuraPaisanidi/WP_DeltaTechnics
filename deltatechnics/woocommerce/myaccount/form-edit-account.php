<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); ?>

<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >
	<div class="registr__form_info">
		<div class="registr__form_title">
			<p><?php the_field('profile-edit_text', pll_current_language ( 'slug' ) ); ?></p>
		</div>
		<?php do_action( 'woocommerce_edit_account_form_start' ); ?>
		<div class="registr__form_inputs">
			<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>" placeholder="<?php esc_html_e( 'First name', 'woocommerce' ); ?>" />
			<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>" placeholder="<?php esc_html_e( 'Last name', 'woocommerce' ); ?>" />
			<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="<?php echo esc_attr( $user->display_name ); ?>" />
			<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" />
		</div>
	</div>
	<div class="registr__form_password">
		<div class="registr__form_title">
			<p><?php the_field('profile-edit_text_1', pll_current_language ( 'slug' ) ); ?></p>
		</div>
		<div class="registr__form_inputs--pass">
				<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off" placeholder="<?php esc_html_e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); ?>" />
				<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off"  placeholder="<?php esc_html_e( 'New password (leave blank to leave unchanged)', 'woocommerce' ); ?>"/>
				<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off" placeholder="<?php esc_html_e( 'Confirm new password', 'woocommerce' ); ?>" />
			<?php do_action( 'woocommerce_edit_account_form' ); ?>
			
			<p class="registr__form_btn">
				<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
				<button type="submit" name="save_account_details" value="<?php esc_attr_e( 'Підтвердити', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
				<input type="hidden" name="action" value="save_account_details" />
			</p>
			
			<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
		</div>
</form>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
