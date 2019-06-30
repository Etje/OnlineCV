<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EtienRuhlCV
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<title><?php bloginfo('description'); ?></title>

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/vendor/css/one-page-wonder.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/vendor/css/style.css" rel="stylesheet">

	<!------ Include the above in your HEAD tag ---------->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/style.js"></script>
    <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'etienruhlcv' ); ?></a>
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
			<div class="container">
			<a class="navbar-brand" href="<?php echo site_url( '/', 'https' ); ?>">&lt;<?= bloginfo( 'name' )?>/&gt;</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav">
					<?php 
						wp_nav_menu( 

							array(

							'theme_location'	=> 'primary-menu',
							'container_class'	=> 'navbar_collapse',
							'container_id'      => 'myNavBarContainerId',
							'menu'              => 'Menu',
							'menu_class'		=> 'navbar-nav',
							'menu_id'           => 'myNavBarMenuId'

						)

					);
					?>
				</ul>
			</div>
    	</div>
	</nav>
<div id="content" class="site-content">
