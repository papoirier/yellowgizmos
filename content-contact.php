<?php // CONTACT --------------------------------------------- ?>

<div class="container">
    <?php if (! is_front_page()) { ?>
	<div class="row">
    	<div class="col-md-12 main-title">
    		<h2><?php the_title();?></h2>
            <h2><?php the_secondary_title();?></h2>
        </div>
    </div>
    <?php } ?>
    <div class="row">
        <div class="col-md-7 ">
            <div class="contact-form">
                <h4><?php the_title();?></h4>
            	<h4 class="text-white"><?php the_secondary_title(); ?></h4>
            	<?php //echo do_shortcode( '[contact-form-7 id="66" title="Contact Yieldmo"]' ); // local ?>
                <?php echo do_shortcode( '[contact-form-7 id="68" title="Contact Yieldmo"]' ); // server ?>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <div class="address">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>