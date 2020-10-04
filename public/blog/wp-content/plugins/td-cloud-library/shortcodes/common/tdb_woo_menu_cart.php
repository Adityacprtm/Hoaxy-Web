<?php

class tdb_woo_menu_cart extends td_block {

    static function cssMedia( $res_ctx ) {

        // show cart
        if ( tdc_state::is_live_editor_ajax() || tdc_state::is_live_editor_iframe() ) {
            $res_ctx->load_settings_raw('show_cart', $res_ctx->get_shortcode_att('show_cart'));
        }


        /*-- TOGGLE -- */
        // icon size
        $res_ctx->load_settings_raw('icon_size', $res_ctx->get_shortcode_att('icon_size') . 'px');

        // text vertical position
        $res_ctx->load_settings_raw('toggle_txt_align', $res_ctx->get_shortcode_att('toggle_txt_align') . 'px');

        // text space
        $text_pos = $res_ctx->get_shortcode_att('toggle_txt_pos');
        $text_space = $res_ctx->get_shortcode_att('toggle_txt_space');
        if( $text_pos == '' ) {
            $res_ctx->load_settings_raw('text_space_left', $text_space);
            if( $text_space != '' ) {
                if( is_numeric($text_space) ) {
                    $res_ctx->load_settings_raw('text_space_left', $text_space . 'px');
                }
            } else {
                $res_ctx->load_settings_raw('text_space_left', '12px');
            }
        } else if ( $text_pos == 'before' ) {
            $res_ctx->load_settings_raw('text_space_right', $text_space);
            if( $text_space != '' ) {
                if( is_numeric($text_space) ) {
                    $res_ctx->load_settings_raw('text_space_right', $text_space . 'px');
                }
            } else {
                $res_ctx->load_settings_raw('text_space_right', '12px');
            }
        }

        // show count
        $res_ctx->load_settings_raw('show_count', $res_ctx->get_shortcode_att('show_count'));

        // show count
        $res_ctx->load_settings_raw('show_value', $res_ctx->get_shortcode_att('show_value'));

        // align toggle
        $toggle_horiz_align = $res_ctx->get_shortcode_att('toggle_horiz_align');
        if( $toggle_horiz_align == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw('toggle_horiz_align_center', 1);
        } else if( $toggle_horiz_align == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw('toggle_horiz_align_right', 1);
        }

        // make inline
        $res_ctx->load_settings_raw('inline', $res_ctx->get_shortcode_att('inline'));

        // float right
        $res_ctx->load_settings_raw('float_right', $res_ctx->get_shortcode_att('float_block'));



        /*-- CART -- */
        // cart offset
        $cart_offset = $res_ctx->get_shortcode_att('cart_offset');
        $res_ctx->load_settings_raw('cart_offset', $cart_offset);
        if( $cart_offset != '' && is_numeric( $cart_offset ) ) {
            $res_ctx->load_settings_raw('cart_offset', $cart_offset . 'px');
        }

        // cart width
        $cart_width = $res_ctx->get_shortcode_att('cart_width');
        $res_ctx->load_settings_raw('cart_width', $cart_width);
        if( $cart_width != '' && is_numeric( $cart_width ) ) {
            $res_ctx->load_settings_raw('cart_width', $cart_width . 'px');
        }

        // cart padding
        $cart_padding = $res_ctx->get_shortcode_att('cart_padding');
        $res_ctx->load_settings_raw('cart_padding', $cart_padding);
        if( $cart_padding != '' && is_numeric( $cart_padding ) ) {
            $res_ctx->load_settings_raw('cart_padding', $cart_padding . 'px');
        }

        // cart border size
        $cart_border = $res_ctx->get_shortcode_att('cart_border');
        $res_ctx->load_settings_raw('cart_border', $cart_border);
        if( $cart_border != '' && is_numeric( $cart_border ) ) {
            $res_ctx->load_settings_raw('cart_border', $cart_border . 'px');
        }

        // cart border style
        $cart_border_style = $res_ctx->get_shortcode_att( 'cart_border_style' );
        if( $cart_border_style != '' ) {
            $res_ctx->load_settings_raw( 'cart_border_style', $cart_border_style );
        }

        // cart align
        $cart_horiz_align = $res_ctx->get_shortcode_att('cart_horiz_align');
        if( $cart_horiz_align == 'content-horiz-left' ) {
            $res_ctx->load_settings_raw('cart_horiz_align_left', 1);
        } else if( $cart_horiz_align == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw('cart_horiz_align_center', 1);
        }



        /*-- CART ITEMS LIST -- */
        // list bottom space
        $items_space = $res_ctx->get_shortcode_att('items_space');
        if( $items_space != '' && is_numeric( $items_space ) ) {
            $res_ctx->load_settings_raw('items_space', ($items_space / 2) . 'px');
        }

        // list bottom border size
        $items_border = $res_ctx->get_shortcode_att('items_border');
        $res_ctx->load_settings_raw('items_border', $items_border);
        if( $items_border != '' && is_numeric( $items_border ) ) {
            $res_ctx->load_settings_raw('items_border', $items_border . 'px');
        }

        // list bottom border style
        $items_border_style = $res_ctx->get_shortcode_att( 'items_border_style' );
        if( $items_border_style != '' ) {
            $res_ctx->load_settings_raw( 'items_border_style', $items_border_style );
        }



        /*-- CART ITEMS -- */
        // items bottom space
        $item_space = $res_ctx->get_shortcode_att('item_space');
        $res_ctx->load_settings_raw('item_space', $item_space);
        if( $item_space != '' && is_numeric( $item_space ) ) {
            $res_ctx->load_settings_raw('items_space', $item_space . 'px');
        }

        // items image width
        $image_width = $res_ctx->get_shortcode_att('image_width');
        $res_ctx->load_settings_raw('image_width', $image_width);
        if( $image_width != '' && is_numeric( $image_width ) ) {
            $res_ctx->load_settings_raw('image_width', $image_width . 'px');
        }

        // items image width
        $image_space = $res_ctx->get_shortcode_att('image_space');
        $res_ctx->load_settings_raw('image_space', $image_space);
        if( $image_space != '' && is_numeric( $image_space ) ) {
            $res_ctx->load_settings_raw('image_space', $image_space . 'px');
        }

        // items image radius
        $image_radius = $res_ctx->get_shortcode_att('image_radius');
        $res_ctx->load_settings_raw('image_radius', $image_radius);
        if( $image_radius != '' && is_numeric( $image_radius ) ) {
            $res_ctx->load_settings_raw('image_radius', $image_radius . 'px');
        }

        // meta info vertical align
        $meta_info_vert = $res_ctx->get_shortcode_att('meta_info_vert');
        $res_ctx->load_settings_raw('meta_info_vert', $meta_info_vert);
        if( $meta_info_vert == '' ) {
            $res_ctx->load_settings_raw('meta_info_vert', 'initial');
        }

        // subtotal horizontal align
        $subtotal_horiz = $res_ctx->get_shortcode_att('subtotal_horiz');
        if( $subtotal_horiz == 'content-horiz-left' ) {
            $res_ctx->load_settings_raw('subtotal_horiz_align_left', 1);
        } else if( $subtotal_horiz == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw('subtotal_horiz_align_center', 1);
        }

        // buttons gap
        $btn_gap = $res_ctx->get_shortcode_att('btn_gap');
        if( $btn_gap != '' && is_numeric( $btn_gap ) ) {
            $res_ctx->load_settings_raw('btn_gap', $btn_gap / 2 . 'px');
        }
        // buttons border radius
        $btn_radius = $res_ctx->get_shortcode_att('btn_radius');
        $res_ctx->load_settings_raw('btn_radius', $btn_radius);
        if( $btn_radius != '' && is_numeric( $btn_radius ) ) {
            $res_ctx->load_settings_raw('btn_radius', $btn_radius . 'px');
        }



        /*-- COLORS -- */
        // toggle
        $res_ctx->load_settings_raw('icon_color', $res_ctx->get_shortcode_att('icon_color'));
        $res_ctx->load_settings_raw('icon_color_h', $res_ctx->get_shortcode_att('icon_color_h'));

        $res_ctx->load_settings_raw('count_txt_color', $res_ctx->get_shortcode_att('count_txt_color'));
        $res_ctx->load_settings_raw('count_bg_color', $res_ctx->get_shortcode_att('count_bg_color'));

        $res_ctx->load_settings_raw('toggle_txt_color', $res_ctx->get_shortcode_att('toggle_txt_color'));
        $res_ctx->load_settings_raw('toggle_txt_color_h', $res_ctx->get_shortcode_att('toggle_txt_color_h'));

        // cart
        $res_ctx->load_settings_raw('cart_bg', $res_ctx->get_shortcode_att('cart_bg'));
        $res_ctx->load_settings_raw('cart_border_color', $res_ctx->get_shortcode_att('cart_border_color'));
        $res_ctx->load_shadow_settings( 6, 0, 2, 0, 'rgba(0, 0, 0, 0.2)', 'cart_shadow' );

        // cart items list
        $res_ctx->load_settings_raw('items_border_color', $res_ctx->get_shortcode_att('items_border_color'));

        // cart item
        $res_ctx->load_settings_raw('title_color', $res_ctx->get_shortcode_att('title_color'));
        $res_ctx->load_settings_raw('title_color_h', $res_ctx->get_shortcode_att('title_color_h'));
        $res_ctx->load_settings_raw('amount_color', $res_ctx->get_shortcode_att('amount_color'));
        $res_ctx->load_settings_raw('delete_color', $res_ctx->get_shortcode_att('delete_color'));
        $res_ctx->load_settings_raw('delete_color_h', $res_ctx->get_shortcode_att('delete_color_h'));

        // cart info
        $res_ctx->load_settings_raw('subtotal_color', $res_ctx->get_shortcode_att('subtotal_color'));

        $res_ctx->load_settings_raw('btn1_color', $res_ctx->get_shortcode_att('btn1_color'));
        $res_ctx->load_settings_raw('btn1_color_h', $res_ctx->get_shortcode_att('btn1_color_h'));
        $res_ctx->load_settings_raw('btn1_bg_color', $res_ctx->get_shortcode_att('btn1_bg_color'));
        $res_ctx->load_settings_raw('btn1_bg_color_h', $res_ctx->get_shortcode_att('btn1_bg_color_h'));

        $res_ctx->load_settings_raw('btn2_color', $res_ctx->get_shortcode_att('btn2_color'));
        $res_ctx->load_settings_raw('btn2_color_h', $res_ctx->get_shortcode_att('btn2_color_h'));
        $res_ctx->load_settings_raw('btn2_bg_color', $res_ctx->get_shortcode_att('btn2_bg_color'));
        $res_ctx->load_settings_raw('btn2_bg_color_h', $res_ctx->get_shortcode_att('btn2_bg_color_h'));



        /*-- FONTS -- */
        // toggle
        $res_ctx->load_font_settings( 'f_count' );
        $res_ctx->load_font_settings( 'f_toggle' );

        // cart item
        $res_ctx->load_font_settings( 'f_title' );
        $res_ctx->load_font_settings( 'f_amount' );

        // cart info
        $res_ctx->load_font_settings( 'f_subtotal' );
        $res_ctx->load_font_settings( 'f_btns' );
    }

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
            
