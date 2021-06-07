<?php
	/**
		* Template name: Условия пользования
	*/
get_header();
?>
	<main class="main">

		<section class="policy">
			<div class="policy__container container">
		
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<h1 class="h1"><?php the_title(); ?></h1>
	
						<?php the_content(); ?>
	
					<?php endwhile; ?>
					<?php endif; ?>
	
			</div>
		</section>

	</main>

<?php
get_footer();
