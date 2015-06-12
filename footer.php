<?php 
/* FOOTER -------------------------------
 *
 * Careers 			-> 175
 * Ad Format Lab 	-> 177
 * Terms 			-> 178
 *
 * Contact 			->  93
 * FAQ 				-> 182
 * About 			-> 408
 *
 */ 
?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3 logo">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-yieldmo-yellow.png" class="img-responsive">
				</div>
		    	<div class="col-md-3">
		    		<ul>
		    			<?php wp_list_pages('include=62&title_li='); ?>
		    			<li><a href="http://adformatlab.yieldmo.com" title="Ad Format Lab">Ad Format Lab</a></li>
		    			<?php wp_list_pages('include=64,5&title_li='); ?>
		    		</ul>
		        </div>

		        <div class="col-md-3 social-logos">
		    		<ul>
		    			<?php $on = "Yieldmo on"?>
		    			<li><a href="https://www.facebook.com/Yieldmo" title="<?php echo $on?> Facebook" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-fb.png" class="img-responsive"></a></li>
		    			<li><a href="https://twitter.com/yieldmo" title="<?php echo $on?> Twitter" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-twitter.png" class="img-responsive"></a></li>
		    			<li><a href="https://www.linkedin.com/company/yieldmo" title="<?php echo $on?> Linkedin" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-linkedin.png" class="img-responsive"></a></li>
		    			<li><a href="http://vimeo.com/adformatlab" title="<?php echo $on ?> Vimeo" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-vimeo.png" class="img-responsive"></a></li>
		    		</ul>
		        </div>

		        <div class="col-md-3">
		    		<ul>
		    			<li>218 West 18th Street</li>
		    			<li>2nd Floor</li>
		    			<li>New York, NY 10011</li>
		    		</ul>
		        </div>
		    </div>

		    <div class="row">
		    	<div id="copyright" class="col-md-9 col-md-offset-3 col-xs-12">
		    		<p>&copy;<?php echo date("Y"); ?> Yieldmo, Inc. Proudly made in New York City.</p>
		    		<p>Yieldmo, the Yieldmo logo, and Ad Format Lab are servicemarks of Yieldmo, Inc.</p>
		    	</div>
		    </div>

		</div>
	</footer>

	<!-- JS - - - - - - - - - - - - - - - - -->
	<?php wp_footer(); ?>

	<!-- ANALYTICS - - - - - - - - - - - -  -->
	<?php include_once("analytics-tracking.php"); ?>

</body>
</html>