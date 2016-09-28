<form role="search" method="get" id="searchform" class="searchform header-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="s" class="hidden">Site Search</label>
	<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Site Search">
	<button type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'BCBSMN' ); ?>" class="btn btn-default"><span class="hidden" aria-hidden="true">Submit</span><i class="fa fa-search"></i></button>
</form>