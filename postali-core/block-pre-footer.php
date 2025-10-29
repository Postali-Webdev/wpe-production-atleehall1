    <section id="pre-footer">
        <div class="container">
            <div class="columns">

            <?php if(get_field('add_custom_pre-footer_messaging')) { ?>
                
                <div class="column-full center centered block">
                    <h2><?php the_field('pre_footer_headline'); ?></h2>
                </div>
                <div class="column-66 centered center block">
                    <p class="subhead"><?php the_field('pre_footer_subheadline'); ?></p>
                    <p><?php the_field('pre_footer_copy'); ?></p>

            <?php } else { ?>

                <div class="column-full center centered block">
                    <h2><?php the_field('pre_footer_headline','options'); ?></h2>
                </div>
                <div class="column-66 centered center block">
                    <p class="subhead"><?php the_field('pre_footer_subheadline','options'); ?></p>
                    <p><?php the_field('pre_footer_copy','options'); ?></p>

            <?php } ?>
                    <div class="pre-footer-contact">
                        <div class="contact-block-left">
                            <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                        </div>
                        <?php if (!is_page_template('page-contact.php')) { ?>
                        <div class="contact-block-right">
                            <p><a href="/contact/" title="Online form">Contact Us Online</a></p>
                        </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </section>