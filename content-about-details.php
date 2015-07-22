<?php $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'order' => 'ASC' ) ); ?>
<?php
foreach( $mypages as $page ) {      
    $content = $page->post_content;
    $content = apply_filters( 'get_the_content', $content ); ?>
    
    	<div class="col-md-3 item">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'medium') ); ?>
            <img src="<?php echo $url; ?>" title="<?php echo $content; ?>" alt="<?php echo $page->post_title; ?>'s photo" data-toggle="tooltip" data-placement="top" class="img-responsive">
            <h5><?php echo $page->post_title; ?></h5>
            <p><?php echo $page->post_content; ?></p>
        </div>
    
<?php } ?>