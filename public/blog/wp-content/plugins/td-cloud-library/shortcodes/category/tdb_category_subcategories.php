<?php
/**
 * Created by PhpStorm.
 * User: lucian
 * Date: 4/2/2018
 * Time: 9:27 AM
 */

class tdb_category_subcategories extends td_block {


    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
            
                /* @columns */
                .$unique_block_class .tdb-subcategory {
                    width: @columns;
                }
                /* @no_space */
                @media (min-width: 767px) {
                    .$unique_block_class .tdb-subcategory:nth-last-child(@no_space) {
                        margin-bottom: 0;
                    }
                }
                @media (max-width: 767px) {
                    .$unique_block_class .tdb-subcategory:last-child {
                        margin-bottom: 0;
                    }
                }
                /* @gap */
                .$unique_block_class .tdb-subcategory {
                    padding-left: @gap;
                    padding-right: @gap;
                }
                .$unique_block_class .tdb-block-inner {
                    margin-left: -@gap;
                    margin-right: -@gap;
                }
                /* @space */
                .$unique_block_class .tdb-subcategory {
                    margin-bottom: @space;
                }
                
                
                /* @img_height */
                .$unique_block_class .tdb-subcategory-img {
                    padding-bottom: @img_height;
                }
                /* @img_radius */
                .$unique_block_class .tdb-subcategory-img {
                    border-radius: @img_radius;
                }
                /* @show_img */
                .$unique_block_class .tdb-subcategory-img {
                    display: @show_img;
                }
                
                
                /* @info_margin1 */
                .$unique_block_class .tdb-subcategory-info-top {
                    margin: @info_margin1;
                }
                /* @info_padding1 */
                .$unique_block_class .tdb-subcategory-info-top {
                    padding: @info_padding1;
                }
                /* @info_border1 */
                .$unique_block_class .tdb-subcategory-info-top {
                    border-width: @info_border1;
                    border-style: solid;
                    border-color: #000;
                }
                /* @info_border_style1 */
                .$unique_block_class .tdb-subcategory-info-top {
                    border-style: @info_border_style1;
                }
                /* @info_horiz_center1 */
                .$unique_block_class .tdb-subcategory-info-top {
                    text-align: center;
                }
                /* @info_horiz_right1 */
                .$unique_block_class .tdb-subcategory-info-top {
                    text-align: right;
                }
                
                /* @info_margin2 */
                .$unique_block_class .tdb-subcategory-info-bottom {
                    margin: @info_margin2;
                }
                /* @info_padding2 */
                .$unique_block_class .tdb-subcategory-info-bottom {
                    padding: @info_padding2;
                }
                /* @info_border2 */
                .$unique_block_class .tdb-subcategory-info-bottom {
                    border-width: @info_border2;
                    border-style: solid;
                    border-color: #000;
                }
                /* @info_border_style2 */
                .$unique_block_class .tdb-subcategory-info-bottom {
                    border-style: @info_border_style2;
                }
                /* @info_horiz_center2 */
                .$unique_block_class .tdb-subcategory-info-bottom {
                    text-align: center;
                }
                /* @info_horiz_right2 */
                .$unique_block_class .tdb-subcategory-info-bottom {
                    text-align: right;
                }
                
                /* @name_margin */
                .$unique_block_class .tdb-subcategory-name {
                    margin: @name_margin;
                }
                
                /* @descr_margin */
                .$unique_block_class .tdb-subcategory-descr {
                    margin: @descr_margin;
                }
                /* @show_descr */
                .$unique_block_class .tdb-subcategory-descr {
                    display: @show_descr;
                }
                
                
                /* @bg_color */
                .$unique_block_class .tdb-subcategory-wrap {
                    background-color: @bg_color;
                }
                
                /* @img_overlay */
                .$unique_block_class .tdb-subcategory-overlay {
                    display: block;
                    background: @img_overlay;
                }
                /* @img_overlay_gradient */
                .$unique_block_class .tdb-subcategory-overlay {
                    display: block;
                    @img_overlay_gradient
                }
                /* @img_overlay_h */
                .$unique_block_class .tdb-subcategory-wrap:hover .tdb-subcategory-overlay {
                    display: block;
                    background: @img_overlay_h;
                }
                /* @img_overlay_h_gradient */
                .$unique_block_class .tdb-subcategory-wrap:hover .tdb-subcategory-overlay {
                    display: block;
                    @img_overlay_h_gradient;
                }
                
