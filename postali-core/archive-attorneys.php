<?php
/**
 * Template Name: Attorneys Archive
 * @package Postali Child
 * @author Postali LLC
**/

$args = array(
    'post_type' => 'attorneys',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'staff_member_types',
            'field' => 'slug',
            'terms' => array('attorney') //excluding the term you dont want.
        )
    )
);
$atty_query = new WP_Query( $args );

$args2 = array(
    'post_type' => 'attorneys',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'staff_member_types',
            'field' => 'slug',
            'terms' => array('paralegal','support-staff') //excluding the term you dont want.
        )
    )
);
$staff_query = new WP_Query( $args2 );

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <h2 class="centerd center">Our Attorneys</h2>
                    <div class="spacer-30"></div>
                    <?php while( $atty_query->have_posts() ) : $atty_query->the_post(); ?>
                        <a class="column-33 staff-box" href="<?php the_permalink(); ?>">
                            <div class="img-box">
                            <?php 
                            $image = get_field('attorney_headshot');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            </div>
                            <div class="content-box">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_field('attorney_title'); ?></p>
                            </div>
                        </a>
                    <?php endwhile; wp_reset_postdata(); ?> 
                    <div class="spacer-60"></div>
                </div>

                <div class="spacer-60" id="staff"></div>
                
                <div class="column-full">
                    <h2 class="centerd center">Paralegals & Support Staff</h2>
                    <div class="spacer-30"></div>
                    <?php while( $staff_query->have_posts() ) : $staff_query->the_post(); ?>
                        <a class="column-33 staff-box" href="<?php the_permalink(); ?>">
                            <div class="img-box">
                            <?php 
                            $image = get_field('attorney_headshot');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            </div>
                            <div class="content-box">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_field('attorney_title'); ?></p>
                            </div>
                        </a>
                    <?php endwhile; wp_reset_postdata(); ?> 
                    <div class="spacer-60"></div>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>