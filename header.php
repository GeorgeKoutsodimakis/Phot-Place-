<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web_design_experiments
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <!-- Font Awseome Icons -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome.min.css">

  <!-- Bootstrap Core Css -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">

  <!-- Custom Core Css -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/custom.css">

	<!-- Custom Core Css -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/lightbox.css">



  <!-- Google Fonts -->



<?php wp_head(); ?>
<!--HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
 <script src="https://oss/maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script>
 <script src="https://oss/maxcdn.com/respond/1.4.2/respond.min.js"><script>
 <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'Photoplace_studio_custom_theme' ); ?></a>


	<!--HEADER
	==========================================-->
	<header class="site-header" role="banner">

				<!--NAVBAR
			======================================-->
			<div class="navabar-wrapper">
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

			<?php
			wp_nav_menu( array(
					'menu'              => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav',
					'walker'            => new WP_Bootstrap_Navwalker())
			);
	?>
</div>
</nav>



			</div><!--navbar-wrapper-->

	</header>

	<div id="content" class="site-content">
		<div id="preloader">
		  <div id="status">&nbsp;</div>
		</div>
