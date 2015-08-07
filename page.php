<?php
/*
 * Template Name: Job Page
 *
 * Careers page -> 141
 *
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="careers">
	<div class="container">
		<div class="row">
	    	<div class="col-md-12 main-title">
	    		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/careers.png" class="img-responsive center-block">
	    		<h1><?php echo get_the_title( 141 ); ?></h1>
	    		<h5><?php echo get_secondary_title( 141 ); ?></h5> 
	        </div>
	    </div>
	</div>
</div>

<?php // job page content  ?>

<div class="container">
	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<h3 class="text-center"><?php the_secondary_title(); ?></h3>
			<h3 class="regular text-center"><?php the_title(); ?></h3>
        </div>
    </div>
</div>
<hr>
<div class="container">
	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<h4 class="regular text-center"><?php the_content(); ?></h4>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>
<hr>
<?php // job description  ?>
<div class="container job-description">
	<div class="row">
		<?php $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'order' => 'ASC' ) ); ?>
	    <?php
	    foreach( $mypages as $page ) {      
	        $content = $page->post_content;
	        $content = apply_filters( 'get_the_content', $content ); ?>
	        <div class="col-md-4">
	            <h4><?php echo $page->post_title; ?></h4>
	            <p><?php echo $page->post_content; ?></p>
	        </div>
	    <?php } ?>
	    <?php // about yieldmo page -> 1237 ?>

	        <div class="col-md-4">
	        	<h4><?php echo get_the_title( 1237 ); ?></h4>
	    		<p><?php echo get_post_field('post_content', 1237); ?></p> 
	        </div>
    </div>
</div>
<hr>
<div class="container job-contact">
	<div class="row">
    	<div class="col-md-12 text-center">
    		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/btn-mail.svg" class="img-responsive center-block">
    		<h5 class="regular">If you’re interested, please send cover letter, website/portfolio, and resume directly to :</h5>
			<h5>Will Sparks</h5>
			<h5><script>document.write('<'+'a'+' '+'h'+'r'+'e'+'f'+'='+"'"+'&'+'#'+'1'+'0'+'9'+';'+'a'+'i'+'l'+'t'+'o'+'&'+'#'+'5'+'8'+';'+
'w'+'&'+'#'+'3'+'7'+';'+'&'+'#'+'5'+'4'+';'+'9'+'l'+'l'+'&'+'#'+'6'+'4'+';'+'%'+'7'+'9'+'%'+'&'+'#'+
'5'+'4'+';'+'&'+'#'+'5'+'7'+';'+'&'+'#'+'1'+'0'+'1'+';'+'%'+'6'+'C'+'d'+'&'+'#'+'1'+'0'+'9'+';'+'o'+
'&'+'#'+'4'+'6'+';'+'&'+'#'+'9'+'9'+';'+'%'+'6'+'&'+'#'+'7'+'0'+';'+'m'+"'"+'>'+'w'+'&'+'#'+'1'+'0'+
'5'+';'+'l'+'l'+'&'+'#'+'6'+'4'+';'+'y'+'i'+'e'+'l'+'d'+'m'+'&'+'#'+'1'+'1'+'1'+';'+'&'+'#'+'4'+'6'+
';'+'c'+'o'+'m'+'<'+'/'+'a'+'>');</script><noscript>[Turn on JavaScript to see the email address]</noscript></h5>
        </div>
    </div>
</div>
<?php get_footer(); ?>