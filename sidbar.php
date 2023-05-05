<div class="col-lg-4"></div>
<?php if (!dynamic_sidebar('sidebar-blog')) :  dynamic_sidebar('sidebar-blog');
endif; ?>
<div class="sidebar-widget search">
	<aside id="secondary" class="widget-area">
		<?php dynamic_sidebar('sidebar'); ?>
	</aside><!-- #secondary -->
	<section class="section blog-wrap ">
		<?php if (!dynamic_sidebar('sidebar-blog')) :  dynamic_sidebar('sidebar-blog');
		endif; ?>