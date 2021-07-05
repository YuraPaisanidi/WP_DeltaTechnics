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

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>

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