                /* @show_cart */
                .$unique_block_class.tdc-element-selected .tdb-wmc-widget {
                    opacity: 1;
                    visibility: visible;
                }
            
            
                /* @icon_size */
                .$unique_block_class .tdb-wmc-icon {
                    font-size: @icon_size;
                }
                
                
                /* @toggle_txt_align */
                .$unique_block_class .tdb-wmc-txt {
                    top: @toggle_txt_align;
                }
                
                /* @text_space_left */
                .$unique_block_class .tdb-wmc-txt {
                    margin-left: @text_space_left;
                }
                /* @text_space_right */
                .$unique_block_class .tdb-wmc-txt {
                    margin-right: @text_space_right;
                }
                
                /* @show_count */
                .$unique_block_class .tdb-wmc-count {
                    display: @show_count;
                }
                /* @show_value */
                .$unique_block_class .tdb-wmc-txt {
                    display: @show_value;
                }
                
                /* @toggle_horiz_align_center */
                .$unique_block_class .tdb-wmc-link {
                    justify-content: center;
                }
                /* @toggle_horiz_align_right */
                .$unique_block_class .tdb-wmc-link {
                    justify-content: flex-end;
                }
                
                /* @inline */
                .$unique_block_class {
                    display: inline-block;
                }
                
                /* @float_right */
                .$unique_block_class {
                    float: right;
                    clear: none;
                }
                
                
                /* @cart_offset */
                .$unique_block_class .tdb-wmc-widget:before {
                    height: @cart_offset;
                }
                /* @cart_width */
                .$unique_block_class .tdb-wmc-widget {
                    width: @cart_width;
                }
                /* @cart_padding */
                .$unique_block_class .tdb-wmc-widget .tdb-wmc-widget-inner {
                    padding: @cart_padding;
                }
                /* @cart_border */
                .$unique_block_class .tdb-wmc-widget .tdb-wmc-widget-inner {
                    border-width: @cart_border;
                }
                /* @cart_border_style */
                .$unique_block_class .tdb-wmc-widget .tdb-wmc-widget-inner {
                    border-style: @cart_border_style;
                }
                /* @cart_horiz_align_left */
                .$unique_block_class .tdb-wmc-widget {
                    left: 0;
                    right: auto;
                }
                /* @cart_horiz_align_center */
                .$unique_block_class .tdb-wmc-widget {
                    left: 50%;
                    right: auto;
                    transform: translateX(-50%);
                }
                
                
                /* @items_space */
                .$unique_block_class .tdb-wmc-widget .cart_list {
                    padding-bottom: @items_space;
                    margin-bottom: @items_space;
                }
                /* @items_border */
                .$unique_block_class .tdb-wmc-widget .cart_list {
                    border-bottom-width: @items_border;
                }
                /* @items_border_style */
                .$unique_block_class .tdb-wmc-widget .cart_list {
                    border-bottom-style: @items_border_style;
                }
                
                
                /* @item_space */
                .$unique_block_class .tdb-wmc-widget .mini_cart_item {
                    margin-bottom: @item_space;
                }
                
