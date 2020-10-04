<?php
/**
 * Created by PhpStorm.
 * User: lucian
 * Date: 4/2/2018
 * Time: 9:27 AM
 */

class tdb_category_sibling_categories extends td_block {


    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
            
                /* @display_list */
                .$unique_block_class .td-category {
                    width: 100%;
                }
                .$unique_block_class .entry-category {
                    display: block;
                }

				/* @align_left */
				.td-theme-wrap .$unique_block_class {
					text-align: left;
				}
				/* @align_center */
				.td-theme-wrap .$unique_block_class {
					text-align: center;
				}
				/* @align_right */
				.td-theme-wrap .$unique_block_class {
					text-align: right;
				}
				
				/* @cat_padding */
				.$unique_block_class .td-category .entry-category a,
				.$unique_block_class .td-subcat-more {
					padding: @cat_padding;
				}
                /* @cat_space */
				.$unique_block_class .td-category .entry-category {
					margin: @cat_space;
				}
                /* @cat_border */
				.$unique_block_class .td-category .tdb-sibling-cat-bg {
					border-width: @cat_border;
				}
				/* @cat_radius */
				.$unique_block_class .td-category .tdb-sibling-cat-bg,
				.$unique_block_class .td-category .tdb-sibling-cat-bg:before {
					border-radius: @cat_radius;
				}
				/* @cat_skew */
				.$unique_block_class .td-category .tdb-sibling-cat-bg,
				.$unique_block_class .td-subcat-more:before {
					transform: skew(@cat_skew);
                    -webkit-transform: skew(@cat_skew);
				}
				
				/* @icon_size */
				.$unique_block_class .tdb-cat-sep {
					font-size: @icon_size;
				}
                /* @icon_space */
				.$unique_block_class .tdb-cat-sep {
					margin-right: @icon_space;
					margin-left: @icon_space;
				}
                /* @icon_align */
				.$unique_block_class .tdb-cat-sep {
					top: @icon_align;
				}
				
				
				/* @btn_text_space */
				.$unique_block_class .tdb-category-siblings .td-subcat-more-txt {
				    margin-right: @btn_text_space;
				}
				/* @btn_icon_size */
				.$unique_block_class .tdb-category-siblings .td-subcat-more i {
				    font-size: @btn_icon_size;
				}
				/* @btn_icon_align */
				.$unique_block_class .tdb-category-siblings .td-subcat-more i {
				    top: @btn_icon_align;
				}
				/* @btn_padding */
				.$unique_block_class .tdb-category-siblings .td-subcat-more {
				    padding: @btn_padding;
				}
				/* @btn_border_size */
				.$unique_block_class .tdb-category-siblings .td-subcat-more:before {
				    border-width: @btn_border_size;
				}
				
				/* @list_padding */
				.$unique_block_class .td-pulldown-filter-list {
				    padding: @list_padding;
				}
				/* @list_pos */
				.$unique_block_class .td-subcat-more:after,
				.$unique_block_class .td-subcat-dropdown:hover .td-pulldown-filter-list {
				    right: @list_pos;
				}
				/* @list_border */
				.$unique_block_class .td-subcat-dropdown:hover .td-pulldown-filter-list {
				    border-width: @list_border;
				}
				/* @list_el_padding */
				.$unique_block_class .td-subcat-dropdown a {
				    padding: @list_el_padding;
				}
				/* @list_el_space */
				.$unique_block_class .td-subcat-dropdown li {
				    margin-bottom: @list_el_space;
				}
				.$unique_block_class .td-subcat-dropdown li:last-child {
				    margin-bottom: 0;
				}
				
				
				/* @bg_solid */
				.$unique_block_class .td-category .tdb-sibling-cat-bg {
					background-color: @bg_solid !important;
				}
                /* @bg_gradient */
				.$unique_block_class .td-category .tdb-sibling-cat-bg {
					@bg_gradient;
				}
				
				
				/* @active_bg_solid */
				.$unique_block_class .td-current-sub-category .tdb-sibling-cat-bg {
					background-color: @active_bg_solid !important;
				}
				/* @active_bg_gradient */
				.$unique_block_class .td-current-sub-category .tdb-sibling-cat-bg {
					@active_bg_gradient
				}
				
				
				/* @bg_hover_solid */
				.$unique_block_class .td-category .tdb-sibling-cat-bg:before {
					background-color: @bg_hover_solid;
				}
				.$unique_block_class .td-category .entry-category a:hover .tdb-sibling-cat-bg:before {
					opacity: 1;
				}
				/* @bg_hover_gradient */
				.$unique_block_class .td-category .tdb-sibling-cat-bg:before {
					@bg_hover_gradient
				}
				.$unique_block_class .td-category .entry-category a:hover .tdb-sibling-cat-bg:before {
					opacity: 1;
				}
				
