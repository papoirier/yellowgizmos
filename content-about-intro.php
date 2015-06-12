<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="container">
		<div class="row">
	    	<div class="col-md-12">
	    		<div class="thumb"><?php the_post_thumbnail(); ?></div>
			 	<h2><?php the_title(); ?></h2>
				<h2><?php the_content(); ?></h2>
	        </div>
	    </div>
	</div>
<?php endwhile; ?>