                /* @image_width */
                .$unique_block_class .tdb-wmc-widget .mini_cart_item a:nth-child(2) img {
                    width: @image_width;
                }
                /* @image_space */
                .$unique_block_class .tdb-wmc-widget .mini_cart_item a:nth-child(2) img {
                    margin-right: @image_space;
                }
                /* @image_radius */
                .$unique_block_class .tdb-wmc-widget .mini_cart_item a:nth-child(2) img {
                    border-radius: @image_radius;
                }
                
                /* @meta_info_vert */
                .$unique_block_class .tdb-wmc-widget .mini_cart_item a:nth-child(2) {
                    align-items: @meta_info_vert;
                }
                
                
                /* @subtotal_horiz_align_left */
                .$unique_block_class .tdb-wmc-widget .total {
                    text-align: left;
                }
                /* @subtotal_horiz_align_center */
                .$unique_block_class .tdb-wmc-widget .total {
                    text-align: center;
                }
                
                /* @btn_gap */
                .$unique_block_class .tdb-wmc-widget .buttons a {
                    width: calc(50% - @btn_gap);
                }
                /* @btn_radius */
                .$unique_block_class .tdb-wmc-widget .buttons a {
                    border-radius: @btn_radius;
                }
                
                
                /* @icon_color */
                .$unique_block_class .tdb-wmc-icon {
                    color: @icon_color;
                }
                /* @icon_color_h */
                .$unique_block_class .tdb-wmc-wrap:hover .tdb-wmc-icon {
                    color: @icon_color_h;
                }
                
