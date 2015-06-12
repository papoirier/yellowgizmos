<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="container">
		<div class="row">
	    	<div class="col-md-6">
	    		<div class="thumb"><?php the_post_thumbnail(); ?></div>
	        </div>
	        <div class="col-md-6">
	        	<div class="row">
	        		<h5><?php the_title(); ?></h5>
					<p><?php the_content(); ?></p>
				</div>
		        <?php require(locate_template('content-about-details.php')); ?>
        	</div>
	    </div>
	</div>
<?php endwhile; ?>

