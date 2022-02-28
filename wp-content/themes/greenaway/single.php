<?php get_header(); ?>

<div class="main-page-container" id="">
		<div class="single-page-container">
			<div class="single-page">

	<?php while (have_posts()) : the_post(); ?>
		<div class="full-page-container">
			
			<section class="project-single">
				<div class="row project-single__section">
					<div class="col-12 col-md-6">
						<div class="project-single__content">
							<div class="heading inner">
                            	<h1><?php the_title(); ?></h1>	
							</div>
			</div>
					</div>
					<div class="single-content">
                <div class="single-content__video">
				<iframe class="single-video" src="<?php echo get_field('video') ?>" allowfullscreen="allowfullscreen" data-dashlane-frameid="594852970497" frameborder="0"></iframe>
                </div>
            </div>

							<div class="content inner">
								<p><?php the_content(); ?></p>
							</div>
				
					<?php if( have_rows('images') ): ?>
						<div class="single-image">
						<?php while( have_rows('images') ): the_row(); 
							$image = get_sub_field('image');
							?>
							<div>
								<?php $imageUrl = wp_get_attachment_image_src( $image, 'work-item-image' ); ?>
								<img src="<?php echo $imageUrl[0]; ?>" alt="">
							<!--	<p><?php // the_sub_field('caption'); ?></p> -->


								
					</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				</div>
				</section>
			
		</div>
	<?php endwhile; ?>
            </div>
        </div>
</div>

<?php get_footer(); ?>