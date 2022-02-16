<?php

/**
 * Template Name: Work cat overview page
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

			<?php

			$work_pages = get_field('work_pages');
			// This loops round all the work items selected on ACF within the page
			if( $work_pages ): ?>
				<?php foreach( $work_pages as $work_page ): 
					$permalink = get_permalink( $work_page->ID );
					$title = get_the_title( $work_page->ID );
					
					?>
			
			
				<div class="category-item col-12 col-md-6">
			
					<?php if (has_post_thumbnail( $work_page->ID )) { ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $work_page->ID ), 'grid-image' ); ?>
						<?php $altText = get_post_meta( get_post_thumbnail_id( $work_page->ID ), '_wp_attachment_image_alt', true ); ?>
			
							<img src="<?php echo $image[0]; ?>" class="img-fluid" alt="<?php echo $altText; ?>">
						
					<?php } ?>
					<div class="category-text">
						<p class="bold"><a href="<?php echo get_permalink($work_page->ID); ?>"><?php echo get_the_title($work_page->ID); ?></a></p>
					</div>
				</div>
					
				<?php endforeach; ?>
				
			<?php endif; ?>
		</div>
	</div>
	<?php endwhile; ?>
</div> 
		
	



<?php
get_footer();
// always good to see exactly what you are working with
								// var_dump($values);
								// var_dump($values2); 
