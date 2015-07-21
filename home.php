<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>
<?php $continue = "Continue reading";?>

	<div class="container">
		<div class="row">
	    	<div class="col-md-6 col-md-offset-3" id="blog-search">
	    		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/search.svg" alt="Search" title="Magnifying glass">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
		<div class="row" id="blog-categories">
	    	<div class="col-md-8 col-md-offset-2">
	    		<ul>
	    			<li class="cat-item all">All</li>
                	<?php wp_list_categories('title_li='); ?>
            	</ul>
            </div>
        </div>
    </div>
    <hr>
			<?php 
			$args = array(
				'posts_per_page' => -1,
				'ignore_sticky_posts' => 1,
				'orderby' => 'date', 
				'order' => 'DESC'
			);
			$wp_query = new WP_Query( $args );

			if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
			<div class="container">
		        <div class="row" id="blog-posts">
			    	<div class="col-md-6 col-md-offset-3">
			    		<ul class="post-category">
			    			<?php $category = get_the_category(); ?>
			    			<li class="post-cat-img"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/cat/<?php echo $category[0]->category_nicename ;?>.svg" alt="arrow" title="Continue reading arrow"></a></li>
			    			<li class="post-cat-text"><h5 class="text-yellow"><?php echo $category[0]->cat_name; ?></h5></li>
			    		</ul>
						<h3 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="post-excerpt"><?php the_excerpt(); ?></p>
						<ul class="post-more">
							<li class="more-img"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/post-arrow.svg" alt="arrow" title="Continue reading arrow"></a></li>
							<li class="more-text"><a href="<?php the_permalink(); ?>" title="<?php echo $continue; ?>"><?php echo $continue; ?></a></li>
						</ul>
					</div>
				</div>
			</div> <!-- /.container -->
			<hr>

	<?php endwhile; endif; ?>

	<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>