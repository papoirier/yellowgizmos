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
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-footer.svg" class="img-responsive">
				</div>
		    	<div class="col-md-3">
		    		<?php if (is_front_page()) { ?>
			        <ul>
			            <li><a href="#about">About</a></li>
			            <li><a href="#team">Team</a></li>
			            <li><a href="#blog">Blog</a></li>
			        </ul>
			        <?php } else { ?>
			        <ul>
			            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About</a></li>
			            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#team">Team</a></li>
			            <li><a href="<?php echo get_page_link(6); ?>">Blog</a></li>
			            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a></li>
			        </ul>
			        <?php } ?>
		        </div>
		        <div class="col-md-3 legals">
		        	<ul>
		        		<?php 
		        		/* About 	->  62
		        		 * Blog 	->   5
		        		 * Careers 	->  64 // 141
		        		 * FAQ 		-> 118 // 125
		        		 * Terms 	-> 119 // 126
		        		 */
		        		?>
		        		<li><a href="<?php echo get_page_link(141); ?>">Careers</a></li>
		        		<li><a href="<?php echo get_page_link(125); ?>">FAQ</a></li>
		        		<li><a href="<?php echo get_page_link(126); ?>">Terms &amp; Privacy</a></li>
		        	</ul>
		        </div>
		        <div class="col-md-3 social-logos">
		        	<p class="sans-serif">Follow us on</p>
		    		<ul>
		    			<?php $on = "Yieldmo on"?>
		    			<li><a href="https://www.facebook.com/Yieldmo" title="<?php echo $on?> Facebook" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-facebook.svg" class="img-responsive"></a></li>
		    			<li><a href="https://twitter.com/yieldmo" title="<?php echo $on?> Twitter" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-twitter.svg" class="img-responsive"></a></li>
		    			<li><a href="https://www.linkedin.com/company/yieldmo" title="<?php echo $on?> Linkedin" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-linkedin.svg" class="img-responsive"></a></li>
		    			<li><a href="http://vimeo.com/adformatlab" title="<?php echo $on ?> Vimeo" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-vimeo.svg" class="img-responsive"></a></li>
		    		</ul>
		        </div>        
		    </div>

		    <div class="colophon">
			    <div class="row">
			    	<div id="address" class="col-md-9 col-md-offset-3 col-xs-12">
			    		<ul>
			    			<li>218 West 18th Street, 2nd Floor</li>
			    			<li>New York, NY 10011</li>
			    		</ul>
			        </div>
			    </div>

			    <div class="row">
			    	<div id="copyright" class="col-md-9 col-md-offset-3 col-xs-12 regular">
			    		<p>&copy;<?php echo date("Y"); ?> Yieldmo, Inc. Proudly made in New York City.</p>
			    		<p>Yieldmo, the Yieldmo logo, and Ad Format Lab are servicemarks of Yieldmo, Inc.</p>
			    	</div>
			    </div>
			</div>

		</div>
	</footer>
</div> <!-- /.content-wrapper -->

	<!-- JS - - - - - - - - - - - - - - - - -->
	<?php wp_footer(); ?>

	<!-- ANALYTICS - - - - - - - - - - - -  -->
	<?php include_once("analytics-tracking.php"); ?>

</body>
</html>