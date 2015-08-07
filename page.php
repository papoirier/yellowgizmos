<?php
/*
 * Template Name: Job Page
 *
 * Careers page -> 141
 *
 */
?>
<?php get_header(); ?>

?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="careers">
	<div class="container">
		<div class="row">
	    	<div class="col-md-12 main-title">
	    		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/careers.png" class="img-responsive center-block">
	    		<h1><?php echo get_the_title( 141 ); ?></h1>
	    		<h5><?php echo get_secondary_title( 141 ); ?></h5> 
	        </div>
	    </div>
	</div>
</div>

<?php // job page content  ?>

<div class="container">
	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<h3><?php the_secondary_title(); ?></h3>
			<h3 class="regular"><?php the_title(); ?></h3>
        </div>
    </div>
</div>
<hr>
<div class="container">
	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<p><?php the_content(); ?></p>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>
<hr>
<?php // job description  ?>

<?php get_footer(); ?>