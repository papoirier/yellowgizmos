<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-4 img-sticky-bg">
                <?php if ( has_post_thumbnail() ) {
                    $url = wp_get_attachment_url( get_post_thumbnail_id($query->ID, 'medium') ); ?>
                    <img src="<?php echo $url; ?>" class="img-circle center-block">
                <?php }
                else { ?>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/fpo.png" class="img-responsive">
                <?php } ?>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <h2><?php the_title(); ?></h2>
                <h5><?php the_excerpt(); ?></h5>
                <?php if (get_post_meta(get_the_ID(), 'pdf', true)) { ?>
                	<div class="single-download-pdf">
                		<ul class="post-more">
							<li class="more-img"><a href="<?php echo (get_post_meta(get_the_ID(), 'pdf', true)); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/download-pdf.svg" alt="arrow" title="download"></a></li>
							<li class="more-text"><a href="<?php echo (get_post_meta(get_the_ID(), 'pdf', true)); ?>">Download pdf</a></li>
						</ul>
                	</div>
                <?php } ?>
            </div>
        </div>
    </div>
</div> <!-- /#sticky -->
    
<div class="container">
    <div class="row single-category">
    	<div class="col-md-6 col-md-offset-3">
    		<ul class="post-category">
    			<?php $category = get_the_category(); ?>
    			<li class="post-cat-img"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/cat/<?php echo $category[0]->category_nicename ;?>.svg" alt="arrow" title="Continue reading arrow"></a></li>
    			<li class="post-cat-text"><h5><?php echo $category[0]->cat_name; ?></h5></li>
    			<li class="post-cat-date"><h5><?php the_date(); ?></h5></li>
    		</ul>
    	</div>
    </div>
    <div class="row single-content">
    	<div class="col-md-6 col-md-offset-3">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="row single-author">
    	<div class="col-md-6 col-md-offset-3 regular">
    		<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
    		<ul>
				<li>Written by:</li>
				<li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></a></li>
				<li><?php the_author_meta('user_description'); ?></li>
			</ul>
		</div>
	</div>
</div> <!-- /.container -->
<hr>
<div class="container">
	<div class="row single-share">
    	<div class="col-md-6 col-md-offset-3">
    		<?php //echo do_shortcode( '[ssba]' ); // share buttons ?>
    		<div class="pull-left">
    			<h4>Share this</h4>
    		</div>
    		<div class="single-social-logos">
	    		<ul>
		    		<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title();?>" target="_blank" alt="Linkedin" title="Share on Linkedin"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-linkedin.svg"></a></li>
		    		<li><a href="http://twitter.com/intent/tweet?status=<?php the_title();?>+<?php the_permalink();?>" target="_blank" alt="Twitter" title="Share on Twitter"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-twitter.svg"></a></li>
		    		<li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&title=<?php the_title();?>" target="_blank" alt="Facebook" title="Share on Facebook"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-facebook.svg"></a></li>
		    	</ul>
		    </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
	<div class="row single-previous-next">
    	<div class="col-md-6 col-md-offset-3">
    		<ul class="post-more pull-left">
    			<li class="more-text prev"><?php previous_post_link('%link'); ?><li>
    		</ul>
    		<ul class="post-more pull-right">
    			<li class="more-text next"><?php next_post_link('%link'); ?></li>
    		</li>
        </div>
    </div>
</div>
<hr>


<?php endwhile; endif; ?> 
<?php get_footer(); ?>