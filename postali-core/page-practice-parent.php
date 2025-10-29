<?php
/**
 * Template Name: Practice Parent
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 block">
                    <?php the_field('top_copy_block'); ?>
                </div>
                <div class="column-33 sidebar-block block">
                    <?php get_template_part('block','sidebar'); ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">
                    <?php the_field('section_2_copy_block'); ?>
                </div>
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

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">
                    <?php the_field('section_3_copy_block'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="steps-faqs">
        <div class="container">
            <div class="columns how">
                <div class="column-full centered">
                    <h3><?php the_field('build_title'); ?></h3>
                    <div class="spacer-15"></div>
                </div>
                <?php if( have_rows('build_steps') ): ?>
                <?php while( have_rows('build_steps') ): the_row(); ?>  
                    <div class="column-33 how-box">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
            <div class="spacer-30"></div>
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

    <div class="spacer-60"></div>

    <section class="related-posts">
        <div class="container">
            <div class="columns">
                <div class="column-full centered">
                    <div class="related_upper">
                        <h2>Related Reading</h2>
                        <p class="serif em">See what our attorneys have to say about the latest legal issues involving personal and community safety.</p>
                    </div>
                </div>
            </div>
            <div class="spacer-30"></div>
            <div class="columns related-reading">
                
            <?php
                    $post_cat = get_field('post_cat');

                    $args = array (
                    'post_type' => 'post',
                    'posts_per_page' => '3',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'cat' => $post_cat,
                );
                $query = new WP_Query($args);
                if ( $query->have_posts()) : ?>

                <?php
                while ($query->have_posts()) :
                    $query->the_post();
                    ?>
                <a class="column-33 lt-blue-box" href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <span class="read">Read Blog </span>
                </a>

                <?php endwhile; 
                endif; 
                wp_reset_postdata();?>
            </div>
        </div>
    </section>

    <div class="spacer-60"></div>

    <?php get_template_part('block','pre-footer'); ?>

</div>

<?php get_footer();?>