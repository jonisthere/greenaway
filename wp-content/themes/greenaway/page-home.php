
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
    
<div class="page" style="overflow:hidden">
<div style="overflow:hidden">
        <!-- <iframe src="https://player.vimeo.com/video/683700164?h=da6066f23e" frameborder="0" allowfullscreen="allowfullscreen"></iframe> -->
            <video data-autoplay="" autoplay="" webkit-playsinline="" playsinline="" loop="" muted="" data-object-fit="cover">
						<source src="https://player.vimeo.com/video/683700164?h=da6066f23e" type="video/mp4">
					</video>
    </div>
    <!-- <script src="https://player.vimeo.com/api/player.js"></script>
     -->
    
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
                                


                               