                /* @count_txt_color */
                .$unique_block_class .tdb-wmc-count {
                    color: @count_txt_color;
                }
                /* @count_bg_color */
                .$unique_block_class .tdb-wmc-count {
                    background-color: @count_bg_color;
                }
                
                /* @toggle_txt_color */
                .$unique_block_class .tdb-wmc-txt {
                    color: @toggle_txt_color;
                }
                /* @toggle_txt_color_h */
                .$unique_block_class .tdb-wmc-wrap:hover .tdb-wmc-txt {
                    color: @toggle_txt_color_h;
                }
                
                /* @cart_bg */
                .$unique_block_class .tdb-wmc-widget .tdb-wmc-widget-inner {
                    background-color: @cart_bg;
                }
                .$unique_block_class .tdb-wmc-widget .mini_cart_item .blockOverlay {
                    background-color: @cart_bg !important;
                }
                
                /* @cart_border_color */
                .$unique_block_class .tdb-wmc-widget .tdb-wmc-widget-inner {
                    border-color: @cart_border_color;
                }
                /* @cart_shadow */
                .$unique_block_class .tdb-wmc-widget .tdb-wmc-widget-inner {
                    box-shadow: @cart_shadow;
                }
                
                /* @items_border_color */
                .$unique_block_class .tdb-wmc-widget .cart_list {
                    border-bottom-color: @items_border_color;
                }
                
                /* @title_color */
                .$unique_block_class .tdb-wmc-widget .mini_cart_item a:nth-child(2) {
                    color: @title_color;
                }
                /* @title_color_h */
                .$unique_block_class .tdb-wmc-widget .mini_cart_item:hover a:nth-child(2) {
                    color: @title_color_h;
                }
                /* @amount_color */
                .$unique_block_class .tdb-wmc-widget .quantity {
                    color: @amount_color;
                }
                /* @delete_color */
                .$unique_block_class .tdb-wmc-widget .remove_from_cart_button {
                    color: @delete_color !important;
                }
                /* @delete_color_h */
                .$unique_block_class .tdb-wmc-widget .remove_from_cart_button:hover {
                    color: @delete_color_h !important;
                }
                
