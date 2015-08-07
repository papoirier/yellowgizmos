<?php
/*
 * Template Name: Careers Page
 */
?>
<?php get_header(); ?>
<div id="careers">
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
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="center-block"><?php the_excerpt(); ?></h3>
		</div>
	</div>
    <div class="jobs">
	    <div class="row">
				<?php 
				$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

				foreach( $mypages as $page ) {		
					$content = $page->post_content;
					if ( ! $content ) 
						continue;
						$content = apply_filters( 'the_content', $content ); ?>
					<div class="col-md-4 item">
						<h5><?php echo get_secondary_title($page->ID); ?></h5>
						<h4><?php echo $page->post_title; ?></h4>
						<p><?php echo $page->post_excerpt; ?></p>
						<p class="btn btn-default"><a href="<?php echo get_page_link($page->ID); ?>">Apply now</a></p>
					</div>
					<?php
        // add a row at each 3 jobs
        $count++;
        if ( $count%3 == 0) {
            echo "</div><div class=\"row\">";
        }
    	?>
		<?php } ?>
	    </div>
	</div> <!-- /.jobs -->
</div>
<?php get_footer(); ?>