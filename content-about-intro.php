<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="container">
		<div class="row">
	    	<div class="col-md-12">
	    		<div class="rethinking-img"><?php the_post_thumbnail('large', array( 'class' => 'center-block img-responsive' )); ?></div>
	    	</div>
	    </div>
		<div class="row">
	    	<div class="col-md-10 col-md-offset-1 text-center">
			 	<h3 class="text-white"><?php the_title(); ?></h3>
				<h3><?php the_content(); ?></h3>
	        </div>
	    </div>
	</div>
<?php endwhile; ?>