<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<?php echo get_theme_mod( 'understrap_theme_script_code_setting' ); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    
    <!-- ******************* The Navbar Area ******************* -->
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
    
        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'understrap' ); ?></a>

        <nav class="navbar site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                            
                <div class="container">

                    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
                      &#9776; Menu Principal
                    </button>     
                        
                    <div class="collapse navbar-toggleable-xs" id="navbar-header">

                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                            title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                            rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="" class="img-fluid">
                        </a>
                        
                        <?php wp_nav_menu(
                                array(
                                    'theme_location'    => 'primary',
                                    'menu_class'        => 'nav navbar-nav pull-lg-right',
                                    'fallback_cb'       => '',
                                    'menu_id'           => 'main-menu',
                                    'walker'            => new wp_bootstrap_navwalker()
                                )
                        ); ?>

                    </div>                                           

                   <!--  </div> -->

                </div> <!-- .container -->
                
        </nav><!-- .site-navigation -->

        
    </div><!-- .wrapper-navbar end -->

    <div class="oval hidden-sm-down"></div>

    <div class="quadro">







