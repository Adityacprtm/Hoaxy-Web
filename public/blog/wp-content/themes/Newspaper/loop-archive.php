<?php

$post_count = 1;
$column_count = 1;

$span = 'span6';
$column_break = 2;
$is_404 = false;
if( is_404() ) {
    $is_404 = true;
    $column_break = 3;
    $span = 'span4';

    $args = array(
        'post_type'=> 'post',
        'showposts' => 6,
        'ignore_sticky_posts' => true
    );
    query_posts($args);
}

if (have_posts()) {

    while ( have_posts() ) : the_post();
        if( $column_count == 1 ) { ?>
            <div class="td-block-row">
        <?php } ?>

            <div class="td-block-<?php echo esc_attr( $span ) ?>">
                <div <?php post_class('td_module_1 td_module_wrap clearfix') ?> >
                    <div class="td-module-image">
                        <div class="td-module-thumb">
                            <?php
                                if ( current_user_can('edit_published_posts') ) {
                                    edit_post_link('Edit', '', '', '', 'td-admin-edit');
                                }
                            ?>

                            <a href="<?php the_permalink() ?>" rel="bookmark" class="td-image-wrap" title="<?php the_title_attribute() ?>">
                                <?php
                                    $post_thumbnail_url = '';

                                    if( get_the_post_thumbnail_url(null, 'medium_large') != false ) {
                                        $post_thumbnail_url = get_the_post_thumbnail_url(null, 'medium_large');
                                    } else {
                                        $post_thumbnail_url = get_template_directory_uri() . '/images/no-thumb/medium_large.png';
                                    }
                                ?>

                                <img class="entry-thumb" src="<?php echo esc_url($post_thumbnail_url) ?>" alt="<?php the_title() ?>" title="<?php echo esc_attr(strip_tags(the_title())) ?>" />
                            </a>
                        </div>

                        <?php
                            $categories = get_the_category();
                            if( !empty( $categories ) ) {
                                $cat_link = get_category_link($categories[0]->cat_ID);
                                $cat_name = $categories[0]->name; ?>

                                <a class="td-post-category" href="<?php echo esc_url($cat_link) ?>"><?php echo esc_html($cat_name) ?></a>
                        <?php } ?>
                    </div>

                    <h3 class="entry-title td-module-title">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute() ?>">
                            <?php the_title() ?>
                        </a>
                    </h3>

                    <div class="td-module-meta-info">
                        <div class="td-post-author-name">
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))) ?>"><?php the_author() ?></a>
                            <span> - </span>
                        </div>

                        <span class="td-post-date">
                            <time class="entry-date updated td-module-date" datetime="<?php echo esc_html(date(DATE_W3C, get_the_time('U'))) ?>" ><?php the_time(get_option('date_format')) ?></time>
                        </span>

                        <div class="td-module-comments">
                            <a href="<?php comments_link() ?>">
                                <?php comments_number('0','1','%') ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    <?php
        if( $column_count == $column_break || $post_count == $wp_query->post_count ) { ?>
            </div> <?php
            $column_count = 1;
        } else {
            $column_count++;
        }

        $post_count++;

    endwhile;

    if( !$is_404 ) {
        tagdiv_page_generator::get_pagination();
    }

} else { ?>
    <div class="no-results td-pb-padding-side">
        <h2><?php esc_html_e('No posts to display', 'newspaper') ?></h2>
    </div>
<?php }