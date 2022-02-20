<?php get_header(); ?>

<div class="main-page-container" id="">
		<div class="single-page-container">
			<div class="single-page">

	<?php while (have_posts()) : the_post(); ?>
		<div class="full-page-container">
			<div class="main-container container-fluid">
				<section class="blog-single">
				<div class="row blog-single__section">
					<div class="col-12 col-md-6">
						<div class="blog-single__content">
							<div class="heading inner">
                            	<h1><?php the_title(); ?></h1>
								<p><?php the_content(); ?></p>
							</div>
								<?php	
								if (has_post_thumbnail( $post->ID ) ) :
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),  'post-image' );?>
									<?php if($image) { ?>
										<a href="<?php echo get_permalink(); ?>"><img src="<?php echo $image[0]; ?>" class="img-fluid" alt=""></a>   
									<?php } ?>
								
							<?php endif; ?> 
							</div>
					</div>
					
				</div>
			</div>
		</div>
	<?php endwhile; ?>
            </div>
        </div>
</div>

<?php get_footer(); ?>