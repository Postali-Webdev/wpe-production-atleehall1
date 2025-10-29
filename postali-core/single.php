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
                <div class="column-66 block">
                    <div class="article-single-featured-image">
                        <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                        <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            <img src="<?php echo $featImg[0]; ?>" class="article-featured-image"  />
                            <div class="spacer-60"></div>
                        <?php } ?>
                    </div>
                    <?php the_content(); ?>
                    <div class="spacer-30"></div>
                
                    <?php
                            $next_post = get_next_post();
                            $prev_post = get_previous_post();
                    ?>

                    <?php if(!$next_post) { ?>
                    <nav class="post-navigation first">
                    <?php } else { ?>
                    <nav class="post-navigation">
                    <?php } ?>

                        <?php if ($next_post) { ?>
                        <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="post-nav__next">
                            <h4 class="text--no-margin">Previous Article</h4>
                            <p class="post-nav__title">
                                <?php echo $next_post->post_title ?>
                            </p>
                        </a>
                        <?php } else {}; ?>
                        <?php if ($prev_post) { ?>
                        <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="post-nav__prev">
                            <h4>Next Article</h4>
                            <p class="post-nav__title">
                                <?php echo $prev_post->post_title ?>
                            </p>
                        </a>
                        <?php } else {}; ?>
                    </nav>

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

</div>

<?php get_footer();?>