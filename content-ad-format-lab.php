<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
<div class="container">
	<div class="row">
    	<div class="col-md-6">
    		<div>
	    		<h2><?php the_title(); ?></h2>
				<h3><?php the_secondary_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</div>
			<div>
				<?php require(locate_template('content-ad-format-lab-details.php')); ?>
			</div>
        </div>
        <div class="col-md-6">
        	<div class="thumb"><?php the_post_thumbnail(); ?></div>
        </div>
    </div>

    <div class="row">
    	<div class="col-md-6">
    		<h5><a href="http://adformatlab.yieldmo.com" title="Explore our Ad Formats" class="btn btn-default btn-afl">Explore our Ad Formats</a></h5>
    	</div>
    </div>
</div>
<?php endwhile; ?>