<footer class="footer">
	<div class="footer__container container">

		<?php if( have_rows('footer_links_left', 'option') ): ?>
			<div class="footer__item">
				<?php while( have_rows('footer_links_left', 'option') ): the_row(); 
					$text = get_sub_field('text');
					$url = get_sub_field('url');
					?>
					<a href="<?php echo $url; ?>">- <?php echo $text; ?></a>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

			<div class="footer__item">
				<a href="<?php echo get_home_url(); ?>" class="footer__logo">
					<img src="<?php the_field('logo', 'option'); ?>" alt="">
				</a>
			</div>

		<?php if( have_rows('footer_links_right', 'option') ): ?>
			<div class="footer__item">
				<?php while( have_rows('footer_links_right', 'option') ): the_row(); 
					$text = get_sub_field('text');
					$url = get_sub_field('url');
					?>
					<a href="<?php echo $url; ?>">- <?php echo $text; ?></a>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		
	</div>
</footer>

<section class="copyright">
	<div class="copyright__container">
		<p>© Copyright 2021 | Delta Technics</p>
		<a href="<?php echo get_home_url(); ?>/privacy-policy/">Конфиденциальность</a>
		<a href="<?php echo get_home_url(); ?>/uslovija-polzovanija/">Условия пользования</a>
	</div>
</section>