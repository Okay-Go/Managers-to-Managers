<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body class="body"<?php body_class(); ?>>
<!-- Site wrapper -->
<div class="wrapper">	
	<!-- Site header -->
	<header class="header">
		<h1>
			<a href="<?php echo home_url(); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo.png">
				<span class="logo-title"><?php bloginfo('name'); ?></span>
			</a>
		</h1>
		<!-- Site navigation -->
		<nav class="header-nav">
			<?php 

			$args = array(
				'theme_location' => 'primary'
			);
			
			?>
			<?php wp_nav_menu(); ?>
		</nav>
	</header>