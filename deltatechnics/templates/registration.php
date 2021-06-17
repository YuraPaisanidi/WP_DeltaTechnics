<?php
	/**
		* Template name: Регистрация
	*/
get_header();
?>

<main class="registr main">

	<div class="registr__top top-bg">
		<div class="container">
			<div class="top-bg__title">
				<h1 class="registr__title h1"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>

	<div class="registr__container container">

		<form action="#" class="registr__form">
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
					<input type="password" name="password" placeholder="Введите пароль">
					<input type="password" name="password" placeholder="Введите пароль еще раз">
				</div>
			</div>
			<div class="registr__form_btn">
				<a href="#">Подтвердить</a>
			</div>
		</form>

		<div class="registr__media">
			<p class="registr__media_subtitle">Или</p>
			<div class="registr__links">
				<a href="#" class="registr__links_item--gg">
					<p>Продолжить с Google</p>
				</a>
				<a href="#" class="registr__links_item--fb">
					<p>Продолжить с Facebook</p>
				</a>
				<a href="#" class="registr__links_item--apple">
					<p>Продолжить с Apple</p>
				</a>
			</div>
		</div>

	</div>

</main>

<?php get_footer(); ?>