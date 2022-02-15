<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="main-page-container">
<div class="search blogs-search">
					<h2 class="bold">Latest Articles</h2>
					<?php get_search_form(); ?>
				</div>
				<?php // get_template_part('loop-templates/content', 'page-home'); ?>
				<?php $args = array ('post_type' => 'post', 'posts_per_page' => 6, 'order' => 'ASC' );
        			$the_query = new WP_Query( $args );
				?>
<section class="articles-section">
		<div class="row">

				<?php
				if ( have_posts() ) {
					// Start the Loop.
					while ( have_posts() ) {
						the_post(); ?>

						<div class="box col-12 col-sm-6 col-md-4">
						<div class="articles__item">
							
							<?php if (has_post_thumbnail( $post->ID )) { ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'grid-image' ); ?>
								<?php $altText = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true ); ?>
						
								<div class="articles__image">
									<img src="<?php echo $image[0]; ?>" alt="<?php echo $altText; ?>">
								</div>
							<?php } else { ?>
								<div class="articles__image">
								<img src="https://via.placeholder.com/250x150.png" alt="">
							</div>
							<?php } ?>
							<div class="articles__content">
								<h3 class="bold"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
								<h5><?php echo get_the_excerpt(); ?></h5>
								<h6 class=""><?php echo get_the_author(); ?></h6>
								<div class="articles__read-more d-flex">
									<img src="<?php echo get_template_directory_uri(); ?>/icons/read_1_crop.png" class="" alt="">
										<h4 class=""><a href="<?php echo get_permalink(); ?>">Read More</a></h4>
									<img src="<?php echo get_template_directory_uri(); ?>/icons/arrow.png" class="icon" alt="">
								</div>
							</div>
						</div>
					</div>
				<?php	}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>


			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- .row -->
</section>

</div><!-- #index-wrapper -->

<?php
get_footer();

