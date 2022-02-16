<?php

/**
 * Template Name: Cat Page
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
	while ( have_posts() ) {
		the_post();
	?>
		<?php $cat = get_field('work_cat_display'); ?>
		<?php echo $cat; ?>
		<?php the_title(); ?>
		<?php
			$args = array ('post_type' => array('work'), 
				'posts_per_page' => -1,
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'tax_query' => array(
						array(
						'taxonomy' => 'category',
						'field'    => 'term_id',
						'terms'    => $cat,
						),
					),
				);
			$the_query = new WP_Query( $args );
		?>

		<div class="category container-fluid">
			<div class="row">
				<?php if ( $the_query->have_posts() ) { ?>
					<?php while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<div class="category-item col-12 col-md-6">
							<?php the_title(); ?>
							<?php	
								if (has_post_thumbnail( $post->ID ) ) :
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'main-image' );?>
									<?php if($image) { ?>
										<a href="<?php echo get_permalink(); ?>"><img src="<?php echo $image[0]; ?>" class="img-fluid" alt=""></a>   
									<?php } ?>
							<?php endif; ?> 
							<!-- <div class="inner"
									style="background-image:url('<?php //echo $image[0]; ?>')" >
									
									<h2><a href="<?php // echo get_permalink(); ?>"><?php // the_title(); ?></a></h2>
								</div> -->
						</div>		
					<?php } ?>
				<?php } ?>
				<?php wp_reset_postdata(); ?>
		

			</div><!-- row -->
		</div><!-- category -->
	<?php } ?>
</div><!-- main-page-container -->

<?php
get_footer();
// always good to see exactly what you are working with
								// var_dump($values);
								// var_dump($values2); 
