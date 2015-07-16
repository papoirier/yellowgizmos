<?php $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'order' => 'ASC' ) ); ?>


<ol class="carousel-indicators">
	<?php
$count = 0;
foreach( $mypages as $page ) {  
	$count++;   
    $content = $page->post_content;
    $content = apply_filters( 'get_the_content', $content ); ?> 
		<li data-target="#carousel-<?php echo print_the_slug(); ?>" data-slide-to="0" class="<?php if($count == 1){echo ' active';}?>"></li>
	<?php } ?>
</ol>

<div class="carousel-inner" role="listbox">
<?php
$count = 0;
foreach( $mypages as $page ) {   
	$count++;   
    $content = $page->post_content;
    $content = apply_filters( 'get_the_content', $content ); ?>

		<div class="item <?php if($count == 1){echo ' active';}?>">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'large') ); ?>
        	<img src="<?php echo $url; ?>">
        </div>

        
<?php } ?>
</div> <!-- /.carousel-inner -->
