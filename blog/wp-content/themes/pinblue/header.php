<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width" />

<title><?php wp_title('|', true, 'left'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>



<?php do_action( 'before' ); ?>

	<header id="branding" role="banner">
      <div id="inner-header" >
       <a class="logoGW" href="http://www.gumpaway.com"><img src="/images/logoGW.png" alt="Gump Away" title="Gump Away" border="0" /></a>
			<h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
	        <div class="contentTop">
            	<div class="socialContent">
	            <div style="position:relative; margin-left:35px; padding:18px 0 0 0"><?php get_search_form(); ?></div>
                </div>
                <div class="counterContainer">
                	<iframe allowtransparency="true" class="iframeCounter" src="http://gumpaway.com/counterIframe.php" scrolling="no" frameborder="0"></iframe>
                </div>
            </div>
            
            
            

        

      </div>

	</header><!-- #branding -->



<div id="container">



	<nav id="access" role="navigation">

        <h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'pinblue' ); ?></h1>

        <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'pinblue' ); ?>"><?php _e( 'Skip to content', 'pinblue' ); ?></a></div>



        <?php pinblue_main_nav(); // Adjust using Menus in Wordpress Admin ?>

    </nav><!-- #access -->



