<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */

$blogDefault = get_field('default_blog_image', 'options');

get_header();?>



<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 block center">
                    <p class="teaser"><?php the_field('teaser'); ?></p>
                    <p><?php the_field('background_story'); ?></p>

                    <div class="matters-block">
                        <h2>Why This Case Matters</h2>
    					<p><?php the_field('case-reasoning'); ?></p>  
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient">
        <div class="container">
            <div class="columns">
                <div class="column-75 block center">
                    <h2>How We Built A Winning Case</h2>
					<div class="how-box">
                        <h3>Investigate</h3>
                        <p><?php the_field('step_investigate'); ?></p>

                    </div>
                    <div class="spacer-30"></div>
                    <div class="how-box">
                        <h3>Analyze</h3>
                        <p><?php the_field('step_analyze'); ?></p>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="how-box">
                        <h3>Synthesize</h3>
                        <p><?php the_field('step_synthesize'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="result">
        <div class="container">
            <div class="columns">
                <div class="column-50 block result-content">
                    <h2>The Result</h2>
                    <p><?php the_field('results_intro'); ?></p>
                    <p><?php the_field('results_text'); ?></p>
                    <div class="main-contact">
                        <div class="contact-block-left">
                            <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                        </div>
                        <?php if (!is_page_template('page-contact.php')) { ?>
                        <div class="contact-block-right">
                            <p><a href="/contact-us/" title="Online form">Contact Us Online</a></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="column-50 result-img">
                    <img src="/wp-content/uploads/2024/07/case-studies-img.jpg" alt="Judge hitting gavel on bench">
                </div>
            </div>
        </div>
    </section>

    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer();?>