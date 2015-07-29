<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
<div class="container afl-full">
	<div class="row">
    	<div class="col-md-5">
    		<div>
	    		<h4><?php the_title(); ?></h4>
				<h4 class="regular"><?php the_secondary_title(); ?></h4>
				<p><?php the_content(); ?></p>
			</div>
            <div>
                <span><a href="http://adformatlab.yieldmo.com" title="Explore our Ad Formats" class="btn btn-default btn-lg btn-afl">Explore our Ad Formats</a></span>
            </div>
        </div>
        <div class="col-md-7 polka">
            <?php the_post_thumbnail( 'full', array( 'class' => 'center-block img-responsive' ) ); ?>
        </div>
    </div>
</div>
<div class="container afl-mobile">
    <div class="row">
        <div class="col-md-7 polka">
            <?php the_post_thumbnail( 'full', array( 'class' => 'center-block img-responsive' ) ); ?>
        </div>
        <div class="col-md-5">
            <div>
                <h4><?php the_title(); ?></h4>
                <h4 class="regular"><?php the_secondary_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <span><a href="http://adformatlab.yieldmo.com" title="Explore our Ad Formats" class="btn btn-default btn-lg btn-afl">Explore our Ad Formats</a></span>
        </div>
    </div>
</div>
<?php endwhile; ?>