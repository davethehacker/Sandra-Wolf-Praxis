<?php
/**
 * Header File...
 */
?>

<?php error_reporting(E_ALL);?>
<!DOCTYPE html>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Poppins|Didact+Gothic|Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
	<script src="<?php echo get_bloginfo('template_directory'); ?>/script.js" type="text/javascript"></script>
	
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
					<div class="nav-button" id="nav-button" onclick="toggleMenu();"><a>Menu</a></div>
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
	
