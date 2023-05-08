<?php get_header(); ?>
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
	<div class="overlay dark-overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
				<div class="banner-content content-padding">
					<h1 class="text-white">
						<?php
						if (is_category()) {
							echo__('<smal>Рубрика</smal><br>') . get_queried_object()->name;
						}
						if (is_tag()) {
							echo__('<smal>Записи с меткой:</smal><br> ') . get_queried_object()->name;
						}
						if (is_author()) {
							echo__('<small>Записи автора </small><br>') . get_the_author_meta('display_name');
						}
						if (is_date()) {
							echo__('<small>Архив от даты </small><br>') . get_the_date('j F Y');
						}
						?>
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!--MAIN HEADER AREA END -->
<section class="section blog-wrap ">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<?php $cnt = 0; //объявляем счетчик
					if (have_posts()) : while (have_posts()) : the_post(); // проверяем емть ли посты
							$cnt++; // увеличиваем счетчик на +1
							switch ($cnt) {
								case '3': ?>
									<div class="col-lg-12">
										<div class="blog-post">
											<?php
											if (has_post_thumbnail()) { // проверяем, есть ли миниатюра
												the_post_thumbnail('post-thumbnail', array('class' => "img-fluid w-100")); // выводим миниатюру
											} else { // если миниатюры нет
												echo '<img class="img-rluid" src="' . get_template_directory_uri() . '/images/blog/blog-1.jpg" />'; // выводим стандартную миниатюру
											}
											?>
											<div class="mt-4 mb-3 d-flex">
												<div class="post-author mr-3">
													<i class="fa fa-user"></i>
													< href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="h6 text-uppercase">
														<?php the_author(); ?></a>
												</div>

												<div class="post-info">
													<i class="fa fa-calendar-check"></i>
													<span><?php the_time('j F Y'); ?></span>
												</div>
											</div>
											<a href="<?php echo get_the_permalink(); ?>" class="h4 "><?php the_title(); ?></a>
											<p class="mt-3"><?php the_excerpt(); ?></p>
											<a href="<?php echo get_the_permalink(); ?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
										</div>
									</div>
								<?php
									break;
								default: ?>
									<div class="col-lg-6">
										<div class="blog-post">
											<?php
											if (has_post_thumbnail()) { // проверяем, есть ли миниатюра
												the_post_thumbnail('post-thumbnail', array('class' => "img-fluid w-100")); //выводим миниатюру
											} else { // если миниатюр нет
												echo '<img class="img-rluid w-100" src="' . get_template_directory_uri() . '/images/blog/blog-1.jpg" />'; // выводим стандартную миниатюру
											}
											?>
											<div class="mt-4 mb-3 d-flex">
												<div class="post-author mr-3">
													<i class="fa fa-user"></i>
													<а href="<?php echo get_autor_post_url(get_the_author_meta('ID')); ?>" <a class="h6 text-uppercase">
														<?php the_author(); ?></a>
												</div>
												<div class="post-info">
													<i class="fa fa-calendar-check"></i>
													<span><?php the_time('j F Y'); ?></span>
												</div>
											</div>
											<a href="<?php echo get_the_permalink(); ?>" class="h4 "><?php the_title(); ?></a>
											<p class="mt-3"><?php the_excerpt(); ?></p>
											<a href="<?php echo get_the_permalink(); ?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
										</div>
									</div>
						<?php break;
							}
						endwhile;
					else : ?>
						Записей нет.
					<?php endif; ?>
					<div class="col-lg-12">
						<?php the_posts_pagination(array(
							'prev_text'    => __('<span class="p-2 border">« Предыдущие</span>'),
							'next_text'    => __('<span class="p-2 border"> Следущие »</span>'),
							'before_page_number' => '<span class="p-2 border">',
							'after_page_number' => '</span>'
						)); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-12">
						<?php if (!dynamic_sidebar('sidebar-blog')) : dynamic_sidebar('sidebar-blog');
						endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</section>
<?php get_footer(); ?>