                /* @subtotal_color */
                .$unique_block_class .tdb-wmc-widget .total {
                    color: @subtotal_color;
                }
                
                /* @btn1_color */
                .$unique_block_class .tdb-wmc-widget .buttons a:first-child {
                    color: @btn1_color;
                }
                /* @btn1_color_h */
                .$unique_block_class .tdb-wmc-widget .buttons a:first-child:hover {
                    color: @btn1_color_h;
                }
                /* @btn1_bg_color */
                .$unique_block_class .tdb-wmc-widget .buttons a:first-child {
                    background-color: @btn1_bg_color;
                }
                /* @btn1_bg_color_h */
                .$unique_block_class .tdb-wmc-widget .buttons a:first-child:hover {
                    background-color: @btn1_bg_color_h;
                }
                
                /* @btn2_color */
                .$unique_block_class .tdb-wmc-widget .buttons .checkout {
                    color: @btn2_color;
                }
                /* @btn2_color_h */
                .$unique_block_class .tdb-wmc-widget .buttons .checkout:hover {
                    color: @btn2_color_h;
                }
                /* @btn2_bg_color */
                .$unique_block_class .tdb-wmc-widget .buttons .checkout {
                    background-color: @btn2_bg_color;
                }
                /* @btn2_bg_color_h */
                .$unique_block_class .tdb-wmc-widget .buttons .checkout:hover {
                    background-color: @btn2_bg_color_h;
                }
                
                
                /* @f_count */
                .$unique_block_class .tdb-wmc-count {
                    @f_count
                }
                /* @f_toggle */
                .$unique_block_class .tdb-wmc-txt {
                    @f_toggle
                }
                /* @f_title */
                .$unique_block_class .tdb-wmc-widget .mini_cart_item a:nth-child(2) {
                    @f_title
                }
                /* @f_amount */
                .$unique_block_class .tdb-wmc-widget .quantity {
                    @f_amount
                }
                /* @f_subtotal */
                .$unique_block_class .tdb-wmc-widget .total {
                    @f_subtotal
                }
                /* @f_btns */
                .$unique_block_class .tdb-wmc-widget .buttons a {
                    @f_btns
                }
                
            </style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();

        return $compiled_css;
    }

    function render($atts, $content = null) {

        parent::render($atts);

        global $woocommerce;
        $cart_count = $woocommerce->cart->cart_contents_count;
        $cart_subtotal = $woocommerce->cart->subtotal;
        if( $cart_subtotal == 0 ) {
            $cart_subtotal = '0,00 ' . get_woocommerce_currency();
        } else {
            $cart_subtotal .= ' ' . get_woocommerce_currency();
        }

        ob_start();
        woocommerce_mini_cart();
        $cart_contents = ob_get_clean();

        // toggle icon
        $icon = $this->get_att('tdicon');

        // toggle text
        $text_position = $this->get_att('toggle_txt_pos');
        $buffy_text = '<span class="tdb-wmc-txt">' . $cart_subtotal . '</span>';


        $buffy = ''; //output buffer

        $buffy .= '<div class="' . $this->get_block_classes() . '" ' . $this->get_block_html_atts() . '>';

		    //get the block js
		    $buffy .= $this->get_block_css();

		    //get the js for this block
		    $buffy .= $this->get_block_js();


            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
                $buffy .= '<div class="tdb-wmc-wrap">';
                    $buffy .= '<a class="tdb-wmc-link" href="' . wc_get_cart_url() . '">';
                        if( $text_position == 'before' ) {
                            $buffy .= $buffy_text;
                        }

                        $buffy .= '<div class="tdb-wmc-icon-wrap">';
                            $buffy .= '<i class="tdb-wmc-icon ' . $icon . '"></i>';
                            if( $cart_count > 0 ) {
                                $buffy .= '<span class="tdb-wmc-count">'. $cart_count . '</span>';
                            }
                        $buffy .= '</div>';

                        if( $text_position == '' ) {
                            $buffy .= $buffy_text;
                        }
                    $buffy .= '</a>';

                    $buffy .= '<div class="tdb-wmc-widget">';
                        $buffy .= '<div class="tdb-wmc-widget-inner">';
                            $buffy .= $cart_contents;
                        $buffy .= '</div>';
                    $buffy .= '</div>';
                $buffy .= '</div>';
            $buffy .= '</div>';
        $buffy .= '</div> <!-- ./block -->';

        return $buffy;
    }
}