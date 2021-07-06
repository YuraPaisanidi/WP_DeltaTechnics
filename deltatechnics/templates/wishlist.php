<?php
/* Template name: Вибране */
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
				<?php 
				wp_nav_menu( array(
				'menu'=>'profile',
				'menu_class'=>'list',
				'theme_location'=>'profile',
				) );
				?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>

</div>

</main>

<?php get_footer(); ?>