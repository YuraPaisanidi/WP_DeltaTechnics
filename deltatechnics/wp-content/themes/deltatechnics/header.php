<!DOCTYPE html>
<html lang="uk">

<head>

	<meta charset="utf-8">
	<title><?php the_title(); ?></title>
	<meta name="description" content="DeltaTechnics">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<meta property="og:image" content="img/preview.jpg">

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

</head>

<?php wp_head(); ?>

<body>

<?php get_template_part( 'parts/header' ); ?>