<?php 
/*
	Template Name: News
*/
?>
<?php get_header(); ?>

	<div class="container news">
		<div class="row">
			<div class="col-md-12 main-title">
				<h1><?php echo "All " . get_the_title(38); ?></h1>
			</div>
		</div>
		<div class="row">
	    	<div class="col-md-2 cat-list">
                <?php wp_list_categories('title_li='); ?>
            </div>
	    	<div class="col-md-6">
			<?php 
			$temp = $wp_query; $wp_query= null;
			$wp_query = new WP_Query(); $wp_query->query('showposts=-1' . '&paged='.$paged);
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				
	        	<h6 class="news-date"><?php the_date(); ?> &bull; <?php
				foreach((get_the_category()) as $category) { 
				    echo '<a href="' . get_category_link($category->cat_ID) . '">';
				    echo $category->cat_name . '</a>'; 
				} 
				?></h6>
				<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="author">By <a href="<?php echo get_author_posts_url($author_id) . get_the_author_link(); ?>"><?php the_author_link(); ?></a></p>
				<?php 
			    if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} ?>
				<h5><?php the_secondary_title(); ?></h5>
				<p><?php the_excerpt(); ?></p>
				<?php //the_content(); ?>

				<p class="more"><a href="<?php echo get_permalink(); ?>">Read more</a></p>

				<hr>
			

		<?php endwhile; ?>
		</div>

		</div> <!-- /.row -->

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</div> <!-- /.container -->
	

<?php get_footer(); ?>