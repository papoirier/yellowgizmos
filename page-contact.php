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
    <?php 
    /*
     * mail     -> 129
     * phone    -> 130
     */
    ?>
    <div class="row">
        <div class="col-md-7 ">
            <div class="contact-form">
                <h4><?php the_title();?></h4>
            	<h4 class="text-white"><?php the_secondary_title(); ?></h4>
            	<?php //echo do_shortcode( '[contact-form-7 id="66" title="Contact Yieldmo"]' ); // local ?>
                <?php echo do_shortcode( '[contact-form-7 id="68" title="Contact Yieldmo"]' ); // server ?>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <?php the_content();?>
            <?php require(locate_template('content-contact.php')); ?>
        </div>
    </div>
</div>