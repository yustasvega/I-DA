<form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>" class="form-group">
	<input type="text" placeholder="поиск" class="form-control" value="<?php echo get_search_query() ?>" name="s" id="s">
	<i class="fa fa-search"></i>
</form>