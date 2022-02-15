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
		<div class="single-page-container">
			<div class="single-page">

				<?php
				while ( have_posts() ) {
					the_post();

				
				
				?>
				<?php $cat = get_field('category_select'); ?>
				<?php echo $cat; ?>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<!-- 
				<?php // echo get_the_post_thumbnail( $post->ID, 'large' ); ?> -->

				<div class="entry-content">
				

                <?php
						$args = array ('post_type' => array('work'), 
							'posts_per_page' => -1,
							'orderby' => 'menu_order',
							'order' => 'ASC',
							// 'tax_query' => array(
							// 	              array(
							// 	                'taxonomy' => 'work_types',
							// 	                'field'    => 'term_id',
							// 	                'terms'    => $cat,
							// 				  ),
							// 	            ),
							);

							// print_r($args);
						$the_query = new WP_Query( $args );

						

						
					?>
	<?php if ( $the_query->have_posts() ) { ?>
		<?php while ( $the_query->have_posts() ) {
		$the_query->the_post(); ?>

		<?php echo ($post->ID); ?>

		    <li class="col-sm-12 grid-item">
				<?php	
					if (has_post_thumbnail( $post->ID ) ) :
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'main-image' );
						
					endif; ?> 
					<div class="inner" <?php if($image) { ?>
							style="background-image:url('<?php echo $image[0]; ?>')"
						  <?php } ?>>
			    <h2>
					<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		    </li>    			
		<?php } ?>
	<?php } ?>
	<?php wp_reset_postdata(); ?>


	<?php the_title(); ?>
	<?php } ?>

			</div><!-- .entry-content -->
		</div><!-- .row -->
	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
// always good to see exactly what you are working with
								// var_dump($values);
								// var_dump($values2); 
