<?php get_header();
    $part_cur_auth_obj = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>

    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-crumb-container">
                <?php echo tagdiv_page_generator::get_breadcrumbs(array(
                    'template' => 'author',
                    'author' => $part_cur_auth_obj,
                )); ?>
            </div>

            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        <div class="td-page-header">
                            <h1 class="entry-title td-page-title">
                                <span><?php the_author() ?></span>
                            </h1>
                        </div>

                        <div class="author-box-wrap td-author-page">
                            <?php echo get_avatar($part_cur_auth_obj->user_email, '96'); ?>

                            <div class="desc">
                                <div class="td-author-counters">
                                    <span class="td-author-post-count">
                                        <?php echo count_user_posts($part_cur_auth_obj->ID). ' '  . esc_html__('POSTS', 'newspaper');?>
                                    </span>

                                    <span class="td-author-comments-count">
                                        <?php
                                            $comment_count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) AS total FROM $wpdb->comments WHERE comment_approved = 1 AND user_id = %d", $part_cur_auth_obj->ID));

                                            echo  esc_html( $comment_count ) . ' '  . esc_html__('COMMENTS', 'newspaper');
                                        ?>
                                    </span>
                                </div>

                                <?php
                                    if (!empty($part_cur_auth_obj->user_url)) {
                                        echo '<div class="td-author-url"><a href="' . esc_url($part_cur_auth_obj->user_url) . '">' . esc_url($part_cur_auth_obj->user_url) . '</a></div>';
                                    }

                                    echo get_the_author_meta('description', $part_cur_auth_obj->ID);
                                ?>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <?php
                            get_template_part('loop-archive');
                        ?>
                    </div>
                </div>

                <div class="td-pb-span4 td-main-sidebar">
                    <div class="td-ss-main-sidebar">
                        <?php dynamic_sidebar( 'td-default' ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>