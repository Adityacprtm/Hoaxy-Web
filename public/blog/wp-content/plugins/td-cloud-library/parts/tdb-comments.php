<?php
/**
 * Created by PhpStorm.
 * User: lucian
 * Date: 2/18/2019
 * Time: 4:29 PM
 */

if ( post_password_required() ) {
    return;
}

if ( have_comments() ) {

?>

    <ol class="comment-list">
        <?php wp_list_comments( array( 'callback' => 'tdb_comment' ) ); ?>
    </ol>
    <div class="comment-pagination">
        <?php previous_comments_link(); ?>
        <?php next_comments_link(); ?>
    </div>

<?php

}

	$post_id = get_the_ID();
	$current_user = wp_get_current_user();
	$current_commenter = wp_get_current_commenter();
	$require_name_email = get_option( 'require_name_email' );
	$aria_req = ( $require_name_email ? " aria-required='true'" : '' );
	$consent = empty( $current_commenter['comment_author_email'] ) ? '' : ' checked="checked"';

	$fields = array(
		'author' => '<div class="comment-form-input-wrap td-form-author">
                                    <input 
                                        class="" 
                                        id="author" 
                                        name="author" 
                                        placeholder="' . __td( 'Name:', TD_THEME_NAME) . ( $require_name_email ? '*' : '' ) . '" 
                                        type="text" 
                                        value="' . esc_attr( $current_commenter['comment_author'] ) . '" 
                                        size="30" ' . $aria_req . ' 
                                    />
                                    <div class="td-warning-author">' . __td('Please enter your name here', TD_THEME_NAME) . '</div>
                                </div>',
		'email' => '<div class="comment-form-input-wrap td-form-email">
                                    <input 
                                        class="" 
                                        id="email" 
                                        name="email" 
                                        placeholder="' . __td( 'Email:', TD_THEME_NAME) . ( $require_name_email ? '*' : '' ) . '" 
                                        type="text" 
                                        value="' . esc_attr(  $current_commenter['comment_author_email'] ) . '" 
                                        size="30" ' . $aria_req . ' 
                                    />
                                    <div class="td-warning-email-error">' . __td( 'You have entered an incorrect email address!', TD_THEME_NAME ) . '</div>
                                    <div class="td-warning-email">' . __td( 'Please enter your email address here', TD_THEME_NAME ) . '</div>
                                </div>',
		'url' => '<div class="comment-form-input-wrap td-form-url">
                                <input 
                                    class="" 
                                    id="url" 
                                    name="url" 
                                    placeholder="' . __td( 'Website:', TD_THEME_NAME ) . '" 
                                    type="text" 
                                    value="' . esc_attr( $current_commenter['comment_author_url'] ) . '" 
                                    size="30" 
                                />
                             </div>',
		'cookies' => '<p class="comment-form-cookies-consent">
                                <input 
                                    id="wp-comment-cookies-consent" 
                                    name="wp-comment-cookies-consent" 
                                    type="checkbox" 
                                    value="yes"
                                    ' . $consent . ' 
                                />
                                <label for="wp-comment-cookies-consent">' . __td( 'Save my name, email, and website in this browser for the next time I comment.', TD_THEME_NAME ) . '</label>
                              </p>',
	);

	$user_identity = $current_user->exists() ? $current_user->display_name : '';

	$defaults = array(
		'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field' => '<div class="clearfix"></div>
                            <div class="comment-form-input-wrap td-form-comment">
                                <textarea 
                                    placeholder="' . __td( 'Comment:', TD_THEME_NAME ) . '" 
                                    id="comment" 
                                    name="comment" 
                                    cols="45" 
                                    rows="8" 
                                    aria-required="true"
                                ></textarea>
                                <div class="td-warning-comment">' . __td( 'Please enter your comment!', TD_THEME_NAME ) . '</div>
                            </div>',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'title_reply' => __td( 'LEAVE A REPLY', TD_THEME_NAME ),
        'label_submit' => __td( 'Post Comment', TD_THEME_NAME ),
        'cancel_reply_link' => __td( 'Cancel reply', TD_THEME_NAME ),
        'must_log_in' => '<p class="must-log-in td-login-comment"><a class="td-login-modal-js" data-effect="mpf-td-login-effect" href="#login-form">' . __td( 'Log in to leave a comment', TD_THEME_NAME ) . '</a></p>',
		'logged_in_as' => '<p class="logged-in-as">' . sprintf(
		                  /* 1: edit user link, 2: accessibility text, 3: user name, 4: logout URL */
			                  '<a href="%1$s" aria-label="%2$s">' . __td( 'Logged in as', TD_THEME_NAME ) . ' %3$s</a>. <a href="%4$s">' . __td( 'Log out?', TD_THEME_NAME ) . '</a>',
			                  get_edit_user_link(),
			                  /* %s: user name */
			                  esc_attr( sprintf( __td( 'Logged in as %s. Edit your profile.' , TD_THEME_NAME), $user_identity ) ),
			                  $user_identity,
			                  wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) )
		                  ) . '</p>'
    );

	if ( !comments_open() and get_comments_number() > 0 ) {
		echo '<p class="td-pb-padding-side">' . _etd( 'Comments are closed.', TD_THEME_NAME ) . '</p>';
	} else {

		if ( tdc_state::is_live_editor_ajax() || tdc_state::is_live_editor_iframe() ) {

			$stored_current_user = wp_get_current_user();
			wp_set_current_user( 0 );
			comment_form( $defaults, $post_id );
			wp_set_current_user( $stored_current_user->ID );

		} else {
			comment_form( $defaults, $post_id );
		}
	}

function tdb_comment( $comment, $args, $depth ) {
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
<li class="comment <?php echo $td_isPingTrackbackClass ?>" id="comment-<?php comment_ID() ?>">
	<article>
		<footer>
			<?php
			echo get_avatar($td_comment_auth_email, 50);
			?>
			<cite><?php comment_author_link() ?></cite>

			<a class="comment-link" href="#comment-<?php comment_ID() ?>">
				<time pubdate="<?php echo $td_article_date_unix ?>">
                    <?php comment_date() ?>
                    <?php echo __td('At', TD_THEME_NAME); ?>
                    <?php comment_time() ?></time>
			</a>

			<?php edit_comment_link( __td('Edit', TD_THEME_NAME)) ?>

		</footer>

		<div class="comment-content">
			<?php if ($comment->comment_approved == '0') { ?>
				<em><?php echo __td('Your comment is awaiting moderation', TD_THEME_NAME); ?></em>
			<?php }
			comment_text(); ?>
		</div>

		<div class="comment-meta" id="comment-<?php comment_ID() ?>">
			<?php comment_reply_link(array_merge( $args, array(
				'depth' => $depth,
				'max_depth' => $args['max_depth'],
				'reply_text' => __td('Reply', TD_THEME_NAME),
				'login_text' =>  __td('Log in to leave a comment', TD_THEME_NAME)
			)))
			?>
		</div>
	</article>
	<?php

}