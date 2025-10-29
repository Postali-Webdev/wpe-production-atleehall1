<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

    <section class="footer">
        <div class="container">
            <div class="columns">
                <div class="column-33 footer-cta">
                    <?php the_field('cta_block','options'); ?>
                    <div class="main-contact">
                        <div class="contact-block-left">
                            <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                        </div>
                        <?php if (!is_page_template('page-contact.php')) { ?>
                        <div class="contact-block-right">
                            <p><a href="/contact/" title="Online form">Online Form</a></p>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="spacer-15"></div>
                    <p class="serif em">Initial free consultation</p>
                </div>
                <div class="column-66">
                    <div class="footer-logo">
                        <img src="/wp-content/uploads/2024/07/atlee-hall-logo-footer.svg" alt="Atlee Hall logo">
                    </div>
                    <div class="spacer-30"></div>
                    <div class="address-map">
                        <div class="address">
                            <p>
                                <a href="tel:<?php the_field('phone_number','options'); ?>" title="Call Today"><?php the_field('phone_number','options'); ?></a><br>
                                <a href="mailto:<?php the_field('email_address','options'); ?>" title="Email Today"><?php the_field('email_address','options'); ?></a>
                                <?php the_field('address','options'); ?><br>
                                <a href="<?php the_field('driving_directions','options'); ?>" title="Driving directions" target="blank">Directions</a>
                            </p>
                            <div class="footer-social">
                                <?php if(get_field('social_facebook','options')) { ?>
                                    <a class="social-link" href="<?php the_field('social_facebook','options'); ?>" title="Facebook" target="blank"><span class="icon-social-facebook"></span></a>
                                <?php } ?>
                                <?php if(get_field('social_instagram','options')) { ?>
                                    <a class="social-link" href="<?php the_field('social_instagram','options'); ?>" title="Instagram" target="blank"><span class="icon-social-instagram"></span></a>
                                <?php } ?>
                                <?php if(get_field('social_linkedin','options')) { ?>
                                    <a class="social-link" href="<?php the_field('social_linkedin','options'); ?>" title="LinkedIn" target="blank"><span class="icon-social-linkedin"></span></a>
                                <?php } ?>
                                <?php if(get_field('social_twitter','options')) { ?>
                                    <a class="social-link" href="<?php the_field('social_twitter','options'); ?>" title="Twitter" target="blank"><span class="icon-social-twitter"></span></a>
                                <?php } ?>
                                <?php if(get_field('social_youtube','options')) { ?>
                                    <a class="social-link" href="<?php the_field('social_youtube','options'); ?>" title="YouTube" target="blank"><span class="icon-social-youtube"></span></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="map">
                            <iframe name="Office location map" src="<?php the_field('map_embed','options'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="spacer-60"></div>
                        <div class="footer-nav">
                            <p><strong>Site Navigation</strong></p>
                            <?php
                                $args = array(
                                    'container' => false,
                                    'theme_location' => 'footer-nav'
                                );
                                wp_nav_menu( $args );
                            ?>	
                        </div>
                    <div class="spacer-15"></div>
                    <div class="footer-utility">
                        <div class="utility">
                            <?php if ( have_rows('utility_links','options') ): ?>
                            <?php while ( have_rows('utility_links','options') ): the_row(); ?>  
                                <a href="<?php the_sub_field('utility_page_link'); ?>"><?php the_sub_field('utility_link_text'); ?></a>
                            <?php endwhile; ?>
                            <?php endif; ?> 
                        </div>
                        <div class="disclaimer">
                            <p class="small"><?php the_field('disclaimer_text','options'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</footer>

<script>
    jQuery(document).ready(function(){
        // Target your .container, .wrapper, .post, etc.
        jQuery(".video").fitVids();
    });
</script>

<?php wp_footer(); ?>

</body>
</html>


