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
    <footer>
    
        <div class="gway-footer">
            <div class="row">
            <div class="col-md-4 gway-footer__nav">
                <nav class="nav">
                    <a class="nav-link indeed" href="#"><img class="social" src="<?php echo get_template_directory_uri(); ?>/images/iconmonstr-facebook-1-16.png" alt="facebook-social"></a>
                    <a class="nav-link" href="#"><img class="social" src="<?php echo get_template_directory_uri(); ?>/images/iconmonstr-instagram-11-16.png" alt="instagram-social"></a>
                    <a class="nav-link" href="#"><img class="social" src="<?php echo get_template_directory_uri(); ?>/images/iconmonstr-vimeo-1-16.png" alt="vimeo-social"></a>
                </nav>
            </div>
          
            <div class="col-md-4 gway-footer__copy">
                <p>&copy; GREENAWAY & GREENAWAY, ALL RIGHTS RESERVED 2022</p>
            </div>
        </div>
        </div>

</footer>
</div>

<?php wp_footer(); ?>


</body>
</html>



