<?php // CONTACT --------------------------------------------- ?>
<?php 
/*
 * mail     -> 129
 * phone    -> 130
 */
?>

<div class="container contact-title">    
    <div class="row">
        <div class="col-md-7 ">
            <h4><?php the_title();?></h4>
            <h4 class="text-white"><?php the_secondary_title(); ?></h4>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-7 ">
            <div class="contact-form">
            	<?php //echo do_shortcode( '[contact-form-7 id="66" title="Contact Yieldmo"]' ); // local ?>
                <?php echo do_shortcode( '[contact-form-7 id="68" title="Contact Yieldmo"]' ); // server ?>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <div class="text-mail-phone"><?php the_content();?></div>
            <?php require(locate_template('content-contact.php')); ?>
        </div>
    </div>
</div>