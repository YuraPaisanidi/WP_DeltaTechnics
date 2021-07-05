<?php
/* Template name: Категория товара */
?>

<?php get_header(); ?>

<main class="clothes main">

<div class="clothes__top top-bg">
	<div class="container">
		<div class="top-bg__title">
			<h1 class="clothes__title h1"><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div class="clothes__menu container">

	<?php if( have_rows('category') ): ?>
		<?php while( have_rows('category') ): the_row(); 
			$name = get_sub_field('name');
			$img = get_sub_field('img');
			$url = get_sub_field('url');
			?>
			<div class="clothes__menu_item" style="background-image: url(<?php echo $img; ?>);">
				<h3 class="h3"><a href="<?php echo $url; ?>"><?php echo $name; ?></a></h3>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>
</div>

</main>

<?php get_footer(); ?>