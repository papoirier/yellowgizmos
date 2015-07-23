<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>
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
	<div class="container">
		<div class="row">
	    	<div class="col-md-6 col-md-offset-3" id="blog-search">
	    		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/search.svg" alt="Search" title="Magnifying glass">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
		<div class="row" id="blog-categories">
	    	<div class="col-md-8 col-md-offset-2">
	    		<ul id="blog-tabs" class="nav nav-tabs" role="tablist">
	    			<li class="all active" role="presentation"><a href="#all" role="tab" data-toggle="tab">All</a></li>
					<li class="" role="presentation"><a href="#<?php echo get_cat_slug(1); ?>" role="tab" data-toggle="tab"><?php echo get_the_category_by_ID( '1' ); ?></a></li>
					<li class="" role="presentation"><a href="#<?php echo get_cat_slug(3); ?>" role="tab" data-toggle="tab"><?php echo get_the_category_by_ID( '3' ); ?></a></li>
					<li class="" role="presentation"><a href="#<?php echo get_cat_slug(2); ?>" role="tab" data-toggle="tab"><?php echo get_the_category_by_ID( '2' ); ?></a></li>
					<li class="" role="presentation"><a href="#<?php echo get_cat_slug(4); ?>" role="tab" data-toggle="tab"><?php echo get_the_category_by_ID( '4' ); ?></a></li>
            	</ul>
            </div>
        </div>
    </div>			

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="all">
            <?php
            echo do_shortcode('[ajax_load_more posts_per_page="6" transition="fade" button_label="Load More Posts"]');
            ?>
        </div> <!-- /#updates -->
		<div role="tabpanel" class="tab-pane fade" id="<?php echo get_cat_slug(1); ?>">
            <?php
            $cat = get_cat_slug(1);
            echo do_shortcode('[ajax_load_more category="'. $cat .'" posts_per_page="6" transition="fade" button_label="Load More Posts"]');
            ?>
        </div> <!-- /#updates -->
        <div role="tabpanel" class="tab-pane fade" id="<?php echo get_cat_slug(3); ?>">
            <?php 
            $cat = get_cat_slug(3);
            echo do_shortcode('[ajax_load_more category="'. $cat .'" posts_per_page="6" transition="fade" button_label="Load More Posts"]');
            ?>
        </div> <!-- /#perspectives -->
        <div role="tabpanel" class="tab-pane fade" id="<?php echo get_cat_slug(2); ?>">
            <?php 
            $cat = get_cat_slug(2);
            echo do_shortcode('[ajax_load_more category="'. $cat .'" posts_per_page="6" transition="fade" button_label="Load More Posts"]');
            ?>
        </div> <!-- /#case-studies -->
        <div role="tabpanel" class="tab-pane fade" id="<?php echo get_cat_slug(4); ?>">
            <?php 
            $cat = get_cat_slug(4);
            echo do_shortcode('[ajax_load_more category="'. $cat .'" posts_per_page="6" transition="fade" button_label="Load More Posts"]');
            ?>
        </div> <!-- /#case-studies -->
	</div> <!-- /.tab-content -->


	<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>