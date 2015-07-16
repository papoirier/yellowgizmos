<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
<div class="container">
	<div class="row">
    	<div class="col-md-6 col-md-offset-3 text-center">
    		<div>
	    		<h3><?php the_title(); ?></h3>
				<h3><?php the_secondary_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</div>
        </div>
    </div>
</div>
<div id="dedicated-phone">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <button id="in-content" class="btn btn-default active">In-content</button>
                <button id="footer" class="btn btn-default">Footer</button>
                <button id="wrapper" class="btn btn-default">Wrapper</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 phone-carousel">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/phone-gray.png" class="img-responsive center-block">
                <div class="phone-contour">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/r.png" id="phone-screen" class="img-responsive center-block">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="dedicated-details">
    <div class="container">
        

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
                    <?php require(locate_template('content-dedicated-details.php')); ?>
                </div> <!-- /.carousel-inner -->
            </div> <!-- /#carousel-example-generic -->
        </div>


    </div>
</div>
<?php endwhile; ?>