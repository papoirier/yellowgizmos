<div class="row">
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

				<?php 
				$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );

				foreach( $mypages as $page ) {		
					$content = $page->post_content;
					if ( ! $content ) 
						continue;
						$content = apply_filters( 'the_content', $content ); ?>
					
					<div class="col-md-4 item">
						<h5><?php echo $page->post_title; ?></h5>
						<p><?php if ($page->post_excerpt) {
							echo $page->post_excerpt;
						} else {
							echo wp_trim_words($page->post_content, 50);

						} ?>
						<p class="btn btn-default"><a href="<?php echo get_page_link($page->ID); ?>">Learn more</a></p>
					</div>
					<?php
        // add a row at each 3 jobs
        $count++;
        if ( $count%5 == 0) {
            echo "</div><div class=\"row\">";
        }
    	?>
		<?php } ?>
	</div>
		
	  
<?php endwhile; ?>


