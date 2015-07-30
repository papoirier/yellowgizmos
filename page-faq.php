<?php
/*
 * Template Name: FAQ Page
 * 175
 */
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="faq">
	<div class="container">
		<div class="row">
	    	<div class="col-md-12 main-title">
	    		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'medium') ); ?>
            	<img src="<?php echo $url; ?>" title="<?php echo $content; ?>" alt="<?php echo $page->post_title; ?>'s photo" data-toggle="tooltip" data-placement="top" class="img-responsive center-block">
	    		<h1><?php the_title(); ?></h1>
	    		<h5 class="text-yellow"><?php the_secondary_title(); ?></h5> 
	        </div>
	    </div>
	</div>
</div>
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <ul id="tabs-faq" class="nav-tabs text-center" role="tablist">
					<li role="presentation" class="active"><a href="#faq-general" id="faq-general-tab" role="tab" data-toggle="tab" aria-controls="faq-general" aria-expanded="true">General</a></li>
					<li role="presentation" class=""><a href="#faq-publisher" role="tab" id="faq-publisher-tab" data-toggle="tab" aria-controls="faq-publisher" aria-expanded="false">Publisher</a></li>
					<li role="presentation" class=""><a href="#faq-advertiser" role="tab" id="faq-advertiser-tab" data-toggle="tab" aria-controls="faq-advertiser" aria-expanded="false">Advertiser</a></li>
				</ul>
            </div>
        </div>
    </div>

    <div class="container faq">
		<div id="myTabContent" class="tab-content">
			<div role="tabpanel" class="tab-pane fade active in" id="faq-general" aria-labelledby="faq-general-tab">
				<div id="general">
					<?php $my_query = new WP_Query( 'page_id=161' ); ?>
				    <?php if ( $my_query->have_posts() ) : ?>
				    <?php 
				    	require(locate_template('content-faq.php'));
				    	wp_reset_postdata();
					endif; ?>
				</div> <!-- /#general -->
			</div>
			<div role="tabpanel" class="tab-pane fade" id="faq-publisher" aria-labelledby="faq-publisher-tab">
				<div id="publishers">
					<?php $my_query = new WP_Query( 'page_id=173' ); ?>
				    <?php if ( $my_query->have_posts() ) : ?>
				    <?php 
				    	require(locate_template('content-faq.php'));
				    	wp_reset_postdata();
					endif; ?>
				</div> <!-- /#publishers -->
			</div>
			<div role="tabpanel" class="tab-pane fade" id="faq-advertiser" aria-labelledby="faq-advertiser-tab">
				<div id="advertisers">
					<?php $my_query = new WP_Query( 'page_id=175' ); ?>
				    <?php if ( $my_query->have_posts() ) : ?>
				    <?php 
				    	require(locate_template('content-faq.php'));
				    	wp_reset_postdata();
					endif; ?>
				</div> <!-- /#advertisers -->
			</div>
		</div>
	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>