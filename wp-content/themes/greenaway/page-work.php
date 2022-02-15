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
		<div class="single-page-container">
			<div class="single-page">

				<?php
                 while (have_posts()) : the_post(); ?>

                    <?php
                    the_title();
                    the_content(); ?>
                    <?php
					$work_pages = get_field('work_pages');
                    // This loops round all the work items selected on ACF within the page
					if( $work_pages ): ?>
						<?php foreach( $work_pages as $work_page ): 
							$permalink = get_permalink( $work_page->ID );
							$title = get_the_title( $work_page->ID );
							
							?>
							<div class="box col-12 col-sm-6 col-md-4">
								<div class="articles__item">
									
									<?php if (has_post_thumbnail( $work_page->ID )) { ?>
                                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $work_page->ID ), 'grid-image' ); ?>
                                        <?php $altText = get_post_meta( get_post_thumbnail_id( $work_page->ID ), '_wp_attachment_image_alt', true ); ?>
                                        <div class="articles__image">
                                            <img src="<?php echo $image[0]; ?>" alt="<?php echo $altText; ?>">
                                        </div>
									<?php } ?>
									<div class="articles__content">
										<h3 class="bold"><a href="<?php echo get_permalink($work_page->ID); ?>"><?php echo get_the_title($work_page->ID); ?></a></h5>
										<h5><?php echo get_the_excerpt($work_page->ID); ?></h5>
										<h6 class=""><?php //echo get_the_author($featured_post->ID); ?></h6>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						
					<?php endif; ?>

            <?php endwhile; ?>
				


			</div><!-- .entry-content -->
		</div><!-- .row -->
	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
// always good to see exactly what you are working with
								// var_dump($values);
								// var_dump($values2); 
