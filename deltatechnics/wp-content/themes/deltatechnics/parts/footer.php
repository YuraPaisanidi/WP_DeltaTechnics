<footer class="footer">
	<div class="footer__container container">

		<?php if( have_rows('footer_links_left', 'option') ): ?>
			<div class="footer__item">
				<?php 
				wp_nav_menu( array(
				'menu'=>'left-menu-footer',
				'menu_class'=>'menu-footer',
				'theme_location'=>'left-menu-footer',
				) );
				?>
			</div>
		<?php endif; ?>

			<div class="footer__item">
				<a href="<?php echo get_home_url(); ?>" class="footer__logo">
					<img src="<?php the_field('logo', 'option'); ?>" alt="">
				</a>
			</div>

		<?php if( have_rows('footer_links_right', 'option') ): ?>
			<div class="footer__item">
				<?php 
				wp_nav_menu( array(
				'menu'=>'right-menu-footer',
				'menu_class'=>'menu-footer',
				'theme_location'=>'right-menu-footer',
				) );
				?>
			</div>
		<?php endif; ?>

	</div>

	<div class="copyright">
		<div class="copyright__container container">
			<p>© Copyright 2021 | Delta Technics</p>
			<a href="<?php echo get_home_url(); ?>/privacy-policy/">Конфиденциальность</a>
			<a href="<?php echo get_home_url(); ?>/uslovija-polzovanija/">Условия пользования</a>
		</div>
	</div>

</footer>

