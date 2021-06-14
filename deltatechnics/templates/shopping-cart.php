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
			<h1 class="shopping-cart__title h1">Корзина</h1>
		</div>
	</div>


</div>

<div class="shopping-cart__container container">

	<div class="shopping-cart__list">
		<form class="shopping-cart__item">
			<div class="shopping-cart__item_block">
				<a href="#" class="shopping-cart__item_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svd.png" alt="">
				</a>
				<a href="#" class="shopping-cart__item_name">
					Savage Axis XP Bolt-Action Rifle in TrueTimber Strata
				</a>
			</div>
			<div class="shopping-cart__item_block">
				<p class="shopping-cart__item_price">750 грн</p>
				<div class="shopping-cart__item_quantity">
					<button href="#" class="shopping-cart__item_minus">-</button>
					<input type="number" class="shopping-cart__item_num" placeholder="2">
					<button href="#" class="shopping-cart__item_plus">+</button>
				</div>
			</div>
			<div class="shopping-cart__item_block">
				<p class="shopping-cart__item_total">1500 грн</p>
				<button href="#" class="shopping-cart__item_del">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/delete.svg" alt="">
				</button>
			</div>
		</form>
		<form class="shopping-cart__item">
			<div class="shopping-cart__item_block">
				<a href="#" class="shopping-cart__item_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svd.png" alt="">
				</a>
				<a href="#" class="shopping-cart__item_name">
					Savage Axis XP Bolt-Action Rifle in TrueTimber Strata
				</a>
			</div>
			<div class="shopping-cart__item_block">
				<p class="shopping-cart__item_price">750 грн</p>
				<div class="shopping-cart__item_quantity">
					<button href="#" class="shopping-cart__item_minus">-</button>
					<input type="number" class="shopping-cart__item_num" placeholder="2">
					<button href="#" class="shopping-cart__item_plus">+</button>
				</div>
			</div>
			<div class="shopping-cart__item_block">
				<p class="shopping-cart__item_total">1500 грн</p>
				<button href="#" class="shopping-cart__item_del">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/delete.svg" alt="">
				</button>
			</div>
		</form>
		<form class="shopping-cart__item">
			<div class="shopping-cart__item_block">
				<a href="#" class="shopping-cart__item_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svd.png" alt="">
				</a>
				<a href="#" class="shopping-cart__item_name">
					Savage Axis XP Bolt-Action Rifle in TrueTimber Strata
				</a>
			</div>
			<div class="shopping-cart__item_block">
				<p class="shopping-cart__item_price">750 грн</p>
				<div class="shopping-cart__item_quantity">
					<button href="#" class="shopping-cart__item_minus">-</button>
					<input type="number" class="shopping-cart__item_num" placeholder="2">
					<button href="#" class="shopping-cart__item_plus">+</button>
				</div>
			</div>
			<div class="shopping-cart__item_block">
				<p class="shopping-cart__item_total">1500 грн</p>
				<button href="#" class="shopping-cart__item_del">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/delete.svg" alt="">
				</button>
			</div>
		</form>
	</div>

	<form class="shopping-cart__order">
		<a href="#" class="shopping-cart__order_btn">Оформить заказ</a>
		<div class="shopping-cart__total">
			<span>Итого</span>
			<p class="shopping-cart__total_sum">4500 грн</p>
		</div>
	</form>


</div>

</main>

<?php get_footer(); ?>