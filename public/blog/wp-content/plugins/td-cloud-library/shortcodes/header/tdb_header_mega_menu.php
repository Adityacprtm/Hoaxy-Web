<?php
/**
 * Class tdb_header_mega_menu
 */

class tdb_header_mega_menu extends td_block {
    private static $shortcode_atts;

    static function cssMedia( $res_ctx ) {

        // padding
        $mm_padd = $res_ctx->get_shortcode_att('mm_padd');
        $res_ctx->load_settings_raw( 'mm_padd', $mm_padd );
        if( $mm_padd != '' && is_numeric($mm_padd) ) {
            $res_ctx->load_settings_raw( 'mm_padd', $mm_padd . 'px' );
        }


        /*-- SUBCATEGORIES LIST -- */
        // subcategories list width
        $mm_sub_width = $res_ctx->get_shortcode_att('mm_sub_width');
        $res_ctx->load_settings_raw( 'mm_sub_width', $mm_sub_width );
        if( $mm_sub_width != '' && is_numeric($mm_sub_width) ) {
            $res_ctx->load_settings_raw( 'mm_sub_width', $mm_sub_width . 'px' );
        }
        // subcategories list padding
        $mm_sub_padd = $res_ctx->get_shortcode_att('mm_sub_padd');
        $res_ctx->load_settings_raw( 'mm_sub_padd', $mm_sub_padd );
        if( $mm_sub_padd != '' && is_numeric($mm_sub_padd) ) {
            $res_ctx->load_settings_raw( 'mm_sub_padd', $mm_sub_padd . 'px' );
        }
        // subcategories list border size
        $mm_sub_border = $res_ctx->get_shortcode_att('mm_sub_border');
        $res_ctx->load_settings_raw( 'mm_sub_border', $mm_sub_border );
        if( $mm_sub_border != '' ) {
            if( is_numeric($mm_sub_border) ) {
                $res_ctx->load_settings_raw( 'mm_sub_border', $mm_sub_border . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'mm_sub_border', '0 1px 0 0' );
        }

        // display sucategories inline
        $mm_sub_inline = $res_ctx->get_shortcode_att('mm_sub_inline');
        $res_ctx->load_settings_raw( 'mm_sub_inline', $mm_sub_inline );
        // subcategories elements space
        $mm_elem_space = $res_ctx->get_shortcode_att('mm_elem_space');
        if( $mm_elem_space != '' && is_numeric($mm_elem_space) ) {
            if( $mm_sub_inline == 'yes' ) {
                $res_ctx->load_settings_raw( 'mm_elem_space_right', $mm_elem_space . 'px' );
            } else {
                $res_ctx->load_settings_raw( 'mm_elem_space_bot', $mm_elem_space . 'px' );
            }
        }
        // subcategories elements padding
        $mm_elem_padd = $res_ctx->get_shortcode_att('mm_elem_padd');
        $res_ctx->load_settings_raw( 'mm_elem_padd', $mm_elem_padd );
        if( $mm_elem_padd != '' && is_numeric($mm_elem_padd) ) {
            $res_ctx->load_settings_raw( 'mm_elem_padd', $mm_elem_padd . 'px' );
        }
        // subcategories elements border size
        $mm_elem_border = $res_ctx->get_shortcode_att('mm_elem_border');
        $res_ctx->load_settings_raw( 'mm_elem_border', $mm_elem_border );
        if( $mm_elem_border != '' && is_numeric($mm_elem_border) ) {
            $res_ctx->load_settings_raw( 'mm_elem_border', $mm_elem_border . 'px' );
        }
        // subcategories elements active border size
        $mm_elem_border_a = $res_ctx->get_shortcode_att('mm_elem_border_a');
        $res_ctx->load_settings_raw( 'mm_elem_border_a', $mm_elem_border_a );
        if( $mm_elem_border_a != '' && is_numeric($mm_elem_border_a) ) {
            $res_ctx->load_settings_raw( 'mm_elem_border_a', $mm_elem_border_a . 'px' );
        }
        // subcategories elements border size
        $mm_elem_border_rad = $res_ctx->get_shortcode_att('mm_elem_border_rad');
        $res_ctx->load_settings_raw( 'mm_elem_border_rad', $mm_elem_border_rad );
        if( $mm_elem_border_rad != '' && is_numeric($mm_elem_border_rad) ) {
            $res_ctx->load_settings_raw( 'mm_elem_border_rad', $mm_elem_border_rad . 'px' );
        }

        // subcategories elements horiz align
        $mm_elem_align_horiz = $res_ctx->get_shortcode_att('mm_elem_align_horiz');
        if ( $mm_elem_align_horiz == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'mm_elem_align_horiz_center', 1 );
        } else if ( $mm_elem_align_horiz == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'mm_elem_align_horiz_right', 1 );
        }


        /*-- MODULE -- */
        // modules padding elements
        $padding = 'padding';
        if ( $res_ctx->is( 'all' ) ) {
            $padding = 'padding_desktop';
        }

        // modules per row regular mega menu
        $modules_on_row_regular = $res_ctx->get_shortcode_att('modules_on_row_regular');
        $res_ctx->load_settings_raw( 'modules_on_row_regular', $modules_on_row_regular );
        if ( $modules_on_row_regular == '' ) {
            $modules_on_row_regular = '100%';
        }
        // modules per row mega menu with subcats
        $modules_on_row_cats = $res_ctx->get_shortcode_att('modules_on_row_cats');
        $res_ctx->load_settings_raw( 'modules_on_row_cats', $modules_on_row_cats );
        if ( $modules_on_row_cats == '' ) {
            $modules_on_row_cats = '100%';
        }

        $modules_on_row = $modules_on_row_regular;
        $modules_limit = $res_ctx->get_shortcode_att('mm_posts_limit');
        if( strpos($res_ctx->get_shortcode_att('block_classes'), 'td-no-subcats') === false ) {
            $modules_on_row = $modules_on_row_cats;
            $modules_limit = $res_ctx->get_shortcode_att('mm_subcats_posts_limit');
        }
        $modules_number = str_replace('%','',$modules_on_row);
        $modulo_posts = $modules_limit % intval((100/intval($modules_number)));

        switch ($modulo_posts) {
            case '0':
                $res_ctx->load_settings_raw( $padding,  '-n+' . intval(100/intval($modules_number)));
                break;
            case '1':
                $res_ctx->load_settings_raw( $padding,  '1' );
                break;
            case '2':
                $res_ctx->load_settings_raw( $padding,  '-n+2' );
                break;
            case '3':
                $res_ctx->load_settings_raw( $padding,  '-n+3' );
                break;
            case '4':
                $res_ctx->load_settings_raw( $padding,  '-n+4' );
                break;
            case '5':
                $res_ctx->load_settings_raw( $padding,  '-n+5' );
                break;
            case '6':
                $res_ctx->load_settings_raw( $padding,  '-n+6' );
                break;
            case '7':
                $res_ctx->load_settings_raw( $padding,  '-n+7' );
                break;
            case '8':
                $res_ctx->load_settings_raw( $padding,  '-n+8' );
                break;
        }

        // modules gap
        $modules_gap = $res_ctx->get_shortcode_att('modules_gap');
        $res_ctx->load_settings_raw( 'modules_gap', $modules_gap );
        if ( $modules_gap == '' ) {
            $res_ctx->load_settings_raw( 'modules_gap', '11px');
        } else if ( is_numeric( $modules_gap ) ) {
            $res_ctx->load_settings_raw( 'modules_gap', $modules_gap / 2 .'px' );
        }
        // modules padding
        $m_padding = $res_ctx->get_shortcode_att('m_padding');
        $res_ctx->load_settings_raw( 'm_padding', $m_padding );
        if ( is_numeric( $m_padding ) ) {
            $res_ctx->load_settings_raw( 'm_padding', $m_padding . 'px' );
        }
        // modules space
        $modules_space = $res_ctx->get_shortcode_att('all_modules_space');
        $res_ctx->load_settings_raw( 'all_modules_space', $modules_space );
        if ( $modules_space == '' ) {
            $res_ctx->load_settings_raw( 'all_modules_space', '18px');
        } else if ( is_numeric( $modules_space ) ) {
            $res_ctx->load_settings_raw( 'all_modules_space', $modules_space / 2 .'px' );
        }

