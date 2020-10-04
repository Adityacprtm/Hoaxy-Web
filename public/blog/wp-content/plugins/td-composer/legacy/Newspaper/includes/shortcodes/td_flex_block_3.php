<?php

class td_flex_block_3 extends td_block {

    static function cssMedia( $res_ctx ) {

        // columns
        $columns = $res_ctx->get_shortcode_att('columns');
        $res_ctx->load_settings_raw( 'columns', $columns );
        if ( $columns == '' ) {
            $columns = '100%';
            $res_ctx->load_settings_raw( 'modules_column_width', '100%' );
        }

        switch ($columns) {
            case '100%':
                $res_ctx->load_settings_raw( 'modules_column_width', '100%' );
                $res_ctx->load_settings_raw( 'modules_width', '100%' );
                $res_ctx->load_settings_raw( 'modules_no_padding', 0 );
                $res_ctx->load_settings_raw( 'clearfix', 0 );
                break;
            case '50%':
                $res_ctx->load_settings_raw( 'modules_column_width', '50%' );
                $res_ctx->load_settings_raw( 'modules_width', '100%' );
                $res_ctx->load_settings_raw( 'modules_no_padding', 0 );
                $res_ctx->load_settings_raw( 'clearfix', 0 );
                break;
            case '33.33333333%':
                $res_ctx->load_settings_raw( 'modules_column_width', '66.666666%' );
                $res_ctx->load_settings_raw( 'modules_width', '50%' );
                $res_ctx->load_settings_raw( 'modules_no_padding', 1 );
                $res_ctx->load_settings_raw( 'clearfix', 1 );
                break;
        }


        // columns gap
        $columns_gap = $res_ctx->get_shortcode_att('columns_gap');
        $res_ctx->load_settings_raw( 'columns_gap', $columns_gap );
        if ( $columns_gap == '' ) {
            $res_ctx->load_settings_raw( 'columns_gap', '24px');
        } else if ( is_numeric( $columns_gap ) ) {
            $res_ctx->load_settings_raw( 'columns_gap', $columns_gap / 2 .'px' );
        }


        // modules space
        $modules_space1 = $res_ctx->get_shortcode_att('modules_space1');
        $res_ctx->load_settings_raw( 'modules_space1', $modules_space1 );
        if ( $modules_space1 == '' ) {
            $res_ctx->load_settings_raw( 'modules_space1', '0');
        } else if ( is_numeric( $modules_space1 ) ) {
            $res_ctx->load_settings_raw( 'modules_space1', $modules_space1 / 2 .'px' );
        }
        $modules_space2 = $res_ctx->get_shortcode_att('modules_space2');
        $res_ctx->load_settings_raw( 'modules_space2', $modules_space2 );
        if ( $modules_space2 == '' ) {
            $res_ctx->load_settings_raw( 'modules_space2', '13px');
        } else if ( is_numeric( $modules_space2 ) ) {
            $res_ctx->load_settings_raw( 'modules_space2', $modules_space2 / 2 . 'px' );
        }

        // modules border size
        $modules_border_size1 = $res_ctx->get_shortcode_att('modules_border_size1');
        $res_ctx->load_settings_raw( 'modules_border_size1', $modules_border_size1 );
        if( $modules_border_size1 != '' && is_numeric( $modules_border_size1 ) ) {
            $res_ctx->load_settings_raw( 'modules_border_size1', $modules_border_size1 . 'px' );
        }
        $modules_border_size2 = $res_ctx->get_shortcode_att('modules_border_size2');
        $res_ctx->load_settings_raw( 'modules_border_size2', $modules_border_size2 );
        if( $modules_border_size2 != '' && is_numeric( $modules_border_size2 ) ) {
            $res_ctx->load_settings_raw( 'modules_border_size2', $modules_border_size2 . 'px' );
        }
        // modules border style
        $res_ctx->load_settings_raw( 'modules_border_style1', $res_ctx->get_shortcode_att('modules_border_style1') );
        $res_ctx->load_settings_raw( 'modules_border_style2', $res_ctx->get_shortcode_att('modules_border_style2') );
        // modules border color
        $res_ctx->load_settings_raw( 'modules_border_color1', $res_ctx->get_shortcode_att('modules_border_color1') );
        $res_ctx->load_settings_raw( 'modules_border_color2', $res_ctx->get_shortcode_att('modules_border_color2') );

        // modules divider
        $modules_divider1 = $res_ctx->get_shortcode_att('modules_divider1');
        $res_ctx->load_settings_raw( 'modules_divider1', $modules_divider1 );
        if( $modules_divider1 == '' ) {
            $res_ctx->load_settings_raw( 'modules_divider1', 'none' );
        }
        $modules_divider2 = $res_ctx->get_shortcode_att('modules_divider2');
        $res_ctx->load_settings_raw( 'modules_divider2', $modules_divider2 );
        if( $modules_divider2 == '' ) {
            $res_ctx->load_settings_raw( 'modules_divider2', 'none' );
        }
        // modules divider color
        $res_ctx->load_settings_raw( 'modules_divider_color1', $res_ctx->get_shortcode_att('modules_divider_color1') );
        $res_ctx->load_settings_raw( 'modules_divider_color2', $res_ctx->get_shortcode_att('modules_divider_color2') );



        /*-- ARTICLE IMAGE-- */
        //image alignment
        $res_ctx->load_settings_raw( 'image_alignment1', $res_ctx->get_shortcode_att('image_alignment1') . '%' );
        $res_ctx->load_settings_raw( 'image_alignment2', $res_ctx->get_shortcode_att('image_alignment2') . '%' );
        // image_width
        $image_width2 = $res_ctx->get_shortcode_att('image_width2');
        $res_ctx->load_settings_raw( 'image_width2', '30%' );
        if( $image_width2 != '' ) {
            if ( is_numeric( $image_width2 ) ) {
                $res_ctx->load_settings_raw( 'image_width2', $image_width2 . '%' );
            } else {
                $res_ctx->load_settings_raw( 'image_width2', $image_width2 );
            }
        }

	    // image_height
	    $image_height1 = $res_ctx->get_shortcode_att('image_height1');
	    if ( is_numeric( $image_height1 ) ) {
		    $res_ctx->load_settings_raw( 'image_height1', $image_height1 . '%' );
	    } else {
		    $res_ctx->load_settings_raw( 'image_height1', $image_height1 );
	    }
        $image_height2 = $res_ctx->get_shortcode_att('image_height2');
        if ( is_numeric( $image_height2 ) ) {
            $res_ctx->load_settings_raw( 'image_height2', $image_height2 . '%' );
        } else {
            $res_ctx->load_settings_raw( 'image_height2', $image_height2 );
        }

        // image radius
        $image_radius1 = $res_ctx->get_shortcode_att('image_radius1');
        $res_ctx->load_settings_raw( 'image_radius1', $image_radius1 );
        if ( is_numeric( $image_radius1 ) ) {
            $res_ctx->load_settings_raw( 'image_radius1', $image_radius1 . 'px' );
        }
        $image_radius2 = $res_ctx->get_shortcode_att('image_radius2');
        $res_ctx->load_settings_raw( 'image_radius2', $image_radius2 );
        if ( is_numeric( $image_radius2 ) ) {
            $res_ctx->load_settings_raw( 'image_radius2', $image_radius2 . 'px' );
        }

        // video icon size
        $video_icon1 = $res_ctx->get_shortcode_att('video_icon1');
        if ( $video_icon1 != '' && is_numeric( $video_icon1 ) ) {
            $res_ctx->load_settings_raw( 'video_icon1', $video_icon1 . 'px' );
        }
        $video_icon2 = $res_ctx->get_shortcode_att('video_icon2');
        if( $video_icon2 == '' ) {
            $res_ctx->load_settings_raw( 'video_icon2', '20px' );
        } else {
            if ( is_numeric( $video_icon2 ) ) {
                $res_ctx->load_settings_raw( 'video_icon2', $video_icon2 . 'px' );
            }
        }

        // show video duration
        $res_ctx->load_settings_raw('show_vid_t', $res_ctx->get_shortcode_att('show_vid_t'));
        $res_ctx->load_settings_raw('show_vid_t2', $res_ctx->get_shortcode_att('show_vid_t2'));
        // video duration margin
        $vid_t_margin = $res_ctx->get_shortcode_att('vid_t_margin');
        $res_ctx->load_settings_raw( 'vid_t_margin', $vid_t_margin );
        if( $vid_t_margin != '' && is_numeric( $vid_t_margin ) ) {
            $res_ctx->load_settings_raw( 'vid_t_margin', $vid_t_margin . 'px' );
        }
        $vid_t_margin2 = $res_ctx->get_shortcode_att('vid_t_margin2');
        $res_ctx->load_settings_raw( 'vid_t_margin2', $vid_t_margin2 );
        if( $vid_t_margin2 != '' && is_numeric( $vid_t_margin2 ) ) {
            $res_ctx->load_settings_raw( 'vid_t_margin2', $vid_t_margin2 . 'px' );
        }
        // video duration padding
        $vid_t_padding = $res_ctx->get_shortcode_att('vid_t_padding');
        $res_ctx->load_settings_raw( 'vid_t_padding', $vid_t_padding );
        if( $vid_t_padding != '' && is_numeric( $vid_t_padding ) ) {
            $res_ctx->load_settings_raw( 'vid_t_padding', $vid_t_padding . 'px' );
        }
        $vid_t_padding2 = $res_ctx->get_shortcode_att('vid_t_padding2');
        $res_ctx->load_settings_raw( 'vid_t_padding2', $vid_t_padding2 );
        if( $vid_t_padding2 != '' && is_numeric( $vid_t_padding2 ) ) {
            $res_ctx->load_settings_raw( 'vid_t_padding2', $vid_t_padding2 . 'px' );
        }




        /*-- META INFO -- */
        // meta info align
        $meta_info_align1 = $res_ctx->get_shortcode_att('meta_info_align1');
        if( $meta_info_align1 == '' ) {
            $res_ctx->load_settings_raw( 'meta_info_align_bottom1', 1 );
        } else if ( $meta_info_align1 == 'initial' ) {
            $res_ctx->load_settings_raw( 'meta_info_align_top1', 1 );
        }
        $meta_info_align2 = $res_ctx->get_shortcode_att('meta_info_align2');
        $res_ctx->load_settings_raw( 'meta_info_align2', $meta_info_align2 );

        // meta info horizontal align
        $content_align1 = $res_ctx->get_shortcode_att('meta_info_horiz1');
        if ( $content_align1 == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'meta_horiz_align_center1', 1 );
        } else if ( $content_align1 == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'meta_horiz_align_right1', 1 );
        }
        $content_align2 = $res_ctx->get_shortcode_att('meta_info_horiz2');
        if ( $content_align2 == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'meta_horiz_align_center2', 1 );
        } else if ( $content_align2 == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'meta_horiz_align_right2', 1 );
        }

        // meta info width
        $meta_info_width1 = $res_ctx->get_shortcode_att('meta_width1');
        $res_ctx->load_settings_raw( 'meta_width1', $meta_info_width1 );
        if( $meta_info_width1 != '' && is_numeric( $meta_info_width1 ) ) {
            $res_ctx->load_settings_raw( 'meta_width1', $meta_info_width1 . 'px' );
        }
        $meta_info_width2 = $res_ctx->get_shortcode_att('meta_width2');
        $res_ctx->load_settings_raw( 'meta_width2', $meta_info_width2 );
        if( $meta_info_width2 != '' && is_numeric( $meta_info_width2 ) ) {
            $res_ctx->load_settings_raw( 'meta_width2', $meta_info_width2 . 'px' );
        }

        // meta info margin
        $meta_margin1 = $res_ctx->get_shortcode_att('meta_margin1');
        $res_ctx->load_settings_raw( 'meta_margin1', $meta_margin1 );
        if ( is_numeric( $meta_margin1 ) ) {
            $res_ctx->load_settings_raw( 'meta_margin1', $meta_margin1 . 'px' );
        }
        $meta_margin2 = $res_ctx->get_shortcode_att('meta_margin2');
        $res_ctx->load_settings_raw( 'meta_margin2', $meta_margin2 );
        if ( is_numeric( $meta_margin2 ) ) {
            $res_ctx->load_settings_raw( 'meta_margin2', $meta_margin2 . 'px' );
        }

        // meta info padding
        $meta_padding1 = $res_ctx->get_shortcode_att('meta_padding1');
        $res_ctx->load_settings_raw( 'meta_padding1', $meta_padding1 );
        if ( is_numeric( $meta_padding1 ) ) {
            $res_ctx->load_settings_raw( 'meta_padding1', $meta_padding1 . 'px' );
        }
        $meta_padding2 = $res_ctx->get_shortcode_att('meta_padding2');
        $res_ctx->load_settings_raw( 'meta_padding2', $meta_padding2 );
        if ( is_numeric( $meta_padding2 ) ) {
            $res_ctx->load_settings_raw( 'meta_padding2', $meta_padding2 . 'px' );
        }

        // underline height
        $underline_height1 = $res_ctx->get_shortcode_att('all_underline_height1');
        $res_ctx->load_settings_raw( 'all_underline_height1', $underline_height1 );
        if( $underline_height1 != '' && is_numeric( $underline_height1 ) ) {
            $res_ctx->load_settings_raw( 'all_underline_height1', $underline_height1 . 'px' );
        } else {
            $res_ctx->load_settings_raw( 'all_underline_height1', '0' );
        }
        $underline_height2 = $res_ctx->get_shortcode_att('all_underline_height2');
        $res_ctx->load_settings_raw( 'all_underline_height2', $underline_height2 );
        if( $underline_height2 != '' && is_numeric( $underline_height2 ) ) {
            $res_ctx->load_settings_raw( 'all_underline_height2', $underline_height2 . 'px' );
        } else {
            $res_ctx->load_settings_raw( 'all_underline_height2', '0' );
        }

        // article title space
        $art_title1 = $res_ctx->get_shortcode_att('art_title1');
        $res_ctx->load_settings_raw( 'art_title1', $art_title1 );
        if ( is_numeric( $art_title1 ) ) {
            $res_ctx->load_settings_raw( 'art_title1', $art_title1 . 'px' );
        }
        $art_title2 = $res_ctx->get_shortcode_att('art_title2');
        $res_ctx->load_settings_raw( 'art_title2', $art_title2 );
        if ( is_numeric( $art_title2 ) ) {
            $res_ctx->load_settings_raw( 'art_title2', $art_title2 . 'px' );
        }

        // article excerpt space
        $art_excerpt1 = $res_ctx->get_shortcode_att('art_excerpt1');
        $res_ctx->load_settings_raw( 'art_excerpt1', $art_excerpt1 );
        if ( is_numeric( $art_excerpt1 ) ) {
            $res_ctx->load_settings_raw( 'art_excerpt1', $art_excerpt1 . 'px' );
        }

        // article audio player space
        $art_audio1 = $res_ctx->get_shortcode_att('art_audio1');
        $res_ctx->load_settings_raw( 'art_audio1', $art_audio1 );
        if ( is_numeric( $art_audio1 ) ) {
            $res_ctx->load_settings_raw( 'art_audio1', $art_audio1 . 'px' );
        }
        $art_audio2 = $res_ctx->get_shortcode_att('art_audio2');
        $res_ctx->load_settings_raw( 'art_audio2', $art_audio2 );
        if ( is_numeric( $art_audio2 ) ) {
            $res_ctx->load_settings_raw( 'art_audio2', $art_audio2 . 'px' );
        }

        // article audio player size
        $art_audio_size1 = $res_ctx->get_shortcode_att('art_audio_size1');
        $res_ctx->load_settings_raw( 'art_audio_size1', 10 + $art_audio_size1/0.5 . 'px' );
        $art_audio_size2 = $res_ctx->get_shortcode_att('art_audio_size2');
        $res_ctx->load_settings_raw( 'art_audio_size2', 10 + $art_audio_size2/0.5 . 'px' );

        // category tag margin
        $modules_category_margin1 = $res_ctx->get_shortcode_att('modules_category_margin1');
        $res_ctx->load_settings_raw( 'modules_category_margin1', $modules_category_margin1 );
        if( $modules_category_margin1 != '' && is_numeric( $modules_category_margin1 ) ) {
            $res_ctx->load_settings_raw( 'modules_category_margin1', $modules_category_margin1 . 'px' );
        }
        $modules_category_margin2 = $res_ctx->get_shortcode_att('modules_category_margin2');
        $res_ctx->load_settings_raw( 'modules_category_margin2', $modules_category_margin2 );
        if( $modules_category_margin2 != '' && is_numeric( $modules_category_margin2 ) ) {
            $res_ctx->load_settings_raw( 'modules_category_margin2', $modules_category_margin2 . 'px' );
        }

        // category tag padding
        $modules_category_padding1 = $res_ctx->get_shortcode_att('modules_category_padding1');
        $res_ctx->load_settings_raw( 'modules_category_padding1', $modules_category_padding1 );
        if( $modules_category_padding1 != '' && is_numeric( $modules_category_padding1 ) ) {
            $res_ctx->load_settings_raw( 'modules_category_padding1', $modules_category_padding1 . 'px' );
        }
        $modules_category_padding2 = $res_ctx->get_shortcode_att('modules_category_padding2');
        $res_ctx->load_settings_raw( 'modules_category_padding2', $modules_category_padding2 );
        if( $modules_category_padding2 != '' && is_numeric( $modules_category_padding2 ) ) {
            $res_ctx->load_settings_raw( 'modules_category_padding2', $modules_category_padding2 . 'px' );
        }

        // module_border_width
        $modules_cat_border1 = $res_ctx->get_shortcode_att('modules_cat_border1');
        $res_ctx->load_settings_raw( 'modules_cat_border1', $modules_cat_border1 );
        if ( is_numeric( $modules_cat_border1 ) ) {
            $res_ctx->load_settings_raw( 'modules_cat_border1', $modules_cat_border1 . 'px' );
        }
        $modules_cat_border2 = $res_ctx->get_shortcode_att('modules_cat_border2');
        $res_ctx->load_settings_raw( 'modules_cat_border2', $modules_cat_border2 );
        if ( is_numeric( $modules_cat_border2 ) ) {
            $res_ctx->load_settings_raw( 'modules_cat_border2', $modules_cat_border2 . 'px' );
        }

        //category tag radius
        $modules_category_radius1 = $res_ctx->get_shortcode_att('modules_category_radius1');
        if ( $modules_category_radius1 != 0 || !empty($modules_category_radius1) ) {
            $res_ctx->load_settings_raw( 'modules_category_radius1', $modules_category_radius1 . 'px' );
        }
        $modules_category_radius2 = $res_ctx->get_shortcode_att('modules_category_radius2');
        if ( $modules_category_radius2 != 0 || !empty($modules_category_radius2) ) {
            $res_ctx->load_settings_raw( 'modules_category_radius2', $modules_category_radius2 . 'px' );
        }

        // author photo size
        $author_photo_size1 = $res_ctx->get_shortcode_att('author_photo_size1');
        $res_ctx->load_settings_raw( 'author_photo_size1', '20px' );
        if( $author_photo_size1 != '' && is_numeric( $author_photo_size1 ) ) {
            $res_ctx->load_settings_raw( 'author_photo_size1', $author_photo_size1 . 'px' );
        }
        $author_photo_size2 = $res_ctx->get_shortcode_att('author_photo_size2');
        $res_ctx->load_settings_raw( 'author_photo_size2', '20px' );
        if( $author_photo_size2 != '' && is_numeric( $author_photo_size2 ) ) {
            $res_ctx->load_settings_raw( 'author_photo_size2', $author_photo_size2 . 'px' );
        }

        // author photo space
        $author_photo_space1 = $res_ctx->get_shortcode_att('author_photo_space1');
        $res_ctx->load_settings_raw( 'author_photo_space1', '6px' );
        if( $author_photo_space1 != '' && is_numeric( $author_photo_space1 ) ) {
            $res_ctx->load_settings_raw( 'author_photo_space1', $author_photo_space1 . 'px' );
        }
        $author_photo_space2 = $res_ctx->get_shortcode_att('author_photo_space2');
        $res_ctx->load_settings_raw( 'author_photo_space2', '6px' );
        if( $author_photo_space2 != '' && is_numeric( $author_photo_space2 ) ) {
            $res_ctx->load_settings_raw( 'author_photo_space2', $author_photo_space2 . 'px' );
        }

        // author photo radius
        $author_photo_radius1 = $res_ctx->get_shortcode_att('author_photo_radius1');
        $res_ctx->load_settings_raw( 'author_photo_radius1', $author_photo_radius1 );
        if( $author_photo_radius1 != '' ) {
            if( is_numeric( $author_photo_radius1 ) ) {
                $res_ctx->load_settings_raw( 'author_photo_radius1', $author_photo_radius1 . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'author_photo_radius1', '50%' );
        }
        $author_photo_radius2 = $res_ctx->get_shortcode_att('author_photo_radius2');
        $res_ctx->load_settings_raw( 'author_photo_radius2', $author_photo_radius2 );
        if( $author_photo_radius2 != '' ) {
            if( is_numeric( $author_photo_radius2 ) ) {
                $res_ctx->load_settings_raw( 'author_photo_radius2', $author_photo_radius2 . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'author_photo_radius2', '50%' );
        }

        //show meta info details
        $res_ctx->load_settings_raw( 'show_cat1', $res_ctx->get_shortcode_att('show_cat1') );
        $res_ctx->load_settings_raw( 'show_cat2', $res_ctx->get_shortcode_att('show_cat2') );
        $res_ctx->load_settings_raw( 'show_excerpt1', $res_ctx->get_shortcode_att('show_excerpt1') );
        $show_audio1 = $res_ctx->get_shortcode_att('show_audio1');
        if( $show_audio1 == '' || $show_audio1 == 'block' ) {
            $res_ctx->load_settings_raw( 'show_audio1', 1 );
        } else if( $show_audio1 == 'none' ) {
            $res_ctx->load_settings_raw( 'hide_audio1', 1 );
        }
        $show_audio2 = $res_ctx->get_shortcode_att('show_audio2');
        if( $show_audio2 == '' || $show_audio2 == 'block' ) {
            $res_ctx->load_settings_raw( 'show_audio2', 1 );
        } else if( $show_audio2 == 'none' ) {
            $res_ctx->load_settings_raw( 'hide_audio2', 1 );
        }

        $show_author1 = $res_ctx->get_shortcode_att('show_author1');
        $show_date1 = $res_ctx->get_shortcode_att('show_date1');
        $show_review1 = $res_ctx->get_shortcode_att('show_review1');
        $review_size1 = $res_ctx->get_shortcode_att('review_size1');
        $res_ctx->load_settings_raw( 'review_size1', 10 + $review_size1/0.5 . 'px' );
        $show_com1 = $res_ctx->get_shortcode_att('show_com1');
        if( $show_author1 == 'none' && $show_date1 == 'none' && $show_com1 == 'none' && $show_review1 == 'none' ) {
            $res_ctx->load_settings_raw( 'hide_author_date1', 1 );
        }
        $res_ctx->load_settings_raw( 'show_author1', $show_author1 );
        $res_ctx->load_settings_raw( 'show_date1', $show_date1 );
        $res_ctx->load_settings_raw( 'show_review1', $show_review1 );
        $res_ctx->load_settings_raw( 'show_com1', $show_com1 );

        $show_author2 = $res_ctx->get_shortcode_att('show_author2');
        $show_date2 = $res_ctx->get_shortcode_att('show_date2');
        $show_review2 = $res_ctx->get_shortcode_att('show_review2');
        $review_size2 = $res_ctx->get_shortcode_att('review_size2');
        $res_ctx->load_settings_raw( 'review_size2', 10 + $review_size2/0.5 . 'px' );
        $show_com2 = $res_ctx->get_shortcode_att('show_com2');
        if( $show_author2 == 'none' && $show_date2 == 'none' && $show_com2 == 'none' && $show_review2 == 'none' ) {
            $res_ctx->load_settings_raw( 'hide_author_date2', 1 );
        }
        $res_ctx->load_settings_raw( 'show_author2', $show_author2 );
        $res_ctx->load_settings_raw( 'show_date2', $show_date2 );
        $res_ctx->load_settings_raw( 'show_review2', $show_review2 );
        $res_ctx->load_settings_raw( 'show_com2', $show_com2 );


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


	    // colors
	    //$res_ctx->load_settings_raw( 'm_bg', $res_ctx->get_shortcode_att('m_bg') );
	    $res_ctx->load_settings_raw( 'meta_bg', $res_ctx->get_shortcode_att('meta_bg') );
	    $res_ctx->load_settings_raw( 'cat_bg', $res_ctx->get_shortcode_att('cat_bg') );
	    $res_ctx->load_settings_raw( 'cat_txt', $res_ctx->get_shortcode_att('cat_txt') );
	    $res_ctx->load_settings_raw( 'cat_bg_hover', $res_ctx->get_shortcode_att('cat_bg_hover') );
	    $res_ctx->load_settings_raw( 'cat_txt_hover', $res_ctx->get_shortcode_att('cat_txt_hover') );
        $res_ctx->load_settings_raw( 'cat_border', $res_ctx->get_shortcode_att('cat_border') );
        $res_ctx->load_settings_raw( 'cat_border_hover', $res_ctx->get_shortcode_att('cat_border_hover') );
	    $res_ctx->load_settings_raw( 'title_txt', $res_ctx->get_shortcode_att('title_txt') );
	    $res_ctx->load_settings_raw( 'title_txt_hover', $res_ctx->get_shortcode_att('title_txt_hover') );

	    $underline_color = $res_ctx->get_shortcode_att('all_underline_color');
	    if ( ($underline_height1 != 0 || $underline_height2 != 0 ) ) {
	        if( $underline_color == '' ) {
                $res_ctx->load_settings_raw('all_underline_color', '#000');
            } else {
                $res_ctx->load_settings_raw('all_underline_color', $res_ctx->get_shortcode_att('all_underline_color'));
            }
        }

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
        $res_ctx->load_settings_raw( 'pag_text', $res_ctx->get_shortcode_att('pag_text') );
        $res_ctx->load_settings_raw( 'pag_bg', $res_ctx->get_shortcode_att('pag_bg') );
        $res_ctx->load_settings_raw( 'pag_border', $res_ctx->get_shortcode_att('pag_border') );
        $res_ctx->load_settings_raw( 'pag_h_text', $res_ctx->get_shortcode_att('pag_h_text') );
        $res_ctx->load_settings_raw( 'pag_h_bg', $res_ctx->get_shortcode_att('pag_h_bg') );
        $res_ctx->load_settings_raw( 'pag_h_border', $res_ctx->get_shortcode_att('pag_h_border') );

        // shadow
        $res_ctx->load_shadow_settings( 0, 0, 0, 0, 'rgba(0, 0, 0, 0.08)', 'shadow' );

        // video pop-up
        $res_ctx->load_settings_raw( 'video_rec_color', $res_ctx->get_shortcode_att('video_rec_color') );
        $res_ctx->load_settings_raw( 'video_title_color', $res_ctx->get_shortcode_att('video_title_color') );
        $res_ctx->load_settings_raw( 'video_title_color_h', $res_ctx->get_shortcode_att('video_title_color_h') );
        $res_ctx->load_color_settings( 'video_bg', 'video_bg_color', 'video_bg_gradient', '', '' );
        $res_ctx->load_color_settings( 'video_overlay', 'video_overlay_color', 'video_overlay_gradient', '', '' );

        // video duration
        $res_ctx->load_settings_raw( 'vid_t_color', $res_ctx->get_shortcode_att('vid_t_color') );
        $res_ctx->load_settings_raw( 'vid_t_bg_color', $res_ctx->get_shortcode_att('vid_t_bg_color') );


	    // fonts
	    $res_ctx->load_font_settings( 'f_header' );
	    $res_ctx->load_font_settings( 'f_ajax' );
        $res_ctx->load_font_settings( 'f_more' );
        $res_ctx->load_font_settings( 'f_title1' );
        $res_ctx->load_font_settings( 'f_cat1' );
        $res_ctx->load_font_settings( 'f_meta1' );
        $res_ctx->load_font_settings( 'f_ex1' );
        $res_ctx->load_font_settings( 'f_title2' );
        $res_ctx->load_font_settings( 'f_cat2' );
        $res_ctx->load_font_settings( 'f_meta2' );

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
            
                /* @columns */
				.$unique_block_class .td_module_flex_1 {
					width: @columns;
					float: left;
				}
				/* @modules_column_width */
				.$unique_block_class .td_module_column {
				    width: @modules_column_width;
					float: left;
				}
				/* @modules_width */
				.$unique_block_class .td_module_flex_3 {
				    width: @modules_width;
					float: left;
				}
				/* @clearfix */
				.$unique_block_class .td_module_flex_3:nth-child(2n+1) {
				    clear: both;
				}
            
                /* @columns_gap */
				.$unique_block_class .td_module_wrap {
					padding-left: @columns_gap;
					padding-right: @columns_gap;
				}
				.$unique_block_class .td_block_inner {
					margin-left: -@columns_gap;
					margin-right: -@columns_gap;
				}
            
            
				/* @modules_space1 */
				.$unique_block_class .td_module_flex_1 {
					padding-bottom: @modules_space1;
					margin-bottom: @modules_space1;
				}
				.$unique_block_class .td_module_flex_1 .td-module-container:before {
					bottom: -@modules_space1;
				}
				/* @modules_space2 */
				.$unique_block_class .td_module_flex_3 {
					padding-bottom: @modules_space2;
					margin-bottom: @modules_space2;
				}
				.$unique_block_class .td_module_flex_3 .td-module-container:before {
					bottom: -@modules_space2;
				}
				.$unique_block_class .td_module_column:last-child .td_module_flex_3:last-child {
				    margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}
				.$unique_block_class .td_module_flex_3:last-child .td-module-container:before {
				    display: none;
				}
				/* @modules_no_padding */
				.$unique_block_class .td_module_flex_3:nth-last-child(2) {
				    margin-bottom: 0 !important;
					padding-bottom: 0 !important;
				}
				.$unique_block_class .td_module_flex_3:nth-last-child(2) .td-module-container:before {
				    display: none;
				}
				
				/* @modules_border_size1 */
				.$unique_block_class .td_module_flex_1 .td-module-container {
				    border-width: @modules_border_size1;
				    border-style: solid;
				    border-color: #000;
				}
				/* @modules_border_size2 */
				.$unique_block_class .td_module_flex_3 .td-module-container {
				    border-width: @modules_border_size2;
				    border-style: solid;
				    border-color: #000;
				}
				/* @modules_border_style1 */
				.$unique_block_class .td_module_flex_1 .td-module-container {
				    border-style: @modules_border_style1;
				}
				/* @modules_border_style2 */
				.$unique_block_class .td_module_flex_3 .td-module-container {
				    border-style: @modules_border_style2;
				}
				/* @modules_border_color1 */
				.$unique_block_class .td_module_flex_1 .td-module-container {
				    border-color: @modules_border_color1;
				}
				/* @modules_border_color2 */
				.$unique_block_class .td_module_flex_3 .td-module-container {
				    border-color: @modules_border_color2;
				}
				
				/* @modules_divider1 */
				.$unique_block_class .td_module_flex_1 .td-module-container:before {
					border-width: 0 0 1px 0;
					border-style: @modules_divider1;
					border-color: #eaeaea;
				}
				/* @modules_divider2 */
				.$unique_block_class .td_module_flex_3 .td-module-container:before {
					border-width: 0 0 1px 0;
					border-style: @modules_divider2;
					border-color: #eaeaea;
				}
				/* @modules_divider_color1 */
				.$unique_block_class .td_module_flex_1 .td-module-container:before {
					border-color: @modules_divider_color1;
				}
				/* @modules_divider_color2 */
				.$unique_block_class .td_module_flex_3 .td-module-container:before {
					border-color: @modules_divider_color2;
				}
				


				/* @image_alignment1 */
				.$unique_block_class .td_module_flex_1 .entry-thumb {
					background-position: center @image_alignment1;
				}
				/* @image_alignment2 */
				.$unique_block_class .td_module_flex_3 .entry-thumb {
					background-position: center @image_alignment2;
				}

				/* @image_width2 */
				.$unique_block_class .td_module_flex_3 .td-image-container {
				 	flex: 0 0 @image_width2;
				 	width: @image_width2;
			    }
			    
			    /* @image_height1 */
				.$unique_block_class .td_module_flex_1 .td-image-wrap {
					padding-bottom: @image_height1;
				}
				.ie10 .$unique_block_class .td_module_flex_1 .td-image-container,
				.ie11 .$unique_block_class .td_module_flex_1 .td-image-container {
				 	flex: 0 0 auto;
			    }
			    /* @image_height2 */
				.$unique_block_class .td_module_flex_3 .td-image-wrap {
					padding-bottom: @image_height2;
				}
				.ie10 .$unique_block_class .td_module_flex_3 .td-image-container,
				.ie11 .$unique_block_class .td_module_flex_3 .td-image-container {
				 	flex: 0 0 auto;
			    }
			    
			    /* @image_radius1 */
				.$unique_block_class .td_module_flex_1 .entry-thumb,
				.$unique_block_class .td_module_flex_1 .entry-thumb:before,
				.$unique_block_class .td_module_flex_1 .entry-thumb:after {
					border-radius: @image_radius1;
				}
			    /* @image_radius2 */
				.$unique_block_class .td_module_flex_3 .entry-thumb,
				.$unique_block_class .td_module_flex_3 .entry-thumb:before,
				.$unique_block_class .td_module_flex_3 .entry-thumb:after {
					border-radius: @image_radius2;
				}
				
				/* @video_icon1 */
				.$unique_block_class .td_module_flex_1 .td-video-play-ico {
					width: @video_icon1;
					height: @video_icon1;
					font-size: @video_icon1;
				}
				/* @video_icon2 */
				.$unique_block_class .td_module_flex_3 .td-video-play-ico {
					width: @video_icon2;
					height: @video_icon2;
					font-size: @video_icon2;
				}
				
				/* @show_vid_t */
				.$unique_block_class .td_module_flex_1 .td-post-vid-time {
					display: @show_vid_t;
				}
				/* @show_vid_t2 */
				.$unique_block_class .td_module_flex_3 .td-post-vid-time {
					display: @show_vid_t2;
				}
				/* @vid_t_margin */
				.$unique_block_class .td_module_flex_1 .td-post-vid-time {
					margin: @vid_t_margin;
				}
				/* @vid_t_margin2 */
				.$unique_block_class .td_module_flex_3 .td-post-vid-time {
					margin: @vid_t_margin2;
				}
				/* @vid_t_padding */
				.$unique_block_class .td_module_flex_1 .td-post-vid-time {
					padding: @vid_t_padding;
				}
				/* @vid_t_padding2 */
				.$unique_block_class .td_module_flex_3 .td-post-vid-time {
					padding: @vid_t_padding2;
				}
				
				/* @meta_info_align_top1 */
				.$unique_block_class .td_module_flex_1 .td-module-container {
					flex-direction: column-reverse;
				}
				.$unique_block_class .td_module_flex_1 .td-category-pos-image .td-post-category {
					top: 0;
					bottom: auto;
				}
				/* @meta_info_align_bottom1 */
				.$unique_block_class .td_module_flex_1 .td-module-container {
					flex-direction: column;
				}
				.$unique_block_class .td_module_flex_1 .td-category-pos-image .td-post-category {
					top: auto;
					bottom: 0;
				}
				/* @meta_info_align2 */
				.$unique_block_class .td_module_flex_3 .td-module-container {
					align-items: @meta_info_align2;
				}
				
				/* @meta_horiz_align_center1 */
				.$unique_block_class .td_module_flex_1 .td-module-meta-info {
					text-align: center;
				}
				.$unique_block_class .td_module_flex_1 .td-category-pos-image .td-post-category {
					left: 50%;
					transform: translateX(-50%);
					-webkit-transform: translateX(-50%);
				}
				.$unique_block_class.td-h-effect-up-shadow .td_module_flex_1:hover .td-category-pos-image .td-post-category {
				    transform: translate(-50%, -2px);
					-webkit-transform: translate(-50%, -2px);
				}
				/* @meta_horiz_align_right1 */
				.$unique_block_class .td_module_flex_1 .td-module-meta-info {
					text-align: right;
				}
				/* @meta_horiz_align_center2 */
				.$unique_block_class .td_module_flex_3 .td-module-meta-info {
					text-align: center;
				}
				.$unique_block_class .td_module_flex_3 .td-category-pos-image .td-post-category {
					left: 50%;
					transform: translateX(-50%);
					-webkit-transform: translateX(-50%);
				}
				.$unique_block_class.td-h-effect-up-shadow .td_module_flex_3:hover .td-category-pos-image .td-post-category {
				    transform: translate(-50%, -2px);
					-webkit-transform: translate(-50%, -2px);
				}
				/* @meta_horiz_align_right2 */
				.$unique_block_class .td_module_flex_3 .td-module-meta-info {
					text-align: right;
				}
				
				/* @meta_width1 */
				.$unique_block_class .td_module_flex_1 .td-module-meta-info {
					max-width: @meta_width1;
				}
				/* @meta_width2 */
				.$unique_block_class .td_module_flex_3 .td-module-meta-info {
					max-width: @meta_width2;
				}
				
				/* @meta_margin1 */
				.$unique_block_class .td_module_flex_1 .td-module-meta-info {
					margin: @meta_margin1;
				}
				/* @meta_margin2 */
				.$unique_block_class .td_module_flex_3 .td-module-meta-info {
					margin: @meta_margin2;
				}
				
				/* @meta_padding1 */
				.$unique_block_class .td_module_flex_1 .td-module-meta-info {
					padding: @meta_padding1;
				}
				/* @meta_padding2 */
				.$unique_block_class .td_module_flex_3 .td-module-meta-info {
					padding: @meta_padding2;
				}
				
				/* @art_title1 */
				.$unique_block_class .td_module_flex_1 .entry-title {
					margin: @art_title1;
				}
				/* @art_title2 */
				.$unique_block_class .td_module_flex_3 .entry-title {
					margin: @art_title2;
				}
				
				/* @art_excerpt1 */
				.$unique_block_class .td_module_flex_1 .td-excerpt {
					margin: @art_excerpt1;
				}
				
				/* @art_audio1 */
				.$unique_block_class .td_module_flex_1 .td-audio-player {
					margin: @art_audio1;
				}
				/* @art_audio2 */
				.$unique_block_class .td_module_flex_3 .td-audio-player {
					margin: @art_audio2;
				}
				
				/* @art_audio_size1 */
				.$unique_block_class .td_module_flex_1 .td-audio-player {
					font-size: @art_audio_size1;
				}
				/* @art_audio_size2 */
				.$unique_block_class .td_module_flex_3 .td-audio-player {
					font-size: @art_audio_size2;
				}
				
				/* @modules_category_margin1 */
				.$unique_block_class .td_module_flex_1 .td-post-category {
					margin: @modules_category_margin1;
				}
				/* @modules_category_margin2 */
				.$unique_block_class .td_module_flex_3 .td-post-category {
					margin: @modules_category_margin2;
				}
				
				/* @modules_category_padding1 */
				.$unique_block_class .td_module_flex_1 .td-post-category {
					padding: @modules_category_padding1;
				}
				/* @modules_category_padding2 */
				.$unique_block_class .td_module_flex_3 .td-post-category {
					padding: @modules_category_padding2;
				}
				
				/* @modules_cat_border1 */
                .$unique_block_class .td_module_flex_1 .td-post-category {
                    border: @modules_cat_border1 solid #aaa;
                }
				/* @modules_cat_border2 */
                .$unique_block_class .td_module_flex_3 .td-post-category {
                    border: @modules_cat_border2 solid #aaa;
                }
                /* @cat_border */
                .$unique_block_class .td_module_wrap .td-post-category {
                    border-color: @cat_border;
                }
                /* @cat_border_hover */
                .$unique_block_class .td_module_wrap .td-post-category:hover {
                    border-color: @cat_border_hover;
                }
				
				/* @modules_category_radius1 */
				.$unique_block_class .td_module_flex_1 .td-post-category {
					border-radius: @modules_category_radius1;
				}
				/* @modules_category_radius2 */
				.$unique_block_class .td_module_flex_3 .td-post-category {
					border-radius: @modules_category_radius2;
				}
				
				/* @author_photo_size1 */
				.$unique_block_class .td_module_flex_1 .td-author-photo .avatar {
				    width: @author_photo_size1;
				    height: @author_photo_size1;
				}
				/* @author_photo_size2 */
				.$unique_block_class .td_module_flex_3 .td-author-photo .avatar {
				    width: @author_photo_size2;
				    height: @author_photo_size2;
				}
				
				/* @author_photo_space1 */
				.$unique_block_class .td_module_flex_1 .td-author-photo .avatar {
				    margin-right: @author_photo_space1;
				}
				/* @author_photo_space2 */
				.$unique_block_class .td_module_flex_3 .td-author-photo .avatar {
				    margin-right: @author_photo_space2;
				}
				
				/* @author_photo_radius1 */
				.$unique_block_class .td_module_flex_1 .td-author-photo .avatar {
				    border-radius: @author_photo_radius1;
				}
				/* @author_photo_radius2 */
				.$unique_block_class .td_module_flex_3 .td-author-photo .avatar {
				    border-radius: @author_photo_radius2;
				}
				
				/* @show_cat1 */
				.$unique_block_class .td_module_flex_1 .td-post-category {
					display: @show_cat1;
				}
				/* @show_cat2 */
				.$unique_block_class .td_module_flex_3 .td-post-category {
					display: @show_cat2;
				}
				
				/* @show_excerpt1 */
				.$unique_block_class .td_module_flex_1 .td-excerpt {
					display: @show_excerpt1;
				}
				
				/* @show_audio1 */
				.$unique_block_class .td_module_flex_1 .td-audio-player {
					opacity: 1;
					visibility: visible;
					height: auto;
				}
				/* @hide_audio1 */
				.$unique_block_class .td_module_flex_1 .td-audio-player {
					opacity: 0;
					visibility: hidden;
					height: 0;
				}
				/* @show_audio2 */
				.$unique_block_class .td_module_flex_3 .td-audio-player {
					opacity: 1;
					visibility: visible;
					height: auto;
				}
				/* @hide_audio2 */
				.$unique_block_class .td_module_flex_3 .td-audio-player {
					opacity: 0;
					visibility: hidden;
					height: 0;
				}
				
				/* @hide_author_date1 */
				.$unique_block_class .td_module_flex_1 .td-author-date {
					display: none;
				}
				/* @hide_author_date2 */
				.$unique_block_class .td_module_flex_3 .td-author-date {
					display: none;
				}
				
				/* @show_author1 */
				.$unique_block_class .td_module_flex_1 .td-post-author-name {
					display: @show_author1;
				}
				/* @show_author2 */
				.$unique_block_class .td_module_flex_3 .td-post-author-name {
					display: @show_author2;
				}
				
				/* @show_date1 */
				.$unique_block_class .td_module_flex_1 .td-post-date,
				.$unique_block_class .td_module_flex_1 .td-post-author-name span {
					display: @show_date1;
				}
				/* @show_date2 */
				.$unique_block_class .td_module_flex_3 .td-post-date,
				.$unique_block_class .td_module_flex_3 .td-post-author-name span {
					display: @show_date2;
				}
				
				/* @show_review1 */
				.$unique_block_class .td_module_flex_1 .entry-review-stars {
					display: @show_review1;
				}
				/* @review_size1 */
				.$unique_block_class .td_module_flex_1 .td-icon-star,
                .$unique_block_class .td_module_flex_1 .td-icon-star-empty,
                .$unique_block_class .td_module_flex_1 .td-icon-star-half {
					font-size: @review_size1;
				}
				/* @show_review2 */
				.$unique_block_class .td_module_flex_3 .entry-review-stars {
					display: @show_review2;
				}
				/* @review_size2 */
				.$unique_block_class .td_module_flex_3 .td-icon-star,
                .$unique_block_class .td_module_flex_3 .td-icon-star-empty,
                .$unique_block_class .td_module_flex_3 .td-icon-star-half {
					font-size: @review_size2;
				}
				
				/* @show_com1 */
				.$unique_block_class .td_module_flex_1 .td-module-comments {
					display: @show_com1;
				}
				/* @show_com2 */
				.$unique_block_class .td_module_flex_3 .td-module-comments {
					display: @show_com2;
				}
				
				/* @pag_space */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap,
				.$unique_block_class .td-load-more-wrap {
					margin-top: @pag_space;
				}
				/* @pag_padding */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a,
				.$unique_block_class .td-load-more-wrap a {
					padding: @pag_padding;
				}
				.$unique_block_class .page-nav .pages {
				    padding-right: 0;
				}
				/* @pag_border_width */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a,
				.$unique_block_class .td-load-more-wrap a {
					border-width: @pag_border_width;
				}
				/* @pag_border_radius */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a,
				.$unique_block_class .td-load-more-wrap a {
					border-radius: @pag_border_radius;
				}
				/* @pag_icons_size */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a,
				.$unique_block_class .td-load-more-wrap a i {
					font-size: @pag_icons_size;
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
				
				/* @align_category_bottom */
				.$unique_block_class .td-category-pos-image .td-post-category {
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
				
				
				
				
			
				
				
				/* @clear */
				.$unique_block_class .td_module_flex_3:nth-child(@clear) {
					clear: both !important;
				}
				/* @m_bg */
				.$unique_block_class .td-module-container {
					background-color: @m_bg;
				}
				/* @shadow */
				.$unique_block_class .td-module-container {
				    box-shadow: @shadow;
				}
				/* @meta_bg */
				.$unique_block_class .td-module-meta-info {
					background-color: @meta_bg;
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
                /* @all_underline_height1 */
                .$unique_block_class .td_module_flex_1:hover .td-module-title a {
                    box-shadow: inset 0 -@all_underline_height1 0 0 @all_underline_color;
                }
                /* @all_underline_height2 */
                .$unique_block_class .td_module_flex_3:hover .td-module-title a {
                    box-shadow: inset 0 -@all_underline_height2 0 0 @all_underline_color;
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
				/* @video_bg_color */
				#td-video-modal.$unique_block_modal_class .td-vm-content-wrap {
				    background-color: @video_bg_color;
				}
				/* @video_bg_gradient */
				#td-video-modal.$unique_block_modal_class .td-vm-content-wrap {
				    @video_bg_gradient
				}
				/* @video_overlay_color */
				#td-video-modal.$unique_block_modal_class .td-vm-overlay {
				    background-color: @video_overlay_color;
				}
				/* @video_overlay_gradient */
				#td-video-modal.$unique_block_modal_class .td-vm-overlay {
				    background-color: @video_overlay_gradient;
				}
				
				/* @vid_t_color */
				.$unique_block_class .td-post-vid-time {
					color: @vid_t_color;
				}
				/* @vid_t_bg_color */
				.$unique_block_class .td-post-vid-time {
					background-color: @vid_t_bg_color;
				}
				
                
				

				/* @f_header */
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
				/* @f_title1 */
				.$unique_block_class .td_module_flex_1 .entry-title {
					@f_title1
				}
				/* @f_cat1 */
				.$unique_block_class .td_module_flex_1 .td-post-category {
					@f_cat1
				}
				/* @f_meta1 */
				.$unique_block_class .td_module_flex_1 .td-editor-date,
				.$unique_block_class .td_module_flex_1 .td-editor-date .td-post-author-name,
				.$unique_block_class .td_module_flex_1 .td-module-comments a {
					@f_meta1
				}
				/* @f_ex1 */
				.$unique_block_class .td_module_flex_1 .td-excerpt {
					@f_ex1
				}
				/* @f_title2 */
				.$unique_block_class .td_module_flex_3 .entry-title {
					@f_title2
				}
				/* @f_cat2 */
				.$unique_block_class .td_module_flex_3 .td-post-category {
					@f_cat2
				}
				/* @f_meta2 */
				.$unique_block_class .td_module_flex_3 .td-editor-date,
				.$unique_block_class .td_module_flex_3 .td-editor-date .td-post-author-name,
				.$unique_block_class .td_module_flex_3 .td-module-comments a {
					@f_meta2
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

    function render($atts, $content = null) {

        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        $additional_classes = array();

        // hover effect
        $h_effect = $this->get_att('h_effect');
        if( $h_effect != '' ) {
            $additional_classes[] = 'td-h-effect-' . $h_effect;
        }

        $buffy = ''; //output buffer

        $buffy .= '<div class="' . $this->get_block_classes($additional_classes) . ' td_flex_block" ' . $this->get_block_html_atts() . '>';

		    //get the block js
		    $buffy .= $this->get_block_css();

		    //get the js for this block
		    $buffy .= $this->get_block_js();

            // block title wrap
            $buffy .= '<div class="td-block-title-wrap">';
                $buffy .= $this->get_block_title(); //get the block title
                $buffy .= $this->get_pull_down_filter(); //get the sub category filter for this block
            $buffy .= '</div>';

            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner td-mc1-wrap">';
	                $buffy .= $this->inner($this->td_query->posts);//inner content of the block
            $buffy .= '</div>';

            //get the ajax pagination for this block
            $prev_icon = $this->get_att('prev_tdicon');
            $next_icon = $this->get_att('next_tdicon');
            $buffy .= $this->get_block_pagination($prev_icon, $next_icon);
        $buffy .= '</div>';
        return $buffy;
    }

    function inner($posts) {

        $buffy = '';
        $td_block_layout = new td_block_layout();

        $td_post_count = 0;

        if (!empty($posts)) {
            foreach ($posts as $post) {
                $td_module_flex_1 = new td_module_flex_1($post, $this->get_all_atts());
                $td_module_flex_3 = new td_module_flex_3($post, $this->get_all_atts());

                if ($td_post_count == 0) {
                    $buffy .= $td_module_flex_1->render($post);
                }
                if ($td_post_count == 1) {
                    $buffy .= '<div class="td_module_column">';
                    $buffy .= $td_module_flex_3->render($post);
                }
                if ($td_post_count > 1) {
                    $buffy .= $td_module_flex_3->render($post);
                }
                $td_post_count++;
            }
            if ($td_post_count >= 2) {
	            $buffy .= '</div>';
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
            // block subcategory ajax filters!
            var jquery_object_container = jQuery('.<?php printf( '%1$s', $this->block_uid ) ?>');
            if ( jquery_object_container.length) {
                var horizontal_jquery_obj = jquery_object_container.find('.td-subcat-list:first');

                if ( horizontal_jquery_obj.length) {
                    // make a new item
                    var pulldown_item_obj = new tdPullDown.item();
                    pulldown_item_obj.blockUid = jquery_object_container.data('td-block-uid'); // get the block UID
                    pulldown_item_obj.horizontal_jquery_obj = horizontal_jquery_obj;
                    pulldown_item_obj.vertical_jquery_obj = jquery_object_container.find('.td-subcat-dropdown:first');
                    pulldown_item_obj.horizontal_element_css_class = 'td-subcat-item';
                    pulldown_item_obj.container_jquery_obj = horizontal_jquery_obj.closest('.td-block-title-wrap');
                    pulldown_item_obj.excluded_jquery_elements = [pulldown_item_obj.container_jquery_obj.find('.td-pulldown-size')];
                    tdPullDown.add_item(pulldown_item_obj); // add the item

                }
            }
            
            /* global jQuery:{} */
            (function () {
                var block = jQuery('.<?php echo $this->block_uid; ?>'),
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