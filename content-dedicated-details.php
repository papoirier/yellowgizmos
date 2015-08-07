<?php $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'order' => 'ASC' ) ); ?>
<?php
foreach( $mypages as $page ) {      
    $content = $page->post_content;
    $content = apply_filters( 'get_the_content', $content ); ?>

        <div class="col-md-4 item">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'full') ); ?>
            <div class="carousel-img"><img src="<?php echo $url; ?>" title="<?php echo $content; ?>" alt="<?php echo $page->post_title; ?>'s photo"></div>
            <h5><?php echo $page->post_title; ?></h5>
            <p><?php echo $page->post_content; ?></p>
            <?php if (get_post_meta($page->ID, "blog-link", true)) { ?>
            	<p class="btn btn-default"><a href="<?php echo get_post_meta($page->ID, "blog-link", true); ?>">Learn more</a></p>
            <?php } ?>
        </div>
    

<?php } ?>
