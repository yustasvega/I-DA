<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
	<div class="overlay dark-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-sm-12 col-md-12">
				<div class="banner-content content-padding">
					<h1 class="text-white">
						<?php
						printf(esc_html__('Результаты поиска по&nbsp;фразе: %s', 'band-ida'), '<span>' . get_search_query() . '</span>');
						?></h1>
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
											if (has_post_thumbnail()) {
												the_post_thumbnail('post-thumbnail', array('class' => "img-fluid w-100"));
											} else {
												echo '<img class="img-rluid" src="' . get_template_directory_uri() . '/images/blog/blog-1.jpg" />';
											}
											?>
											<div class="mt-4 mb-3 d-flex">
												<div class="post-author mr-3">
													<i class="fa fa-user"></i>
													<span class="h6 text-uppercase"><?php the_author(); ?></span>
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
								default:
								?>
									<div class="col-lg-6">
										<div class="blog-post">
											<?php
											if (has_post_thumbnail()) {
												the_post_thumbnail('post-thumbnail', array('class' => "img-fluid w-100 w-100 w-100"));
											} else {
												echo '<img class="img-rluid" src="' . get_template_directory_uri() . '/images/blog/blog-1.jpg" />';
											}
											?>
											<div class="mt-4 mb-3 d-flex">
												<div class="post-author mr-3">
													<i class="fa fa-user"></i>
													<span class="h6 text-uppercase"><?php the_author(); ?></span>
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
						<?php if (!dynamic_sidebar('sidebar-blog')) :  dynamic_sidebar('sidebar-blog');
						endif; ?>
					</div>
		</div>
	</div>
	</div>
	</div>
</section>
</section>

<?php get_footer(); ?>