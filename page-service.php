<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-service" id="page-banner">
	<div class="overlay dark-overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
				<div class="banner-content content-padding">
					<h1 class="text-white"><?php the_title(); ?></h1>
					<p>Мы оказываем весь спектр диджитал услуг</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--MAIN HEADER AREA END -->
<?php the_content(); ?>

<?php echo get_template_part('template-parts/content', 'service', ['class' => 'service-style-two']); ?>

<!--  PARTNER START  -->
<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 text-center text-lg-left">
				<div class="mb-5">
					<h3 class="mb-2">Эти компании доверяют нам</h3>
					<p>Компании, с которыми мы работаем давно</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6 col-md-3 text-center">
				<img src="images/clients/client01.png" alt="partner" class="img-fluid" />
			</div>
			<div class="col-lg-3 col-sm-6 col-md-3 text-center">
				<img src="images/clients/client06.png" alt="partner" class="img-fluid" />
			</div>
			<div class="col-lg-3 col-sm-6 col-md-3 text-center">
				<img src="images/clients/client04.png" alt="partner" class="img-fluid" />
			</div>
			<div class="col-lg-3 col-sm-6 col-md-3 text-center">
				<img src="images/clients/client05.png" alt="partner" class="img-fluid" />
			</div>
		</div>
	</div>
</section>
<!--  PARTNER END  -->

<?php get_footer(); ?>