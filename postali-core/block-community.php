<?php if( have_rows('community_logos') ): ?>
<div class="spacer-60"></div>
<div class="community-logos">
<?php while( have_rows('community_logos') ): the_row(); ?>  
    <a class="community-logo" href="<?php the_sub_field('link'); ?>">
    <?php 
    $image = get_sub_field('logo');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    </a>
<?php endwhile; ?>
</div>
<?php endif; ?> 