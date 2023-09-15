<!--  FOOTER AREA START  -->
<section id="footer" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-sm-8 col-md-8">
				<?php if (!dynamic_sidebar('sidebar-footer-text')) :  dynamic_sidebar('sidebar-footer-text');
				endif; ?>
			</div>
			<div class="col-lg-2 col-sm-4 col-md-4">
				<?php wp_nav_menu([
					'theme_location'  => 'footer_left',
					'container'       => 'div',
					'container_class' => 'footer-widget footer-link',
					'menu_class'      => '',
					'echo'            => true,
					'items_wrap'      => '<h4>Информация</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 2,
				]) ?>

			</div>

			<div class="col-lg-2 col-sm-6 col-md-6">
				<?php wp_nav_menu([
					'theme_location'  => 'footer_right',
					'container'       => 'div',
					'container_class' => 'footer-widget footer-link',
					'menu_class'      => '',
					'echo'            => true,
					'items_wrap'      => '<h4>Ссылки</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 2,
				]) ?>
			</div>
			<div class="col-lg-3 col-sm-6 col-md-6">
				<?php if (!dynamic_sidebar('sidebar-footer-contacts')) :  dynamic_sidebar('sidebar-footer-contacts');
				endif; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="footer-copy">© <?php echo date(' Y ');
																		echo get_bloginfo('name') ?> inc. Все права защищены.</div>
			</div>
		</div>
	</div>
</section>
<!--  FOOTER AREA END  -->
<!-- 
    Essential Scripts
    =====================================-->
<!-- Google Map -->
<script src="plugins/google-map/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">

</script>
<?php wp_footer(); ?>
</body>

</html>