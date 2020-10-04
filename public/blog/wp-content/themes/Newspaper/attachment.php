<?php get_header(); ?>

    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-crumb-container">
                <?php echo tagdiv_page_generator::get_breadcrumbs(array(
                    'template' => 'attachment',
                    'parent_id' => get_the_ID(),
                    'attachment_title' => $post->post_title,
                )); ?>
            </div>

            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        <h1 class="entry-title td-page-title">
                            <span><?php the_title() ?></span>
                        </h1>

                        <?php
                        if (have_posts()) {
                            while ( have_posts() ) : the_post();
                                if ( wp_attachment_is_image( get_the_ID() ) ) {
                                    $td_att_image = wp_get_attachment_image_src( get_the_ID(), 'full');

                                    if (!empty($td_att_image[0])) {
                                        $td_att_url = $td_att_image[0];
                                    }

                                    if (empty($td_att_image[0])) {
                                        $td_att_image[0] = ''; //init the variable to not have problems
                                    }

                                    $td_att_alt = get_post_meta( get_the_ID(), '_wp_attachment_image_alt', true );

                                    ?>
                                    <a href="<?php echo wp_get_attachment_url(get_the_ID()); ?>" title="<?php the_title(); ?>" rel="attachment"><img class="td-attachment-page-image" src="<?php echo esc_url($td_att_image[0]);?>" alt="<?php echo esc_attr($td_att_alt); ?>" /></a>

                                    <div class="td-attachment-page-content">
                                        <?php the_content(); ?>
                                    </div>
                                <?php }
                            endwhile;
                        } else { ?>
                            <div class="no-results td-pb-padding-side">
                                <h2><?php esc_html_e('No posts to display', 'newspaper') ?></h2>
                            </div>
                        <?php } ?>

                        <div class="td-attachment-prev"><?php previous_image_link(); ?></div>
                        <div class="td-attachment-next"><?php next_image_link(); ?></div>
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