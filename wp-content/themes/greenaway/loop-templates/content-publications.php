

<?php 	
$the_query = new WP_Query( array( 'post_type' => 'any', 'post__in' => array( 8738,7568, 4814, 7528 ) ) );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
                $the_query->the_post();
?>
    <div class="col-12 col-md-6">
        <div class="publications__item d-flex">
            <div class="publications__image">
                <?php if (has_post_thumbnail( $post->ID )) { ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portrait-image'); ?>
                    <?php $altText = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true ); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $altText; ?>">
                <?php } else { ?>
                    <img src="https://via.placeholder.com/100x130.png" alt="">
                <?php } ?>
            </div>
            <div class="publications__content">
                <p><a class="bold" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
                <h5><?php echo get_the_excerpt(); ?></h5>
                <!-- <h6 class="v-small-text">By SARAH JENKINS</h6> -->
            </div>
        </div>
    </div>
                    
<?php
        }
    }
    wp_reset_postdata(); 
?>

