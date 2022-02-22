<?php get_header(); ?>

<div class="main-page-container" id="">
		<div class="single-page-container">
			<div class="single-page">

	<?php while (have_posts()) : the_post(); ?>
		<div class="full-page-container">
			<div class="container-fluid">
				<section class="blog-single">
				<div class="row blog-single__section">
					<div class="col-12 col-md-6">
						<div class="blog-single__content">
							<div class="heading inner">
                            	<h1><?php the_title(); ?></h1>	
							</div>
							</div>
					</div>
							<div class="heading inner">
								<p><?php the_content(); ?></p>
							</div>
				
					<?php if( have_rows('images') ): ?>
						<ul class="slides">
						<?php while( have_rows('images') ): the_row(); 
							$image = get_sub_field('image');
							?>
							<div>
								<?php $imageUrl = wp_get_attachment_image_src( $image, 'work-item-image' ); ?>
								<img src="<?php echo $imageUrl[0]; ?>" alt="">
							<!--	<p><?php // the_sub_field('caption'); ?></p> -->


								
					</div>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
            </div>
        </div>
</div>

<?php get_footer(); ?>