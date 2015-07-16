<?php
/*
 * Template Name: Carousel Page
 */
?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

<div class="bs-example" data-example-id="simple-carousel">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item">
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'medium') ); ?>
            	<img src="<?php echo $url; ?>" alt="">
			</div>
		</div>

		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> <!-- /#carousel-example-generic -->
</div> <!-- /.bs-example -->
<?php endwhile; ?>