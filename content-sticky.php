<div id="sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-4 img-sticky-bg">
                <?php if ( has_post_thumbnail() ) {
                    $url = wp_get_attachment_url( get_post_thumbnail_id($query->ID, 'large') ); ?>
                    <img src="<?php echo $url; ?>" class="img-circle center-block">
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
        </div>
    </div>
</div> <!-- /#sticky -->