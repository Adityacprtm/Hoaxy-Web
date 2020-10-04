<?php
/**
 * The single post loop Default template
 **/


if (have_posts()) {
    the_post(); ?>
    <article class="<?php echo join(' ', get_post_class());?>">
        <div class="td-post-header">
            <ul class="td-category">
                <?php
                $categories = get_the_category();
                if( !empty( $categories ) ) {
                    foreach($categories as $category) {
                        $cat_link = get_category_link($category->cat_ID);
                        $cat_name = $category->name; ?>
                        <li class="entry-category"><a href="<?php echo esc_url($cat_link) ?>"><?php echo esc_html($cat_name) ?></a></li>
                    <?php }
                } ?>
            </ul>

            <header class="td-post-title">
                <!-- title -->
                <h3 class="entry-title td-module-title">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute() ?>">
                        <?php the_title() ?>
                    </a>
                </h3>

                <div class="td-module-meta-info">
                    <!-- author -->
                    <div class="td-post-author-name">
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))) ?>"><?php the_author() ?></a>
                        <div class="td-author-line"> - </div>
                    </div>

                    <!-- date -->
                    <span class="td-post-date">
                        <time class="entry-date updated td-module-date" datetime="<?php echo esc_html(date(DATE_W3C, get_the_time('U'))) ?>" ><?php the_time(get_option('date_format')) ?></time>
                    </span>

                    <!-- comments -->
                    <div class="td-post-comments">
                        <a href="<?php comments_link() ?>">
                            <i class="td-icon-comments"></i>
                            <?php comments_number('0','1','%') ?>
                        </a>
                    </div>
                </div>
            </header>

            <div class="td-post-content tagdiv-type">
                <!-- image -->
                <?php
                    if( get_the_post_thumbnail_url(null, 'full') != false ) { ?>
                        <div class="td-post-featured-image">
                            <?php if(get_the_post_thumbnail_caption() != '' ) { ?>
                                <figure>
                                    <img class="entry-thumb" src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'medium_large')) ?>" alt="<?php the_title() ?>" title="<?php echo esc_attr(strip_tags(the_title())) ?>" />
                                    <figcaption class="wp-caption-text"><?php echo esc_html(get_the_post_thumbnail_caption()) ?></figcaption>
                                </figure>
                            <?php } else { ?>
                                <img class="entry-thumb" src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'medium_large')) ?>" alt="<?php the_title() ?>" title="<?php echo esc_attr(strip_tags(the_title())) ?>" />
                            <?php } ?>
                        </div>
                <?php } ?>

                <?php the_content() ?>
            </div>

            <footer>
                <?php
                    // post pagination
                    wp_link_pages(array(
                        'before' => '<div class="page-nav page-nav-post td-pb-padding-side">',
                        'after' => '</div>',
                        'link_before' => '<div>',
                        'link_after' => '</div>',
                        'nextpagelink'     => '<i class="td-icon-menu-right"></i>',
                        'previouspagelink' => '<i class="td-icon-menu-left"></i>',
                    ));

                    // tags
                    $td_post_tags = get_the_tags();
                    if( !empty($td_post_tags) ) { ?>
                        <div class="td-post-source-tags">
                            <ul class="td-tags td-post-small-box clearfix">
                                <li><span><?php esc_html_e('TAGS', 'newspaper') ?></span></li>
                                <?php
                                    foreach ($td_post_tags as $td_post_tag) { ?>
                                        <li><a href="<?php echo esc_url(get_tag_link($td_post_tag->term_id)) ?>"><?php echo esc_html($td_post_tag->name) ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                <?php }

                    // next/prev posts
                    $next_post = get_next_post();
                    $prev_post = get_previous_post();

                    if (!empty($next_post) or !empty($prev_post)) { ?>
                        <div class="td-block-row td-post-next-prev">
                            <?php if (!empty($prev_post)) { ?>
                                <div class="td-block-span6 td-post-prev-post">
                                    <div class="td-post-next-prev-content">
                                        <span><?php esc_html_e('Previous article', 'newspaper') ?></span>
                                        <a href="<?php echo esc_url(get_permalink($prev_post->ID)) ?>"><?php echo esc_html(get_the_title($prev_post->ID)) ?></a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="td-block-span6 td-post-prev-post"></div>
                            <?php } ?>

                            <div class="td-next-prev-separator"></div>

                        <?php if (!empty($next_post)) { ?>
                            <div class="td-block-span6 td-post-next-post">
                                <div class="td-post-next-prev-content">
                                    <span><?php esc_html_e('Next article', 'newspaper') ?></span>
                                    <a href="<?php echo esc_url(get_permalink($next_post->ID)) ?>"><?php echo esc_html(get_the_title($next_post->ID)) ?></a>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                <?php } ?>

                <!-- author box -->
                <?php
                $author_id = get_the_author_meta( 'ID' );
                ?>
                <div class="author-box-wrap">
                    <a href="<?php echo esc_url(get_author_posts_url($author_id)) ?>">
                        <?php echo get_avatar(get_the_author_meta('email', $author_id), '96') ?>
                    </a>

                    <div class="desc">
                        <div class="td-author-name vcard author"><span class="fn">
                            <a href="<?php echo esc_url(get_author_posts_url($author_id)) ?>"><?php echo get_the_author_meta('display_name', $author_id) ?></a>
                        </span></div>

                        <?php  if (get_the_author_meta('user_url', $author_id) != '') { ?>
                            <div class="td-author-url"><a href="<?php echo esc_url(get_the_author_meta('user_url', $author_id)) ?>"><?php echo esc_url(get_the_author_meta('user_url', $author_id)) ?></a></div>
                        <?php } ?>

                        <div class="td-author-description">
                            <?php echo esc_html(get_the_author_meta('description', $author_id)) ?>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </footer>
        </div>
    </article>
<?php } ?>