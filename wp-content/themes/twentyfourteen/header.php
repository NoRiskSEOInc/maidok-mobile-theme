<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="google-site-verification" content="8tqsxQVpLDUPPE8QoKDB3fZ6RqtRzjSIgKcUsB89Ep8" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
<script async src="//18110.tctm.co/t.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50751922-1', 'maidok.com');
  ga('send', 'pageview');

</script>


<meta name="msvalidate.01" content="3ACE1910A63C8B23A6FE2F7F1A7ABF3D" />



</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">


   				<div id="MarqueeWrapper" >
					<marquee scrollamount="2" loop="infinite" scrolldelay="2">IF YOU HAVE NEVER USED OUR SERVICES OR HAVE NOT USED OUR SERVICES FOR THE PAST 3 MONTHS, BOOK ANY SERVICE, SAY YOU SAW THE MARQUEE ON THE WEBSITE AND RECEIVE 10% OFF!!</span><div style="clear: both;">
</marquee>
				</div><!-- // MarqueeWrapper -->

		<img class="slideshow_overlay" src="/wp-content/themes/twentyfourteen/images/slideshow_overlay.png">

	<div id="slideshow">

			<?php do_action('slideshow_deploy', '5'); ?>
	
	</div>

	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			
		

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">