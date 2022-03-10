
<?php

/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

use function DI\value;

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>


<div id="gg-video">
    
<div class="page">
<div>
        <iframe src="https://giphy.com/embed/xUA7b3mdJsdGrzF6dW" frameborder="0" allow="fullscreen"></iframe>
    </div>
    <script src="https://player.vimeo.com/api/player.js"></script>
    
    
    <div class="showreel">
    
    <a href="<?php echo site_url();?>/showreel"><button class="showreel-button btn">VIEW THE SHOWREEL</button></a>
</div>


   </div>

</div>


<?php
get_footer();
// always good to see exactly what you are working with
								// var_dump($values);
								// var_dump($values2); 
                                ?>
                                

                               <!--<iframe src="https://giphy.com/embed/xUA7b3mdJsdGrzF6dW" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/space-stars-universe-xUA7b3mdJsdGrzF6dW">via GIPHY</a></p>-->

                                <!--https://player.vimeo.com/video/358158866?h=040768a133-->

                               