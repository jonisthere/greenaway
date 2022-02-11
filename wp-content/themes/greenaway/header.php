<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/icons/favicon-16x16.png">
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
<!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
	
leaving this for your ref copy these styles across to new menu -->

  
<div class="main-page-container">
<a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="logo logo-mobile" src="<?php echo get_template_directory_uri(); ?>/icons/logo_black_crop.png" alt="Real democracy movement logo"></a>
<div id="mobile-menu-container">

</div>
	<!-- ******************* The Navbar Area ******************* -->
	<nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="logo logo-main" src="<?php echo get_template_directory_uri(); ?>/icons/logo_black_crop.png" alt="Real democracy movement logo"></a>
      
	  
      
        
        <?php 
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'main-menu',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						
					)
				);
				?>
        
      <form class="d-flex">
            <a href="<?php echo esc_url( get_page_link( 10365 ) ) ?>" class="btn-nav" type="link">Log In</a>
        </form>

		
  </nav>
  
</div>
  