        // modules border size
        $modules_border_size = $res_ctx->get_shortcode_att('modules_border_size');
        $res_ctx->load_settings_raw( 'modules_border_size', $modules_border_size );
        if( $modules_border_size != '' && is_numeric( $modules_border_size ) ) {
            $res_ctx->load_settings_raw( 'modules_border_size', $modules_border_size . 'px' );
        }
        // modules border style
        $res_ctx->load_settings_raw( 'modules_border_style', $res_ctx->get_shortcode_att('modules_border_style') );
        // modules border color
        $res_ctx->load_settings_raw( 'modules_border_color', $res_ctx->get_shortcode_att('modules_border_color') );

        // modules divider
        $res_ctx->load_settings_raw( 'modules_divider', $res_ctx->get_shortcode_att('modules_divider') );
        // modules divider color
        $res_ctx->load_settings_raw( 'modules_divider_color', $res_ctx->get_shortcode_att('modules_divider_color') );

        //image alignment
        $res_ctx->load_settings_raw( 'image_alignment', $res_ctx->get_shortcode_att('image_alignment') . '%' );
        // image_height
        $image_height = $res_ctx->get_shortcode_att('image_height');
        if ( is_numeric( $image_height ) ) {
            $res_ctx->load_settings_raw( 'image_height', $image_height . '%' );
        } else {
            $res_ctx->load_settings_raw( 'image_height', $image_height );
        }
        // image_width
        $image_width = $res_ctx->get_shortcode_att('image_width');
        if ( is_numeric( $image_width ) ) {
            $res_ctx->load_settings_raw( 'image_width', $image_width . '%' );
        } else {
            $res_ctx->load_settings_raw( 'image_width', $image_width );
        }
        // image_floated
        $image_floated = $res_ctx->get_shortcode_att('image_floated');
        if ( $image_floated == '' ||  $image_floated == 'no_float' ) {
            $image_floated = 'no_float';
            $res_ctx->load_settings_raw( 'no_float',  1 );
        }
        if ( $image_floated == 'float_left' ) {
            $res_ctx->load_settings_raw( 'float_left',  1 );
        }
        if ( $image_floated == 'float_right' ) {
            $res_ctx->load_settings_raw( 'float_right',  1 );
        }
        if ( $image_floated == 'hidden' ) {
            if ( $res_ctx->is( 'all' ) && !$res_ctx->is_responsive_att( 'image_floated' ) ) {
                $res_ctx->load_settings_raw( 'hide_desktop',  1 );
            } else {
                $res_ctx->load_settings_raw( 'hide',  1 );
            }
        }
        // image radius
        $image_radius = $res_ctx->get_shortcode_att('image_radius');
        $res_ctx->load_settings_raw( 'image_radius', $image_radius );
        if ( is_numeric( $image_radius ) ) {
            $res_ctx->load_settings_raw( 'image_radius', $image_radius . 'px' );
        }

        // video icon size
        $video_icon = $res_ctx->get_shortcode_att('video_icon');
        if ( $video_icon != '' && is_numeric( $video_icon ) ) {
            $res_ctx->load_settings_raw( 'video_icon', $video_icon . 'px' );
        }

        // show video duration
        $res_ctx->load_settings_raw('show_vid_t', $res_ctx->get_shortcode_att('show_vid_t'));
        // video duration margin
        $vid_t_margin = $res_ctx->get_shortcode_att('vid_t_margin');
        $res_ctx->load_settings_raw( 'vid_t_margin', $vid_t_margin );
        if( $vid_t_margin != '' && is_numeric( $vid_t_margin ) ) {
            $res_ctx->load_settings_raw( 'vid_t_margin', $vid_t_margin . 'px' );
        }
        // video duration padding
        $vid_t_padding = $res_ctx->get_shortcode_att('vid_t_padding');
        $res_ctx->load_settings_raw( 'vid_t_padding', $vid_t_padding );
        if( $vid_t_padding != '' && is_numeric( $vid_t_padding ) ) {
            $res_ctx->load_settings_raw( 'vid_t_padding', $vid_t_padding . 'px' );
        }

