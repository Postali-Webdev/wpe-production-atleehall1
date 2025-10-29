<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="banner" id="hp-banner">
        <div class="container">
            <div class="columns">
                <div class="column-66 block">
                    <h1><?php the_title(); ?></h1>
                    <div class="spacer-15"></div>
                    <div class="banner-headline"><?php the_field('banner_headline'); ?></div>
                    <img src="/wp-content/uploads/2024/07/arrow-tick-white.png" alt="" class="arrow">
                    <div class="subhead"><?php the_field('banner_subhead'); ?></div>
                    <div class="spacer-60 mobile"></div>
                    <div class="main-contact">
                        <div class="contact-block-left">
                            <a href="/contact/" class="btn">Get in touch</a>
                            <div class="spacer-15"></div>
                            <p class="serif em">Free Initial Consultation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-bg">
        <?php 
        $bg_image = get_field('banner_background_image');
        if( !empty( $bg_image ) ): ?>
            <img src="<?php echo esc_url($bg_image['url']); ?>" alt="<?php echo esc_attr($bg_image['alt']); ?>" />
        <?php endif; ?>
        <a class="btn" href="https://www.youtube.com/watch?v=<?php the_field('panel_1_video_id'); ?>" title="Click to Play Video" data-lity=""><span class="icon-tick-down"></span> &nbsp; Watch Video</a>
        </div>
    </section>

    <section id="panel_1">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <h2><?php the_field('panel_1_headline'); ?></h2>
                    <p class="serif em"><?php the_field('panel_1_subheadline'); ?></p>
                </div>
            </div>
            <div class="spacer-30"></div>
            <div class="columns normal"> 
                <div class="column-50 block">
                    <?php the_field('panel_1_about_our_firm'); ?>
                    <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                </div>
                <div class="column-50 video-box">
                    <p><?php the_field('panel_1_video_headline'); ?></p>
                    <a class="video-link" href="https://www.youtube.com/watch?v=<?php the_field('panel_1_video_id'); ?>" title="Click to Play Video" data-lity="">
                    <?php 
                    $image = get_field('panel_1_video_thumbnail');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    </a>
                    <div class="details">
                        <p class="serif em"><?php the_field('panel_1_video_title'); ?></p>
                        <p class="serif em"><?php the_field('panel_1_video_runtime'); ?></p>
                    </div>
                </div>
                <div class="spacer-60"></div>
                <div class="column-75">
                    <?php the_field('panel_1_our_approach'); ?>
                </div>
                <div class="spacer-30"></div>
            </div>
            <div class="columns touts">
            <?php if( have_rows('panel_1_touts_repeater') ): ?>
                <?php while( have_rows('panel_1_touts_repeater') ): the_row(); ?>  
                    <div class="column-33 lt-blue-box">
                        <h3><?php the_sub_field('headline'); ?></h3>
                        <?php the_sub_field('copy'); ?>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
                <div class="spacer-60"></div>
                <div class="column-full centered center">
                    <a href="/attorneys/" class="btn">MEET OUR ATTORNEYS</a>
                </div>
            </div>
        </div>
    </section>

    <section id="panel_2">
        <div class="container">
        <?php 
        $p2_image = get_field('panel_2_reviews_img');
        if( !empty( $p2_image ) ): ?>
            <img src="<?php echo esc_url($p2_image['url']); ?>" alt="<?php echo esc_attr($p2_image['alt']); ?>" />
        <?php endif; ?>
            <div class="columns">
                <div class="column-25">
                    <P>Customer Review</P>
                </div>
                <div class="column-50 centered">
                    <p class="quote"><?php the_field('panel_2_review'); ?></p>
                    <p class="author"><?php the_field('panel_2_review_author'); ?></p>
                </div>
                <div class="column-25">
                    <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="panel_3">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('panel_3_headline'); ?></h2>
                </div>
                <div class="column-50">
                    <p class="serif em"><?php the_field('panel_3_subheadline'); ?></p>
                </div>
                <div class="spacer-60"></div>
                <?php if( have_rows('panel_3_practice_areas') ): ?>
                <?php while( have_rows('panel_3_practice_areas') ): the_row(); ?>  
                <a class="column-25 pa-box" href="<?php the_sub_field('page_link'); ?>">
                    <h3><?php the_sub_field('practice_area_name'); ?></h3>
                    <img src="/wp-content/uploads/2024/07/arrow-tick-white.png" alt="">
                    <p><?php the_sub_field('practice_area_copy'); ?></p>
                </a>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </section>

    <section id="panel_4">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('panel_4_headline'); ?></h2>
                    <?php the_field('panel_4_upper_copy'); ?>
                </div>
                <div class="column-50">
                <?php 
                $p4_image = get_field('panel_4_upper_img');
                if( !empty( $p4_image ) ): ?>
                    <img src="<?php echo esc_url($p4_image['url']); ?>" alt="<?php echo esc_attr($p4_image['alt']); ?>" />
                <?php endif; ?>
                </div>
            </div>
            <div class="spacer-60"></div>
            <div class="columns how">
                <div class="column-full centered">
                    <h3><?php the_field('panel_4_build_title'); ?></h3>
                    <div class="spacer-15"></div>
                </div>
                <?php if( have_rows('panel_4_build_steps') ): ?>
                <?php while( have_rows('panel_4_build_steps') ): the_row(); ?>  
                    <div class="column-33 how-box">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </section>

    <section class="related-case">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                <?php 
                $image = get_field('case_study_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

                </div>
                <div class="column-33">
                    <?php $post_object = get_field('case_study');
                        if( $post_object ): 

                        $post = $post_object;
                        setup_postdata( $post ); 

                    ?>
                    <h3 class="case-study blocked">Case Result</h3>
                    <?php $excerpt = get_the_excerpt();
                        if ( !empty( $excerpt ) ) { ?>
                            <p><?php echo $excerpt; ?></p>
                        <?php } else { ?>
                            <p><?php the_field('teaser'); ?></p>
                        <?php } ?>
                        <a class="btn" href="<?php the_permalink(); ?>" title="Read the Case Study">Read the Case Study</a>
                <?php endif; 
                wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="panel_6">
        <div class="container">
            <div class="columns">
                <div class="column-50 left">
                    <h3><?php the_field('panel_6_headline'); ?></h3>
                </div>
                <div class="column-50 right">
                    <?php the_field('panel_6_copy'); ?>
                    <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="panel_7">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <h2><?php the_field('panel_7_headline'); ?></h2>
                    <?php the_field('panel_7_copy'); ?>
                </div>
                <div class="spacer-60"></div>
                <div class="columns normal">
                <?php $args = array (
                    'post_type' => 'post',
                    'posts_per_page' => '3',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'paged' => $paged
                );
                $post_query = new WP_Query($args);
                ?>  

                <?php while( $post_query->have_posts() ) : $post_query->the_post(); ?>
                    <a class="column-33 lt-blue-box block" href="<?php the_permalink(); ?>">

                        <?php 
                        $cats = wp_get_post_categories($id);
                        ?>

                        <?php foreach ( $cats as $cat ): 
                            // This is the new line.
                            $cat_object = get_category( $cat );
                        ?>
                        <div class="spacer-30"></div>
                        <p class="blocked"><?php echo $cat_object->name; ?></p>
                        <?php endforeach; ?>


                        <h3><?php the_title(); ?></h3>
                        <span class="read">Read Blog </span>
                    </a>
                <?php endwhile; wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </section>

    <section id="panel_8">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('faqs_section_title'); ?></h2>
                </div>
                <div class="column-50">
                <?php if( have_rows('faqs') ): ?>
                    <div class="spacer-30"></div>
                <?php while( have_rows('faqs') ): the_row(); ?>  
                    <div class="accordions">
                        <div class="accordions_title"><h3><?php the_sub_field('question'); ?></h3><span></span></div>
                        <div class="accordions_content"><p><?php the_sub_field('answer'); ?></p></div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>

    <section id="panel_9">
        <div class="container">
            <div class="columns normal">
                
                <?php 
                $bg_image = get_field('panel_9_image');
                ?>
                <div class="column-50 left" style="background-image:url('<?php echo esc_url($bg_image['url']); ?>'); ?>">
                </div>
                <div class="accent">
                    <img src="/wp-content/uploads/2024/07/community-bg-overlay.png" alt="">
                </div>
                <div class="column-50 right">
                    <p class="blue caps spaced">COMMUNITY INVOLVEMENT</p>
                    <h2><?php the_field('panel_9_headline'); ?></h2>
                    <?php the_field('panel_9_copy'); ?>
                </div>
            </div>
        </div>
    </section>

</div><!-- #front-page -->

<?php get_footer();?>