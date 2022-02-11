<?php
/**
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
		<div class="single-page-container">
			<div class="single-page">

				<?php
				while ( have_posts() ) {
					the_post();
					// get_template_part( 'loop-templates/content', 'page-home' );
					// print_r($post);
					// $values = get_field('header_text');
					// $values2 = get_field('header_image');

					// // always good to see exactly what you are working with
					// var_dump($values);
					// var_dump($values2);


				}
				
				?>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<!-- 
				<?php // echo get_the_post_thumbnail( $post->ID, 'large' ); ?> -->

				<div class="entry-content">
				<?php the_content(); ?>
				<?php
				// wp_link_pages(
				// 	array(
				// 		'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				// 		'after'  => '</div>',
				// 	)
				// );
				?>

			</div><!-- .entry-content -->
		</div><!-- .row -->
	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
