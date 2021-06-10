<?php
get_header();
?>

	<main class="media-center main">

		<div class="media-center__top top-bg">
			<div class="container">
				<div class="top-bg__title">
					<h1 class="media-center__title h1"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>

		<div class="media-center__container container">
			
			<div class="media-center__menu">

				<div class="media-center__item">
					<div class="media-center__item_top">
						<p class="media-center__item_title">
							<?php 
								$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
								echo $term->name;
							?>
						</p>
						<a href="#" class="media-center__item_btn">Показать все</a>
					</div>
					<div class="media-center__item_wrap">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<a href="<?php the_permalink(); ?>" class="media-center__item_art">
								<div class="media-center__item_img">
									<?php if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									} else { ?>
										<img src="<?php echo get_template_directory_uri(); ?>/img/no.jpg" alt="<?php the_title(); ?>" />
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

					<?php wptuts_pagination(); ?> 

				</div>

					<!-- <div class="media-center__item_wrap">
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
							</div>
						</a>
					</div>
				</div>
				<div class="media-center__item">
					<div class="media-center__item_top">
						<p class="media-center__item_title">Полезные статьи</p>
						<a href="#" class="media-center__item_btn">Показать все</a>
					</div>
					<div class="media-center__item_wrap">
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
							</div>
						</a>
					</div>
				</div>
				<div class="media-center__item">
					<div class="media-center__item_top">
						<p class="media-center__item_title">Обзор новинок на рынке</p>
						<a href="#" class="media-center__item_btn">Показать все</a>
					</div>
					<div class="media-center__item_wrap">
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
								<span class="media-center__item_time">24:04</span>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
								<span class="media-center__item_time">24:04</span>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
								<span class="media-center__item_time">24:04</span>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
								<span class="media-center__item_time">24:04</span>
							</div>
						</a>
					</div>
				</div>
				<div class="media-center__item">
					<div class="media-center__item_top">
						<p class="media-center__item_title">Видео</p>
						<a href="#" class="media-center__item_btn">Показать все</a>
					</div>
					<div class="media-center__item_wrap">
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
								<span class="media-center__item_time">24:04</span>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
								<span class="media-center__item_time">24:04</span>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
								<span class="media-center__item_time">24:04</span>
							</div>
						</a>
						<a href="#" class="media-center__item_art">
							<div class="media-center__item_img">
								<img src="img/media-img.jpg" alt="">
							</div>
							<div class="media-center__item_name">
								<p>
									RCBS Match Master vs Auto Trickled V3. First
									crossing test. Part 1
								</p>
								<span class="media-center__item_time">24:04</span>
							</div>
						</a>
					</div>
				</div> -->

			
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