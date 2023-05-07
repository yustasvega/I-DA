<?php
if (post_password_required()) {
	return;
}
?>

<div id="comments" class="comments my-4">

	<?php
	// You can start editing here -- including this comment!
	if (have_comments()) :
	?>
	<h3 class="mb-5">Комментарии:</h3>
	<?php the_comments_navigation(); ?>
	<ol class="comment-list p-0">
		<?php
			wp_list_comments(
				array(
					'walker'      => new Bootsrap_Walker_Comment(), // какой шаблон использовать для комментов
					'max_depth'      => '2', // максимальная вложенность
					'style'      => 'ol', // во что обарачиваем комменты
					'type'      => 'all', // какая функция будет отримовывать комменыты
					'reply_text' => __('Ответить <i class="fa fa-reply"></i>'),
					'per_page' => '10',
					'avatar_size' => 80,
					'format' => 'html5',
					'echo' => true,

				)
			);
			?>
	</ol>

	<?php the_comments_navigation(); ?>

	<ol class="comment-list">
		<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
	</ol><!-- .comment-list -->

	<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if (!comments_open()) :
		?>
	<p class="no-comments"><?php esc_html_e('Comments are closed.', 'i-da'); ?></p>
	<?php
		endif;

	endif; // Check for have_comments().

	$defaults = [
		'fields'               => [
			'author' => '<div class="row"><div class="col-lg-6">
			<input class="form-control" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" placeholder="Имя" />
		</div>',
			'email'  => '<div class="col-lg-6">
			<input id="email" name="email" class="form-control" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" aria-describedby="email-notes" placeholder="E-mail" />
		</div></div>',
		],
		'comment_field'        => '<p class="comment-form-comment mb-3">
		<textarea class="form-control" id="comment" name="comment" cols="45" rows="8"  aria-required="true" required="required" placeholder="Комментарий"></textarea>
	</p>',
		'must_log_in'          => '<p class="must-log-in">' .
			sprintf(__('Вам нужно <a href="%s">войти</a> чтобы оставить комментарий.'), wp_login_url(apply_filters('the_permalink', get_permalink($post->ID)))) . '
	 </p>',
		'logged_in_as'         => '<p class="logged-in-as">' .
			sprintf(__('<a href="%1$s" aria-label="Вы вошли как %2$s.">Вы вошли как %2$s</a>. <a href="%3$s">Выйти?</a>'), get_edit_user_link(), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '
	 </p>',
		'comment_notes_before' => '<p class="comment-notes">
		<span id="email-notes">' . __('Ваш E-mail защищен от спама.') . '</span> 
	</p>',
		'comment_notes_after'  => '',
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'class_container'      => 'comment-respond',
		'class_form'           => 'comment-form',
		'class_submit'         => 'btn btn-hero btn-circled',
		'name_submit'          => 'submit',
		'title_reply'          => __('Ответить на комментарий'),
		'title_reply_to'       => __('Ответить %s'),
		'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply_after'    => '</h3>',
		'cancel_reply_before'  => ' <small>',
		'cancel_reply_after'   => '</small>',
		'cancel_reply_link'    => __('Отменить отправку'),
		'label_submit'         => __('Отправить комментарий'),
		'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s"/>%4$s</button>',
		'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
		'format'               => 'html5',
	];

	comment_form($defaults);
	?>
</div>
<!--#comments-->