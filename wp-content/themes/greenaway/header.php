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
    <meta name="description" content="Greenaway">
    <meta name="robots" content="index, follow">
    <link rel="icon" href=""> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title>Greenaway & Greenaway</title>
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
  
