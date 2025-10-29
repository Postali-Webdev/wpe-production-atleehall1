<?php
/**
 * Template Name: Blog
 * 
 * @package Postali Child
 * @author Postali LLC
 */


get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <?php while( have_posts() ) : the_post(); ?>
                    <a class="landing-box-container"  href="<?php the_permalink(); ?>">
                        <div class="landing-box">
                            <h3><?php the_title() ?></h3>
                            <p><?php the_field('teaser'); ?></p>
                        </div>
                        <span class="post-link">
                            <p><span>View Case Details</span> <strong> &nbsp; ></strong></p>
                        </span>
                    </a>
                    <?php endwhile; wp_reset_postdata(); ?> 
                    <div class="spacer-60"></div>
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>