				/* @text_color */
				.$unique_block_class .td-category .entry-category a {
					color: @text_color !important;
				}
				/* @active_color */
				.$unique_block_class .td-category .entry-category .td-current-sub-category {
					color: @active_color !important;
				}
				/* @text_hover_color */
				.$unique_block_class .td-category .entry-category a:hover {
					color: @text_hover_color !important;
				}
				
				/* @border_color_solid */
				.$unique_block_class .td-category .tdb-sibling-cat-bg {
					border-color: @border_color_solid !important;
				}
				/* @border_color_params */
				.$unique_block_class .td-category .tdb-sibling-cat-bg {
				    border-image: linear-gradient(@border_color_params);
				    border-image: -webkit-linear-gradient(@border_color_params);
				    border-image-slice: 1;
				    transition: none;
				}
				.$unique_block_class .td-category .entry-category a:hover .tdb-sibling-cat-bg {
				    border-image: linear-gradient(@border_hover_color, @border_hover_color);
				    border-image: -webkit-linear-gradient(@border_hover_color, @border_hover_color);
				    border-image-slice: 1;
				    transition: none;
				}
				/* @active_border_color */
				.$unique_block_class .td-category .entry-category .td-current-sub-category .tdb-sibling-cat-bg {
					border-color: @active_border_color !important;
				}
				/* @border_hover_color */
				.$unique_block_class .td-category .entry-category a:hover .tdb-sibling-cat-bg {
					border-color: @border_hover_color !important;
				}
				
				/* @i_color */
				.$unique_block_class .tdb-cat-sep {
					color: @i_color;
				}
				
				/* @btn_bg */
				.$unique_block_class .td-subcat-more:before {
				    background-color: @btn_bg;
				}
				/* @btn_h_bg */
				.$unique_block_class .td-subcat-dropdown:hover .td-subcat-more:before,
				.$unique_block_class .td-subcat-dropdown:hover .td-subcat-more:after {
				    background-color: @btn_h_bg;
				}
				/* @btn_icon */
				.$unique_block_class .td-subcat-more i {
				    color: @btn_icon;
				}
				/* @btn_h_icon */
				.$unique_block_class .td-subcat-dropdown:hover .td-subcat-more i {
				    color: @btn_h_icon;
				}
				/* @btn_txt */
				.$unique_block_class .td-subcat-more {
				    color: @btn_txt;
				}
				/* @btn_h_txt */
				.$unique_block_class .td-subcat-dropdown:hover .td-subcat-more {
				    color: @btn_h_txt;
				}
				/* @btn_border */
				.$unique_block_class .td-subcat-more:before {
				    border-color: @btn_border;
				}
				/* @btn_h_border */
				.$unique_block_class .td-subcat-dropdown:hover .td-subcat-more:before {
				    border-color: @btn_h_border;
				}
				
				/* @list_bg */
				.$unique_block_class .tdb-category-siblings .td-subcat-dropdown .td-pulldown-filter-list {
				    background-color: @list_bg;
				}
				/* @list_text */
				.$unique_block_class .tdb-category-siblings .td-subcat-dropdown .td-pulldown-filter-list li a {
				    color: @list_text !important;
				}
				/* @list_h_text */
				.$unique_block_class .tdb-category-siblings .td-subcat-dropdown .td-pulldown-filter-list li a:hover {
				    color: @list_h_text !important;
				}
				/* @list_border_color */
				.$unique_block_class .tdb-category-siblings .td-subcat-dropdown .td-pulldown-filter-list  {
				    border-color: @list_border_color;
				}
				.$unique_block_class .tdb-category-siblings .td-subcat-dropdown:hover .td-subcat-more:after {
				    background-color: @list_border_color;
				}
				
				
				
