<?php

if (post_type_supports(get_post_type(), 'comments')) {

    if (post_password_required()) {
        return;
    }
    ?>
	<div class="comments" id="comments">
        <?php
        if (have_comments()) {
	        $num_comments = get_comments_number(); // get_comments_number returns only a numeric value
	        if ($num_comments > 1) {
		        $td_comments_no_text = $num_comments . ' ' . esc_html__('COMMENTS', 'newspaper');
	        } else {
		        $td_comments_no_text = esc_html__('1 COMMENT', 'newspaper');
	        }
	        ?>

            <div class="td-comments-title-wrap td-pb-padding-side">
                <h4 class="td-comments-title block-title"><span><?php echo esc_attr( $td_comments_no_text ) ?></span></h4>
            </div>

		        <ol class="comment-list td-pb-padding-side">
                    <?php wp_list_comments(array('callback' => 'td_comment')); ?>
                </ol>
                <div class="comment-pagination">
                    <?php previous_comments_link(); ?>
                    <?php next_comments_link(); ?>
                </div>

            <?php }

	        if (!comments_open() and (get_comments_number() > 0)) { ?>
	            <p class="td-pb-padding-side"><?php esc_html_e( 'Comments are closed.', 'newspaper' ) ?></p>
	        <?php }

            $commenter = wp_get_current_commenter();
            $req = get_option( 'require_name_email' );
            $aria_req = ( $req ? " aria-required='true'" : '' );

            $user = wp_get_current_user();
            $user_identity = $user->exists() ? $user->display_name : '';
            $consent  = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
	        $fields = array(
		        'author' =>
			        '<div class="comment-form-input-wrap td-form-author">
			            <input class="" id="author" name="author" placeholder="' . esc_html__('Name:', 'newspaper') . ( $req ? '*' : '' ) . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" ' . $aria_req . ' />
			            <div class="td-warning-author">' . esc_html__('Please enter your name here', 'newspaper') . '</div>
			         </div>',

		        'email'  =>
			        '<div class="comment-form-input-wrap td-form-email">
			            <input class="" id="email" name="email" placeholder="' . esc_html__('Email:', 'newspaper') . ( $req ? '*' : '' ) . '" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" ' . $aria_req . ' />
			            <div class="td-warning-email-error">' . esc_html__('You have entered an incorrect email address!', 'newspaper') . '</div>
			            <div class="td-warning-email">' . esc_html__('Please enter your email address here', 'newspaper') . '</div>
			         </div>',

		        'url' =>
			        '<div class="comment-form-input-wrap td-form-url">
			            <input class="" id="url" name="url" placeholder="' . esc_html__('Website:', 'newspaper') . '" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />
                     </div>',
                'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
                    '<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'newspaper' ) . '</label></p>',
            );

		    $defaults = array('fields' => apply_filters('comment_form_default_fields', $fields));
		    $defaults['comment_field'] =
			    '<div class="clearfix"></div>
				<div class="comment-form-input-wrap td-form-comment">
					<textarea placeholder="' . esc_html__('Comment:', 'newspaper') . '" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
					<div class="td-warning-comment">' . esc_html__('Please enter your comment!', 'newspaper') . '</div>
				</div>
		        ';

		    $defaults['comment_notes_before'] = '';
		    $defaults['comment_notes_after'] = '';
		    $defaults['title_reply'] = esc_html__('LEAVE A REPLY', 'newspaper');
		    $defaults['label_submit'] = esc_html__('Post Comment', 'newspaper');
		    $defaults['cancel_reply_link'] = esc_html__('Cancel reply', 'newspaper');

		    // login when you want to write a comment
            $post_id = get_the_ID();
            $url = wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) );

            $defaults['must_log_in'] = '<p class="must-log-in td-login-comment"><a class="td-login-modal-js" data-effect="mpf-td-login-effect" href="' . $url .'">' . esc_html__('Log in to leave a comment', 'newspaper') . ' </a></p>';

            $defaults['logged_in_as'] = '<p class="logged-in-as">' . sprintf(
                    /* 1: edit user link, 2: accessibility text, 3: user name, 4: logout URL */
                    '<a href="%1$s" aria-label="%2$s">' . esc_html__('Logged in as', 'newspaper') . ' %3$s</a>. <a href="%4$s">' . esc_html__('Log out?', 'newspaper') . '</a>',
                    get_edit_user_link(),
                    /* %s: user name */
                    esc_attr( sprintf( esc_html__( 'Logged in as %s. Edit your profile.' , 'newspaper'), $user_identity ) ),
                    $user_identity,
                    wp_logout_url( apply_filters( 'the_permalink', get_permalink( get_the_ID() ) ) )
                ) . '</p>';

            comment_form($defaults);

        ?>
    </div> <!-- /.content -->
<?php
}

/**
 * Custom callback for outputting comments
 *
 * @return void
 * @author tagdiv
 */
function td_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;

    $td_isPingTrackbackClass = '';

    if($comment->comment_type == 'pingback') {
        $td_isPingTrackbackClass = 'pingback';
    }

    if($comment->comment_type == 'trackback') {
        $td_isPingTrackbackClass = 'trackback';
    }

    if (!empty($comment->comment_author_email)) {
        $td_comment_auth_email = $comment->comment_author_email;
    } else {
        $td_comment_auth_email = '';
    }
    $td_article_date_unix = @strtotime("{$comment->comment_date_gmt} GMT");

	?>
        <li class="comment <?php echo esc_attr( $td_isPingTrackbackClass ) ?>" id="comment-<?php comment_ID() ?>">
			<article>
	            <footer>
                    <?php echo get_avatar($td_comment_auth_email, 50) ?>
                    <cite><?php comment_author_link() ?></cite>
                    <a class="comment-link" href="#comment-<?php comment_ID() ?>">
                        <time pubdate="<?php echo esc_attr( $td_article_date_unix ) ?>">
                            <?php comment_date() ?>
                            <?php echo __td('At', TD_THEME_NAME); ?>
                            <?php comment_time() ?></time>
                    </a>
                    <?php edit_comment_link( esc_html__('Edit', 'newspaper')) ?>
                </footer>

                <div class="comment-content tagdiv-type">
                    <?php if ($comment->comment_approved == '0') { ?>
                        <em><?php echo esc_html__('Your comment is awaiting moderation', 'newspaper'); ?></em>
                    <?php }
                    comment_text(); ?>
                </div>

	            <div class="comment-meta" id="comment-<?php comment_ID() ?>">
                    <?php comment_reply_link(array_merge( $args, array(
                        'depth' => $depth,
                        'max_depth' => $args['max_depth'],
                        'reply_text' => esc_html__('Reply', 'newspaper'),
                        'login_text' =>  esc_html__('Log in to leave a comment', 'newspaper')
                    )))
                    ?>
                </div>
            </article>
    <?php
}
?>