                /* @info_bg_color1 */
                .$unique_block_class .tdb-subcategory-info-top {
                    background-color: @info_bg_color1;
                }
                /* @info_border_color1 */
                .$unique_block_class .tdb-subcategory-info-top {
                    border-color: @info_border_color1;
                }
                
                /* @info_bg_color2 */
                .$unique_block_class .tdb-subcategory-info-bottom {
                    background-color: @info_bg_color2;
                }
                /* @info_border_color2 */
                .$unique_block_class .tdb-subcategory-info-bottom {
                    border-color: @info_border_color2;
                }
                
                /* @name_color */
                .$unique_block_class .tdb-subcategory-name a {
                    color: @name_color;
                }
                /* @name_color_h */
                .$unique_block_class .tdb-subcategory-wrap:hover .tdb-subcategory-name a {
                    color: @name_color_h;
                }
                
                /* @descr_color */
                .$unique_block_class .tdb-subcategory-descr {
                    color: @descr_color;
                }
                
                
				/* @f_header */
				.$unique_block_class .td-block-title a,
				.$unique_block_class .td-block-title span {
					@f_header
				}
                /* @f_name */
                .$unique_block_class .tdb-subcategory-name {
                    @f_name
                }
                /* @f_descr */
                .$unique_block_class .tdb-subcategory-descr {
                    @f_descr
                }

			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        /*-- GENERAL -- */
        // columns
        $limit = $res_ctx->get_shortcode_att('tdb_sibling_categories_limit');
        $columns = $res_ctx->get_shortcode_att('columns');
        if ( empty($columns ) ) {
        	$columns = '100%';
        }
        $res_ctx->load_settings_raw( 'columns', $columns );

        $columns_number = str_replace('%', '', $columns);
        $no_space = $limit % intval(intval(100 / $columns_number));

        switch($no_space) {
            case '0':
                $res_ctx->load_settings_raw( 'no_space',  '-n+' . intval(100/intval($columns_number)));
                break;
            case '1':
                $res_ctx->load_settings_raw( 'no_space',  '1' );
                break;
            case '2':
                $res_ctx->load_settings_raw( 'no_space',  '-n+2' );
                break;
            case '3':
                $res_ctx->load_settings_raw( 'no_space',  '-n+3' );
                break;
            case '4':
                $res_ctx->load_settings_raw( 'no_space',  '-n+4' );
                break;
            case '5':
                $res_ctx->load_settings_raw( 'no_space',  '-n+5' );
                break;
            case '6':
                $res_ctx->load_settings_raw( 'no_space',  '-n+6' );
                break;
            case '7':
                $res_ctx->load_settings_raw( 'no_space',  '-n+7' );
                break;
            case '8':
                $res_ctx->load_settings_raw( 'no_space',  '-n+8' );
                break;
        }

        // gap
        $gap = $res_ctx->get_shortcode_att('gap');
        $res_ctx->load_settings_raw( 'gap', $gap );
        if( $gap != '' && is_numeric( $gap ) ) {
            $res_ctx->load_settings_raw( 'gap', $gap / 2 . 'px' );
        }

