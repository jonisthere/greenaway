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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1, maximum-scale=1">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://use.typekit.net/kzt7gff.css">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/icons/favicon-16x16.png">
</head>

<body class="body">
<div class="main-page-container">
    <header class="sticky-top"> 
        <nav class="navbar sticky-top navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="">Greenaway & Greenaway</a>
              <div class="list">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="">Home</a>
                  <a class="nav-link" href="#">Work</a>
                  <a class="nav-link" href="./about/">About</a>
                  <a class="nav-link contact" href="./contact/">Contact</a>
                </div>
              </div>
            </div>
            </div>
          </nav>
    </header>
</div>
  
