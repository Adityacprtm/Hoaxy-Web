<?php

class td_flex_block_2 extends td_block {

    static function cssMedia( $res_ctx ) {

        // modules height
        $modules_height = $res_ctx->get_shortcode_att('modules_height');
        $res_ctx->load_settings_raw( 'modules_height', '460px' );
        if( $modules_height != '' && is_numeric( $modules_height ) ) {
            $res_ctx->load_settings_raw( 'modules_height', $modules_height . 'px' );
        }

        // image margin right
        $image_margin = $res_ctx->get_shortcode_att('image_margin');
        $image_margin_right = $res_ctx->get_shortcode_att('image_margin_right');
        if( $image_margin_right == '' ) {
            if( $image_margin != '' ) {
                if( is_numeric( $image_margin ) ) {
                    $res_ctx->load_settings_raw( 'image_margin_left', $image_margin . 'px' );
                }
            } else {
                $res_ctx->load_settings_raw( 'image_margin_left', '100px' );
            }
        } else {
            if( $image_margin != '' ) {
                if ( is_numeric($image_margin) ) {
                    $res_ctx->load_settings_raw('image_margin_right', $image_margin . 'px');
                }
            } else {
                $res_ctx->load_settings_raw( 'image_margin_right', '100px' );
            }
        }

        // modules bottom margin
        $modules_space = $res_ctx->get_shortcode_att('modules_space');
        $res_ctx->load_settings_raw( 'modules_space', '36px' );
        if( $modules_space != '' && is_numeric( $modules_space ) ) {
            $res_ctx->load_settings_raw( 'modules_space', $modules_space . 'px' );
        }

        // block title over image
        $res_ctx->load_settings_raw( 'block_title_over', $res_ctx->get_shortcode_att('block_title_over') );

        // block title space
        $block_title_space = $res_ctx->get_shortcode_att('block_title_space');
        $res_ctx->load_settings_raw( 'block_title_space', $block_title_space );
        if( $block_title_space != '' ) {
            if ( is_numeric( $block_title_space ) ) {
                $res_ctx->load_settings_raw( 'block_title_space', $block_title_space . 'px' );
            }
        }

        // next prev position
        $nextprev_position = $res_ctx->get_shortcode_att('nextprev_position');
        if( $nextprev_position == 'bottom' ) {
            $res_ctx->load_settings_raw( 'nextprev_position', 'bottom: 0;' );
        } else {
            $res_ctx->load_settings_raw( 'nextprev_position', 'top: 0;' );
        }

        // next prev space
        $nextprev = $res_ctx->get_shortcode_att('nextprev');
        $res_ctx->load_settings_raw( 'nextprev', $nextprev );
        if( $nextprev != '' ) {
            if ( is_numeric( $nextprev ) ) {
                $res_ctx->load_settings_raw( 'nextprev', $nextprev . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'nextprev', '20px 20px 0 0' );
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



        /*-- IMAGE-- */
        //image alignment
        $res_ctx->load_settings_raw( 'image_alignment', $res_ctx->get_shortcode_att('image_alignment') . '%' );

        // image radius
        $image_radius = $res_ctx->get_shortcode_att('image_radius');
        $res_ctx->load_settings_raw( 'image_radius', $image_radius );
        if( $image_radius != '' ) {
            if( is_numeric( $image_radius ) ) {
                $res_ctx->load_settings_raw( 'image_radius', $image_radius . 'px' );
            }
        }

        // video icon size
        $video_icon = $res_ctx->get_shortcode_att('video_icon');
        if ( $video_icon != '' && is_numeric( $video_icon ) ) {
            $res_ctx->load_settings_raw( 'video_icon', $video_icon . 'px' );
        }

        // video icon position
        $video_icon_pos = $res_ctx->get_shortcode_att('video_icon_pos');
        if( $video_icon_pos == '' || $video_icon_pos == 'center' ) {
            $res_ctx->load_settings_raw( 'video_icon_pos_center', 1 );
        } else if ( $video_icon_pos == 'corner' ) {
            $res_ctx->load_settings_raw( 'video_icon_pos_corner', 1 );
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




        /*-- META INFO-- */
        // meta info vertical align
        $meta_info_align = $res_ctx->get_shortcode_att('meta_info_align');
        if ( $meta_info_align == 'center' ) {
            $res_ctx->load_settings_raw( 'meta_vert_align_center', 1 );
        } else if ( $meta_info_align == 'bottom' ) {
            $res_ctx->load_settings_raw( 'meta_vert_align_bottom', 1 );
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
	    if( $meta_padding != '' ) {
            if ( is_numeric( $meta_padding ) ) {
                $res_ctx->load_settings_raw( 'meta_padding', $meta_padding . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'meta_padding', '0 40px 40px 0' );
        }

        // underline height
        $underline_height = $res_ctx->get_shortcode_att('all_underline_height');
        $res_ctx->load_settings_raw( 'all_underline_height', $underline_height );
        if( $underline_height != '' && is_numeric( $underline_height ) ) {
            $res_ctx->load_settings_raw( 'all_underline_height', $underline_height . 'px' );
        } else {
            $res_ctx->load_settings_raw( 'all_underline_height', '0' );
        }

        // module_border_width
        $modules_cat_border = $res_ctx->get_shortcode_att('modules_cat_border');
        $res_ctx->load_settings_raw( 'modules_cat_border', $modules_cat_border );
        if ( is_numeric( $modules_cat_border ) ) {
            $res_ctx->load_settings_raw( 'modules_cat_border', $modules_cat_border . 'px' );
        }

        // article title space
	    $art_title = $res_ctx->get_shortcode_att('art_title');
	    $res_ctx->load_settings_raw( 'art_title', $art_title );
	    if( $art_title != '' ) {
            if ( is_numeric( $art_title ) ) {
                $res_ctx->load_settings_raw( 'art_title', $art_title . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'art_title', '0 0 8px 0' );
        }

	    // article excerpt space
	    $art_excerpt = $res_ctx->get_shortcode_att('art_excerpt');
	    $res_ctx->load_settings_raw( 'art_excerpt', $art_excerpt );
	    if( $art_excerpt != '' ) {
            if ( is_numeric( $art_excerpt ) ) {
                $res_ctx->load_settings_raw( 'art_excerpt', $art_excerpt . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'art_excerpt', '18px 0 0 0' );
        }

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
        // category tag radius
        $modules_category_radius = $res_ctx->get_shortcode_att('modules_category_radius');
        if ( $modules_category_radius != 0 || !empty($modules_category_radius) ) {
            $res_ctx->load_settings_raw( 'modules_category_radius', $modules_category_radius . 'px' );
        }

	    // show meta info details
	    $res_ctx->load_settings_raw( 'show_cat', $res_ctx->get_shortcode_att('show_cat') );
	    $res_ctx->load_settings_raw( 'show_excerpt', $res_ctx->get_shortcode_att('show_excerpt') );
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



        /*-- FONTS-- */
	    $res_ctx->load_font_settings( 'f_header' );
	    $res_ctx->load_font_settings( 'f_ajax' );
        $res_ctx->load_font_settings( 'f_more' );
	    $res_ctx->load_font_settings( 'f_title' );
	    $res_ctx->load_font_settings( 'f_cat' );
	    $res_ctx->load_font_settings( 'f_meta' );
	    $res_ctx->load_font_settings( 'f_ex' );

        $res_ctx->load_font_settings( 'f_vid_title' );
        $res_ctx->load_font_settings( 'f_vid_time' );



        /*-- COLORS-- */
        $res_ctx->load_color_settings( 'color_overlay', 'overlay', 'overlay_gradient', '', '' );
        $res_ctx->load_settings_raw( 'color_overlay', $res_ctx->get_shortcode_att('color_overlay') );
	    $res_ctx->load_settings_raw( 'meta_bg', $res_ctx->get_shortcode_att('meta_bg') );
        $res_ctx->load_settings_raw( 'nextprev_icon', $res_ctx->get_shortcode_att('nextprev_icon') );
        $res_ctx->load_settings_raw( 'nextprev_bg', $res_ctx->get_shortcode_att('nextprev_bg') );
        $res_ctx->load_settings_raw( 'nextprev_icon_h', $res_ctx->get_shortcode_att('nextprev_icon_h') );
        $res_ctx->load_settings_raw( 'nextprev_bg_h', $res_ctx->get_shortcode_att('nextprev_bg_h') );
	    $res_ctx->load_settings_raw( 'cat_bg', $res_ctx->get_shortcode_att('cat_bg') );
	    $res_ctx->load_settings_raw( 'cat_txt', $res_ctx->get_shortcode_att('cat_txt') );
	    $res_ctx->load_settings_raw( 'cat_bg_hover', $res_ctx->get_shortcode_att('cat_bg_hover') );
	    $res_ctx->load_settings_raw( 'cat_txt_hover', $res_ctx->get_shortcode_att('cat_txt_hover') );
        $res_ctx->load_settings_raw( 'cat_border', $res_ctx->get_shortcode_att('cat_border') );
        $res_ctx->load_settings_raw( 'cat_border_hover', $res_ctx->get_shortcode_att('cat_border_hover') );
	    $res_ctx->load_settings_raw( 'title_txt', $res_ctx->get_shortcode_att('title_txt') );
	    $res_ctx->load_settings_raw( 'title_txt_hover', $res_ctx->get_shortcode_att('title_txt_hover') );

        $underline_color = $res_ctx->get_shortcode_att('all_underline_color');
        if ( $underline_height != 0 ) {
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
	    $res_ctx->load_settings_raw( 'com_txt', $res_ctx->get_shortcode_att('com_txt') );
        $res_ctx->load_settings_raw( 'com_icon', $res_ctx->get_shortcode_att('com_icon') );

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

        // video pop-up
        $res_ctx->load_settings_raw( 'video_rec_color', $res_ctx->get_shortcode_att('video_rec_color') );
        $res_ctx->load_settings_raw( 'video_title_color', $res_ctx->get_shortcode_att('video_title_color') );
        $res_ctx->load_settings_raw( 'video_title_color_h', $res_ctx->get_shortcode_att('video_title_color_h') );
        $res_ctx->load_color_settings( 'video_bg', 'video_bg_color', 'video_bg_gradient', '', '' );
        $res_ctx->load_color_settings( 'video_overlay', 'video_overlay_color', 'video_overlay_gradient', '', '' );

        // video duration
        $res_ctx->load_settings_raw( 'vid_t_color', $res_ctx->get_shortcode_att('vid_t_color') );
        $res_ctx->load_settings_raw( 'vid_t_bg_color', $res_ctx->get_shortcode_att('vid_t_bg_color') );

    }

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;
        $unique_block_modal_class = $this->block_uid . '_m';

        $compiled_css = '';

        $raw_css =
            "<style>

                /* @modules_height */
				.$unique_block_class .td-module-thumb {
					height: @modules_height;
				}
                /* @image_margin_left */
				.$unique_block_class .td-module-thumb {
					margin-left: -@image_margin_left;
				}
				/* @image_margin_right */
				.$unique_block_class .td-module-thumb {
					margin-right: -@image_margin_right;
				}
				/* @modules_space */
				.$unique_block_class .td_module_wrap {
					margin-bottom: @modules_space;
				}
				.$unique_block_class .td_module_wrap:last-child {
				    margin-bottom: 0;
				}
				/* @block_title_over */
				.$unique_block_class .td-block-title-over {
				    position: absolute;
				    z-index: 10;
				}
				/* @block_title_space */
				.$unique_block_class .td-block-title-over {
				    padding: @block_title_space;
				}
				/* @nextprev_position */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap {
				    @nextprev_position
				}
				/* @nextprev */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap {
				    margin: @nextprev;
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
				
				
				/* @image_alignment */
				.$unique_block_class .entry-thumb {
					background-position: center @image_alignment;
				}
				/* @image_radius */
				.$unique_block_class .td-module-thumb,
				.$unique_block_class .td-module-thumb:before,
				.$unique_block_class .td-module-thumb:after {
                    border-radius: @image_radius;
				}
				/* @video_icon */
				.$unique_block_class .td-video-play-ico {
					width: @video_icon;
					height: @video_icon;
					font-size: @video_icon;
				}
				/* @video_icon_pos_center */
				.$unique_block_class .td-video-play-ico {
					top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
				}
				/* @video_icon_pos_corner */
				.$unique_block_class .td-video-play-ico {
					top: 20px;
                    left: auto;
                    right: 20px;
                    transform: none;
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
				
				
				/* @meta_vert_align_center */
				.$unique_block_class .td-module-meta-info {
					top: 50%;
                    transform: translateY(-50%);
                    -webkit-transform: translateY(-50%);
				}
				/* @meta_vert_align_bottom */
				.$unique_block_class .td-module-meta-info {
					top: auto;
                    bottom: 0;
				}
				/* @meta_horiz_align_center */
				.$unique_block_class .td-module-meta-info {
				    margin: 0 auto;
				}
				.$unique_block_class .td-module-meta-info,
				.$unique_block_class .td-next-prev-wrap {
					text-align: center;
				}
				.$unique_block_class .td-image-container {
					margin-left: auto;
                    margin-right: auto;
				}
				/* @meta_horiz_align_right */
				.$unique_block_class .td-module-meta-info {
				    left: auto;
				}
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
				/* @show_cat */
				.$unique_block_class .td-post-category {
					display: @show_cat;
				}
				/* @show_excerpt */
				.$unique_block_class .td-excerpt {
					display: @show_excerpt;
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
				/* @f_more */
				.$unique_block_class .td-load-more-wrap a {
					@f_more
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
				/* @f_vid_title */
				#td-video-modal.$unique_block_modal_class .td-vm-title {
					@f_vid_title
				}
				/* @f_vid_time */
				.$unique_block_class .td-post-vid-time {
					@f_vid_time
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
				/* @meta_bg */
				.$unique_block_class .td-module-meta-info {
					background-color: @meta_bg;
				}
				/* @nextprev_icon */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a {
					color: @nextprev_icon;
				}
				/* @nextprev_bg */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a {
					background-color: @nextprev_bg;
				}
				/* @nextprev_icon_h */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a:hover {
					color: @nextprev_icon_h;
				}
				/* @nextprev_bg_h */
				.$unique_block_class.td_with_ajax_pagination .td-next-prev-wrap a:hover {
					background-color: @nextprev_bg_h;
				}
				/* @cat_bg */
				.$unique_block_class .td-post-category {
					background-color: @cat_bg;
				}
				/* @cat_bg_hover */
				.$unique_block_class .td-post-category:hover {
					background-color: @cat_bg_hover;
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
					border: @modules_cat_border solid #aaa;
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
					color: @title_txt_hover;
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
				.$unique_block_class .td_module_wrap:hover .td-module-title a {
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
				/* @com_icon */
				.$unique_block_class .td-module-comments a:before {
					color: @com_icon;
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
				
			</style>";


	    $td_css_res_compiler = new td_css_res_compiler( $raw_css );
	    $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

		$compiled_css .= $td_css_res_compiler->compile_css();

		return $compiled_css;
    }

    function render($atts, $content = null) {

        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        $additional_classes = array();

        // block align
        $block_align = $this->get_att( 'image_margin_right' );
        if( $block_align != '' ) {
            $additional_classes[] = 'td-flb-margin-right';
        } else {
            $additional_classes[] = 'td-flb-margin-left';
        }
        // block align
        $image_margin_forced = $this->get_att( 'image_margin_forced' );
        if( $image_margin_forced != '' ) {
            $additional_classes[] = 'td-flb-margin-forced';
        }


        $buffy = ''; //output buffer

        $buffy .= '<div class="' . $this->get_block_classes($additional_classes) . ' td_flex_block" ' . $this->get_block_html_atts() . '>';

		    //get the block js
		    $buffy .= $this->get_block_css();

		    //get the js for this block
		    $buffy .= $this->get_block_js();

            // block title wrap
            $buffy .= '<div class="td-block-title-over">';
                $buffy .= '<div class="td-block-title-wrap">';
                    $buffy .= $this->get_block_title(); //get the block title
                    $buffy .= $this->get_pull_down_filter(); //get the sub category filter for this block
                $buffy .= '</div>';
            $buffy .= '</div>';

            $buffy .= '<div class="td-block-inner-pagination">';
                $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner td-mc2-wrap">';
                    $buffy .= $this->inner($this->td_query->posts);//inner content of the block
                $buffy .= '</div>';

                //get the ajax pagination for this block
                $prev_icon = $this->get_att('prev_tdicon');
                $next_icon = $this->get_att('next_tdicon');
                $buffy .= $this->get_block_pagination($prev_icon, $next_icon);
            $buffy .= '</div>';


            ob_start();
            ?>
                <script>
                    /* global jQuery:{} */
                    jQuery().ready(function () {
                        var block = jQuery('.<?php echo $this->block_uid; ?>'),
                            modulesThumbs = block.find('.td-module-thumb'),
                            blockOffsetLeft;

                        if( block.hasClass('td-flb-margin-forced') ) {
                            jQuery(window).resize(function () {
                                blockOffsetLeft = block.offset().left;

                                if( block.hasClass('td-flb-margin-left') ) {
                                    modulesThumbs.css('margin-left', -blockOffsetLeft + 'px');
                                } else {
                                    modulesThumbs.css('margin-right', -(jQuery(window).width() - (blockOffsetLeft + block.outerWidth())) + 'px');
                                }
                            });
                            jQuery(window).resize();
                        }
                    });
                </script>
            <?php
            td_js_buffer::add_to_footer( "\n" . td_util::remove_script_tag( ob_get_clean() ) );

        $buffy .= '</div>';
        return $buffy;
    }

    function inner($posts) {

        $buffy = '';
        $td_block_layout = new td_block_layout();

            if (!empty($posts)) {
                foreach ($posts as $post) {
                    $td_module_flex_2 = new td_module_flex_2($post, $this->get_all_atts());
                    $buffy .= $td_module_flex_2->render($post);
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
                    modulesThumbs = block.find('.td-module-thumb'),
                    blockOffsetLeft;

                if( block.hasClass('td-flb-margin-forced') ) {
                    jQuery(window).resize(function () {
                        blockOffsetLeft = block.offset().left;

                        if( block.hasClass('td-flb-margin-left') ) {
                            modulesThumbs.css('margin-left', -blockOffsetLeft + 'px');
                        } else {
                            modulesThumbs.css('margin-right', -(jQuery(window).width() - (blockOffsetLeft + block.outerWidth())) + 'px');
                        }
                    });
                    jQuery(window).resize();
                }
            })();


        </script>
        <?php

        return $buffy . td_util::remove_script_tag( ob_get_clean() );
    }
}