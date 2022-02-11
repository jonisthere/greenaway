<?php
/**
 * Content empty partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>
<section>
		<div class="main-page-container">
			<div class="learning-intro d-flex">
                <div class="learning-intro__text d-flex">
                    <div class="learning-intro__text-items">
                        <h1 class="">Rethinking Our Future</h1>
                        <h2 class="">From capitalism to real democracy</h2>
                        <h3 class="bold">A free e-learning course launching January 2022</h3>
                    	<a href="<?php echo get_site_url() . '/e-learning';?>" class="btn bold" type="link">Find out more<img src="<?php echo get_template_directory_uri(); ?>/icons/arrow_crop.png" class="arrow" alt=""></a>
					</div>
                </div>
                <div class="learning-intro__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/RDM_Illustrations_01.png" alt="">
                </div>
            </div> 
		</div>
	</section>
