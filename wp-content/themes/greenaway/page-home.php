
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


<div id="gg-video" style="">
    
<div class="page page-home">

        <!-- <iframe src="https://player.vimeo.com/video/683700164?h=da6066f23e" frameborder="0" allowfullscreen="allowfullscreen"></iframe> -->
            <video  class="video-player" data-autoplay="" autoplay="" webkit-playsinline="" playsinline="" loop="" muted="">
						<source class="video-home"  src="https://greenawayandgreenaway.com/wp-content/uploads/2022/03/GG_Site_Home_Page_Loop_Mastercrop_s.mov" type="video/mp4">
                        <!-- <source src="https://altcinc.com/wp-content/uploads/2019/05/ASH_REEL_2018_006.mp4" type="video/mp4"> -->

					</video>
                    <div class="showreel">
        <a href="<?php echo site_url();?>/showreel"><button class="showreel-button btn">VIEW THE SHOWREEL</button></a>
    </div>
    </div>
    <!-- <script src="https://player.vimeo.com/api/player.js"></script>
     -->
    
    


</div>


<?php
get_footer();
// always good to see exactly what you are working with
								// var_dump($values);
								// var_dump($values2); 
                                ?>
                                

                             