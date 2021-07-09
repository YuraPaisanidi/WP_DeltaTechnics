<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<?php endif; ?>

	<!-- <h2><?php esc_html_e( 'Login', 'woocommerce' ); ?></h2> -->

	<form class="woocommerce-form woocommerce-form-login login modal__form log-active" method="post" id="login-form">

		<?php do_action( 'woocommerce_login_form_start' ); ?>

		<div class="modal__login">
			<h3 class="form__title"><?php esc_html_e( 'Login', 'woocommerce' ); ?></h3>

			<div class="form__item">
				<input id="formMail" type="email" name="username" id="username" placeholder="Введіть email" class="form__input _req _email" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</div>

			<div class="form__item">
				<input id="formPass" type="password" name="password" id="password" placeholder="Введіть пароль" class="form__input form__input--lock _req _pass" autocomplete="current-password">
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="form__forgot-pass"><?php esc_html_e( 'Забули?', 'woocommerce' ); ?></a>
			</div>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<div class="form__btn">
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<button type="submit" class="form__btn_button" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Увійти', 'woocommerce' ); ?></button>
			</div>

			<div class="form__btn form__btn-item form__btn_button--reg" id="reg-form-show">
				<span>Реєстрація</span>
			</div>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</div>

		<div class="modal__links">
			<h3 class="form__title">Увійти за допомогою</h3>
			<?php echo do_shortcode('[nextend_social_login provider="google"]'); ?>
			<?php echo do_shortcode('[nextend_social_login provider="facebook"]'); ?>
		</div>

	</form>

	<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>


	<!-- <h2><?php esc_html_e( 'Register', 'woocommerce' ); ?></h2> -->

	<form method="post" class="woocommerce-form woocommerce-form-register register modal__form" <?php do_action( 'woocommerce_register_form_tag' ); ?> id="reg-form">
		<div class="modal__login">
			<h3 class="form__title"><?php esc_html_e( 'Register', 'woocommerce' ); ?></h3>

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form__item">
					<!-- <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
					<input type="text" class="form__input woocommerce-Input woocommerce-Input--text" placeholder="<?php esc_html_e( 'Username', 'woocommerce' ); ?>" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form__item">
				<!-- <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
				<input type="email" class="form__input woocommerce-Input woocommerce-Input--text" placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form__item">
					<!-- <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
					<input type="password" class="form__input form__input--lock woocommerce-Input woocommerce-Input--text" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" name="password" id="reg_password" autocomplete="new-password" />
				</p>

			<?php else : ?>

				<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-form-row form-row form__btn">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit form__btn_button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
			</p>

			<div class="form__btn form__btn-item form__btn_button--reg" id="login-form-show">
				<span>Увійти</span>
			</div>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</div>

		<div class="modal__links">
			<h3 class="form__title">Увійти за допомогою</h3>
			<?php echo do_shortcode('[nextend_social_login provider="google"]'); ?>
			<?php echo do_shortcode('[nextend_social_login provider="facebook"]'); ?>
		</div>

	</form>


	<?php endif; ?>
</div>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
