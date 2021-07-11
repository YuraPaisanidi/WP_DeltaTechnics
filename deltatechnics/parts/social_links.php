<div class="media-center__soc social-links">
		<div class="social-links__container container">
			<p class="social-links__title"><?php the_field('follow_soc', pll_current_language ( 'slug' ) ); ?></p>
			<div class="social-links__item">
				<a href="<?php the_field('social_url', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.svg" alt="">
				</a>
				<a href="<?php the_field('social_url_2', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
				</a>
				<a href="<?php the_field('social_url_3', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram.svg" alt="">
				</a>
			</div>
		</div>
	</div>