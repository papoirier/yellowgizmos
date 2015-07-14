<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="container">
		<div class="row">
	        <div class="col-md-5">
	        		<h5><?php the_title(); ?></h5>
					<p><?php the_content(); ?></p>
					<h5><a href="" title="" class="btn btn-default btn-afl">Careers</a></h5>
        	</div>
        	<div class="col-md-7">
	    		<div class="thumb"><?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?></div>
	        </div>
	    </div>
	</div>
<?php endwhile; ?>

