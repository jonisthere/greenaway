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
<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="#">Greenaway</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
  <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url();?>/home">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url();?>/work">WORK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url();?>/about">ABOUT</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url();?>/contact">CONTACT</a>
        </li>
      </ul>
  </div>
</nav>
</div>
