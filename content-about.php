<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
<?php $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'order' => 'ASC' ) ); ?>

<div class="container">
	<div class="row">
    	<div class="col-md-6 col-md-offset-3 text-center">
    		<h3><?php the_title(); ?></h3>
			<h3 class="regular"><?php the_content(); ?></h3>
        </div>
    </div>
    <div class="row">
    	<div class="col-md-12">
    		<div class="thumb"><?php the_post_thumbnail('large', array( 'class' => 'img-desktop img-responsive' )); ?></div>
            <?php 
            if (get_post_meta(get_the_ID(), 'Second Featured Image', true)) { ?>
                <img class="img-mobile img-responsive" src="<?php echo get_post_meta(get_the_ID(), 'Second Featured Image', true); ?>">
            <?php } ?>
        </div>
    </div>
</div>

<?php if ( print_the_slug() == "publishers") { ?>
	<div class="shape shape-<?php echo print_the_slug(); ?>">
    	<svg width="767" height="200" viewBox="0 0 767 200" preserveAspectRatio="none">
    		<path id="polymorpher" fill="rgb(253,209,71)" d="
                M 0 200 
                L 0 80 
                L 767 0 
                L 767 80 
                L 767 200 
                Z">
            </path>
        </svg>
    </div>
<?php } ?>
<?php if ( print_the_slug() == "advertisers") { ?>
	<div class="shape shape-<?php echo print_the_slug(); ?>">
    	<svg width="767" height="200" viewBox="0 0 767 200" preserveAspectRatio="none">
    		<path id="polymorpher" fill="rgb(242,127,138)" d="
                M 0 200 
                L 0 30 
                L 767 30 
                L 767 30 
                L 767 200
                Z">
            </path>
        </svg>
    </div>
<?php } ?>
<?php if ( print_the_slug() == "readers") { ?>
	<div class="shape shape-<?php echo print_the_slug(); ?>">
    	<svg width="767" height="200" viewBox="0 0 767 200" preserveAspectRatio="none">
    		<path id="polymorpher" fill="rgb(23,134,185)" d="
                M 0 200 
                L 0 0 
                L 767 80 
                L 767 80 
                L 767 200 
                Z">
            </path>
        </svg>
    </div>
<?php } ?>

<div class="container bottom">
    <div class="row">
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

			<div class="carousel-inner">
				<?php require(locate_template('content-about-details.php')); ?>
			</div> <!-- /.carousel-inner -->

		</div> <!-- /#carousel- -->
    </div>
</div>
<?php endwhile; ?>