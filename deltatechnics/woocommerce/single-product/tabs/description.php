<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

global $post;

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Опис', 'woocommerce' ) );

?>
<div class="product-page__param">
	<div class="product-page__desc">
	<?php if ( $heading ) : ?>
		<p class="product-page__subtitle"><?php echo esc_html( $heading ); ?></p>
	<?php endif; ?>



	<p class="product-page__desc_info">
		<?php the_content(); ?>
	</p>
	</div>

	<?php if( have_rows('prop') ): ?>
		<div class="product-page__prop">
			<p class="product-page__subtitle">Характеристики</p>
				<?php while( have_rows('prop') ): the_row(); 
					$param = get_sub_field('param');
					$value = get_sub_field('value');
					?>
					<div class="product-page__prop_value">
						<p><?php echo $param; ?></p>
						<p><?php echo $value; ?></p>
					</div>
				<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php if( have_rows('size') ): ?>
		<div class="product-page__size">
			<p class="product-page__subtitle">Розмірна сітка</p>
			<div class="product-page__size_param">
				<div class="product-page__size_value">
					<p>Размер</p>
					<p>Обхват груди</p>
					<p>Обхват талии</p>
					<p>Обхват талии</p>
				</div>
			<?php while( have_rows('size') ): the_row(); 
					$size_1 = get_sub_field('size_1');
					$size_2 = get_sub_field('size_2');
					$size_3 = get_sub_field('size_3');
					$size_4 = get_sub_field('size_4');
				?>
				<div class="product-page__size_value">
					<p><?php echo $size_1; ?></p>
					<p><?php echo $size_2; ?></p>
					<p><?php echo $size_3; ?></p>
					<p><?php echo $size_4; ?></p>
				</div>
				
			<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>
	</div>
