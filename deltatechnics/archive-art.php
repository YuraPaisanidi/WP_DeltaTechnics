<?php
get_header();
?>

	<main class="media-center media-center__cat main">

		<div class="media-center__top top-bg">
			<div class="container">
				<div class="top-bg__title">
					<h1 class="media-center__title h1">Медиа центр</h1>
				</div>
			</div>
		</div>

		<div class="media-center__container container">

			<div class="media-center__menu">

				<div class="media-center__item">
					<div class="media-center__item_top">
						<p class="media-center__item_title">
							Полезные статьи
						</p>
					</div>
					<div class="media-center__item_wrap">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
					<?php endif; ?>

				</div>

			</div>

			<?php wptuts_pagination(); ?> 

		</div>

		<?php get_template_part( 'parts/social_links' ); ?>

	</main>

<?php get_footer(); ?>