<?php
/*
 * Template Name: Job Page
 *
 * Careers page -> 141
 *
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="careers">
	<div class="container">
		<div class="row">
	    	<div class="col-md-12 main-title">
	    		<img src="<?php echo get_post_field('post_thumbnail', 141 ); ?>">
	    		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/careers.png" class="img-responsive center-block">
	    		<h1><?php echo get_the_title( 141 ); ?></h1>
	    		<h5><?php echo get_secondary_title( 141 ); ?></h5> 
	        </div>
	    </div>
	</div>
</div>

<?php // job page content  ?>

<div class="container job-posting">
	<div class="row">
    	<div class="col-md-8 job-title">
    		<div class="col-md-12">
	    		<h3><?php the_secondary_title(); ?></h3>
				<h3 class="regular"><?php the_title(); ?></h3>
				<hr>
			</div>

			<div class="col-md-12">
    			<h4 class="regular"><?php the_content(); ?></h4>
    			<hr>
    		</div>
        
    
		<?php endwhile; endif; ?>
	
	<?php // job description  ?>

			<div class="job-description">
				<?php $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'order' => 'ASC' ) ); ?>
			    <?php
			    foreach( $mypages as $page ) {      
			        $content = $page->post_content;
			        $content = apply_filters( 'get_the_content', $content ); ?>
			        <div class="col-md-6">
			            <h4><?php echo $page->post_title; ?></h4>
			            <p><?php echo $page->post_content; ?></p>
			        </div>
			    <?php } ?>
			    <?php // about yieldmo page -> 1237 (server 1513) ?>    
		    </div>
	    </div>
	    <div class="col-md-4 about-yieldmo">
	    	<div>
		    	<h4><?php echo get_the_title( 1513 ); ?></h4>
				<p><?php echo get_post_field('post_content', 1513); ?></p>
			</div> 
			<div class="job-contact">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/btn-mail.svg" class="img-responsive">
				<?php echo get_post_field('post_excerpt', 1513 ); ?>
			</div>
	    </div>
	</div>
</div>


<?php get_footer(); ?>