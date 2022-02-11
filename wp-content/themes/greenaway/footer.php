<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// $container = get_theme_mod( 'understrap_container_type' );
?>

<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


  <div class="sign-up ">
    <div class="main-page-container inner d-sm-flex">
        <div class="sign-up__newsletter">
          <h2>Get updates</h2>
          <h5>What’s new on the website sent to you once a month</h5>
        </div>
        <div class="sign-up__email">
          <!-- <input type="email" name="email" id="email" placeholder="Email Address..." required>
          <button type="Submit">Submit</button> -->
        
          <!-- Begin Mailchimp Signup Form -->
          <div id="mc_embed_signup">
            <form action="https://realdemocracymovement.us7.list-manage.com/subscribe/post?u=b9389b39c794abd794806c59a&amp;id=6dc116b506" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                  <div class="mc-field-group">
                    <!-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label> -->
                    <input type="email" value="" name="EMAIL" class="required email" placeholder="Email Address..." id="mce-EMAIL">
                  </div>
                    <div id="mce-responses" class="clear">
                      <div class="response" id="mce-error-response" style="display:none"></div>
                      <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b9389b39c794abd794806c59a_6dc116b506" tabindex="-1" value=""></div>
                </div>
                <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button sign-up-button">
                
            </form>
          </div>
        </div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
    </div>
<footer class="footer">
  <div class="main-page-container">
      <div class="footer__main d-flex">
        <div class="footer__content">
            <!-- <img class="logo" src="../icons/logo_white_crop.png" alt=""> -->
          <div>
            <ul class="d-flex">
              <li><a target="_blank" href="https://www.facebook.com/realdemocracymovement"><img class="social" src="<?php echo get_template_directory_uri(); ?>/icons/facebook.png" alt="facebook-social"></a></li>
              <li><a target="_blank" href="https://www.youtube.com/channel/UCCqPKTRYnlzPapVQhAbx0Hw"><img class="social" src="<?php echo get_template_directory_uri(); ?>/icons/youtube.png" alt="youtube-social"></a></li>
              <li><a target="_blank" href="https://twitter.com/democracyOK"><img class="social" src="<?php echo get_template_directory_uri(); ?>/icons/twitter.png" alt="twitter-social"></a></li>
             </ul>
          </div>
        </div>
        <div class="footer__nav">
            <nav class="nav">
            <a class="nav-link" href="<?php echo get_site_url();?>">Home</a>
            <a class="nav-link" href="<?php echo get_site_url() . '/e-learning';?>">E-Learning</a>
            <a class="nav-link" href="<?php echo get_site_url() . '/contact-form';?>">Contact Us</a>
            <a class="nav-link" href="<?php echo get_site_url() . '/get-involved';?>">Get Involved</a>
            <a class="nav-link" href="<?php echo get_site_url() . '/privacy-statement';?>">Privacy</a>
            </nav>
        </div>
      </div>
    </div>
	<?php // understrap_site_info(); ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>

