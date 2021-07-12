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

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );

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

	<?php if( have_rows('info') ): ?>
		<?php while( have_rows('info') ): the_row(); 
			$info_block = get_sub_field('info_block');
			$info_block_name = get_sub_field('info_block_name');
			?>

			<div class="product-page__prop">
				<p class="product-page__subtitle"><?php echo $info_block_name; ?></p>
				<?php if( have_rows('info_block') ): ?>
					<?php while( have_rows('info_block') ): the_row(); 
						$par = get_sub_field('par');
						$val = get_sub_field('val');
						?>
						<div class="product-page__prop_value">
							<p><?php echo $par; ?></p>
							<p><?php echo $val; ?></p>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
		
			</div>
		<?php endwhile; ?>
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
