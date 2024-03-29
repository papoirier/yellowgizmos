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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/fpo.png" class="img-responsive">
                <?php } ?>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <h2><?php the_title(); ?></h2>
                <h5><?php the_excerpt(); ?></h5>
                <div class="read-more">
                    <p class="btn btn-default"><a href="<?php the_permalink(); ?>">Read more</a> </p>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div> <!-- /#sticky -->

<div id="old-news" class="container">
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

    $counter=0;

    $latest_blog_posts = new WP_Query( $latest_args );
    if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
         

            <div class="col-md-4">
                <?php $category = get_the_category(); ?>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/cat/<?php echo $category[0]->category_nicename ;?>.svg" alt="arrow" title="Continue reading arrow" class="">
                <h5 class="text-yellow"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; }?></h5>
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php the_excerpt(); ?></p>
                <?php $continue = "Continue reading";?>
                <ul class="post-more">
                    <li class="more-img"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/btn-continue.svg" alt="arrow" title="Continue reading arrow"></a></li>
                    <li class="more-text"><a href="<?php the_permalink(); ?>" title="<?php echo $continue; ?>"><?php echo $continue; ?></a></li>
                </ul>
            </div>

             <?php $counter++;
                  if ($counter % 3 == 0) {
                  echo '</div><div class="row">';
            } ?>


    <?php endwhile; endif; ?>
    </div> <!-- / last row -->

    <div class="row all-posts">
        <div class="col-md-4">
            <p class="btn btn-default btn-lg"><a href="blog">All posts</a></p>
        </div>
    </div>
</div> <!-- /.container -->


