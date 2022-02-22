<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// $container = get_theme_mod( 'understrap_container_type' );
?>


<div class="main-page-container">    
    <footer class="container-fluid">
    
        <div class="container-fluid gway-footer">
            <div class="row">
            <div class="col-md-4 gway-footer__nav">
                <nav class="nav">
                    <a class="nav-link indeed" href="#"><img class="social" src="https://via.placeholder.com/16" alt="indeed-social"></a>
                    <a class="nav-link" href="#"><img class="social" src="https://via.placeholder.com/16" alt="indeed-social"></a>
                    <a class="nav-link" href="#"><img class="social" src="https://via.placeholder.com/16" alt="indeed-social"></a>
                    <a class="nav-link" href="#"><img class="social" src="https://via.placeholder.com/16" alt="indeed-social"></a>
                    <a class="nav-link" href="#"><img class="social" src="https://via.placeholder.com/16" alt="indeed-social"></a>
                </nav>
            </div>
            <div class="col-md-4 gway-footer__top-page">
                <img class="gway-footer__top-page-button" src="https://via.placeholder.com/45" alt="top-page-button">
            </div>
            <div class="col-md-4 gway-footer__copy">
                <p>&copy; Greenaway & Greenaway, all rights reserved 2022</p>
            </div>
        </div>
        </div>

</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>



