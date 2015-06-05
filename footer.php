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
		    	<div class="col-md-3 col-md-offset-2 col-xs-6">
		    		<h5>Company</h5>
		    		<ul>
		    			<li><a href="http://adformatlab.yieldmo.com" title="Ad Format Lab">Ad Format Lab</a></li>
		    			<?php wp_list_pages('include=175,178&title_li='); ?>
		    		</ul>
		        </div>

		        <div class="col-md-3 col-xs-6">
		        	<h5>Join Us On</h5>
		    		<ul>
		    			<?php $on = "Yieldmo on"?>
		    			<li><a href="https://twitter.com/yieldmo" title="<?php echo $on?> Twitter" target="_blank">Twitter</a></li>
		    			<li><a href="https://www.facebook.com/Yieldmo" title="<?php echo $on?> Facebook" target="_blank">Facebook</a></li>
		    			<li><a href="https://www.linkedin.com/company/yieldmo" title="<?php echo $on?> Linkedin" target="_blank">Linkedin</a></li>
		    			<li><a href="http://vimeo.com/adformatlab" title="<?php echo $on ?> Vimeo" target="_blank">Vimeo</a></li>
		    		</ul>
		        </div>

		        <div class="col-md-3 col-xs-12">
		        	<h5>Get In Touch</h5>
		    		<ul>
		    			<?php wp_list_pages('include=93,408,182&title_li=&sort_column=menu_order'); ?>
		    		</ul>
		        </div>
		    </div>

		    <div class="row">
		    	<div id="copyright" class="col-md-6 col-md-offset-2 col-xs-12">
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