<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
<div class="container">
	<div class="row">
    	<div class="col-md-6 col-md-offset-3 text-center">
    		<div>
	    		<h4><?php the_title(); ?></h4>
				<h4><?php the_secondary_title(); ?></h4>
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
    		<div>
    			<?php require(locate_template('content-dedicated-details.php')); ?>
    		</div>
        </div>
    </div>
</div>
<?php endwhile; ?>