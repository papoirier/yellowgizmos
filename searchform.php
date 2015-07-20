<form action="/" method="get">
	<input type="text" name="s" id="search" placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder' ) ?>" value="<?php the_search_query(); ?>" />
</form>