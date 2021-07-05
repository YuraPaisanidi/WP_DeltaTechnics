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
			<p>Профіль</p>
		</div>
		<?php do_action( 'woocommerce_edit_account_form_start' ); ?>
		<div class="registr__form_inputs">
			<input type="text" name="name" id="account_first_name" placeholder="Ваше ім`я" value="<?php echo esc_attr( $user->first_name ); ?>" required>
			<!-- <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
				<label for="account_first_name"><?php esc_html_e( 'First name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>" />
			</p> -->
			<input type="text" name="surname" id="account_last_name" placeholder="Ваше прізвище" value="<?php echo esc_attr( $user->last_name ); ?>" required>
			<!-- <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
				<label for="account_last_name"><?php esc_html_e( 'Last name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>" />
			</p> -->
			<!-- <div class="clear"></div> -->
			<input type="tel" name="tel" placeholder="Ваш телефон" required>
			<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="account_display_name"><?php esc_html_e( 'Display name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="<?php echo esc_attr( $user->display_name ); ?>" /> <span><em><?php esc_html_e( 'This will be how your name will be displayed in the account section and in reviews', 'woocommerce' ); ?></em></span>
			</p> -->
			<!-- <div class="clear"></div> -->
			<input type="email" name="email" id="account_email" placeholder="Ваш email" value="<?php echo esc_attr( $user->user_email ); ?>" required>
			<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="account_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" />
			</p> -->
		</div>
	</div>
	<div class="registr__form_password">
		<div class="registr__form_title">
			<p><?php esc_html_e( 'Пароль', 'woocommerce' ); ?></p>
		</div>
		<div class="registr__form_inputs--pass">
			<input type="password" name="password" name="password_current" placeholder=" Введіть старий пароль" autocomplete="off">
			<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password_current"><?php esc_html_e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off" />
			</p> -->
			<input type="password" name="password_1" id="password_1" placeholder="Ввеіть новий пароль" autocomplete="off">
			<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password_1"><?php esc_html_e( 'New password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off" />
			</p> -->
			<input type="password" name="password_2" id="password_2" placeholder="Введіть старий пароль ще раз" autocomplete="off">
			<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password_2"><?php esc_html_e( 'Confirm new password', 'woocommerce' ); ?></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off" />
			</p> -->
			
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
