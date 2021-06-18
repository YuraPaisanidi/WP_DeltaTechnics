<div class="side-menu">
	<div class="side-menu__item">
		<a href="<?php the_field('sidebar_url_1', 'option'); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-icon.svg" alt="">
		</a>
	</div>
	<div class="side-menu__item">
		<a href="<?php the_field('sidebar_url_2', 'option'); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pin-icon.svg" alt="">
		</a>
	</div>
	<div class="side-menu__item">
		<a href="<?php the_field('sidebar_url_3', 'option'); ?>" target="_blank">
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

			<div class="header__nav_accord">

				<div class="accordion">
					<div class="accordion__header">
						<a href="#">Зброя</a>
						<span></span>
					</div>
					<div class="accordion__content">
						<a href="#">
							Зброя 1
						</a>
						<a href="#">
							Зброя 2
						</a>
						<a href="#">
							Зброя 3
						</a>
						<a href="#">
							Зброя 4
						</a>
					</div>
				</div>
				<div class="accordion">
					<div class="accordion__header">
						<a href="#">Кастом</a>
						<span></span>
					</div>
					<div class="accordion__content">
						<a href="#">
							Кастом 1
						</a>
						<a href="#">
							Кастом 2
						</a>
						<a href="#">
							Кастом 3
						</a>
						<a href="#">
							Кастом 4
						</a>
					</div>
				</div>
				<div class="accordion">
					<div class="accordion__header">
						<a href="#">Релоад</a>
						<span></span>
					</div>
					<div class="accordion__content">
						<a href="#">
							Релоад 1
						</a>
						<a href="#">
							Релоад 2
						</a>
						<a href="#">
							Релоад 3
						</a>
						<a href="#">
							Релоад 4
						</a>
					</div>
				</div>
				<div class="accordion">
					<div class="accordion__header">
						<a href="#">Комплектуючі</a>
						<span></span>
					</div>
					<div class="accordion__content">
						<a href="#">
							Комплектуючі 1
						</a>
						<a href="#">
							Комплектуючі 2
						</a>
						<a href="#">
							Комплектуючі 3
						</a>
						<a href="#">
							Комплектуючі 4
						</a>
					</div>
				</div>
				<div class="accordion">
					<div class="accordion__header">
						<a href="#">Одяг</a>
						<span></span>
					</div>
					<div class="accordion__content">
						<a href="#">
							Одяг 1
						</a>
						<a href="#">
							Одяг 2
						</a>
						<a href="#">
							Одяг 3
						</a>
						<a href="#">
							Одяг 4
						</a>
					</div>
				</div>
				<div class="accordion">
					<div class="accordion__header">
						<a href="#">Спорядження</a>
						<span></span>
					</div>
					<div class="accordion__content">
						<a href="#">
							Спорядження 1
						</a>
						<a href="#">
							Спорядження 2
						</a>
						<a href="#">
							Спорядження 3
						</a>
						<a href="#">
							Спорядження 4
						</a>
					</div>
				</div>

			</div>

			<div class="side-menu__mobile">
				<div class="side-menu__item">
					<a href="<?php the_field('sidebar_url_1', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-icon.svg" alt="">
					</a>
				</div>
				<div class="side-menu__item">
					<a href="<?php the_field('sidebar_url_2', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pin-icon.svg" alt="">
					</a>
				</div>
				<div class="side-menu__item">
					<a href="<?php the_field('sidebar_url_3', 'option'); ?>" target="_blank">
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
							<input type="search">
						</li>
					</ul>
				</a>
			</div>

			<div class="header__btns_item--cart">
				<a href="<?php echo get_home_url(); ?>/korzina/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart.svg" alt="">
					<span>0</span>
				</a>
			</div>

			<div class="header__btns_item header__btns_item--auth">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user.svg" alt="">
					<ul>
						<li><a href="#" class="modal__auth">Войти</a></li>
						<li><a href="<?php echo get_home_url(); ?>/registracija/">Регистрация</a></li>
					</ul>
				</a>
			</div>

			<div class="header__btns_lang">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag-ua.svg" alt="">
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag-ua.svg" alt=""></li>
					</ul>
				</a>
			</div>

		</div>

		<button class="hamburger" type="button">
			<span class="hamburger__item"></span>
		</button>

	</div>
</header>