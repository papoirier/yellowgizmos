<?php 
/*
	Template Name: Home
*/
?>
<?php get_header(); ?>

	<div class="container news" id="blog">
		<div class="row">
	    	<div class="col-md-2" id="post-cats">
                <?php wp_list_categories('title_li='); ?>
            </div>
	    	<div class="col-md-5" id="post-list">
			<?php 

			$args = array(
				'posts_per_page' => -1,
				'ignore_sticky_posts' => 1,
				'orderby' => 'date', 
				'order' => 'DESC'
			);
			$wp_query = new WP_Query( $args );

			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				
	        	<h6 class="post-date"><?php the_category(); ?></h6>
				<h5 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>

				<hr>
			

			<?php endwhile; ?>
			</div>
			<div class="col-md-5" id="post-container">
				<div id="contents">
				<?php
					$argss = array( 'numberposts' => '1' );
					$recent_posts = wp_get_recent_posts( $argss );
					foreach( $recent_posts as $recent ){
						echo '<h3>' .   $recent["post_title"].'</h3> ';
						echo '<p>' .   $recent["post_content"].'</p> ';
					}
				?>
				</div>
			</div> <!-- /#post-container -->

		</div> <!-- /.row -->

		<?php wp_reset_postdata(); ?>

	</div> <!-- /.container -->
	

<?php get_footer(); ?>