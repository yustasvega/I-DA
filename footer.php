<!--  FOOTER AREA START  -->
<section id="footer" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-sm-8 col-md-8">
				<div class="footer-widget footer-link">
					<h4>Мы заботимся о том, чтобы вы <br />быстро развивали свой бизнес</h4>
					<p>
						Маркетинговое и диджитал агентство полного цикла: мы решаем задачи по продвижению и рекламе, делаем
						сайты и презентации, чтобы это не пришлось делать вам.
					</p>
				</div>
			</div>
			<div class="col-lg-2 col-sm-4 col-md-4">
				<?php wp_nav_menu([
					'theme_location'  => 'footer_left',
					'container'       => false,
					'menu_class'      => 'footer-widget footer-link',
					'echo'            => true,
					'items_wrap'      => '<h4>Информация</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 2,
				]) ?>
			</div>

			<div class="col-lg-2 col-sm-6 col-md-6">


				<div class="footer-widget footer-link">
					<h4>Сылки</h4>
					<ul>
						<li><a href="#">Как это работает</a></li>
						<li><a href="#">Поддержка</a></li>
						<li><a href="#">Политика данных</a></li>
						<li><a href="#">Сообщить об ошибке</a></li>
						<li><a href="#">Лицензия</a></li>
						<li><a href="#">Оферта</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-md-6">
				<div class="footer-widget footer-text">
					<h4>Наши контакты</h4>
					<p class="mail"><span>Email:</span> info@и-да.рф</p>
					<p><span>Телефон :</span>+7 495 27-73-894</p>
					<p><span>Адрес:</span> г. Новокузнезк, ул. 40 лет ВЛКСМ, строение 3, офис 37</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="footer-copy">© 2022 I-DA inc. Все права защищены.</div>
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