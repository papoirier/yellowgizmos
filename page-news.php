<div id="sticky">
    <div class="container">
        <div class="row">
            <?php 
            $sticky = get_option( 'sticky_posts' );
            $query = new WP_Query( 'p=' . $sticky[0] );
            $args = array(
                'posts_per_page' => 1,
                'post__in'  => get_option( 'sticky_posts' ),
                'ignore_sticky_posts' => 1
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-md-4 img-sticky-bg">

                <?php if ( has_post_thumbnail() ) {
                    $url = wp_get_attachment_url( get_post_thumbnail_id($query->ID, 'medium') ); ?>
                    <img src="<?php echo $url; ?>" class="img-responsive img-circle center-block">
                <?php }
                else { ?>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/fpo.png" class="ing-responsive">
                <?php } ?>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <h2><?php the_title(); ?></h2>
                <h5><?php the_excerpt(); ?></h5>
                <p class="btn btn-default"><a href="<?php echo the_permalink(); ?>">Read more</a></p>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div> <!-- /#sticky -->

<div class="container">
    <div class="row">
    <?php

    $sticky_first = get_option( 'sticky_posts' );
    rsort( $sticky_first );

    $sticky_first = array_slice( $sticky_first, 0, 1 );

    $post_to_exclude = $sticky_first;
    $latest_args = array(
        'posts_per_page' => 6, 
        'orderby' => 'date', 
        'caller_get_posts'=>1,
        'post__not_in'=> $post_to_exclude
    );

    $latest_blog_posts = new WP_Query( $latest_args );

    if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
         

            <div class="col-md-4">
                <h5><?php the_category(); ?></h5>
                <h4><?php the_title(); ?></h4>
                <p><?php the_excerpt(); ?></p>
            </div>

            <?php
            $count++;
            if ( $count%3 == 0) {
                echo "</div><div class=\"row\">";
            } ?>


    <?php endwhile; endif;
    ?>
    </div> <!-- / last row -->
    <div class="row all-posts">
        <div class="col-md-4">
            <p class="btn btn-default btn-lg"><a href="blog">All posts</a></p>
        </div>
    </div>
</div> <!-- /.container -->


