<?php
get_header();
?>

<main class="article main">

	<div class="article__container container">

		<article class="article__item">
			<?php the_field('article'); ?>
		</article>

	</div>

	<?php get_template_part( 'parts/social_links' ); ?>

	<?php if(function_exists('related_posts')) { related_posts(); } ?>

</main>

<?php
get_footer();
