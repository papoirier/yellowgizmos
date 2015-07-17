
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
<?php $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'order' => 'ASC' ) ); ?>
	<section id="intro"> 
<div id="carousel-<?php echo print_the_slug(); ?>" class="carousel slide" data-ride="carousel" data-interval="false">

	<ol class="carousel-indicators">
		<?php
		$count = 0;
		foreach( $mypages as $page ) {  
			$count++;   
		    $content = $page->post_content;
		    $content = apply_filters( 'get_the_content', $content ); ?> 
			<li data-target="#carousel-<?php echo print_the_slug(); ?>" data-slide-to="<?php echo $count-1; ?>" class="<?php if($count == 1){echo ' active';}?>"></li>
		<?php } ?>
	</ol>

	<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
	    <div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-body">
				<iframe src="//player.vimeo.com/video/<?php echo get_post_meta($page->ID, "vimeo-id", true);?>?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			</div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
  	</div> <!-- /#myModal -->


				<div id="carousel-inside" class="carousel-inner <?php echo(get_post_meta($page->ID, 'bg-color', true));?>" role="listbox">
				<?php
				$count = 0;
				foreach( $mypages as $page ) {   
					$count++;   
				    $content = $page->post_content;
				    $content = apply_filters( 'get_the_content', $content ); ?>

						<div class="item <?php if($count == 1){echo 'active';}?>">

							<div class="container">
						  		<div class="row">
						  	    	<div class="col-md-12">

							            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'large') ); ?>
							        	<img src="<?php echo $url; ?>" class="img-responsive">
							        	<div class="carousel-caption">
							        		<h1><?php echo $page->post_title; ?></h1>
							        		<h3><?php echo get_secondary_title($page->ID); ?></h3>
							        	</div>
							        	<?php 
							        	if (get_post_meta($page->ID, 'vimeo-id', true)) {
							        		echo '<div class="carousel-video"><button class="btn btn-default" data-toggle="modal" data-target="#myModal">'.( get_post_meta($page->ID, "vimeo-id", true) ).'</button></div>';
							        		?>	
							        	<?php } ?>

							        </div>
							    </div>
							</div>

				        </div> <!-- /.item -->
				<?php } ?>
				</div> <!-- /.carousel-inner -->
  	

	<a class="left carousel-control" href="#carousel-<?php echo print_the_slug(); ?>" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-<?php echo print_the_slug(); ?>" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
</section> <!-- /#intro -->


<?php endwhile; ?>
