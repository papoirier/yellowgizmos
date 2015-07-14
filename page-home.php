<?php get_header();?>

<?php 
/*
 * blog 			->  5
 *
 * rethinking 		-> 15
 * publishers 		-> 17
 * advertisers 		-> 18
 * readers 			-> 19
 *
 * dedicated ads 	-> 91
 * ad format lab 	-> 41
 *
 * team 			-> 57
 * 
 * about 			-> 62
 * careers 			-> 64
 *
 * contact 			-> 67
 * 
 */
?>

<div class="side-collapse-container">


<!-- INTRO CAROUSEL - - - - - - - - - - - - -  -->
<?php echo do_shortcode('[image-carousel showcaption="true" interval="5000"]'); ?>

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
        <svg width="1170" height="600" viewBox="0 0 1170 600" preserveAspectRatio="none">
            <path id="polymorpher" fill="rgb(253,209,71)" d="
                        M0 600 
                        L0 200 
                        L1170 0 
                        L1170 200 
                        L1170 600 
                        Z">
                <animate id="animation-to-publishers" begin="indefinite" fill="freeze" attributeName="d" dur="200ms" to="
                        M0 600 
                        L0 200 
                        L1170 0 
                        L1170 200 
                        L1170 600 
                        Z">
                </animate>
                <animate id="animation-to-yellow" begin="indefinite" fill="freeze" attributeName="fill" dur="200ms" to="rgb(253,209,71)"></animate>
                <animate id="animation-to-advertisers" begin="indefinite" fill="freeze" attributeName="d" dur="200ms" to="
                        M0 600 
                        L0 200 
                        L1170 200 
                        L1170 200 
                        L1170 600 
                        Z">
                </animate>
                <animate id="animation-to-pink" begin="indefinite" fill="freeze" attributeName="fill" dur="200ms" to="rgb(242, 127, 138)"></animate>
                <animate id="animation-to-readers" begin="indefinite" fill="freeze" attributeName="d" dur="200ms" to="
                        M0 600 
                        L0 0 
                        L1170 200 
                        L1170 600 
                        L1170 600 
                        Z">
                </animate>
                <animate id="animation-to-orange" begin="indefinite" fill="freeze" attributeName="fill" dur="200ms" to="rgb(23,134,185)"></animate>
            </path>
        </svg>
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
		<div id="advertisers">
			<?php $my_query = new WP_Query( 'page_id=18' ); ?>
		    <?php if ( $my_query->have_posts() ) : ?>
		    <?php 
		    	require(locate_template('content-about.php'));
		    	wp_reset_postdata();
			endif; ?>
		</div> <!-- /#advertisers -->
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
	<?php $my_query = new WP_Query( 'page_id=91' ); ?>
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

<!-- NEWS - - - - - - - - - - - - - - - - - - - - -->
<section id="news">
    <?php require(locate_template('page-news.php')); ?>
</section> <!-- /#news -->


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

</div>

<!-- FOOTER - - - - - - - - - - - - - - - - - - -->
<?php get_footer(); ?>