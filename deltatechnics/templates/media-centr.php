<?php
get_header();
/* Template name: Медиа центр */
?>

<main class="media-center main">

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
					<a href="<?php echo get_home_url(); ?>/art/" class="media-center__item_btn">Показать все</a>
				</div>
				<div class="media-center__item_wrap">
				
					<?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$params = array(
							'posts_per_page' => 4, // количество постов на странице
							'post_type'       => 'lit', // тип постов
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

			<div class="media-center__item">
				<div class="media-center__item_top">
					<p class="media-center__item_title">
						Полезные статьи
					</p>
					<a href="<?php echo get_home_url(); ?>/art/" class="media-center__item_btn">Показать все</a>
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

			<div class="media-center__item">
				<div class="media-center__item_top">
					<p class="media-center__item_title">
						Полезные статьи
					</p>
					<a href="<?php echo get_home_url(); ?>/art/" class="media-center__item_btn">Показать все</a>
				</div>
				<div class="media-center__item_wrap">
				
					<?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$params = array(
							'posts_per_page' => 4, // количество постов на странице
							'post_type'       => 'rev', // тип постов
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

			<div class="media-center__item">
				<div class="media-center__item_top">
					<p class="media-center__item_title">
						Полезные статьи
					</p>
					<a href="<?php echo get_home_url(); ?>/art/" class="media-center__item_btn">Показать все</a>
				</div>
				<div class="media-center__item_wrap">
				
					<?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$params = array(
							'posts_per_page' => 4, // количество постов на странице
							'post_type'       => 'video', // тип постов
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

		<div class="media-center__links">
			<div class="media-center__links_item">
				<a href="<?php echo get_home_url(); ?>/akademija-dt/">Академия DT</a>
			</div>
			<div class="media-center__links_item">
				<a href="<?php echo get_home_url(); ?>/turnir-dt/">Турнир DT</a>
			</div>
			<div class="media-center__links_item">
				<a href="<?php echo get_home_url(); ?>/uslovija-garantii/">Условия гарантии</a>
			</div>
		</div>

	</div>

	<?php get_template_part( 'parts/social_links' ); ?>

</main>

<?php get_footer(); ?>