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
	
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<?php wp_head(); ?>
	<style type="text/css" media="screen">
	html { margin-top: 0 !important; }
	* html body { margin-top: 0 !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 0 !important; }
		* html body { margin-top: 0 !important; }
	}
</style>
</head>
<body <?php body_class(); ?>>
	<div id="page">
		<header>
			<div id="navbar" class="box-shadow">
				<div id="site-name">
					<a href="">
						<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					</a>
				</div><!--#site-name-->
				<nav>
					<div class="nav-button" id="nav-button"><a>Menu</a></div>
                    <?php wp_nav_menu( array(
                        'menu_class' => 'nav', //Fügt eine Klasse zum Menü hinzu
                        'container_id' => 'navwrap', //Legt ID von dem Container fest, der das komplette Menü umgibt
                    )); ?>
                </nav>
			</div><!-- #navbar -->
			<div id="header-img">
				<div id="header-logo" class="box-shadow">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png">
				</div><!--#header-logo-->
				<div id="header-background-img">
					<img src="<?php header_image(); ?>">
				</div><!--#header-background-img-->
			</div><!-- #header-img -->
		</header>
	
