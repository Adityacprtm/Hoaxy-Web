<div class="td-meta-box-inside">

    <!-- post option general -->
    <div class="td-page-option-panel td-post-option-general td-page-option-panel-active">

        <!-- primary taxonomy term -->
        <div class="td-meta-box-row">
            <span class="td-page-o-custom-label">
                Primary taxonomy:
                <?php
                td_util::tooltip_html('
                        <h3>Primary taxonomy term explained:</h3>
                        <p>The Primary taxonomy term will be used as a category label that appears on the thumbs and the category breadcrumb</p>
                        
                        <p>How the Primary taxonomy term is picked</p>
                        <ul>
                            <li><strong>Manually</strong> - If you select it from this box, this post will inherit all the settings form the <i>Primary term</i>.</li>
                            <li><strong>If the post has only one taxonomy term</strong> - that will be the <i>Primary term</i></li>
                            <li><strong>If the post has multiple categories and no manual Primary category</strong>, the theme will pick the first term from the terms of this post ordered alphabetically</li>
                        </ul>
                    ', 'right')
                ?>
            </span>
            <?php $mb->the_field('td_primary_cat');

            ?>
            <div class="td-select-style-overwrite td-inline-block-wrap">
                <select name="<?php $mb->the_name(); ?>" class="td-panel-dropdown">
                    <option value="">Auto select a term of taxonomy</option>
                    <?php
                    $post_type = get_post_type();
                    $td_taxonomies = get_object_taxonomies($post_type);
                    $td_taxonomy_terms = get_terms($td_taxonomies);
                    //                    print_r($td_taxonomy_terms);
                    //                    die;
                    foreach ($td_taxonomy_terms as $td_term) {

                        $td_term_name = $td_term->name;
                        $td_term_id = $td_term->term_id;

                        ?>
                        <option value="<?php echo $td_term_id?>"<?php $mb->the_select_state($td_term_id); ?>><?php echo $td_term_name?></option>
                        <?php

                    }?>
                </select>
            </div>
            <span class="td-page-o-info">If the posts has multiple taxonomy terms, the one selected here will be used for settings and it appears in the category labels.</span>
        </div>

        <!-- sidebar position -->
        <div class="td-meta-box-row">
            <span class="td-page-o-custom-label">
                Sidebar position:
            </span>
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_post_theme_settings',
                'item_id' => '',
                'option_id' => 'td_sidebar_position',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => '', 'class' => 'td-sidebar-position-default', 'img' => TDC_URL_LEGACY_COMMON . '/wp_booster/wp-admin/images/panel/sidebar/sidebar-default.png'),
                    array('text' => '', 'title' => 'Sidebar Left', 'val' => 'sidebar_left', 'class' => 'td-sidebar-position-left', 'img' => TDC_URL_LEGACY_COMMON . '/wp_booster/wp-admin/images/panel/sidebar/sidebar-left.png'),
                    array('text' => '', 'title' => 'No Sidebar', 'val' => 'no_sidebar', 'class' => 'td-no-sidebar', 'img' => TDC_URL_LEGACY_COMMON . '/wp_booster/wp-admin/images/panel/sidebar/sidebar-full.png'),
                    array('text' => '', 'title' => 'Sidebar Right', 'val' => 'sidebar_right', 'class' => 'td-sidebar-position-right','img' => TDC_URL_LEGACY_COMMON . '/wp_booster/wp-admin/images/panel/sidebar/sidebar-right.png')
                ),
                'selected_value' => $mb->get_the_value('td_sidebar_position')
            ));
            ?>
        </div>


        <!-- custom sidebar -->
        <div class="td-meta-box-row">
            <span class="td-page-o-custom-label">
                Custom sidebar:
            </span>
            <?php
            echo td_panel_generator::sidebar_pulldown(array(
                'ds' => 'td_post_theme_settings',
                'item_id' => '',
                'option_id' => 'td_sidebar',
                'selected_value' => $mb->get_the_value('td_sidebar')
            ));
            ?>
        </div>

    </div> <!-- /post option general -->
    
</div>

