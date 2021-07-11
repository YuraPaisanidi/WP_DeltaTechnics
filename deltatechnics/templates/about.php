<?php
/* Template name: Про Delta Technics */
get_header();
?>

<main class="about main">

<div class="about__top top-bg">
	<div class="container">
		<div class="top-bg__title">
			<h1 class="about__title h1"><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div class="about__container container">

	<div class="about__text">
		<?php the_field('about_info', pll_current_language ( 'slug' ) ); ?>
	</div>

	<article class="about__bio">
		<div class="about__bio_img">
			<img src="<?php the_field('about_img', pll_current_language ( 'slug' ) ); ?>" alt="">
		</div>
		<div class="about__bio_info">
			<p class="about__bio_name"><?php the_field('about_name', pll_current_language ( 'slug' ) ); ?></p>
			<p class="about__bio_position"><?php the_field('about_role', pll_current_language ( 'slug' ) ); ?></p>
			<p class="about__bio_achieve">
				<?php the_field('about_achive', pll_current_language ( 'slug' ) ); ?>
			</p>
			<p class="about__bio_quote">
				<?php the_field('about_quote', pll_current_language ( 'slug' ) ); ?>
			</p>
		</div>
	</article>

	<div class="about__articles">
		<div class="media-center__item">
		<?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$params = array(
				'posts_per_page' => 8, // количество постов на странице
				'post_type'       => 'art', // тип постов
				'paged'           => $current_page // текущая страница
			);
			query_posts($params);
			
			$wp_query->is_archive = true;
			$wp_query->is_home = false;
			?>
			
			<?php while(have_posts()): the_post(); ?>

				<a href="<?php the_permalink(); ?>" class="media-center__item_art">
					<div class="media-center__item_img">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg" alt="<?php the_title(); ?>" />
						<?php } ?>
					</div>
					<div class="media-center__item_name">
						<p>
							<?php the_title(); ?>
						</p>
					</div>
				</a>
		<?php endwhile; ?>
		</div>
	</div>

</div>

</main>

<?php get_footer(); ?>