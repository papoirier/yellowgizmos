<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="container">
		<div class="row">
	    	<div class="col-md-6 col-md-offset-3 text-center">
	    		<h4><?php the_title(); ?></h4>
				<h5><?php the_content(); ?></h5>
	    		<div class="thumb"><?php the_post_thumbnail(); ?></div>
	        </div>
	    </div>
	    <div class="row">
	    	<div id="carousel-<?php echo print_the_slug(); ?>" class="carousel slide" data-ride="carousel" data-interval="false">
				<!-- indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-<?php echo print_the_slug(); ?>" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-<?php echo print_the_slug(); ?>" data-slide-to="1"></li>
					<li data-target="#carousel-<?php echo print_the_slug(); ?>" data-slide-to="2"></li>
				</ol>

				<!-- wrapper for slides -->
				<div class="carousel-inner">
					<?php require(locate_template('content-about-details.php')); ?>
				</div> <!-- /.carousel-inner -->

				<!-- controls -->
				<a class="left carousel-control" href="#carousel-<?php echo print_the_slug(); ?>" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"><img src="img/arrow-prev.png"></span>
				</a>
				<a class="right carousel-control" href="#carousel-<?php echo print_the_slug(); ?>" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"><img src="img/arrow-next.png"></span>
				</a>
			</div> <!-- /#carousel-example-generic -->

	    </div>
	</div>
<?php endwhile; ?>

