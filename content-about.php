<?php //while ($my_query->have_posts()) : $my_query->the_post(); ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
<?php //$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'order' => 'ASC' ) ); ?>

<div class="container">
	<div class="row">
    	<div class="col-md-6 col-md-offset-3 text-center">
    		<h3><?php the_title(); ?></h3>
			<h3 class="regular"><?php the_content(); ?></h3>
        </div>
    </div>
    <div class="row">
    	<div class="col-md-12">
    		<div class="thumb"><?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?></div>
        </div>
    </div>
</div>
<div class="container bottom">
    <div class="row">
    	<div id="carousel-<?php echo print_the_slug(); ?>" class="carousel slide" data-ride="carousel" data-interval="false">
			<ol class="carousel-indicators">
				<li data-target="#carousel-<?php echo print_the_slug(); ?>" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-<?php echo print_the_slug(); ?>" data-slide-to="1"></li>
				<li data-target="#carousel-<?php echo print_the_slug(); ?>" data-slide-to="2"></li>
				<li data-target="#carousel-<?php echo print_the_slug(); ?>" data-slide-to="3"></li>
			</ol>

			<div class="carousel-inner">
				<?php require(locate_template('content-about-details.php')); ?>
			</div> <!-- /.carousel-inner -->

		</div> <!-- /#carousel- -->
    </div>
</div>
<?php endwhile; ?>