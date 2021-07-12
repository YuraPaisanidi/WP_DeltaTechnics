<?php
	/**
		* Template name: Кастом
	*/
get_header();
?>

<main class="custom main">

<div class="custom__top top-bg">
	<div class="container">
		<div class="top-bg__title">
			<h1 class="custom__title h1"><?php the_title(); ?></h1>
		</div>
	</div>


</div>

<div class="custom__container container">
	<article class="custom__article">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1 class="h1"></h1>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</article>

	<div class="custom__bottom ">
		<div class="custom__map map">
			<?php the_field('map', pll_current_language ( 'slug' ) ); ?>
		</div>
		<?php the_field('contact_form', pll_current_language ( 'slug' ) ); ?>
		</div>

	<div class="custom__contacts">
		<div class="custom__contacts_item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pin-black.png" alt="">
			<a href="https://www.google.com.ua/maps/place/%D1%83%D0%BB.+%D0%A1%D1%82%D0%B0%D1%80%D0%BE%D0%BA%D0%B8%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F,+10,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4530261,30.4717139,17z/data=!3m1!4b1!4m5!3m4!1s0x40d4ce86da083dbd:0x5c858ea2c065d298!8m2!3d50.4530227!4d30.4739026?hl=ru"
				target="_blank">
				<?php the_field('address', pll_current_language ( 'slug' ) ); ?>
			</a>
		</div>
		<div class="custom__contacts_item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel-icon.png" alt="">
			<a href="tel:(096) 508 99 55">(096) 508 99 55</a>
		</div>
		<div class="custom__contacts_item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel-icon.png" alt="">
			<a href="tel:(096) 508 99 55">(096) 508 99 55</a>
		</div>
		<div class="custom__contacts_item">
			<p><?php the_field('ooo_ukr', pll_current_language ( 'slug' ) ); ?></p>
			<p><?php the_field('id_code', pll_current_language ( 'slug' ) ); ?></p>
		</div>
	</div>
</div>

</main>

<?php
	get_footer();