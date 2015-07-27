<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div id="about-intro" class="container">
		<div class="row">
	    	<div class="col-sm-4 col-sm-offset-4">
	    		<div class="rethinking-img"><?php the_post_thumbnail('large', array( 'class' => 'center-block img-responsive' )); ?></div>
	    	</div>
	    </div>
		<div class="row">
	    	<div class="col-sm-12 text-center">
			 	<h1 class="text-white"><?php the_title(); ?></h1>
				<h1><?php the_content(); ?></h1>
	        </div>
	    </div>
	</div>
<?php endwhile; ?>