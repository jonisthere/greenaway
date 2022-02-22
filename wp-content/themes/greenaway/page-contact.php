<?php
/**
 * Template Name: Contact Page
 * 
 * The template for displaying all pages
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

<div class="main-page-container" id="">
		
		<?php
			while (have_posts()) : the_post(); ?>

	<div class="container-fluid">
		<div class="content heading">
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
		</div>
	</div>

	<div class="category container-fluid"> 
		<div class="row">
				<div class="category-item col-12 col-md-6">
			
					<?php if (has_post_thumbnail( $work_page->ID )) { ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $work_page->ID ), 'grid-image' ); ?>
						<?php $altText = get_post_meta( get_post_thumbnail_id( $work_page->ID ), '_wp_attachment_image_alt', true ); ?>
			
							<img src="<?php echo $image[0]; ?>" class="" alt="<?php echo $altText; ?>">
						
					<?php } ?>
				</div>
				<div class="category-item contact-form col-12 col-md-6">
				
				<?php echo do_shortcode('[caldera_form id="CF621212d652c30"]'); ?>
				
				</div>
					
				
			
		</div>
	</div>
	<?php endwhile; ?>
</div> 

<?php
get_footer();