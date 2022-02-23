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

<div class="main-page-container">

          
            <div class="home-content">
                <div class="home-content__video">
				<iframe class="gg-video" src="https://player.vimeo.com/video/388471185?autoplay=1&amp;loop=1" allowfullscreen="allowfullscreen" data-dashlane-frameid="594852970497" frameborder="0"></iframe>
                </div>
            </div>
         
</div> 


<?php
get_footer();
// always good to see exactly what you are working with
								// var_dump($values);
								// var_dump($values2); 
