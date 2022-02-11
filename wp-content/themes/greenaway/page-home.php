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

$container = get_theme_mod('understrap_container_type');

?>

<div class="main-page-container main-page-container--intro" id="">


			<?php
			while (have_posts()) {
				the_post();
				
			?>
			<div class="homepage-intro-container">
				<div class="homepage-intro">
					<div class="homepage-intro__content">
						<?php 
						$values = get_field('header_text');
						echo($values);
						?>
						<div class="buttons d-flex flex-column">
							<a href="<?php echo get_site_url() . '/e-learning';?>" class="btn bold" type="link">Find out more<img src="<?php echo get_template_directory_uri(); ?>/icons/arrow_crop.png" class="arrow" alt=""></a>
						</div>
					</div>
					<div class="homepage-intro__image">
						<?php $image = wp_get_attachment_image_src(get_field('header_image'), 'grid-image'); ?>
						<!-- <img class="homepage-intro__image" src="<?php // echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('header_image')) ?>" /> -->
						<img src="<?php echo get_template_directory_uri(); ?>/images/RDM_Illustrations_01.png" alt="">
					</div>
				</div>
			</div>
</div>
<div class="main-page-container" id="">
				<div class="search">
					<div><h2 class="bold">Latest&nbspArticles</h2></div>
					<?php get_search_form(); ?>
				</div>
				<?php // get_template_part('loop-templates/content', 'page-home'); ?>
				<?php $args = array ('post_type' => 'post', 'posts_per_page' => 6, 'order' => 'ASC' );
        			$the_query = new WP_Query( $args );
				?>

				
				<section class="home-page-articles articles-section">
					<div class="row">
					<?php
					$featured_posts = get_field('featured_articles');
					
					if( $featured_posts ): ?>
						<?php foreach( $featured_posts as $featured_post ): 
							$permalink = get_permalink( $featured_post->ID );
							$title = get_the_title( $featured_post->ID );
							$custom_field = get_field( 'field_name', $featured_post->ID );
							?>
							<!-- <li>
								<a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
								<span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
							</li> -->
							<div class="box col-12 col-sm-6 col-md-4">
								<div class="articles__item">
									
									<?php if (has_post_thumbnail( $featured_post->ID )) { ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $featured_post->ID ), 'grid-image' ); ?>
									<?php $altText = get_post_meta( get_post_thumbnail_id( $featured_post->ID ), '_wp_attachment_image_alt', true ); ?>
									<div class="articles__image">
										<img src="<?php echo $image[0]; ?>" alt="<?php echo $altText; ?>">
									</div>
									<?php } else { ?>
										<div class="articles__image">
										<img src="https://via.placeholder.com/250x150.png" alt="">
									</div>
									<?php } ?>
									<div class="articles__content">
										<h3 class="bold"><a href="<?php echo get_permalink($featured_post->ID); ?>"><?php echo get_the_title($featured_post->ID); ?></a></h5>
										<h5><?php echo get_the_excerpt($featured_post->ID); ?></h5>
										<h6 class=""><?php //echo get_the_author($featured_post->ID); ?></h6>
										<div class="articles__read-more d-flex">
											<img src="<?php echo get_template_directory_uri(); ?>/icons/read_1_crop.png" class="" alt="">
												<h4 class=""><a href="<?php echo get_permalink($featured_post->ID); ?>">Read More</a></h4>
											<img src="<?php echo get_template_directory_uri(); ?>/icons/arrow.png" class="icon" alt="">
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						
					<?php endif; ?>

						<!-- <?php 	
							if ( $the_query->have_posts() ) {
								while ( $the_query->have_posts() ) {
										$the_query->the_post();

										
										// $content = $post->post_content;
										// $preview = substr($content, 0, 1000); 
						?>
							<div class="box col-12 col-sm-6 col-md-4">
								<div class="articles__item">
									
									<?php if (has_post_thumbnail( $post->ID )) { ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'grid-image' ); ?>
									<div class="articles__image">
										<img src="<?php echo $image[0]; ?>" alt="">
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
						<?php
									}
								}
							wp_reset_postdata(); 
						?> -->
					</div>

				</section>
			</div>


		</div>

		

	</div><!-- #content -->

</div><!-- #page-wrapper -->
<section class="bg-grey publications-home">
	<div class="main-page-container" id="">
	<?php 	
$the_query = new WP_Query( array( 'post_type' => 'any', 'post__in' => array( 7580 ) ) );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
                $the_query->the_post();
?>
<div class="publications-home__title">
    <h3><?php the_title(); ?></h3>
</div>
<?php
        }
    }
    wp_reset_postdata(); 
?>
				<div class="row pub">
					<?php  get_template_part( 'loop-templates/content-publications', 'none' ); ?>
				</div>
	</div>
</section>

<section>
<div class="main-page-container">
		<div class="quote">
        <div class="quote__content">
		<img src="<?php echo get_template_directory_uri(); ?>/icons/quote.svg" alt="">
            <h1 class="">Let's remake democracy so that economic and political power rests <span class="green">with the people.</span></h1>
            <div class="line"></div>
        </div>
		</div>
</div>
</section>

<?php } ?>
<?php
get_footer();
// always good to see exactly what you are working with
								// var_dump($values);
								// var_dump($values2); 
