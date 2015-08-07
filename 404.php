<?php 
/*
Template Name: 404 / Error page
*/
get_header(); ?>
<div id="four-o-four">
	<div class="container">
		<div class="row">
	    	<div class="col-md-4 col-md-offset-4">
	    		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/404.png" class="img-responsive img-block">
	        </div>
	    </div>
		<div class="row">
	    	<div class="col-md-6 col-md-offset-3">
	    		<h1>Oh my gawd!</h1>
	    		<h3>The website you’re looking for  seems to&nbsp;be&nbsp;missing.</h3>
	    		<ul class="post-more">
	    			<li class="more-text prev-404"><a href="https://yieldmo.com">Back to yieldmo.com</a><li>
	    		</ul>
	        </div>
	    </div>
	</div>
</div>
<?php get_footer(); ?>