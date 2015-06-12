<div class="row">
    <?php $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'order' => 'ASC' ) ); ?>
    <?php
    foreach( $mypages as $page ) {      
        $content = $page->post_content;
        $content = apply_filters( 'get_the_content', $content ); ?>
        <div class="col-md-3">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'thumbnail') ); ?>
            <img src="<?php echo $url; ?>" class="center-block img-responsive">
            <h5 class="text-center"><?php echo $page->post_title; ?></h5>
        </div>
    
    <?php } ?>
</div>