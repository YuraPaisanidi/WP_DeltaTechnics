<?php
get_header();
?>

<main class="article main">

	<div class="article__container container">

		<article class="article__item">
			<?php the_field('article'); ?>
		</article>

	</div>

	<?php get_template_part( 'parts/social_links' ); ?>

	<div class="media-center__item container">
		<div class="media-center__item_top">
			<p class="media-center__item_title">Похожее</p>
			<p class="media-center__item_subtitle">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam.
			</p>
		</div>
		<div class="media-center__item_wrap">
			<?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$params = array(
					'posts_per_page' => 4, // количество постов на странице
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

</main>

<?php
get_footer();