				/* @f_cats */
				.$unique_block_class .td-category .entry-category a,
				.$unique_block_class .td-subcat-more {
				    @f_cats
				}
				/* @f_list */
				.$unique_block_class .td-subcat-dropdown a {
				    @f_list
				}
				

			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        /*-- MAIN LIST -- */
        // display as list
        $res_ctx->load_settings_raw( 'display_list', $res_ctx->get_shortcode_att('display_list') );

        // content align
        $content_align = $res_ctx->get_shortcode_att('content_align_horizontal');
        if ( $content_align == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'align_center', 1 );
        } else if ( $content_align == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'align_right', 1 );
        } else if ( $content_align == 'content-horiz-left' ) {
            $res_ctx->load_settings_raw( 'align_left', 1 );
        }

        // cat_padding
        $cat_padding = $res_ctx->get_shortcode_att('cat_padding');
        $res_ctx->load_settings_raw( 'cat_padding', $cat_padding );
        if ( is_numeric( $cat_padding ) ) {
            $res_ctx->load_settings_raw( 'cat_padding', $cat_padding . 'px' );
        }
        // cat_space
        $cat_space = $res_ctx->get_shortcode_att('cat_space');
        $res_ctx->load_settings_raw( 'cat_space', $cat_space );
        if ( is_numeric( $cat_space ) ) {
            $res_ctx->load_settings_raw( 'cat_space', $cat_space . 'px' );
        }
        // cat_border
        $res_ctx->load_settings_raw( 'cat_border', $res_ctx->get_shortcode_att('cat_border') . 'px' );
        // cat_radius
        $cat_radius = $res_ctx->get_shortcode_att('cat_radius');
        if ( $cat_radius != 0 || !empty($cat_radius) ) {
            $res_ctx->load_settings_raw( 'cat_radius', $cat_radius . 'px' );
        }
        // cat_skew
        $cat_skew = $res_ctx->get_shortcode_att('cat_skew');
        if ( $cat_skew != 0 || !empty($cat_skew) ) {
            $res_ctx->load_settings_raw( 'cat_skew', $cat_skew . 'deg' );
        }

        // separator icon size
        $icon_size = $res_ctx->get_shortcode_att('icon_size');
        if ( $icon_size != 0 || !empty($icon_size) ) {
            $res_ctx->load_settings_raw( 'icon_size', $icon_size . 'px' );
        }
        // separator icon space
        $icon_space = $res_ctx->get_shortcode_att('icon_space');
        if ( $icon_space != 0 || !empty($icon_space) ) {
            $res_ctx->load_settings_raw( 'icon_space', $icon_space . 'px' );
        }
        // separator icon align
        $icon_align = $res_ctx->get_shortcode_att('icon_align');
        if ( $icon_align != 0 || !empty($icon_align) ) {
            $res_ctx->load_settings_raw( 'icon_align', $icon_align . 'px' );
        }



        /*-- DROPDOWN LIST -- */
        // show more text space
        $btn_text_space = $res_ctx->get_shortcode_att('btn_text_space');
        $res_ctx->load_settings_raw( 'btn_text_space', $btn_text_space );
        if( $btn_text_space != '' && is_numeric( $btn_text_space ) ) {
            $res_ctx->load_settings_raw( 'btn_text_space', $btn_text_space . 'px' );
        }
        // show more icon size
        $btn_icon_size = $res_ctx->get_shortcode_att('btn_icon_size');
        if ( $btn_icon_size != 0 || !empty($btn_icon_size) ) {
            $res_ctx->load_settings_raw( 'btn_icon_size', $btn_icon_size . 'px' );
        }
        // show more icon align
        $btn_icon_align = $res_ctx->get_shortcode_att('btn_icon_align');
        if ( $btn_icon_align != 0 || !empty($btn_icon_align) ) {
            $res_ctx->load_settings_raw( 'btn_icon_align', $btn_icon_align . 'px' );
        }
        // show more padding
        $btn_padding = $res_ctx->get_shortcode_att('btn_padding');
        $res_ctx->load_settings_raw( 'btn_padding', $btn_padding );
        if ( $btn_padding != '' && is_numeric($btn_padding) ) {
            $res_ctx->load_settings_raw( 'btn_padding', $btn_padding . 'px' );
        }
        // show more border size
        $btn_border_size = $res_ctx->get_shortcode_att('btn_border_size');
        if ( $btn_border_size != '' && is_numeric($btn_border_size) ) {
            $res_ctx->load_settings_raw( 'btn_border_size', $btn_border_size . 'px' );
        }

        // list padding
        $list_padding = $res_ctx->get_shortcode_att('list_padding');
        $res_ctx->load_settings_raw( 'list_padding', $list_padding );
        if( $list_padding != '' && is_numeric($list_padding) ) {
            $res_ctx->load_settings_raw( 'list_padding', $list_padding . 'px' );
        }
        // list position
        $list_pos = $res_ctx->get_shortcode_att('list_pos');
        if( $list_pos != 0 || !empty($list_pos) ) {
            $res_ctx->load_settings_raw( 'list_pos', $list_pos . 'px' );
        }
        // list border width
        $res_ctx->load_settings_raw( 'list_border', $res_ctx->get_shortcode_att('list_border') . 'px' );
        // list elements padding
        $list_el_padding = $res_ctx->get_shortcode_att('list_el_padding');
        $res_ctx->load_settings_raw( 'list_el_padding', $list_el_padding );
        if( $list_el_padding != '' && is_numeric($list_el_padding) ) {
            $res_ctx->load_settings_raw( 'list_el_padding', $list_el_padding . 'px' );
        }
        // list elements space
        $list_el_space = $res_ctx->get_shortcode_att('list_el_space');
        if( $list_el_space != '' && is_numeric($list_el_space) ) {
            $res_ctx->load_settings_raw( 'list_el_space', $list_el_space . 'px' );
        }



        /*-- COLORS -- */
        $res_ctx->load_color_settings( 'bg_color', 'bg_solid', 'bg_gradient', '', '' );
        $res_ctx->load_color_settings( 'bg_hover_color', 'bg_hover_solid', 'bg_hover_gradient', '', '', '' );
        $res_ctx->load_color_settings( 'active_bg_color', 'active_bg_solid', 'active_bg_gradient', '', '', '' );
        $res_ctx->load_settings_raw( 'text_color', $res_ctx->get_shortcode_att('text_color') );
        $res_ctx->load_settings_raw( 'text_hover_color', $res_ctx->get_shortcode_att('text_hover_color') );
        $res_ctx->load_settings_raw( 'active_color', $res_ctx->get_shortcode_att('active_color') );
        $res_ctx->load_color_settings( 'border_color', 'border_color_solid', 'border_color_gradient', 'border_color_gradient_1', 'border_color_params', '' );
        $res_ctx->load_settings_raw( 'border_hover_color', $res_ctx->get_shortcode_att('border_hover_color') );
        $res_ctx->load_settings_raw( 'active_border_color', $res_ctx->get_shortcode_att('active_border_color') );
        $res_ctx->load_settings_raw( 'i_color', $res_ctx->get_shortcode_att('i_color') );

        $res_ctx->load_settings_raw( 'btn_bg', $res_ctx->get_shortcode_att('btn_bg') );
        $res_ctx->load_settings_raw( 'btn_h_bg', $res_ctx->get_shortcode_att('btn_h_bg') );
        $res_ctx->load_settings_raw( 'btn_txt', $res_ctx->get_shortcode_att('btn_txt') );
        $res_ctx->load_settings_raw( 'btn_h_txt', $res_ctx->get_shortcode_att('btn_h_txt') );
        $res_ctx->load_settings_raw( 'btn_icon', $res_ctx->get_shortcode_att('btn_icon') );
        $res_ctx->load_settings_raw( 'btn_h_icon', $res_ctx->get_shortcode_att('btn_h_icon') );
        $res_ctx->load_settings_raw( 'btn_border', $res_ctx->get_shortcode_att('btn_border') );
        $res_ctx->load_settings_raw( 'btn_h_border', $res_ctx->get_shortcode_att('btn_h_border') );
        $res_ctx->load_settings_raw( 'list_bg', $res_ctx->get_shortcode_att('list_bg') );
        $res_ctx->load_settings_raw( 'list_text', $res_ctx->get_shortcode_att('list_text') );
        $res_ctx->load_settings_raw( 'list_h_text', $res_ctx->get_shortcode_att('list_h_text') );
        $res_ctx->load_settings_raw( 'list_border_color', $res_ctx->get_shortcode_att('list_border_color') );



        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_cats' );
        $res_ctx->load_font_settings( 'f_list' );

    }

    // disable loop block features, this block does not use a loop and it doesn't need to run a query.
    function __construct() {
        parent::disable_loop_block_features();
    }


    function render( $atts, $content = null ) {
        parent::render( $atts );

        global $tdb_state_category;
        $category_sibling_categories_data = $tdb_state_category->category_sibling_categories->__invoke( $atts );
        $categories_list = $category_sibling_categories_data['categories'];
        $additional_classes = array();

        // separator icon
        $tdicon_html = '';
        $tdicon = $this->get_att( 'tdicon' );
        if( $tdicon != '' ) {
            $tdicon_html = '<i class="' . $tdicon . ' tdb-cat-sep"></i>';
        }

        // cat_style
        $cat_text_color = '';
        $cat_style = $this->get_att( 'cat_style' );

        // display as list
        $display_list = 'tdb-category-siblings-inline';
        if( $this->get_att('display_list') != '' ) {
            $display_list = 'tdb-category-siblings-list';
        }

        // drop in more
        $drop_in_more = $this->get_att('more');
        if( $drop_in_more == '' && $display_list == 'tdb-category-siblings-inline' ) {
            $additional_classes[] = 'tdb-category-siblings-in-more';
        }

        // limit the number of categories to be shown
        // when display as list is active
        $cats_no = count( $categories_list );
        $show_no = $this->get_att('show_no');
        if( $show_no != '' && is_numeric( $show_no ) && $display_list == 'tdb-category-siblings-list' && $show_no < $cats_no ) {
            $show_no = $this->get_att('show_no');
        } else {
            $show_no = $cats_no;
        }

        // show more button text
        $btn_text = '';
        if( $this->get_att('btn_text') != '' ) {
            $btn_text = $this->get_att('btn_text');
        }

        // show more icon
        $btn_icon = 'td-icon-menu-down';
        if( $this->get_att('btn_tdicon') != '' ) {
            $btn_icon = $this->get_att('btn_tdicon');
        }


        $buffy = ''; //output buffer

        $buffy .= '<div class="' . $this->get_block_classes($additional_classes) . ' ' . $display_list . '"' . $this->get_block_html_atts() . '>';

            //get the block css
            $buffy .= $this->get_block_css();

            //get the js for this block
            $buffy .= $this->get_block_js();


            $buffy .= '<div id="' . $this->block_uid . '" class="tdb-block-inner">';

                $buffy.= '<div class="tdb-category-siblings ' . $display_list . '">';
                    $buffy.= '<ul class="td-category">';
                        for ( $i = 0; $i < $show_no; $i++ ) {
                            $category = $categories_list[$i];

                            $cat_color = $category['color'];

                            if ( !empty( $cat_color ) ) {
                                // set title color based on background color contrast
                                $td_cat_title_color = td_util::readable_colour( $cat_color, 200, 'rgba(0, 0, 0, 0.9)', '#fff' );
                                $td_cat_bg = ' style="background-color:' . $cat_color . '; border-color:' . $cat_color  . ';"';
                                if ( $td_cat_title_color == '#fff' ) {
                                    $td_cat_color = '';
                                } else {
                                    $td_cat_color = ' style="color:' . $td_cat_title_color . ';"';
                                }
                                if( $cat_style == 'tdb-cat-style2' ) {
                                    $td_cat_bg = ' style="background-color:' . td_util::hex2rgba($cat_color, 0.2) . '; border-color:' . td_util::hex2rgba($cat_color, 0.05) . ';"';
                                    $cat_text_color = ' style="color:' . $cat_color . ';"';
                                }
                            } else {
                                $td_cat_bg = '';
                                $td_cat_color = '';
                                $cat_text_color = '';
                            }

                            $buffy .= '<li class="entry-category">';
                                $buffy .= '<a class="' . $category['class'] . '"' . $td_cat_color . '  href="' . $category['category_link'] . '" ' . $cat_text_color . '>';
                                    $buffy .= '<span class="tdb-sibling-cat-bg"' . $td_cat_bg . '></span>';
                                    $buffy .= $category['category_name'];
                                $buffy .= '</a>';

                                $buffy .= $tdicon_html;
                            $buffy .= '</li>';
                        }
                    $buffy .= '</ul>';

                    // subcategory dropdown list
                    if( ( $display_list == 'tdb-category-siblings-inline' && $drop_in_more == '') || ( $display_list == 'tdb-category-siblings-list' && $show_no != count( $categories_list ) ) ) {
                        $buffy .= '<div class="td-subcat-dropdown td-pulldown-filter-display-option">';
                            $buffy .= '<div class="td-subcat-more">';
                                if( $btn_text != '' ) {
                                    $buffy .= '<span class="td-subcat-more-txt">' . $btn_text . '</span>';
                                }
                                $buffy .= '<i class="' . $btn_icon . '"></i>';
                            $buffy .= '</div>';

                            // the dropdown list
                            $buffy .= '<ul class="td-pulldown-filter-list">';
                                if ( ( $display_list == 'tdb-category-siblings-list' && $show_no != count( $categories_list ) ) ) {
                                    for( $i = $show_no; $i < count( $categories_list ); $i++ ) {
                                        $category = $categories_list[$i];

                                        $buffy .= '<li class="entry-category" style="transition: opacity 0.2s ease 0s; opacity: 1;">';
                                            $buffy .= '<a class="" href="' . $category['category_link'] . '">';
                                                $buffy .= '<span class="tdb-sibling-cat-bg"></span>';
                                                $buffy .= $category['category_name'];
                                            $buffy .= '</a>';
                                        $buffy .= '</li>';
                                    }
                                }
                            $buffy .= '</ul>';
                        $buffy .= '</div>';

	                    ob_start();

	                    ?>
	                    <script>
                            /* global jQuery:{} */
                            jQuery(window).load(function () {

                                var jquery_object_container = jQuery('.<?php echo $this->block_uid ?> .tdb-category-siblings');

                                if( jquery_object_container.hasClass('tdb-category-siblings-inline') ) {
                                    var horizontal_jquery_obj = jquery_object_container.find('.td-category:first');
                                    var pulldown_item_obj = new tdPullDown.item();

                                    pulldown_item_obj.blockUid = jquery_object_container.parent().parent().data('td-block-uid'); // get the block UID
                                    pulldown_item_obj.horizontal_jquery_obj = horizontal_jquery_obj;
                                    pulldown_item_obj.vertical_jquery_obj = jquery_object_container.find('.td-subcat-dropdown:first');
                                    pulldown_item_obj.horizontal_element_css_class = 'entry-category';
                                    pulldown_item_obj.container_jquery_obj = horizontal_jquery_obj.parents('.tdb-category-siblings:first');
                                    tdPullDown.add_item(pulldown_item_obj);
                                }

                            });
	                    </script>
	                    <?php

	                    td_js_buffer::add_to_footer( "\n" . td_util::remove_script_tag( ob_get_clean() ) );

                    }

                $buffy .= '</div>';

                $buffy .= '<div class="clearfix"></div>';

            $buffy .= '</div>';

        $buffy .= '</div>';

        return $buffy;
    }



}