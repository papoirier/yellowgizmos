<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
<div id="carousel-<?php echo print_the_slug(); ?>" class="carousel slide" data-ride="carousel">
	
		
			<?php require(locate_template('content-intro-details.php')); ?>
		
	

	<a class="left carousel-control" href="#carousel-<?php echo print_the_slug(); ?>" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-<?php echo print_the_slug(); ?>" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<?php endwhile; ?>