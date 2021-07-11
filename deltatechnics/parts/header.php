<div class="side-menu">
	<div class="side-menu__item">
		<a href="<?php the_field('sidebar_url_1', pll_current_language ( 'slug' ) ); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-icon.svg" alt="">
		</a>
	</div>
	<div class="side-menu__item">
		<a href="<?php the_field('sidebar_url_2', pll_current_language ( 'slug' ) ); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pin-icon.svg" alt="">
		</a>
	</div>
	<div class="side-menu__item">
		<a href="<?php the_field('sidebar_url_3', pll_current_language ( 'slug' ) ); ?>" target="_blank">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb-icon.svg" alt="">
		</a>
	</div>
</div>

<header class="header">
	<div class="header__container container">

		<a href="<?php echo get_home_url(); ?>" class="header__logo">
			<img src="<?php the_field('logo', 'option'); ?>" alt="">
		</a>

		<nav class="header__nav">

			<?php 
				wp_nav_menu( array(
					'menu'=>'menu',
					'menu_class'=>'header__nav_menu',
					'theme_location'=>'menu',
					) );
			?>

			<div class="side-menu__mobile">
				<div class="side-menu__item">
					<a href="<?php the_field('sidebar_url_1', pll_current_language ( 'slug' ) ); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-icon.svg" alt="">
					</a>
				</div>
				<div class="side-menu__item">
					<a href="<?php the_field('sidebar_url_2', pll_current_language ( 'slug' ) ); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pin-icon.svg" alt="">
					</a>
				</div>
				<div class="side-menu__item">
					<a href="<?php the_field('sidebar_url_3', pll_current_language ( 'slug' ) ); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb-icon.svg" alt="">
					</a>
				</div>
			</div>

		</nav>

		<div class="header__btns">

			<div class="header__btns_item--search">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.svg" alt="">
					<ul>
						<li>
							<?php echo do_shortcode( '[aws_search_form]' );?>
						</li>
					</ul>
				</a>
			</div>

			<?php cart_link(); ?><?php the_widget('WC_Widget_Cart', 'title='); ?>

			<div class="header__btns_item header__btns_item--auth">
				<a href="<?php the_field('profile_url', pll_current_language ( 'slug' ) ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user.svg" alt="">
					<?php 
					wp_nav_menu( array(
					'menu'=>'login',
					'menu_class'=>'list',
					'theme_location'=>'login',
					) );
					?>
				</a>
			</div>

			<div class="header__btns_lang">
				<?php
						wp_nav_menu(array(
							'menu' => 'lang',
							'menu_class'=>'lang-menu',
							'theme_location' => 'lang',
						));
					?>
			</div>

		</div>

		<button class="hamburger" type="button">
			<span class="hamburger__item"></span>
		</button>

	</div>
</header>