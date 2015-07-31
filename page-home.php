<?php get_header();?>

<?php 
/*
 * yg.papoirier.org
 *
 * home             ->   5
 *
 * carousel         -> 197
 * 
 * smart & pretty   ->  15
 * publishers       ->  17
 * advertisers      ->  18
 * readers          ->  19
 *
 * dedicated ads    -> 101
 * ad format lab    ->  41
 * 
 * team (got chops) ->  57
 *  
 * about            ->  62
 * blog             ->   6
 * contact          ->  67
 * 
 * -------- PAGES ---------
 * 
 * careers          -> 141
 * terms            -> 126
 * faq              -> 125
 *
 */
?>

<!-- INTRO CAROUSEL - - - - - - - - - - - - -  -->
<?php $my_query = new WP_Query( 'page_id=197' ); ?>
<?php if ( $my_query->have_posts() ) : ?>
<?php 
    require(locate_template('content-intro.php'));
    wp_reset_postdata();
endif; ?>

<!-- ABOUT - - - - - - - - - - - - - - - - - - - -->
<section id="about"> 
	<div id="rethinking">
		<?php $my_query = new WP_Query( 'page_id=15' ); ?>
	    <?php if ( $my_query->have_posts() ) : ?>
	    <?php 
	    	require(locate_template('content-about-intro.php'));
	    	wp_reset_postdata();
		endif; ?>
	</div> <!-- /rethinking -->
	<div id="shape">
        <?php include_once('svg-shape.php'); ?>
    </div>
    <div id="bg-sticky">
		<div id="publishers">
			<?php $my_query = new WP_Query( 'page_id=17' ); ?>
		    <?php if ( $my_query->have_posts() ) : ?>
		    <?php 
		    	require(locate_template('content-about.php'));
		    	wp_reset_postdata();
			endif; ?>
		</div> <!-- /#publishers -->
        <div class="shape-spacer"></div>
		<div id="advertisers">
			<?php $my_query = new WP_Query( 'page_id=18' ); ?>
		    <?php if ( $my_query->have_posts() ) : ?>
		    <?php 
		    	require(locate_template('content-about.php'));
		    	wp_reset_postdata();
			endif; ?>
		</div> <!-- /#advertisers -->
        <div class="shape-spacer"></div>
		<div id="readers">
			<?php $my_query = new WP_Query( 'page_id=19' ); ?>
		    <?php if ( $my_query->have_posts() ) : ?>
		    <?php 
		    	require(locate_template('content-about.php'));
		    	wp_reset_postdata();
			endif; ?>
		</div> <!-- /#readers -->
	</div>
</section> <!-- /#about -->

<!-- DEDICATED AD PLACEMENTS - - - - - - - - - - - - - -  -->
<section id="dedicated"> 
	<?php //$my_query = new WP_Query( 'page_id=91' ); // local ?>
    <?php $my_query = new WP_Query( 'page_id=101' ); // server ?>
    <?php if ( $my_query->have_posts() ) : ?>
    <?php 
    	require(locate_template('content-dedicated.php'));
    	wp_reset_postdata();
	endif; ?>
</section> <!-- /#dedicated -->

<!-- AD FORMAT LAB - - - - - - - - - - - - - -  -->
<section id="ad-format-lab"> 
	<?php $my_query = new WP_Query( 'page_id=41' ); ?>
    <?php if ( $my_query->have_posts() ) : ?>
    <?php 
    	require(locate_template('content-ad-format-lab.php'));
    	wp_reset_postdata();
	endif; ?>
</section> <!-- /#ad-format-lab -->

<!-- TEAM - - - - - - - - - - - - - - - - - -  -->
<section id="team"> 
	<?php $my_query = new WP_Query( 'page_id=57' ); ?>
    <?php if ( $my_query->have_posts() ) : ?>
    <?php 
    	require(locate_template('content-team.php'));
    	wp_reset_postdata();
	endif; ?>
</section> <!-- /#team -->

<!-- TWITTER - - - - - - - - - - - - - - - - - -  -->
<section id="twitter">
	<?php include_once('content-twitter.php'); ?>
</section> <!-- /#twitter -->

<!-- BLOG - - - - - - - - - - - - - - - - - - - - -->
<section id="blog">
    <?php require(locate_template('page-blog.php')); ?>
</section> <!-- /#blog -->


<!-- CONTACT - - - - - - - - - - - - - - - - - - -->
<section id="contact">
    <?php $my_query = new WP_Query( 'page_id=67' ); ?>
    <?php if ( $my_query->have_posts() ) : ?>
    <div>
        <?php
        while ($my_query->have_posts()) : $my_query->the_post();
            require(locate_template('page-contact.php'));
        endwhile;
        wp_reset_postdata(); 
        ?>
    </div>
    <?php endif;?>
</section> <!-- /#contact -->

<!-- FOOTER - - - - - - - - - - - - - - - - - - -->
<?php get_footer(); ?>