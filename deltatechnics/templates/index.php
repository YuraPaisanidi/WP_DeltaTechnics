<?php
/* Template name: Главная */
get_header();
?>

<main class="home main">

	<section class="video">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/video-plug.jpg" alt="">
	</section>

	<section class="menu">
		<div class="menu__item">
			<a href="#">Зброя</a>
		</div>
		<div class="menu__item">
			<a href="#">Кастом</a>
		</div>
		<div class="menu__item">
			<a href="#">Релоад</a>
		</div>
		<div class="menu__item">
			<a href="kit.html">Комплектуючі</a>
		</div>
		<div class="menu__item">
			<a href="clothes.html">Одяг</a>
		</div>
		<div class="menu__item">
			<a href="#">Спорядження</a>
		</div>
	</section>

</main>

<?php
	get_footer();