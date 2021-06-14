<?php
	get_header();
?>

	<section class="error404">
		<div class="container">
	
			<div class="error404__description">
				<h1 class="error404__title h1"><?php esc_html_e( 'Cторінка не знайдена "404"', 'schoolstudy' ); ?></h1>
				<div class="">
					<a href="<?php echo get_home_url(); ?>" class="error404__btn btn">На головну</a>
				</div>
			</div>
	
		</div>
	</section>

<?php get_footer(); ?>