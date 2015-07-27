<?php
/**
 * Header File...
 */
?>
<!DOCTYPE html>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Poppins|Didact+Gothic|Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page">
		<header>
			<div id="navbar">
				<div id="site-name">
					<a href="">
						<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					</a>
				</div><!--#site-name-->
				<nav>
                    <?php wp_nav_menu( array(
                        'menu_class' => 'nav', //Fügt eine Klasse zum Menü hinzu
                        'container_id' => 'navwrap', //Legt ID von dem Container fest, der das komplette Menü umgibt
                    )); ?>
                </nav>
			</div><!-- #navbar -->
			<div id="header-img">
				<div id="header-logo">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png">
				</div><!--#header-logo-->
				<div id="header-background-img">
					<img src="<?php header_image(); ?>">
				</div><!--#header-background-img-->
			</div><!-- #header-img -->
		</header>
	
