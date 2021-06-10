<?php
/* Template name: Главная */
get_header();
?>

<main class="home main">

	<video class="video" loop autoplay muted>
		<source src="<?php echo get_template_directory_uri(); ?>/assets/img/sf_video.mp4" type="video/mp4">
	</video>

	<?php if( have_rows('menu_cards') ): ?>
		<section class="menu">
			<?php while( have_rows('menu_cards') ): the_row(); 
					$name = get_sub_field('name');
					$img = get_sub_field('img');
					$url = get_sub_field('url');
					?>
					<div class="menu__item">
						<a href="<?php echo $url; ?>" style="background-image: url(<?php echo $img; ?>);"><?php echo $name; ?></a>
					</div>
				<?php endwhile; ?>
		</section>
		<?php endif; ?>

</main>

<?php
	get_footer();