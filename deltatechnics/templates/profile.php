<?php
/* Template name: Профиль */
?>
<?php get_header(); ?>

<main class="profile main">

<div class="profile__top top-bg">
		<div class="profile__top_container container">
				<h1 class="profile__title h1"><?php the_title(); ?></h1>
				<a href="#" class="profile__logout">
						<img src="img/logout-icon.svg" alt="">
				</a>
		</div>

		
</div>

<div class="profile__container container">
	<div class="profile__content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>

				<!-- <div class="profile__menu profile-menu">
						<a href="#" class="profile-menu__btn">Основная информация</a>
						<a href="#" class="profile-menu__btn">Избраное</a>
						<a href="#" class="profile-menu__btn">Мои заказы</a>
						<a href="#" class="profile-menu__btn">Выйти из профиля</a>
				</div>
				
				<form action="#" class="registr__form ">
						<div class="registr__form_info">
								<div class="registr__form_title">
										<p>Основная информация</p>
								</div>
								<div class="registr__form_inputs">
										<input type="text" name="name" placeholder="Ваше имя" required>
										<input type="text" name="surname" placeholder="Вашa фамилия" required>
										<input type="email" name="email" placeholder="Ваш email" required>
										<input type="tel" name="tel" placeholder="Ваш телефон" required>
								</div>
						</div>

						<div class="registr__form_password">
								<div class="registr__form_title">
										<p>Пароль</p>
								</div>
								<div class="registr__form_inputs--pass">
										<input type="password" name="password" placeholder="Введите старый пароль" required>
										<input type="password" name="password" placeholder="Введите новый пароль" required>
										<input type="password" name="password" placeholder="Введите cтарый пароль еще раз" required>
			<button href="#" class="registr__form_btn">Подтвердить</button>
								</div>
						</div>
				</form> -->

		</div>

</div>

</main>

<?php get_footer(); ?>