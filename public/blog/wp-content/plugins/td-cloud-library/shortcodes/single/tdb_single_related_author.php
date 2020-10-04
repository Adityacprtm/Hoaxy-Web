<?php


/**
 * related posts block, used to show the related posts by tag/author/categories
 */

class tdb_single_related_author extends td_block {

    static function cssMedia( $res_ctx ) {

        // container_width
        $container_width = $res_ctx->get_shortcode_att('container_width');
        if ( is_numeric( $container_width ) ) {
            $res_ctx->load_settings_raw( 'container_width', $container_width . '%' );
        } else {
            $res_ctx->load_settings_raw( 'container_width', $container_width );
        }

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

        //image alignment
        $res_ctx->load_settings_raw( 'image_alignment', $res_ctx->get_shortcode_att('image_alignment') . '%' );

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

        // modules per row
        $modules_on_row = $res_ctx->get_shortcode_att('modules_on_row');
        $res_ctx->load_settings_raw( 'modules_on_row', $modules_on_row );
        if ( $modules_on_row == '' ) {
            $modules_on_row = '100%';
        }

        // modules space
        $modules_space = $res_ctx->get_shortcode_att('all_modules_space');
        $res_ctx->load_settings_raw( 'all_modules_space', $modules_space );
        if ( $modules_space == '' ) {
            $res_ctx->load_settings_raw( 'all_modules_space', '9px');
        } else if ( is_numeric( $modules_space ) ) {
            $res_ctx->load_settings_raw( 'all_modules_space', $modules_space / 2 .'px' );
        }

        // shadow
        $res_ctx->load_shadow_settings( 0, 0, 0, 0, 'rgba(0, 0, 0, 0.08)', 'shadow' );
        $res_ctx->load_shadow_settings( 0, 0, 0, 0, 'rgba(0, 0, 0, 0.08)', 'shadow_m' );

        // modules clearfix
        $clearfix = 'clearfix';
        $padding = 'padding';
        if ( $res_ctx->is( 'all' ) ) {
            $clearfix = 'clearfix_desktop';
            $padding = 'padding_desktop';
        }
        switch ($modules_on_row) {
            case '100%':
                $res_ctx->load_settings_raw( $padding,  '1' );
                break;
            case '50%':
                $res_ctx->load_settings_raw( $clearfix,  '2n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+2' );
                break;
            case '33.33333333%':
                $res_ctx->load_settings_raw( $clearfix,  '3n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+3' );
                break;
            case '25%':
                $res_ctx->load_settings_raw( $clearfix,  '4n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+4' );
                break;
            case '20%':
                $res_ctx->load_settings_raw( $clearfix,  '5n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+5' );
                break;
            case '16.66666667%':
                $res_ctx->load_settings_raw( $clearfix,  '6n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+6' );
                break;
            case '14.28571428%':
                $res_ctx->load_settings_raw( $clearfix,  '7n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+7' );
                break;
            case '12.5%':
                $res_ctx->load_settings_raw( $clearfix,  '8n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+8' );
                break;
            case '11.11111111%':
                $res_ctx->load_settings_raw( $clearfix,  '9n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+9' );
                break;
            case '10%':
                $res_ctx->load_settings_raw( $clearfix,  '10n+1' );
                $res_ctx->load_settings_raw( $padding,  '-n+10' );
                break;
        }

        // modules gap
        $modules_gap = $res_ctx->get_shortcode_att('modules_gap');
        $res_ctx->load_settings_raw( 'modules_gap', $modules_gap );
        if ( $modules_gap == '' ) {
            $res_ctx->load_settings_raw( 'modules_gap', '20px');
        } else if ( is_numeric( $modules_gap ) ) {
            $res_ctx->load_settings_raw( 'modules_gap', $modules_gap / 2 .'px' );
        }
        // modules padding
        $m_padding = $res_ctx->get_shortcode_att('m_padding');
        $res_ctx->load_settings_raw( 'm_padding', $m_padding );
        if ( is_numeric( $m_padding ) ) {
            $res_ctx->load_settings_raw( 'm_padding', $m_padding . 'px' );
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

        // meta info horizontal align
        $content_align = $res_ctx->get_shortcode_att('meta_info_horiz');
        if ( $content_align == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'meta_horiz_align_center', 1 );
        } else if ( $content_align == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'meta_horiz_align_right', 1 );
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
        // article button space
        $art_btn = $res_ctx->get_shortcode_att('art_btn');
        $res_ctx->load_settings_raw( 'art_btn', $art_btn );
        if ( is_numeric( $art_btn ) ) {
            $res_ctx->load_settings_raw( 'art_btn', $art_btn . 'px' );
        }

        // category tag space
        $modules_category_spacing = $res_ctx->get_shortcode_att('modules_category_spacing');
        $res_ctx->load_settings_raw( 'modules_category_spacing', $modules_category_spacing );
        if( $modules_category_spacing != '' && is_numeric( $modules_category_spacing ) ) {
            $res_ctx->load_settings_raw( 'modules_category_spacing', $modules_category_spacing . 'px' );
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

        // show meta info details
        $res_ctx->load_settings_raw( 'show_cat', $res_ctx->get_shortcode_att('show_cat') );
        $res_ctx->load_settings_raw( 'show_excerpt', $res_ctx->get_shortcode_att('show_excerpt') );
        $show_audio = $res_ctx->get_shortcode_att('show_audio');
        if( $show_audio == '' || $show_audio == 'block' ) {
            $res_ctx->load_settings_raw( 'show_audio', 1 );
        } else if( $show_audio == 'none' ) {
            $res_ctx->load_settings_raw( 'hide_audio', 1 );
        }
        $res_ctx->load_settings_raw( 'show_btn', $res_ctx->get_shortcode_att('show_btn') );
        // button space
        $btn_margin = $res_ctx->get_shortcode_att('btn_margin');
        $res_ctx->load_settings_raw( 'btn_margin', $btn_margin );
        if( $btn_margin != '' && is_numeric( $btn_margin ) ) {
            $res_ctx->load_settings_raw( 'btn_margin', $btn_margin . 'px' );
        }
        // button padding
        $btn_padding = $res_ctx->get_shortcode_att('btn_padding');
        $res_ctx->load_settings_raw( 'btn_padding', $btn_padding );
        if( $btn_padding != '' && is_numeric( $btn_padding ) ) {
            $res_ctx->load_settings_raw( 'btn_padding', $btn_padding . 'px' );
        }
        // button border
        $btn_border_width = $res_ctx->get_shortcode_att('btn_border_width');
        $res_ctx->load_settings_raw( 'btn_border_width', $btn_border_width );
        if( $btn_border_width != '' && is_numeric( $btn_border_width ) ) {
            $res_ctx->load_settings_raw( 'btn_border_width', $btn_border_width . 'px' );
        }
        // button radius
        $btn_radius = $res_ctx->get_shortcode_att('btn_radius');
        $res_ctx->load_settings_raw( 'btn_radius', $btn_radius );
        if( $btn_radius != '' && is_numeric( $btn_radius ) ) {
            $res_ctx->load_settings_raw( 'btn_radius', $btn_radius . 'px' );
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

        // show meta info details
        $res_ctx->load_settings_raw( 'show_author', $res_ctx->get_shortcode_att('show_author') );
        $res_ctx->load_settings_raw( 'show_date', $res_ctx->get_shortcode_att('show_date') );
        $res_ctx->load_settings_raw( 'show_com', $res_ctx->get_shortcode_att('show_com') );

        // colors
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
        $res_ctx->load_settings_raw( 'audio_btn_color', $res_ctx->get_shortcode_att( 'audio_btn_color' ) );
        $res_ctx->load_settings_raw( 'audio_time_color', $res_ctx->get_shortcode_att( 'audio_time_color' ) );
        $res_ctx->load_settings_raw( 'audio_bar_color', $res_ctx->get_shortcode_att( 'audio_bar_color' ) );
        $res_ctx->load_settings_raw( 'audio_bar_curr_color', $res_ctx->get_shortcode_att( 'audio_bar_curr_color' ) );
        $res_ctx->load_settings_raw( 'btn_bg', $res_ctx->get_shortcode_att('btn_bg') );
        $res_ctx->load_settings_raw( 'btn_bg_hover', $res_ctx->get_shortcode_att('btn_bg_hover') );
        $res_ctx->load_settings_raw( 'btn_txt', $res_ctx->get_shortcode_att('btn_txt') );
        $res_ctx->load_settings_raw( 'btn_txt_hover', $res_ctx->get_shortcode_att('btn_txt_hover') );
        $res_ctx->load_settings_raw( 'btn_border', $res_ctx->get_shortcode_att('btn_border') );
        $res_ctx->load_settings_raw( 'btn_border_hover', $res_ctx->get_shortcode_att('btn_border_hover') );
        $res_ctx->load_settings_raw( 'nextprev_icon', $res_ctx->get_shortcode_att('nextprev_icon') );
        $res_ctx->load_settings_raw( 'nextprev_bg', $res_ctx->get_shortcode_att('nextprev_bg') );
        $res_ctx->load_settings_raw( 'nextprev_border', $res_ctx->get_shortcode_att('nextprev_border') );
        $res_ctx->load_settings_raw( 'nextprev_icon_h', $res_ctx->get_shortcode_att('nextprev_icon_h') );
        $res_ctx->load_settings_raw( 'nextprev_border_h', $res_ctx->get_shortcode_att('nextprev_border_h') );
        $res_ctx->load_settings_raw( 'nextprev_bg_h', $res_ctx->get_shortcode_att('nextprev_bg_h') );

        // video pop-up
        $res_ctx->load_settings_raw( 'video_rec_color', $res_ctx->get_shortcode_att('video_rec_color') );
        $res_ctx->load_settings_raw( 'video_title_color', $res_ctx->get_shortcode_att('video_title_color') );
        $res_ctx->load_settings_raw( 'video_title_color_h', $res_ctx->get_shortcode_att('video_title_color_h') );
        $res_ctx->load_settings_raw( 'video_bg', $res_ctx->get_shortcode_att('video_bg') );
        $res_ctx->load_settings_raw( 'video_overlay', $res_ctx->get_shortcode_att('video_overlay') );

        // video duration
        $res_ctx->load_settings_raw( 'vid_t_color', $res_ctx->get_shortcode_att('vid_t_color') );
        $res_ctx->load_settings_raw( 'vid_t_bg_color', $res_ctx->get_shortcode_att('vid_t_bg_color') );


        // fonts
        $res_ctx->load_font_settings( 'f_header' );
        $res_ctx->load_font_settings( 'f_ajax' );
        $res_ctx->load_font_settings( 'f_title' );
        $res_ctx->load_font_settings( 'f_cat' );
        $res_ctx->load_font_settings( 'f_meta' );
        $res_ctx->load_settings_raw( 'f_meta_fw', $res_ctx->get_shortcode_att('f_meta_font_weight') );
        $res_ctx->load_font_settings( 'f_ex' );
        $res_ctx->load_font_settings( 'f_btn' );
        $res_ctx->load_font_settings( 'f_more' );

        $res_ctx->load_font_settings( 'f_vid_title' );
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
        $unique_block_modal_class = $this->block_uid . '_m';

        $compiled_css = '';

        $raw_css =
            "<style>

				/* @container_width */
				.$unique_block_class {
					width: @container_width; float: left;
				}
				.$unique_block_class:after {
				    content: '';
				    display: table;
				    clear: both;    
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
				/* @image_alignment */
				.$unique_block_class .entry-thumb {
					background-position: center @image_alignment;
				}
				/* @no_float */
				.$unique_block_class .td-module-container {
					flex-direction: column;
				}
                .$unique_block_class .td-image-container {
                	display: block; order: 0;
                }
				/* @float_left */
				.$unique_block_class .td-module-container {
					flex-direction: row;
				}
                .$unique_block_class .td-image-container {
                	display: block; order: 0;
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
				/* @meta_info_align_top */
				.$unique_block_class .td-image-container {
					order: 1;
				}
				.$unique_block_class .td-module-meta-info {
				    flex: 1;
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
				/* @meta_info_align */
				.$unique_block_class .td-module-container {
					align-items: @meta_info_align;
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
				.$unique_block_class .td-category-pos-image .td-post-category {
					flex-direction: column-reverse;
			    }
				.$unique_block_class .td-post-vid-time {
					top: auto;
					bottom: 0;
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
				/* @modules_on_row */
				.$unique_block_class .td_module_wrap {
					width: @modules_on_row;
					float: left;
				}
				/* @modules_gap */
				.$unique_block_class .td_module_wrap {
					padding-left: @modules_gap;
					padding-right: @modules_gap;
				}
				.$unique_block_class .tdb-block-inner {
					margin-left: -@modules_gap;
					margin-right: -@modules_gap;
				}
				/* @all_modules_space */
				.$unique_block_class .td_module_wrap {
					padding-bottom: @all_modules_space;
					margin-bottom: @all_modules_space;
				}
				.$unique_block_class .td-module-container:before {
					bottom: -@all_modules_space;
				}
				/* @shadow */
				.$unique_block_class {
				    overflow: visible;
				}
				.$unique_block_class .td-module-container {
				    box-shadow: @shadow;
				}
				/* @shadow_m */
				.$unique_block_class {
				    overflow: visible;
				}
				.$unique_block_class .td-module-meta-info {
				    box-shadow: @shadow_m;
				}
				.$unique_block_class .td-module-container {
				    box-shadow: @shadow;
				}				
				/* @m_padding */
				.$unique_block_class .td-module-container {
					padding: @m_padding;
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
				/* @modules_category_spacing */
				.$unique_block_class .td-post-category {
					margin: @modules_category_spacing;
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
				/* @show_btn */
				.$unique_block_class .td-read-more {
					display: @show_btn;
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
				/* @show_com */
				.$unique_block_class .td-module-comments {
					display: @show_com;
				}
				/* @clearfix_desktop */
				.$unique_block_class .td_module_wrap:nth-child(@clearfix_desktop) {
					clear: both;
				}
				/* @clearfix */
				.$unique_block_class .td_module_wrap {
					clear: none !important;
				}
				.$unique_block_class .td_module_wrap:nth-child(@clearfix) {
					clear: both !important;
				}
				/* @padding_desktop */
				.$unique_block_class .td_module_wrap:nth-last-child(@padding_desktop) {
					margin-bottom: 0;
					padding-bottom: 0;
				}
				.$unique_block_class .td_module_wrap:nth-last-child(@padding_desktop) .td-module-container:before {
					display: none;
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
				/* @m_bg */
				.$unique_block_class .td-module-container {
					background-color: @m_bg;
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
				/* @title_txt */
				.$unique_block_class .td-module-title a {
					color: @title_txt;
				}
				/* @title_txt_hover */
				.$unique_block_class .td_module_wrap:hover .td-module-title a {
					color: @title_txt_hover !important;
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
				/* @btn_bg */
				.$unique_block_class .td-read-more a {
					background-color: @btn_bg;
				}
				/* @btn_bg_hover */
				.$unique_block_class .td-read-more:hover a {
					background-color: @btn_bg_hover !important;
				}
				/* @btn_txt */
				.$unique_block_class .td-read-more a {
					color: @btn_txt;
				}
				/* @btn_txt_hover */
				.$unique_block_class .td-read-more:hover a {
					color: @btn_txt_hover;
				}
				/* @nextprev_icon */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a {
					color: @nextprev_icon;
				}
				/* @nextprev_bg */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a {
					background-color: @nextprev_bg;
					border-color: @nextprev_bg;
				}
				/* @nextprev_border */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a {
					border-color: @nextprev_border;
				}
				/* @nextprev_icon_h */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a:hover {
					color: @nextprev_icon_h;
				}
				/* @nextprev_bg_h */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a:hover {
					background-color: @nextprev_bg_h;
					border-color: @nextprev_bg_h;
				}
				/* @nextprev_border_h */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a:hover {
					border-color: @nextprev_border_h;
				}
				
				/* @video_rec_color */
				#td-video-modal.$unique_block_modal_class .td-vm-rec-title {
				    color: @video_rec_color;
				}
				/* @video_title_color */
				#td-video-modal.$unique_block_modal_class .td-vm-title a {
				    color: @video_title_color;
				}
				/* @video_title_color_h */
				#td-video-modal.$unique_block_modal_class .td-vm-title a:hover {
				    color: @video_title_color_h;
				}
				/* @video_bg */
				#td-video-modal.$unique_block_modal_class .td-vm-content-wrap {
				    background-color: @video_bg;
				}
				/* @video_overlay */
				#td-video-modal.$unique_block_modal_class .td-vm-overlay {
				    background-color: @video_overlay;
				}
				
				/* @vid_t_color */
				.$unique_block_class .td-post-vid-time {
					color: @vid_t_color;
				}
				/* @vid_t_bg_color */
				.$unique_block_class .td-post-vid-time {
					background-color: @vid_t_bg_color;
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
				/* @art_btn */
				.$unique_block_class .td-read-more {
					margin: @art_btn;
				}
				/* @btn_margin */
				.$unique_block_class .td-read-more {
					margin: @btn_margin;
				}
				/* @btn_padding */
				.$unique_block_class .td-read-more a {
					padding: @btn_padding;
				}
				/* @btn_border_width */
				.$unique_block_class .td-read-more a {
					border-width: @btn_border_width;
					border-style: solid;
					border-color: #000;
				}
				/* @btn_border */
				.$unique_block_class .td-read-more a {
					border-color: @btn_border;
				}
				/* @btn_border_hover */
				.$unique_block_class .td-read-more:hover a {
					border-color: @btn_border_hover;
				}
				/* @btn_radius */
				.$unique_block_class .td-read-more a {
					border-radius: @btn_radius;
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

				/* @f_header */
				.$unique_block_class .block-title a,
				.$unique_block_class .block-title span,
				.$unique_block_class .td-block-title a,
				.$unique_block_class .td-block-title span {
					@f_header
				}
				/* @f_ajax */
				.$unique_block_class .td-subcat-list a,
				.$unique_block_class .td-subcat-dropdown span,
				.$unique_block_class .td-subcat-dropdown a {
					@f_ajax
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
				.$unique_block_class .td-module-comments a {
					@f_meta
				}
				/* @f_meta_fw */
				.$unique_block_class .td-post-author-name {
				    font-weight: @f_meta_fw;
				}
				/* @f_ex */
				.$unique_block_class .td-excerpt {
					@f_ex
				}
				/* @f_btn */
				.$unique_block_class .td-read-more a {
					@f_btn
				}
				/* @f_more */
				.$unique_block_class .td-load-more-wrap a {
					@f_more
				}
				/* @f_vid_title */
				#td-video-modal.$unique_block_modal_class .td-vm-title {
					@f_vid_title
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
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();

        return $compiled_css;
    }

    function render( $atts, $content = null ) {

        global $tdb_state_single;

        $post_related_data = $tdb_state_single->post_related->__invoke( $atts );

        $atts['limit']                       = $post_related_data['limit'];
        $atts['offset']                      = $post_related_data['offset'];
        $atts['live_filter']                 = 'cur_post_same_author';
        $atts['ajax_pagination']             = $post_related_data['ajax_pagination'];
        $atts['td_ajax_filter_type']         = $post_related_data['td_ajax_filter_type'];
        $atts['live_filter_cur_post_id']     = $post_related_data['live_filter_cur_post_id'];
        $atts['live_filter_cur_post_author'] = $post_related_data['live_filter_cur_post_author'];

        $buffy ='';

        parent::render( $atts ); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        $additional_classes_array = array();

        // hover effect
        $h_effect = $this->get_att('h_effect');
        if( $h_effect != '' ) {
            $additional_classes_array[] = 'td-h-effect-' . $h_effect;
        }

        if( $this->get_att('block_template_id') != '' ) {
            $global_block_template_id = $this->get_att('block_template_id');
        } else {
            $global_block_template_id = td_options::get( 'tds_global_block_template', 'td_block_template_1' );
        }
        $td_css_cls_block_title = 'td-block-title';

        if ( $global_block_template_id === 'td_block_template_1' ) {
            $td_css_cls_block_title = 'block-title';
        }


        // we have no related posts to display
        if ($this->td_query->post_count == 0) {
            return '';
        }
        if ( isset( $post_related_data['current_post_tags'] ) and empty( $post_related_data['current_post_tags'] ) ) {
            return '';
        }

        $buffy .= '<div class="' . $this->get_block_classes($additional_classes_array) . ' tdb-single-related-posts" ' . $this->get_block_html_atts() . '>';

            //get the block css
            $buffy .= $this->get_block_css();

            //get the js for this block
            $buffy .= $this->get_block_js();


            $custom_title = $this->get_att( 'custom_title' );

            if ( $post_related_data['sample'] ) {
                $buffy .= '<div class="tdb-dummy-data">TDB Template Sample Data</div>';
            }

            if( $custom_title != '' ) {
                //get the filter for this block
                $buffy .= '<div class="td-block-title-wrap">';
                    $buffy .= '<h4 class="' . $td_css_cls_block_title . '">';
                        $buffy .= '<span>' . $custom_title . '</span>';
                    $buffy .= '</h4>';
                $buffy .= '</div>';
            }

            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner tdb-block-inner td-fix-index">';
                $buffy .= $this->inner($this->td_query->posts);  //inner content of the block
            $buffy .= '</div>';

            if( $this->get_att('nextprev') != '' ) {
                $prev_icon = $this->get_att('prev_tdicon');
                $next_icon = $this->get_att('next_tdicon');

                $buffy .= $this->get_block_pagination($prev_icon, $next_icon);
            }

        $buffy .= '</div>';



        return $buffy;
    }


    function inner($posts) {

        $buffy = '';
        $td_block_layout = new td_block_layout();

        if (!empty($posts)) {
            foreach ($posts as $post) {

                $tdb_module_related = new tdb_module_related($post, $this->get_all_atts());
                $buffy .= $tdb_module_related->render($post);
            }
        }
        $buffy .= $td_block_layout->close_all_tags();

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