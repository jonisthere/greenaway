<?php
/**
 * Template Name: About Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="main-page-container">

          <div class="container-fluid">
			<div class="about heading">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
			</div>
            <div class="about-content">
                <div class="about-content__image">
				<?php if (has_post_thumbnail( $work_page->ID )) { ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $work_page->ID ), 'post-image' ); ?>
						<?php $altText = get_post_meta( get_post_thumbnail_id( $work_page->ID ), '_wp_attachment_image_alt', true ); ?>
			
							<img src="<?php echo $image[0]; ?>" class="img-fluid" alt="<?php echo $altText; ?>">
						
					<?php } ?>
					
                </div>
            </div>
          </div>
</div> 

<?php
get_footer();