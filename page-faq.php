<?php
/*
 * Template Name: FAQ Page
 * 175
 */
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="faq">
	<div class="container">
		<div class="row">
	    	<div class="col-md-12 main-title">
	    		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'medium') ); ?>
            	<img src="<?php echo $url; ?>" title="<?php echo $content; ?>" alt="<?php echo $page->post_title; ?>'s photo" data-toggle="tooltip" data-placement="top" class="img-responsive center-block">
	    		<h1><?php the_title(); ?></h1>
	    		<h5><?php the_secondary_title(); ?></h5> 
	        </div>
	    </div>
	</div>
</div>
	<div class="container faq">
		<div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <button id="btn-general" class="btn btn-default active">General</button>
                <button id="btn-publisher" class="btn btn-default">Publisher</button>
                <button id="btn-advertiser" class="btn btn-default">Advertiser</button>
            </div>
        </div>
	    <div class="row">
	    	<div class="col-md-8 col-md-offset-2">
	    		<?php echo get_the_content(); ?>
	    	</div>
	    </div>
	</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>