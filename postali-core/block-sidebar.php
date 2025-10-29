<?php if(!is_page_template('page-practice-parent.php')) { ?>

    <?php if(get_field('add_testimonial','options')) { ?>
        <div class="testimonial-block">
            <p class="testimonial"><?php the_field('sidebar_testimonial','options'); ?></p>
            <p><?php the_field('sidebar_testimonial_author','options'); ?></p>
        </div>
        <div class="sidebar-spacer"></div>
    <?php } ?>

    <?php if(get_field('add_result','options')) { ?>
        <div class="sidebar-header">CASE RESULTS</div>
        <div class="result-block">
            <p class="large"><strong><?php the_field('sidebar_result_headline','options'); ?></strong></p>
            <p class="result"><?php the_field('sidebar_result','options'); ?></p>
        </div>
        <div class="spacer-30"></div>
        <p class="sidebar-more"><a href="/case-studies/" title="Read more results">Read More Results</a> <span class="icon-tick-down"></span></p>
        <div class="sidebar-spacer"></div>
    <?php } ?>

<?php } ?>

    <div class="spacer-15"></div>

    <?php 

    $lookfor = array('in Pennsylvania', 'Pennsylvania', 'Lawyers', 'Lawyer', 'Attorneys');
    $replacewith = array('','','','','');

    $args = array(
        'child_of'      => $post->ID,
        'depth'         => 1,
        'echo'          => 0,
        'sort_column'   => 'menu_order',
        'title_li'      => __('')
    );

    $output = wp_list_pages( $args ); 
    $trimmed = str_replace("Accidents ","Accidents ", $output);

    ?>
        
    <?php if ( !empty ($output)) { ?>
        <?php global $post;
        $pageid = $post->post_parent;
        ?>
    <div class="sidebar-header">
        Related Practice Areas
    </div>
    <div class="sidebar-menu">
        <div class="sidebar-menu">
            <ul class="menu">
                <?php echo str_replace($lookfor,$replacewith,$trimmed); ?>
            </ul>
        </div>
        <div class="spacer-30"></div>
        <p class="sidebar-more"><a href="/practice-areas/" title="Read more results">All Practice Areas</a> <span class="icon-tick-down"></span></p>
    </div>

    <?php } else { ?>
    <div class="sidebar-header">OUR PRACTICE AREAS</div>
    <div class="sidebar-menu">
        <?php the_field('practice_area_menu','options'); ?>	
        <div class="spacer-30"></div>
        <p class="sidebar-more"><a href="/practice-areas/" title="Read more results">All Practice Areas</a> <span class="icon-tick-down"></span></p>
    </div>
<?php } ?>