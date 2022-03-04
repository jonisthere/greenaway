
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

<div id="">
<div class="main-page-container">
    <div class="page">
<div class="showreel">
<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/683700164?h=da6066f23e&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="G&amp;amp;G_Site_Home_Page_Loop_Master+noise"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
 
    <a href="<?php echo site_url();?>/showreel"><button class="showreel-button btn">VIEW THE SHOWREEL</button></a>
</div>
   </div>
</div>
</div>


<?php
get_footer();
// always good to see exactly what you are working with
								// var_dump($values);
								// var_dump($values2); 
                                ?>
                                