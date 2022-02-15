<?php get_header(); ?>

<div class="main-page-container" id="">
		<div class="single-page-container">
			<div class="single-page">

	<?php while (have_posts()) : the_post(); ?>
		<div class="full-page-container">
			<div class="main-container container-fluid">
				<section class="blog-single">
				<div class="row blog-single__section">
					<div class="col-sm-12 col-md-9">
						<div class="blog-single__content">
							<div class="inner">
                            <?php the_title(); ?>
								<?php the_content(); ?>
							</div>
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