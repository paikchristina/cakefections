<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<header>
			<h1 class="hidden">Cakefections: Custom Sweet Treats</h1>
			<a href="<?php bloginfo('url'); ?>"><img id="logo" class="hvr-grow" src="<?php bloginfo('template_url'); ?>/assets/dist/img/logo.png" alt="Cakefections Logo" title="Cakefections Logo"></a>
    </header>

		<!-- FLEXBOX NAV -->
    <nav>
  		<?php html5blank_nav() ?>
    </nav>

    <main>