        // space
        $space = $res_ctx->get_shortcode_att('space');
        $res_ctx->load_settings_raw( 'space', $space );
        if( $space != '' ) {
            if( is_numeric( $space ) ) {
                $res_ctx->load_settings_raw( 'space', $space . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'space', '30px' );
        }



        /*-- CATEGORY IMAGE -- */
        // image height
        $img_height = $res_ctx->get_shortcode_att('img_height');
        $res_ctx->load_settings_raw( 'img_height', $img_height );
        if( $img_height != '' && is_numeric( $img_height ) ) {
            $res_ctx->load_settings_raw( 'img_height', $img_height . 'px' );
        }
        // image radius
        $img_radius = $res_ctx->get_shortcode_att('img_radius');
        $res_ctx->load_settings_raw( 'img_radius', $img_radius );
        if( $img_radius != '' && is_numeric( $img_radius ) ) {
            $res_ctx->load_settings_raw( 'img_radius', $img_radius . 'px' );
        }
        // show image
        $res_ctx->load_settings_raw( 'show_img', $res_ctx->get_shortcode_att('show_img') );



        /*-- CATEGORY INFO -- */
        // top info margin
        $info_margin1 = $res_ctx->get_shortcode_att('info_margin1');
        $res_ctx->load_settings_raw( 'info_margin1', $info_margin1 );
        if( $info_margin1 != '' && is_numeric( $info_margin1 ) ) {
            $res_ctx->load_settings_raw( 'info_margin1', $info_margin1 . 'px' );
        }
        // top info padding
        $info_padding1 = $res_ctx->get_shortcode_att('info_padding1');
        $res_ctx->load_settings_raw( 'info_padding1', $info_padding1 );
        if( $info_padding1 != '' && is_numeric( $info_padding1 ) ) {
            $res_ctx->load_settings_raw( 'info_padding1', $info_padding1 . 'px' );
        }
        // top info border size
        $info_border1 = $res_ctx->get_shortcode_att('info_border1');
        $res_ctx->load_settings_raw( 'info_border1', $info_border1 );
        if( $info_border1 != '' && is_numeric( $info_border1 ) ) {
            $res_ctx->load_settings_raw( 'info_border1', $info_border1 . 'px' );
        }
        // top info border style
        $res_ctx->load_settings_raw( 'info_border_style1', $res_ctx->get_shortcode_att('info_border_style1') );
        // top info horizontal align
        $info_horiz1 = $res_ctx->get_shortcode_att('info_horiz1');
        if( $info_horiz1 == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'info_horiz_center1', 1 );
        } else if ( $info_horiz1 == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'info_horiz_right1', 1 );
        }


        // bottom info margin
        $info_margin2 = $res_ctx->get_shortcode_att('info_margin2');
        $res_ctx->load_settings_raw( 'info_margin2', $info_margin2 );
        if( $info_margin2 != '' && is_numeric( $info_margin2 ) ) {
            $res_ctx->load_settings_raw( 'info_margin2', $info_margin2 . 'px' );
        }
        // bottom info padding
        $info_padding2 = $res_ctx->get_shortcode_att('info_padding2');
        $res_ctx->load_settings_raw( 'info_padding2', $info_padding2 );
        if( $info_padding2 != '' && is_numeric( $info_padding2 ) ) {
            $res_ctx->load_settings_raw( 'info_padding2', $info_padding2 . 'px' );
        }
        // bottom info border size
        $info_border2 = $res_ctx->get_shortcode_att('info_border2');
        $res_ctx->load_settings_raw( 'info_border2', $info_border2 );
        if( $info_border2 != '' && is_numeric( $info_border2 ) ) {
            $res_ctx->load_settings_raw( 'info_border2', $info_border2 . 'px' );
        }
        // bottom info border style
        $res_ctx->load_settings_raw( 'info_border_style2', $res_ctx->get_shortcode_att('info_border_style2') );
        // bottom info horizontal align
        $info_horiz2 = $res_ctx->get_shortcode_att('info_horiz2');
        if( $info_horiz2 == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'info_horiz_center2', 1 );
        } else if ( $info_horiz2 == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'info_horiz_right2', 1 );
        }


        // category name margin
        $name_margin = $res_ctx->get_shortcode_att('name_margin');
        $res_ctx->load_settings_raw( 'name_margin', $name_margin );
        if( $name_margin != '' && is_numeric( $name_margin ) ) {
            $res_ctx->load_settings_raw( 'name_margin', $name_margin . 'px' );
        }


        // category description margin
        $descr_margin = $res_ctx->get_shortcode_att('descr_margin');
        $res_ctx->load_settings_raw( 'descr_margin', $descr_margin );
        if( $descr_margin != '' && is_numeric( $descr_margin ) ) {
            $res_ctx->load_settings_raw( 'descr_margin', $descr_margin . 'px' );
        }
        // show description
        $res_ctx->load_settings_raw( 'show_descr', $res_ctx->get_shortcode_att('show_descr') );



        /*-- COLORS -- */
        $res_ctx->load_settings_raw( 'bg_color', $res_ctx->get_shortcode_att('bg_color') );

        $res_ctx->load_color_settings( 'img_overlay', 'img_overlay', 'img_overlay_gradient' );
        $res_ctx->load_color_settings( 'img_overlay_h', 'img_overlay_h', 'img_overlay_h_gradient' );

        $res_ctx->load_settings_raw( 'info_bg_color1', $res_ctx->get_shortcode_att('info_bg_color1') );
        $res_ctx->load_settings_raw( 'info_border_color1', $res_ctx->get_shortcode_att('info_border_color1') );

        $res_ctx->load_settings_raw( 'info_bg_color2', $res_ctx->get_shortcode_att('info_bg_color2') );
        $res_ctx->load_settings_raw( 'info_border_color2', $res_ctx->get_shortcode_att('info_border_color2') );

        $res_ctx->load_settings_raw( 'name_color', $res_ctx->get_shortcode_att('name_color') );
        $res_ctx->load_settings_raw( 'name_color_h', $res_ctx->get_shortcode_att('name_color_h') );

        $res_ctx->load_settings_raw( 'descr_color', $res_ctx->get_shortcode_att('descr_color') );



        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_header' );
        $res_ctx->load_font_settings( 'f_name' );
        $res_ctx->load_font_settings( 'f_descr' );

    }

    // disable loop block features, this block does not use a loop and it doesn't need to run a query.
    function __construct() {
        parent::disable_loop_block_features();
    }


    function render( $atts, $content = null ) {
        parent::render( $atts );

        global $tdb_state_category;
        $category_sibling_categories_data = $tdb_state_category->category_sibling_categories->__invoke( $atts, false );
        $categories_list = $category_sibling_categories_data['categories'];


        $name_pos = $this->get_att('name_pos');
        $descr_pos = $this->get_att('descr_pos');
        if ( $this->get_att('descr_limit') != '' && is_numeric($this->get_att('descr_limit')) ) {
            $descr_limit = $this->get_att('descr_limit');
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


        $buffy = ''; //output buffer

        if( !empty($categories_list) ) {
            $buffy .= '<div class="' . $this->get_block_classes() . '"' . $this->get_block_html_atts() . '>';
                //get the block css
                $buffy .= $this->get_block_css();

                //get the js for this block
                $buffy .= $this->get_block_js();

                $custom_title = $this->get_att( 'custom_title' );

                if( $custom_title != '' ) {
                    //get the filter for this block
                    $buffy .= '<div class="td-block-title-wrap">';
                    $buffy .= '<h4 class="' . $td_css_cls_block_title . '">';
                    $buffy .= '<span>' . $custom_title . '</span>';
                    $buffy .= '</h4>';
                    $buffy .= '</div>';
                }


                $buffy .= '<div id="' . $this->block_uid . '" class="tdb-block-inner td-fix-index">';

                foreach ( $categories_list as $category ) {
                    $cat_img = $category['category_img'];
                    $cat_color = $category['color'];
                    $cat_descr = $category['category_descr'];
                    if (isset($descr_limit)) {
                        $cat_descr = td_util::excerpt( $category['category_descr'], $descr_limit);
                    }

                    $cat_img_html = '';
                    if( !empty( $cat_img ) ) {
                        $cat_img_html = 'style="background-image: url(' . $cat_img . ')"';
                    }

                    $cat_overlay_html = '';
                    if ( !empty( $cat_color ) ) {
                        $cat_overlay_html = 'style="background-color:' . td_util::hex2rgba($cat_color, 0.2) . ';display:block"';
                    }

                    $buffy .= '<div class="tdb-subcategory">';
                    $buffy .= '<div class="tdb-subcategory-wrap">';
                    if( $name_pos == 'above' || ( $descr_pos != '' && $category['category_descr'] == 'above' ) ) {
                        $buffy .= '<div class="tdb-subcategory-info-top">';
                        if( $name_pos == 'above' ) {
                            $buffy .= '<h3 class="tdb-subcategory-name">';
                            $buffy .= '<a href="' . $category['category_link'] . '">' . $category['category_name'] . '</a>';
                            $buffy .= '</h3>';
                        }

                        if( $category['category_descr'] != '' && $descr_pos == 'above' ) {
                            $buffy .= '<p class="tdb-subcategory-descr">' . $category['category_descr'] . '</p>';
                        }
                        $buffy .= '</div>';
                    }

                    $buffy .= '<a href="' . $category['category_link'] . '" class="tdb-subcategory-img" ' . $cat_img_html . '>';
                    $buffy .= '<span class="tdb-subcategory-overlay" ' . $cat_overlay_html . '></span>';
                    $buffy .= '</a>';

                    if( $name_pos == 'bellow' || ( $category['category_descr'] != '' && $descr_pos == 'bellow' ) ) {
                        $buffy .= '<div class="tdb-subcategory-info-bottom">';
                        if( $name_pos == 'bellow' ) {
                            $buffy .= '<h3 class="tdb-subcategory-name">';
                            $buffy .= '<a href="' . $category['category_link'] . '">' . $category['category_name'] . '</a>';
                            $buffy .= '</h3>';
                        }

                        if( $category['category_descr'] != '' && $descr_pos == 'bellow' ) {
                            $buffy .= '<p class="tdb-subcategory-descr">' . $cat_descr . '</p>';
                        }
                        $buffy .= '</div>';
                    }
                    $buffy .= '</div>';
                    $buffy .= '</div>';
                }

                $buffy .= '</div>';
            $buffy .= '</div>';
        }

        return $buffy;
    }




}