        // meta info align
        $meta_info_align = $res_ctx->get_shortcode_att('meta_info_align');
        $res_ctx->load_settings_raw( 'meta_info_align', $meta_info_align );
        // meta info align to fix top when no float is selected
        if ( $meta_info_align == 'initial' && $image_floated == 'no_float' ) {
            $res_ctx->load_settings_raw( 'meta_info_align_top',  1 );
        }
        // meta info align top/bottom - align category
        if ( $meta_info_align == 'initial' ) {
            $res_ctx->load_settings_raw( 'align_category_top',  1 );
        }
        if ( $meta_info_align == 'flex-end' && $image_floated == 'no_float' ) {
            $res_ctx->load_settings_raw( 'align_category_bottom',  1 );
        }
        // meta info horizontal align
        $content_align = $res_ctx->get_shortcode_att('meta_info_horiz');
        if ( $content_align == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'meta_horiz_align_center', 1 );
        } else if ( $content_align == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'meta_horiz_align_right', 1 );
        }
        // meta info width
        $meta_info_width = $res_ctx->get_shortcode_att('meta_width');
        $res_ctx->load_settings_raw( 'meta_width', $meta_info_width );
        if( $meta_info_width != '' && is_numeric( $meta_info_width ) ) {
            $res_ctx->load_settings_raw( 'meta_width', $meta_info_width . 'px' );
        }
        // meta info margin
        $meta_margin = $res_ctx->get_shortcode_att('meta_margin');
        $res_ctx->load_settings_raw( 'meta_margin', $meta_margin );
        if ( is_numeric( $meta_margin ) ) {
            $res_ctx->load_settings_raw( 'meta_margin', $meta_margin . 'px' );
        }
        // meta info padding
        $meta_padding = $res_ctx->get_shortcode_att('meta_padding');
        $res_ctx->load_settings_raw( 'meta_padding', $meta_padding );
        if ( is_numeric( $meta_padding ) ) {
            $res_ctx->load_settings_raw( 'meta_padding', $meta_padding . 'px' );
        }

        // article title space
        $art_title = $res_ctx->get_shortcode_att('art_title');
        $res_ctx->load_settings_raw( 'art_title', $art_title );
        if ( is_numeric( $art_title ) ) {
            $res_ctx->load_settings_raw( 'art_title', $art_title . 'px' );
        }

        // article excerpt space
        $art_excerpt = $res_ctx->get_shortcode_att('art_excerpt');
        $res_ctx->load_settings_raw( 'art_excerpt', $art_excerpt );
        if ( is_numeric( $art_excerpt ) ) {
            $res_ctx->load_settings_raw( 'art_excerpt', $art_excerpt . 'px' );
        }
        // article excerpt columns
        $excerpt_col = $res_ctx->get_shortcode_att('excerpt_col');
        $res_ctx->load_settings_raw( 'excerpt_col', $excerpt_col );
        if ( $excerpt_col == '' ) {
            $res_ctx->load_settings_raw( 'excerpt_col', '1' );
        }
        // article excerpt space
        $excerpt_gap = $res_ctx->get_shortcode_att('excerpt_gap');
        $res_ctx->load_settings_raw( 'excerpt_gap', $excerpt_gap );
        if( $excerpt_gap != '' ) {
            if ( is_numeric( $excerpt_gap ) ) {
                $res_ctx->load_settings_raw( 'excerpt_gap', $excerpt_gap . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'excerpt_gap', '48px' );
        }
        // article audio player space
        $art_audio = $res_ctx->get_shortcode_att('art_audio');
        $res_ctx->load_settings_raw( 'art_audio', $art_audio );
        if ( is_numeric( $art_audio ) ) {
            $res_ctx->load_settings_raw( 'art_audio', $art_audio . 'px' );
        }
        // article audio size
        $art_audio_size = $res_ctx->get_shortcode_att('art_audio_size');
        $res_ctx->load_settings_raw( 'art_audio_size', 10 + $art_audio_size/0.5 . 'px' );

        // meta_info_border_size
        $meta_info_border_size = $res_ctx->get_shortcode_att('meta_info_border_size');
        $res_ctx->load_settings_raw( 'meta_info_border_size', $meta_info_border_size );
        if ( is_numeric( $meta_info_border_size ) ) {
            $res_ctx->load_settings_raw( 'meta_info_border_size', $meta_info_border_size . 'px' );
        }
        // meta info border style
        $res_ctx->load_settings_raw( 'meta_info_border_style', $res_ctx->get_shortcode_att('meta_info_border_style') );
        // meta info border color
        $res_ctx->load_settings_raw( 'meta_info_border_color', $res_ctx->get_shortcode_att('meta_info_border_color') );

        // category tag space
        $modules_category_margin = $res_ctx->get_shortcode_att('modules_category_margin');
        $res_ctx->load_settings_raw( 'modules_category_margin', $modules_category_margin );
        if( $modules_category_margin != '' && is_numeric( $modules_category_margin ) ) {
            $res_ctx->load_settings_raw( 'modules_category_margin', $modules_category_margin . 'px' );
        }
        // category tag padding
        $modules_category_padding = $res_ctx->get_shortcode_att('modules_category_padding');
        $res_ctx->load_settings_raw( 'modules_category_padding', $modules_category_padding );
        if( $modules_category_padding != '' && is_numeric( $modules_category_padding ) ) {
            $res_ctx->load_settings_raw( 'modules_category_padding', $modules_category_padding . 'px' );
        }
        //category tag radius
        $modules_category_radius = $res_ctx->get_shortcode_att('modules_category_radius');
        if ( $modules_category_radius != 0 || !empty($modules_category_radius) ) {
            $res_ctx->load_settings_raw( 'modules_category_radius', $modules_category_radius . 'px' );
        }

        // show meta info details
        $res_ctx->load_settings_raw( 'show_cat', $res_ctx->get_shortcode_att('show_cat') );
        $res_ctx->load_settings_raw( 'show_excerpt', $res_ctx->get_shortcode_att('show_excerpt') );
        $show_audio = $res_ctx->get_shortcode_att('show_audio');
        if( $show_audio == '' || $show_audio == 'block' ) {
            $res_ctx->load_settings_raw( 'show_audio', 1 );
        } else if( $show_audio == 'none' ) {
            $res_ctx->load_settings_raw( 'hide_audio', 1 );
        }

        // show meta info details
        $show_author = $res_ctx->get_shortcode_att('show_author');
        $show_date = $res_ctx->get_shortcode_att('show_date');
        $show_review = $res_ctx->get_shortcode_att('show_review');
        $review_size = $res_ctx->get_shortcode_att('review_size');
        $res_ctx->load_settings_raw( 'review_size', 10 + $review_size/0.5 . 'px' );
        $show_com = $res_ctx->get_shortcode_att('show_com');
        if( $show_author == 'none' && $show_date == 'none' && $show_com == 'none' && $show_review == 'none' ) {
            $res_ctx->load_settings_raw( 'hide_author_date', 1 );
        }
        $res_ctx->load_settings_raw( 'show_author', $show_author );
        $res_ctx->load_settings_raw( 'show_date', $show_date );
        $res_ctx->load_settings_raw( 'show_review', $show_review );
        $res_ctx->load_settings_raw( 'show_com', $show_com );

        // author photo size
        $author_photo_size = $res_ctx->get_shortcode_att('author_photo_size');
        $res_ctx->load_settings_raw( 'author_photo_size', '20px' );
        if( $author_photo_size != '' && is_numeric( $author_photo_size ) ) {
            $res_ctx->load_settings_raw( 'author_photo_size', $author_photo_size . 'px' );
        }
        // author photo space
        $author_photo_space = $res_ctx->get_shortcode_att('author_photo_space');
        $res_ctx->load_settings_raw( 'author_photo_space', '6px' );
        if( $author_photo_space != '' && is_numeric( $author_photo_space ) ) {
            $res_ctx->load_settings_raw( 'author_photo_space', $author_photo_space . 'px' );
        }
        // author photo radius
        $author_photo_radius = $res_ctx->get_shortcode_att('author_photo_radius');
        $res_ctx->load_settings_raw( 'author_photo_radius', $author_photo_radius );
        if( $author_photo_radius != '' ) {
            if( is_numeric( $author_photo_radius ) ) {
                $res_ctx->load_settings_raw( 'author_photo_radius', $author_photo_radius . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'author_photo_radius', '50%' );
        }

        // pagination space
        $pag_space = $res_ctx->get_shortcode_att('pag_space');
        $res_ctx->load_settings_raw( 'pag_space', $pag_space );
        if( $pag_space != '' && is_numeric( $pag_space ) ) {
            $res_ctx->load_settings_raw( 'pag_space', $pag_space . 'px' );
        }
        // pagination padding
        $pag_padding = $res_ctx->get_shortcode_att('pag_padding');
        $res_ctx->load_settings_raw( 'pag_padding', $pag_padding );
        if( $pag_padding != '' && is_numeric( $pag_padding ) ) {
            $res_ctx->load_settings_raw( 'pag_padding', $pag_padding . 'px' );
        }
        // pagination border width
        $pag_border_width = $res_ctx->get_shortcode_att('pag_border_width');
        $res_ctx->load_settings_raw( 'pag_border_width', $pag_border_width );
        if( $pag_border_width != '' && is_numeric( $pag_border_width ) ) {
            $res_ctx->load_settings_raw( 'pag_border_width', $pag_border_width . 'px' );
        }
        // pagination border radius
        $pag_border_radius = $res_ctx->get_shortcode_att('pag_border_radius');
        $res_ctx->load_settings_raw( 'pag_border_radius', $pag_border_radius );
        if( $pag_border_radius != '' && is_numeric( $pag_border_radius ) ) {
            $res_ctx->load_settings_raw( 'pag_border_radius', $pag_border_radius . 'px' );
        }
        // next/prev icons size
        $pag_icons_size = $res_ctx->get_shortcode_att('pag_icons_size');
        $res_ctx->load_settings_raw( 'pag_icons_size', $pag_icons_size );
        if( $pag_icons_size != '' && is_numeric( $pag_icons_size ) ) {
            $res_ctx->load_settings_raw( 'pag_icons_size', $pag_icons_size . 'px' );
        }

        // underline height
        $underline_height = $res_ctx->get_shortcode_att('all_underline_height');
        $res_ctx->load_settings_raw( 'all_underline_height', $underline_height );
        if( $underline_height != '' && is_numeric( $underline_height ) ) {
            $res_ctx->load_settings_raw( 'all_underline_height', $underline_height . 'px' );
        } else {
            $res_ctx->load_settings_raw( 'all_underline_height', '0' );
        }
        // underline color
        $underline_color = $res_ctx->get_shortcode_att('all_underline_color');
        if ( $underline_height != 0 ) {
            if( $underline_color == '' ) {
                $res_ctx->load_settings_raw('all_underline_color', '#000');
            } else {
                $res_ctx->load_settings_raw('all_underline_color', $res_ctx->get_shortcode_att('all_underline_color'));
            }
        }


        /*-- COLORS -- */
        $res_ctx->load_settings_raw( 'mm_subcats_bg', $res_ctx->get_shortcode_att('mm_subcats_bg') );
        $res_ctx->load_settings_raw( 'mm_subcats_border_color', $res_ctx->get_shortcode_att('mm_subcats_border_color') );
        $res_ctx->load_settings_raw( 'mm_elem_color', $res_ctx->get_shortcode_att('mm_elem_color') );
        $res_ctx->load_settings_raw( 'mm_elem_color_a', $res_ctx->get_shortcode_att('mm_elem_color_a') );
        $res_ctx->load_color_settings( 'mm_elem_bg', 'mm_elem_bg', 'mm_elem_bg_gradient', '', '' );
        $res_ctx->load_color_settings( 'mm_elem_bg_a', 'mm_elem_bg_a', 'mm_elem_bg_a_gradient', '', '' );
        $res_ctx->load_settings_raw( 'mm_elem_border_color', $res_ctx->get_shortcode_att('mm_elem_border_color') );
        $res_ctx->load_settings_raw( 'mm_elem_border_color_a', $res_ctx->get_shortcode_att('mm_elem_border_color_a') );
        $res_ctx->load_shadow_settings( 0, 0, 0, 0, 'rgba(0, 0, 0, 0.08)', 'mm_elem_shadow' );
        $res_ctx->load_color_settings( 'color_overlay', 'overlay', 'overlay_gradient', '', '' );
        $res_ctx->load_settings_raw( 'm_bg', $res_ctx->get_shortcode_att('m_bg') );
        $res_ctx->load_settings_raw( 'meta_bg', $res_ctx->get_shortcode_att('meta_bg') );
        $res_ctx->load_settings_raw( 'cat_bg', $res_ctx->get_shortcode_att('cat_bg') );
        $res_ctx->load_settings_raw( 'cat_txt', $res_ctx->get_shortcode_att('cat_txt') );
        $res_ctx->load_settings_raw( 'cat_bg_hover', $res_ctx->get_shortcode_att('cat_bg_hover') );
        $res_ctx->load_settings_raw( 'cat_txt_hover', $res_ctx->get_shortcode_att('cat_txt_hover') );
        $res_ctx->load_settings_raw( 'title_txt', $res_ctx->get_shortcode_att('title_txt') );
        $res_ctx->load_settings_raw( 'title_txt_hover', $res_ctx->get_shortcode_att('title_txt_hover') );
        $res_ctx->load_settings_raw( 'author_txt', $res_ctx->get_shortcode_att('author_txt') );
        $res_ctx->load_settings_raw( 'author_txt_hover', $res_ctx->get_shortcode_att('author_txt_hover') );
        $res_ctx->load_settings_raw( 'date_txt', $res_ctx->get_shortcode_att('date_txt') );
        $res_ctx->load_settings_raw( 'ex_txt', $res_ctx->get_shortcode_att('ex_txt') );
        $res_ctx->load_settings_raw( 'com_bg', $res_ctx->get_shortcode_att('com_bg') );
        $res_ctx->load_settings_raw( 'com_txt', $res_ctx->get_shortcode_att('com_txt') );
        $res_ctx->load_settings_raw( 'rev_txt', $res_ctx->get_shortcode_att('rev_txt') );
        $res_ctx->load_settings_raw( 'audio_btn_color', $res_ctx->get_shortcode_att( 'audio_btn_color' ) );
        $res_ctx->load_settings_raw( 'audio_time_color', $res_ctx->get_shortcode_att( 'audio_time_color' ) );
        $res_ctx->load_settings_raw( 'audio_bar_color', $res_ctx->get_shortcode_att( 'audio_bar_color' ) );
        $res_ctx->load_settings_raw( 'audio_bar_curr_color', $res_ctx->get_shortcode_att( 'audio_bar_curr_color' ) );
        $res_ctx->load_settings_raw( 'pag_text', $res_ctx->get_shortcode_att('pag_text') );
        $res_ctx->load_settings_raw( 'pag_bg', $res_ctx->get_shortcode_att('pag_bg') );
        $res_ctx->load_settings_raw( 'pag_border', $res_ctx->get_shortcode_att('pag_border') );
        $res_ctx->load_settings_raw( 'pag_h_text', $res_ctx->get_shortcode_att('pag_h_text') );
        $res_ctx->load_settings_raw( 'pag_h_bg', $res_ctx->get_shortcode_att('pag_h_bg') );
        $res_ctx->load_settings_raw( 'pag_h_border', $res_ctx->get_shortcode_att('pag_h_border') );

        // module_border_width + color
        $modules_cat_border = $res_ctx->get_shortcode_att('modules_cat_border');
        $res_ctx->load_settings_raw( 'modules_cat_border', $modules_cat_border );
        if ( is_numeric( $modules_cat_border ) ) {
            $res_ctx->load_settings_raw( 'modules_cat_border', $modules_cat_border . 'px' );
        }
        $res_ctx->load_settings_raw( 'cat_border', $res_ctx->get_shortcode_att('cat_border') );
        $res_ctx->load_settings_raw( 'cat_border_hover', $res_ctx->get_shortcode_att('cat_border_hover') );

        // shadow
        $res_ctx->load_shadow_settings( 0, 0, 0, 0, 'rgba(0, 0, 0, 0.08)', 'shadow' );
        $res_ctx->load_shadow_settings( 0, 0, 0, 0, 'rgba(0, 0, 0, 0.08)', 'shadow_m' );

        // video duration
        $res_ctx->load_settings_raw( 'vid_t_color', $res_ctx->get_shortcode_att('vid_t_color') );
        $res_ctx->load_settings_raw( 'vid_t_bg_color', $res_ctx->get_shortcode_att('vid_t_bg_color') );


        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_mm_sub' );
        $res_ctx->load_font_settings( 'f_title' );
        $res_ctx->load_font_settings( 'f_cat' );
        $res_ctx->load_font_settings( 'f_meta' );
        $res_ctx->load_font_settings( 'f_ex' );

        $res_ctx->load_font_settings( 'f_vid_time' );

        // mix blend
        $mix_type = $res_ctx->get_shortcode_att('mix_type');
        if ( $mix_type != '' ) {
            $res_ctx->load_settings_raw('mix_type', $res_ctx->get_shortcode_att('mix_type'));
        }
        $res_ctx->load_color_settings( 'mix_color', 'color', 'mix_gradient', '', '' );

        $mix_type_h = $res_ctx->get_shortcode_att('mix_type_h');
        if ( $mix_type_h != '' ) {
            $res_ctx->load_settings_raw('mix_type_h', $res_ctx->get_shortcode_att('mix_type_h'));
        } else {
            $res_ctx->load_settings_raw('mix_type_off', 1);
        }
        $res_ctx->load_color_settings( 'mix_color_h', 'color_h', 'mix_gradient_h', '', '' );

        // effects
        $res_ctx->load_settings_raw('fe_brightness', 'brightness(1)');
        $res_ctx->load_settings_raw('fe_contrast', 'contrast(1)');
        $res_ctx->load_settings_raw('fe_saturate', 'saturate(1)');

        $fe_brightness = $res_ctx->get_shortcode_att('fe_brightness');
        if ($fe_brightness != '1') {
            $res_ctx->load_settings_raw('fe_brightness', 'brightness(' . $fe_brightness . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        $fe_contrast = $res_ctx->get_shortcode_att('fe_contrast');
        if ($fe_contrast != '1') {
            $res_ctx->load_settings_raw('fe_contrast', 'contrast(' . $fe_contrast . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        $fe_saturate = $res_ctx->get_shortcode_att('fe_saturate');
        if ($fe_saturate != '1') {
            $res_ctx->load_settings_raw('fe_saturate', 'saturate(' . $fe_saturate . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }

        // effects hover
        $res_ctx->load_settings_raw('fe_brightness_h', 'brightness(1)');
        $res_ctx->load_settings_raw('fe_contrast_h', 'contrast(1)');
        $res_ctx->load_settings_raw('fe_saturate_h', 'saturate(1)');

        $fe_brightness_h = $res_ctx->get_shortcode_att('fe_brightness_h');
        $fe_contrast_h = $res_ctx->get_shortcode_att('fe_contrast_h');
        $fe_saturate_h = $res_ctx->get_shortcode_att('fe_saturate_h');

        if ($fe_brightness_h != '1') {
            $res_ctx->load_settings_raw('fe_brightness_h', 'brightness(' . $fe_brightness_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        if ($fe_contrast_h != '1') {
            $res_ctx->load_settings_raw('fe_contrast_h', 'contrast(' . $fe_contrast_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        if ($fe_saturate_h != '1') {
            $res_ctx->load_settings_raw('fe_saturate_h', 'saturate(' . $fe_saturate_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        // make hover to work
        if ($fe_brightness_h != '1' || $fe_contrast_h != '1' || $fe_saturate_h != '1') {
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        if ($fe_brightness != '1' || $fe_contrast != '1' || $fe_saturate != '1') {
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
    }

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
				
				.$unique_block_class:after {
				    content: '';
				    display: table;
				    clear: both;    
                }
               
               
                /* @mm_padd */
				.$unique_block_class .tdb-mega-modules-wrap {
					padding: @mm_padd;
				}               
                
            
                /* @mm_sub_width */
				.$unique_block_class .block-mega-child-cats {
					width: @mm_sub_width;
				}
                /* @mm_sub_padd */
				.$unique_block_class .block-mega-child-cats {
					padding: @mm_sub_padd;
				}
                /* @mm_sub_border */
				.$unique_block_class .block-mega-child-cats:after {
				    border-width: @mm_sub_border;
				}
				
				/* @mm_sub_inline */
				.$unique_block_class {
				    flex-direction: column-reverse;
				}
				.$unique_block_class .block-mega-child-cats {
				    width: 100%;
				}
				.$unique_block_class .block-mega-child-cats:before {
				    left: 50%;
				    transform: translateX(-50%);
				    right: auto;
				}
				.$unique_block_class .block-mega-child-cats a {
				    display: inline-block;
				}
                /* @mm_elem_space_right */
				.$unique_block_class .block-mega-child-cats a {
					margin-right: @mm_elem_space_right;
					margin-bottom: @mm_elem_space_right;
				}
				.$unique_block_class .block-mega-child-cats a:last-child {
				    margin-right: 0;
				}
                /* @mm_elem_space_bot */
				.$unique_block_class .block-mega-child-cats a {
					margin-bottom: @mm_elem_space_bot;
				}
				.$unique_block_class .block-mega-child-cats a:last-child {
				    margin-bottom: 0;
				}
                /* @mm_elem_padd */
				.$unique_block_class .block-mega-child-cats a {
					padding: @mm_elem_padd;
				}
                /* @mm_elem_border */
				.$unique_block_class .block-mega-child-cats a {
					border-width: @mm_elem_border;
				}
                /* @mm_elem_border_a */
				.$unique_block_class .block-mega-child-cats .cur-sub-cat {
					border-width: @mm_elem_border_a;
				}
                /* @mm_elem_border_rad */
				.$unique_block_class .block-mega-child-cats a {
					border-radius: @mm_elem_border_rad;
				}
				
                /* @mm_elem_align_horiz_center */
				.$unique_block_class .block-mega-child-cats {
					text-align: center;
				}
                /* @mm_elem_align_horiz_right */
				.$unique_block_class .block-mega-child-cats {
					text-align: right;
				}
				
				
				/* @modules_on_row_cats */
				.$unique_block_class:not(.td-no-subcats) .td_module_wrap {
					width: @modules_on_row_cats;
					float: left;
				}
				.td-md-is-safari .$unique_block_class:not(.td-no-subcats) .td_module_wrap {
				    margin-right: -1px;
				}
				/* @modules_on_row_regular */
				.$unique_block_class.td-no-subcats .td_module_wrap {
					width: @modules_on_row_regular;
					float: left;
				}
				.td-md-is-safari .$unique_block_class.td-no-subcats .td_module_wrap {
				    margin-right: -1px;
				}
				/* @padding */
				.$unique_block_class .td_module_wrap {
					padding-bottom: @all_modules_space !important;
					margin-bottom: @all_modules_space !important;
				}
				.$unique_block_class .td_module_wrap:nth-last-child(@padding) {
					margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}
				.$unique_block_class .td_module_wrap .td-module-container:before {
					display: block !important;
				}
				.$unique_block_class .td_module_wrap:nth-last-child(@padding) .td-module-container:before {
					display: none !important;
				}
				/* @padding_desktop */
				.$unique_block_class .td_module_wrap:nth-last-child(@padding_desktop) {
					margin-bottom: 0;
					padding-bottom: 0;
				}
				.$unique_block_class .td_module_wrap:nth-last-child(@padding_desktop) .td-module-container:before {
					display: none;
				}				
				/* @modules_gap */
				.$unique_block_class .td_module_wrap {
					padding-left: @modules_gap;
					padding-right: @modules_gap;
				}
				.$unique_block_class .td_block_inner {
					margin-left: -@modules_gap;
					margin-right: -@modules_gap;
				}
				/* @m_padding */
				.$unique_block_class .td-module-container {
					padding: @m_padding;
				}
				/* @all_modules_space */
				.$unique_block_class .td_module_wrap {
					padding-bottom: @all_modules_space;
					margin-bottom: @all_modules_space;
				}
				.$unique_block_class .td-module-container:before {
					bottom: -@all_modules_space;
				}
				/* @modules_border_size */
				.$unique_block_class .td-module-container {
				    border-width: @modules_border_size;
				    border-style: solid;
				    border-color: #000;
				}
				/* @modules_border_style */
				.$unique_block_class .td-module-container {
				    border-style: @modules_border_style;
				}
				/* @modules_border_color */
				.$unique_block_class .td-module-container {
				    border-color: @modules_border_color;
				}
				/* @modules_divider */
				.$unique_block_class .td-module-container:before {
					border-width: 0 0 1px 0;
					border-style: @modules_divider;
					border-color: #eaeaea;
				}
				/* @modules_divider_color */
				.$unique_block_class .td-module-container:before {
					border-color: @modules_divider_color;
				}
				
				/* @image_alignment */
				.$unique_block_class .entry-thumb {
					background-position: center @image_alignment;
				}
				/* @image_height */
				.$unique_block_class .td-image-wrap {
					padding-bottom: @image_height;
				}
				/* @image_width */
				.$unique_block_class .td-image-container {
				 	flex: 0 0 @image_width;
				 	width: @image_width;
			    }
				.ie10 .$unique_block_class .td-image-container,
				.ie11 .$unique_block_class .td-image-container {
				 	flex: 0 0 auto;
			    }
				/* @no_float */
				.$unique_block_class .td-module-container {
					flex-direction: column;
				}
                .$unique_block_class .td-image-container {
                	display: block; order: 0;
                }
                .ie10 .$unique_block_class .td-module-meta-info,
				.ie11 .$unique_block_class .td-module-meta-info {
				 	flex: auto;
			    }
			    .$unique_block_class .td_block_inner {
			        display: flex;
			        flex-wrap: wrap;
			    }
			    .$unique_block_class .td_module_wrap {
			        display: flex;
			        flex-direction: column;
			    }
			    .$unique_block_class .td-module-container {
			        flex: 1;
                    flex-basis: auto;
			    }
			    
			    /* @float_left */
				.$unique_block_class .td-module-container {
					flex-direction: row;
				}
                .$unique_block_class .td-image-container {
                	display: block; order: 0;
                }
                .ie10 .$unique_block_class .td-module-meta-info,
				.ie11 .$unique_block_class .td-module-meta-info {
				 	flex: 1;
			    }
				/* @float_right */
				.$unique_block_class .td-module-container {
					flex-direction: row;
				}
                .$unique_block_class .td-image-container {
                	display: block; order: 1;
                }
                .$unique_block_class .td-module-meta-info {
                	flex: 1;
                }
                /* @hide_desktop */
                .$unique_block_class .td-image-container {
                	display: none;
                }
                .$unique_block_class .entry-thumb {
                	background-image: none !important;
                }
				/* @hide */
				.$unique_block_class .td-image-container {
					display: none;
				}
				/* @image_radius */
				.$unique_block_class .entry-thumb,
				.$unique_block_class .entry-thumb:before,
				.$unique_block_class .entry-thumb:after {
					border-radius: @image_radius;
				}
				/* @video_icon */
				.$unique_block_class .td-video-play-ico {
					width: @video_icon;
					height: @video_icon;
					font-size: @video_icon;
				}
				/* @show_vid_t */
				.$unique_block_class .td-post-vid-time {
					display: @show_vid_t;
				}
				/* @vid_t_margin */
				.$unique_block_class .td-post-vid-time {
					margin: @vid_t_margin;
				}
				/* @vid_t_padding */
				.$unique_block_class .td-post-vid-time {
					padding: @vid_t_padding;
				}
				
				/* @meta_info_align */
				.$unique_block_class .td-module-container {
					align-items: @meta_info_align;
				}
				/* @meta_info_align_top */
				.$unique_block_class .td-image-container {
					order: 1;
				}
				.$unique_block_class .td-module-meta-info {
				    flex: 1;
				}
				/* @align_category_top */
				.$unique_block_class .td-category-pos-image .td-post-category {
					top: 0;
					bottom: auto;
				}
				.$unique_block_class .td-post-vid-time {
					top: 0;
					bottom: auto;
				}
				/* @align_category_bottom */
				.$unique_block_class .td-image-container {
				    order: 0;
				}
				.$unique_block_class .td-category-pos-image .td-post-category {
					top: auto;
				 	bottom: 0;
			    }
				.$unique_block_class .td-post-vid-time {
					top: auto;
					bottom: 0;
				}
			    /* @meta_horiz_align_center */
				.$unique_block_class .td-module-meta-info,
				.$unique_block_class .td-next-prev-wrap {
					text-align: center;
				}
				.$unique_block_class .td-image-container {
					margin-left: auto;
                    margin-right: auto;
				}
				.$unique_block_class .td-category-pos-image .td-post-category {
					left: 50%;
					transform: translateX(-50%);
					-webkit-transform: translateX(-50%);
				}
				.$unique_block_class.td-h-effect-up-shadow .td_module_wrap:hover .td-category-pos-image .td-post-category {
				    transform: translate(-50%, -2px);
					-webkit-transform: translate(-50%, -2px);
				}
				/* @meta_horiz_align_right */
				.$unique_block_class .td-module-meta-info,
				.$unique_block_class .td-next-prev-wrap {
					text-align: right;
				}
				.$unique_block_class .td-ajax-next-page {
                    margin-right: 0;
                }
				/* @meta_width */
				.$unique_block_class .td-module-meta-info {
					max-width: @meta_width;
				}
				/* @meta_margin */
				.$unique_block_class .td-module-meta-info {
					margin: @meta_margin;
				}
				/* @meta_padding */
				.$unique_block_class .td-module-meta-info {
					padding: @meta_padding;
				}
				
				/* @art_title */
				.$unique_block_class .entry-title {
					margin: @art_title;
				}
				/* @art_excerpt */
				.$unique_block_class .td-excerpt {
					margin: @art_excerpt;
				}
				/* @excerpt_col */
				.$unique_block_class .td-excerpt {
					column-count: @excerpt_col;
				}
				/* @excerpt_gap */
				.$unique_block_class .td-excerpt {
					column-gap: @excerpt_gap;
				}
				/* @art_audio */
				.$unique_block_class .td-audio-player {
					margin: @art_audio;
				}
				/* @art_audio_size */
				.$unique_block_class .td-audio-player {
					font-size: @art_audio_size;
				}
				
				/* @meta_info_border_size */
				.$unique_block_class .td-module-meta-info {
					border-width: @meta_info_border_size;
				}
				/* @meta_info_border_style */
				.$unique_block_class .td-module-meta-info {
					border-style: @meta_info_border_style;
				}
				/* @meta_info_border_color */
				.$unique_block_class .td-module-meta-info {
					border-color: @meta_info_border_color;
				}
				
				/* @modules_category_margin */
				.$unique_block_class .td-post-category {
					margin: @modules_category_margin;
				}
				/* @modules_category_padding */
				.$unique_block_class .td-post-category {
					padding: @modules_category_padding;
				}
				/* @modules_category_radius */
				.$unique_block_class .td-post-category {
					border-radius: @modules_category_radius;
				}
                
                /* @show_cat */
				.$unique_block_class .td-post-category {
					display: @show_cat;
				}
				/* @show_excerpt */
				.$unique_block_class .td-excerpt {
					display: @show_excerpt;
				}
				/* @show_audio */
				.$unique_block_class .td-audio-player {
					opacity: 1;
					visibility: visible;
					height: auto;
				}
				/* @hide_audio */
				.$unique_block_class .td-audio-player {
					opacity: 0;
					visibility: hidden;
					height: 0;
				}
				/* @hide_author_date */
				.$unique_block_class .td-author-date {
					display: none;
				}
				/* @show_author */
				.$unique_block_class .td-post-author-name {
					display: @show_author;
				}
				/* @show_date */
				.$unique_block_class .td-post-date,
				.$unique_block_class .td-post-author-name span {
					display: @show_date;
				}
				/* @show_review */
				.$unique_block_class .entry-review-stars {
					display: @show_review;
				}
				/* @review_size */
				.$unique_block_class .td-icon-star,
                .$unique_block_class .td-icon-star-empty,
                .$unique_block_class .td-icon-star-half {
					font-size: @review_size;
				}
				/* @show_com */
				.$unique_block_class .td-module-comments {
					display: @show_com;
				}
				
				/* @author_photo_size */
				.$unique_block_class .td-author-photo .avatar {
				    width: @author_photo_size;
				    height: @author_photo_size;
				}
				/* @author_photo_space */
				.$unique_block_class .td-author-photo .avatar {
				    margin-right: @author_photo_space;
				}
				/* @author_photo_radius */
				.$unique_block_class .td-author-photo .avatar {
				    border-radius: @author_photo_radius;
				}
				
				/* @pag_space */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap {
					margin-top: @pag_space;
				}
				/* @pag_padding */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a {
					padding: @pag_padding;
				}
				/* @pag_border_width */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a {
					border-width: @pag_border_width;
				}
				/* @pag_border_radius */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a {
					border-radius: @pag_border_radius;
				}
				/* @pag_icons_size */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a {
					font-size: @pag_icons_size;
				}
				
				
				/* @mm_subcats_bg */
				.$unique_block_class:not(.td-no-subcats) .block-mega-child-cats:before {
					background-color: @mm_subcats_bg;
				}
				/* @mm_subcats_border_color */
				.$unique_block_class .block-mega-child-cats:after {
					border-color: @mm_subcats_border_color;
				}
				
				/* @mm_elem_color */
				.$unique_block_class .block-mega-child-cats a {
					color: @mm_elem_color;
				}
				/* @mm_elem_color_a */
				.$unique_block_class .block-mega-child-cats .cur-sub-cat {
					color: @mm_elem_color_a;
				}
				/* @mm_elem_bg */
				.$unique_block_class .block-mega-child-cats a {
					background: @mm_elem_bg;
				}
				/* @mm_elem_bg_gradient */
				.$unique_block_class .block-mega-child-cats a {
					@mm_elem_bg_gradient
				}
				/* @mm_elem_bg_a */
				.$unique_block_class .block-mega-child-cats .cur-sub-cat {
					background: @mm_elem_bg_a;
				}
				/* @mm_elem_bg_a_gradient */
				.$unique_block_class .block-mega-child-cats .cur-sub-cat {
					@mm_elem_bg_a_gradient
				}
				/* @mm_elem_border_color */
				.$unique_block_class .block-mega-child-cats a {
					border-color: @mm_elem_border_color;
				}
				/* @mm_elem_border_color_a */
				.$unique_block_class .block-mega-child-cats .cur-sub-cat {
					border-color: @mm_elem_border_color_a;
				}
				/* @mm_elem_shadow */
				.$unique_block_class .block-mega-child-cats a {
					box-shadow: @mm_elem_shadow;
				}
				
				/* @m_bg */
				.$unique_block_class .td-module-container {
					background-color: @m_bg;
				}
				/* @shadow */
				.$unique_block_class .td-module-container {
				    box-shadow: @shadow;
				}
				/* @shadow_m */
				.$unique_block_class .td-module-meta-info {
				    box-shadow: @shadow_m;
				}
				/* @vid_t_color */
				.$unique_block_class .td-post-vid-time {
					color: @vid_t_color;
				}
				/* @vid_t_bg_color */
				.$unique_block_class .td-post-vid-time {
					background-color: @vid_t_bg_color;
				}
				/* @meta_bg */
				.$unique_block_class .td-module-meta-info {
					background-color: @meta_bg;
				}
				/* @overlay */
				.$unique_block_class .td-module-thumb a:after {
				    content: '';
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					background: @overlay;
				}
				/* @overlay_gradient */
				.$unique_block_class .td-module-thumb a:after {
				    content: '';
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					@overlay_gradient
				}
				/* @cat_bg */
				.$unique_block_class .td-post-category {
					background-color: @cat_bg;
				}
				/* @cat_bg_hover */
				.$unique_block_class .td-post-category:hover {
					background-color: @cat_bg_hover !important;
				}
				/* @cat_txt */
				.$unique_block_class .td-post-category {
					color: @cat_txt;
				}
				/* @cat_txt_hover */
				.$unique_block_class .td-post-category:hover {
					color: @cat_txt_hover;
				}
				/* @modules_cat_border */
                .$unique_block_class .td-post-category {
                    border-width: @modules_cat_border;
                    border-color: #aaa;
                    border-style: solid;
                }
                /* @cat_border */
                .$unique_block_class .td-post-category {
                    border-color: @cat_border;
                }
                /* @cat_border_hover */
                .$unique_block_class .td-post-category:hover {
                    border-color: @cat_border_hover;
                }
				/* @title_txt */
				.$unique_block_class .td-module-title a {
					color: @title_txt;
				}
				/* @title_txt_hover */
				.$unique_block_class .td_module_wrap:hover .td-module-title a {
					color: @title_txt_hover !important;
				}
				/* @all_underline_color */
                @media (min-width: 768px) {
                    .$unique_block_class .td-module-title a {
                        transition: all 0.2s ease;
                        -webkit-transition: all 0.2s ease;
                    }
                }
                .$unique_block_class .td-module-title a {
                    box-shadow: inset 0 0 0 0 @all_underline_color;
                }
                /* @all_underline_height */
                .$unique_block_class .td-module-container:hover .td-module-title a {
                    box-shadow: inset 0 -@all_underline_height 0 0 @all_underline_color;
                }
				/* @author_txt */
				.$unique_block_class .td-post-author-name a {
					color: @author_txt;
				}
				/* @author_txt_hover */
				.$unique_block_class .td-post-author-name:hover a {
					color: @author_txt_hover;
				}
				/* @date_txt */
				.$unique_block_class .td-post-date,
				.$unique_block_class .td-post-author-name span {
					color: @date_txt;
				}
				/* @ex_txt */
				.$unique_block_class .td-excerpt {
					color: @ex_txt;
				}
				/* @com_bg */
				.$unique_block_class .td-module-comments a {
					background-color: @com_bg;
				}
				.$unique_block_class .td-module-comments a:after {
					border-color: @com_bg transparent transparent transparent;
				}
				/* @com_txt */
				.$unique_block_class .td-module-comments a {
					color: @com_txt;
				}
				/* @rev_txt */
				.$unique_block_class .entry-review-stars {
					color: @rev_txt;
				}
				/* @audio_btn_color */
                .$unique_block_class .td-audio-player .mejs-button button:after {
                    color: @audio_btn_color;
                }
                /* @audio_time_color */
                .$unique_block_class .td-audio-player .mejs-time {
                    color: @audio_time_color;
                }
                /* @audio_bar_color */
                .$unique_block_class .td-audio-player .mejs-controls .mejs-time-rail .mejs-time-total,
                .$unique_block_class .td-audio-player .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
                    background: @audio_bar_color;
                }
                /* @audio_bar_curr_color */
                .$unique_block_class .td-audio-player .mejs-controls .mejs-time-rail .mejs-time-current,
                .$unique_block_class .td-audio-player .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
                    background: @audio_bar_curr_color;
                }
				/* @pag_text */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a,
				.$unique_block_class .td-load-more-wrap a {
					color: @pag_text;
				}
				/* @pag_bg */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a,
				.$unique_block_class .td-load-more-wrap a {    
					background-color: @pag_bg;
				}
				/* @pag_border */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a,
				.$unique_block_class .td-load-more-wrap a {
					border-color: @pag_border;
				}
				/* @pag_h_text */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a:hover,
				.$unique_block_class .td-load-more-wrap a:hover {
					color: @pag_h_text;
				}
				/* @pag_h_bg */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a:hover,
				.$unique_block_class .td-load-more-wrap a:hover {    
					background-color: @pag_h_bg !important;
					border-color: @pag_h_bg !important;
				}
				/* @pag_h_border */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a:hover,
				.$unique_block_class .td-load-more-wrap a:hover {
					border-color: @pag_h_border !important;
				}
				
				
				/* @f_mm_sub */
				.$unique_block_class .block-mega-child-cats a {
					@f_mm_sub
				}
				/* @f_title */
				.$unique_block_class .entry-title {
					@f_title
				}
				/* @f_cat */
				.$unique_block_class .td-post-category {
					@f_cat
				}
				/* @f_meta */
				.$unique_block_class .td-editor-date,
				.$unique_block_class .td-editor-date .td-post-author-name,
				.$unique_block_class .td-module-comments a {
					@f_meta
				}
				/* @f_ex */
				.$unique_block_class .td-excerpt {
					@f_ex
				}
				/* @f_vid_time */
				.$unique_block_class .td-post-vid-time {
					@f_vid_time
				}
				/* @mix_type */
                html:not([class*='ie']) .$unique_block_class .entry-thumb:before {
                    content: '';
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    opacity: 1;
                    transition: opacity 1s ease;
                    -webkit-transition: opacity 1s ease;
                    mix-blend-mode: @mix_type;
                }
                /* @color */
                html:not([class*='ie']) .$unique_block_class .entry-thumb:before {
                    background: @color;
                }
                /* @mix_gradient */
                html:not([class*='ie']) .$unique_block_class .entry-thumb:before {
                    @mix_gradient;
                }
                
                
                /* @mix_type_h */
                @media (min-width: 1141px) {
                    html:not([class*='ie']) .$unique_block_class .entry-thumb:after {
                        content: '';
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        left: 0;
                        opacity: 0;
                        transition: opacity 1s ease;
                        -webkit-transition: opacity 1s ease;
                        mix-blend-mode: @mix_type_h;
                    }
                    html:not([class*='ie']) .$unique_block_class .td-module-container:hover .entry-thumb:after {
                        opacity: 1;
                    }
                }
                
                /* @color_h */
                html:not([class*='ie']) .$unique_block_class .entry-thumb:after {
                    background: @color_h;
                }
                /* @mix_gradient_h */
                html:not([class*='ie']) .$unique_block_class .entry-thumb:after {
                    @mix_gradient_h;
                }
                /* @mix_type_off */
                html:not([class*='ie']) .$unique_block_class .td-module-container:hover .entry-thumb:before {
                    opacity: 0;
                }
                    
                /* @effect_on */
                html:not([class*='ie']) .$unique_block_class .entry-thumb {
                    filter: @fe_brightness @fe_contrast @fe_saturate;
                    transition: all 1s ease;
                    -webkit-transition: all 1s ease;
                }
                /* @effect_on_h */
                @media (min-width: 1141px) {
                    html:not([class*='ie']) .$unique_block_class .td-module-container:hover .entry-thumb {
                        filter: @fe_brightness_h @fe_contrast_h @fe_saturate_h;
                    }
                }
			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', self::$shortcode_atts );

        $compiled_css .= $td_css_res_compiler->compile_css();

        return $compiled_css;
    }

    function render($atts, $content = null) {

        $mm_child_cats_limit = ( array_key_exists( 'mm_child_cats', $atts ) && $atts['mm_child_cats'] !== '' ) ? $atts['mm_child_cats'] : '4';
        $mm_posts_limit = ( array_key_exists( 'mm_posts_limit', $atts ) && $atts['mm_posts_limit'] !== '' ) ? $atts['mm_posts_limit'] : '5';
        $mm_subcats_posts_limit = ( array_key_exists( 'mm_subcats_posts_limit', $atts ) && $atts['mm_subcats_posts_limit'] !== '' ) ? $atts['mm_subcats_posts_limit'] : '4';
        $mm_hide_all_item = ( array_key_exists( 'mm_hide_all_item', $atts ) && $atts['mm_hide_all_item'] !== '' ) ? $atts['mm_hide_all_item'] : '';
        $mm_preloading = ( array_key_exists( 'mm_ajax_preloading', $atts ) && $atts['mm_ajax_preloading'] !== '' ) ? $atts['mm_ajax_preloading'] : '';
        $atts['limit'] = $mm_posts_limit;
        $atts['subcats_posts_limit'] = $mm_subcats_posts_limit;
        $atts['td_column_number'] = 3;
        $atts['ajax_pagination'] = 'next_prev';
        $atts['child_cats_limit'] = $mm_child_cats_limit;
        $atts['td_ajax_filter_type'] = 'td_category_ids_filter';
        $atts['td_ajax_preloading'] = $mm_preloading;
        $atts['hide_all'] = $mm_hide_all_item;

	    $buffy_categories = '';
        $mm_category_id         = ( $atts['category_id'] != '' ) ? $atts['category_id'] : '';
        $mm_subcats_posts_limit = ( $atts['subcats_posts_limit'] != '' ) ? $atts['subcats_posts_limit'] : '';

        if ( !empty( $mm_category_id ) ) {
            // check for subcats existence
            $mm_subcats = get_categories( array(
                'child_of' => $mm_category_id,
                'number' => 1
            ) );

            if ( !empty( $mm_subcats ) ) {
                $atts['limit'] = $mm_subcats_posts_limit; // by default we show 4 posts here because we don't have space with subcategories
            }
        }

        if ( !tdc_state::is_live_editor_ajax() && !tdc_state::is_live_editor_iframe() ) {
//            echo PHP_EOL .'<pre> tdb_block_mega_menu atts: </pre>';
//            echo '<pre>';
//            print_r($atts);
//            echo '</pre>';
        }


        parent::render($atts);

        //get subcategories, it returns false if there are no categories
        $get_block_sub_cats = $this->get_mega_menu_subcategories($atts);

        $additional_classes = array();

        // if we have subcategories add the sub category filter for this block
        if ( $get_block_sub_cats !== false ) {
            $buffy_categories .= $get_block_sub_cats;
        } else {
            $additional_classes[]= 'td-no-subcats';
        }

        // hover effect
        $h_effect = $atts['h_effect'];
        if( $h_effect != '' ) {
            $additional_classes[] = 'td-h-effect-' . $h_effect;
        }

        $block_classes = $this->get_block_classes($additional_classes);
        $block_classes = str_replace("td_block_wrap ","", $block_classes );
        $atts['block_classes'] = $block_classes;


        self::$shortcode_atts = $atts;

        if ( !tdc_state::is_live_editor_ajax() && !tdc_state::is_live_editor_iframe() ) {
//            echo PHP_EOL .'<pre> tdb_block_mega_menu classes: </pre>';
//            echo '<pre>';
//            print_r($block_classes);
//            echo '</pre>';
        }

        $buffy = '';

        $buffy .= '<div class="' . $block_classes . '" ' . $this->get_block_html_atts() . '>';

            //get the block js
            $buffy .= $this->get_block_css();

            //get the js for this block
            $buffy .= $this->get_block_js();


            //add the categories IF we have some
            $buffy .= $buffy_categories;

            $buffy .= '<div class="tdb-mega-modules-wrap">';
                $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
                    //inner content of the block
                    $buffy .= $this->inner($this->td_query->posts);
                $buffy .= '</div>';

                //get the ajax pagination for this block
                $prev_icon = $this->get_att('prev_tdicon');
                $next_icon = $this->get_att('next_tdicon');
                $buffy .= $this->get_block_pagination($prev_icon, $next_icon);
            $buffy .= '</div>';

        $buffy .= '</div> <!-- ./block1 -->';
        return $buffy;
    }

    function inner($posts, $td_column_number = '') {
        $buffy = '';

        if (!empty($posts)) {
            foreach ($posts as $post) {

                $tdb_module_mm = new tdb_module_mm($post, $this->get_all_atts());
                $buffy .= $tdb_module_mm->render($post);
            }
        }

        return $buffy;
    }

    /**
     * gets the mega menu subcategories
     * @param $atts
     * @return bool|string
     */
    function get_mega_menu_subcategories($atts) {

        $mm_child_cats_limit = $this->get_att('child_cats_limit');
        $mm_category_id      = $this->get_att('category_id');
        $mm_hide_all         = $this->get_att('hide_all');
        $mm_elem_order       = $this->get_att('mm_elem_order');

        $orde_by = 'name';
        if( $mm_elem_order != '' ) {
            $orde_by = $mm_elem_order;
        }

        $buffy = '';

        if ( ! empty( $mm_category_id ) ) {
            $td_subcategories = get_categories( array(
                'child_of' => $mm_category_id,
                'number' => $mm_child_cats_limit,
                'orderby' => $orde_by
            ) );

	        if ( !empty( $td_subcategories ) ) {

                $buffy .= '<div class="block-mega-child-cats">';

                //show all categories
                if ( $mm_hide_all == '' ) {
                    $buffy .= '<a 
                        class="cur-sub-cat mega-menu-sub-cat-' . $this->block_uid . '" 
                        id="' . td_global::td_generate_unique_id() . '" 
                        data-td_block_id="' . $this->block_uid . '" 
                        data-td_filter_value="" 
                        href="' . get_category_link($mm_category_id) . '"
                    >' . __td('All', TD_THEME_NAME) . '</a>';
                }

                foreach ( $td_subcategories as $td_category ) {

                    $this->td_block_template_data['td_pull_down_items'][] = array(
                        'name' => $td_category->name,
                        'id' => $td_category->cat_ID
                    );

                    $buffy .= '<a 
                        class="mega-menu-sub-cat-' . $this->block_uid . '" 
                        id="' . td_global::td_generate_unique_id() . '" 
                        data-td_block_id="' . $this->block_uid . '" 
                        data-td_filter_value="' . $td_category->cat_ID . '" 
                        href="' . get_category_link($td_category->cat_ID) . '"
                    >' . $td_category->name . '</a>';
                }

                $buffy .= '</div>';
            } else {
                //there are no subcategories, return false
                //this is used by the mega menu block to alter it's structure
                return false;
            }
        }
        return $buffy;
    }

    function js_tdc_callback_ajax() {
        $buffy = '';

        // add a new composer block - that one has the delete callback
        $buffy .= $this->js_tdc_get_composer_block();

        ob_start();

        ?>
        <script>
            /* global jQuery:{} */
            (function () {
                var block = jQuery('.<?php echo $this->block_uid; ?>');
                blockClass = '.<?php echo $this->block_uid; ?>';

                if( block.find('audio').length > 0 ) {
                    jQuery(blockClass + ' audio').mediaelementplayer();
                }
            })();
        </script>
        <?php

        return $buffy . td_util::remove_script_tag( ob_get_clean() );
    }
}
