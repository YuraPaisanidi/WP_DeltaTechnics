<?php
	/**
		* Template name: Корзина
	*/
	get_header(); 
?>

<main class="shopping-cart main">

<div class="shopping-cart__top top-bg">
	<div class="shopping-cart__top_container container">
		<div class="top-bg__title">
			<h1 class="shopping-cart__title h1"><?php the_title(); ?></h1>
		</div>
	</div>


</div>

<div class="shopping-cart__container container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>


</div>

</main>

<?php get_footer(); ?>