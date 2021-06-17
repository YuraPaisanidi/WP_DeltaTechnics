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
			<h1 class="custom__title h1">Кастом</h1>
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
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.359705663197!2d30.47171391589611!3d50.45302609506008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce86da083dbd%3A0x5c858ea2c065d298!2z0LLRg9C70LjRhtGPINCh0YLQsNGA0L7QutC40ZfQstGB0YzQutCwLCAxMCwg0JrQuNGX0LIsIDAyMDAw!5e0!3m2!1suk!2sua!4v1620896721067!5m2!1suk!2sua"
				width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
			</iframe>
		</div>
		<?php echo do_shortcode( '[contact-form-7 id="34" title="Напишите нам"]' ); ?>
	</div>

	<div class="custom__contacts">
		<div class="custom__contacts_item">
			<img src="img/pin-black.png" alt="">
			<a href="https://www.google.com.ua/maps/place/%D1%83%D0%BB.+%D0%A1%D1%82%D0%B0%D1%80%D0%BE%D0%BA%D0%B8%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F,+10,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4530261,30.4717139,17z/data=!3m1!4b1!4m5!3m4!1s0x40d4ce86da083dbd:0x5c858ea2c065d298!8m2!3d50.4530227!4d30.4739026?hl=ru"
				target="_blank">
				ул. Старокиевская, 10<br> Киев, Украина
			</a>
		</div>
		<div class="custom__contacts_item">
			<img src="img/tel-icon.png" alt="">
			<a href="tel:(096) 508 99 55">(096) 508 99 55</a>
		</div>
		<div class="custom__contacts_item">
			<img src="img/tel-icon.png" alt="">
			<a href="tel:(096) 508 99 55">(096) 508 99 55</a>
		</div>
		<div class="custom__contacts_item">
			<p>ООО «УКРФИНБЕЗПЕКА»</p>
			<p>Идентификационный код 35679604</p>
		</div>
	</div>
</div>

</main>

<?php
	get_footer();