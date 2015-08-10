<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="container">
		<div class="row">
	        <div class="col-md-4 team-content">
	        		<h4><?php the_title(); ?></h4>
					<p><?php the_content(); ?></p>
					<h5><a href="<?php echo get_permalink( 64 ); ?>" title="" class="btn btn-default btn-afl">Careers</a></h5>
        	</div>
        	<div class="col-md-8 team-img">
        		<?php the_post_thumbnail( 'large', array( 'class' => 'img-desktop' ) ); ?>
	        	<?php 
	        	if (get_post_meta(get_the_ID(), 'Second Featured Image', true)) { ?>
	        		<img class="img-mobile img-responsive" src="<?php echo get_post_meta(get_the_ID(), 'Second Featured Image', true); ?>">
	        	<?php } ?>
                
        	</div>
	    </div>
	</div>
<?php endwhile; ?>

