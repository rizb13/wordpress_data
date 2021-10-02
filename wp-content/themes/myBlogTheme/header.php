<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- font awesome cdn link -->
	<!-- custom css style link -->
	<?php
	wp_head();
	?>
</head>
<body>
<div class="main-wrapper">
<header class="page-title bg-theme-light text-center">
    <img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">

	<?php
	wp_nav_menu(
		array(
			'menu' => 'primary',
			'container'=> '',
			'theme_location' => 'primary'
		))
	?>
</header>



