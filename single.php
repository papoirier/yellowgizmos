<?php 
/*
 * single.php
*/
?>
    <div id="post-<?php the_ID(); ?>" class="single-post">
    <?php while (have_posts()) : the_post(); ?>
        <h3><?php the_title();?></h3>
        <?php the_content();?>
    <?php endwhile;?> 
 
    </div>