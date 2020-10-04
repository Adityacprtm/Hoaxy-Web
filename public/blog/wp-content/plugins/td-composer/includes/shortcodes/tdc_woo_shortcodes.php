<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 16.02.2016
 * Time: 14:31
 */

class tdc_woo_shortcodes extends tdc_composer_block {

    private $atts;

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->get_att('tdc_css_class');
        $unique_block_id = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
            
                /* @gap */
                .$unique_block_class ul.products {
                    margin-left: -@gap;
                    margin-right: -@gap;
                }
                .$unique_block_class ul.products li.product {
                    padding-left: @gap;
                    padding-right: @gap;
                }
                
                /* @space */
                .$unique_block_class .woocommerce ul.products li.product {
                    margin-bottom: @space;
                }
            
                /* @img_space */
                .$unique_block_class .woocommerce ul.products li.product img {
                    margin-bottom: @img_space;
                }
                /* @title_space */
                .$unique_block_class ul.products li.product .woocommerce-loop-product__title {
                    margin-bottom: @title_space;
                }
                /* @price_space */
                .$unique_block_class ul.products li.product .price {
                    margin-bottom: @price_space;
                }
                /* @btn_padding */
                .$unique_block_class ul.products li.product a.button {
                    padding: @btn_padding;
                }
            
                /* @horiz_align_center */
                .$unique_block_class .woocommerce ul.products li.product {
                    text-align: center;
                }
                /* @horiz_align_right */
                .$unique_block_class .woocommerce ul.products li.product {
                    text-align: right;
                }
                
                
                /* @title_color */
                .$unique_block_class .woocommerce-loop-product__link .woocommerce-loop-product__title,
                .$unique_block_class .product-category > a .woocommerce-loop-category__title,
                .$unique_block_class .product-category > a mark {
                    color: @title_color;
                }
                /* @title_color_h */
                .$unique_block_class .woocommerce-loop-product__link:hover .woocommerce-loop-product__title,
                .$unique_block_class .product-category > a:hover .woocommerce-loop-category__title,
                .$unique_block_class .product-category > a:hover mark {
                    color: @title_color_h;
                }
                
                /* @price_color */
                .$unique_block_class .price > .amount,
                .$unique_block_class .price ins .amount {
                    color: @price_color;
                }
                /* @old_price_color */
                .$unique_block_class .price del .amount {
                    color: @old_price_color;
                }
                
                /* @sale_txt_color */
                .$unique_block_class .woocommerce-loop-product__link .onsale {
                    color: @sale_txt_color;
                }
                /* @sale_bg_color */
                .$unique_block_class .woocommerce-loop-product__link .onsale {
                    background-color: @sale_bg_color;
                }
                /* @sale_txt_color_h */
                .$unique_block_class .woocommerce-loop-product__link:hover .onsale {
                    color: @sale_txt_color_h;
                }
                /* @sale_bg_color_h */
                .$unique_block_class .woocommerce-loop-product__link:hover .onsale {
                    background-color: @sale_bg_color_h;
                }
                
                /* @btn_txt_color */
                .$unique_block_class .product a.button {
                    color: @btn_txt_color;
                }
                /* @btn_txt_color_h */
                .$unique_block_class .product a.button:hover {
                    color: @btn_txt_color_h;
                }
                /* @btn_bg_color */
                .$unique_block_class .product a.button {
                    background-color: @btn_bg_color;
                }
                /* @btn_bg_color_h */
                .$unique_block_class .product a.button:hover {
                    background-color: @btn_bg_color_h;
                }
                
                /* @f_title */
                .$unique_block_class .woocommerce-loop-product__link .woocommerce-loop-product__title,
                .$unique_block_class .product-category > a .woocommerce-loop-category__title,
                .$unique_block_class .product-category > a mark {
                    @f_title
                }
                /* @f_price */
                .$unique_block_class .price > .amount,
                .$unique_block_class .price ins .amount {
                    @f_price
                }
                /* @f_old_price */
                .$unique_block_class .price del .amount {
                    @f_old_price
                }
                /* @f_sale */
                .$unique_block_class .woocommerce-loop-product__link .onsale {
                    @f_sale
                }
                /* @f_btn */
                .$unique_block_class .product a.button {
                    @f_btn
                }

			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->atts );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        // products gap
        $gap = $res_ctx->get_shortcode_att('gap');
        $res_ctx->load_settings_raw( 'gap', $gap );
        if ( $gap == '' ) {
            $res_ctx->load_settings_raw( 'gap', '20px' );
        } else if ( is_numeric( $gap ) ) {
            $res_ctx->load_settings_raw( 'gap', $gap / 2 . 'px' );
        }

        // products bottom space
        $space = $res_ctx->get_shortcode_att('space');
        $res_ctx->load_settings_raw( 'space', $space );
        if ( $space != '' && is_numeric( $space ) ) {
            $res_ctx->load_settings_raw( 'space', $space . 'px' );
        }

        // image bottom space
        $img_space = $res_ctx->get_shortcode_att('img_space');
        $res_ctx->load_settings_raw( 'img_space', $img_space );
        if( $img_space != '' && is_numeric( $img_space ) ) {
            $res_ctx->load_settings_raw( 'img_space', $img_space . 'px' );
        }
        // title bottom space
        $title_space = $res_ctx->get_shortcode_att('title_space');
        $res_ctx->load_settings_raw( 'title_space', $title_space );
        if( $title_space != '' && is_numeric( $title_space ) ) {
            $res_ctx->load_settings_raw( 'title_space', $title_space . 'px' );
        }
        // price bottom space
        $price_space = $res_ctx->get_shortcode_att('price_space');
        $res_ctx->load_settings_raw( 'price_space', $price_space );
        if( $price_space != '' && is_numeric( $price_space ) ) {
            $res_ctx->load_settings_raw( 'price_space', $price_space . 'px' );
        }
        // button padding
        $btn_padding = $res_ctx->get_shortcode_att('btn_padding');
        $res_ctx->load_settings_raw( 'btn_padding', $btn_padding );
        if( $btn_padding != '' && is_numeric( $btn_padding ) ) {
            $res_ctx->load_settings_raw( 'btn_padding', $btn_padding . 'px' );
        }

        // horizontal align
        $horiz_align = $res_ctx->get_shortcode_att('horiz_align');
        if( $horiz_align == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'horiz_align_center', 1 );
        } else if ( $horiz_align == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'horiz_align_right', 1 );
        }



        /*-- COLORS -- */
        $res_ctx->load_settings_raw( 'title_color', $res_ctx->get_shortcode_att('title_color') );
        $res_ctx->load_settings_raw( 'title_color_h', $res_ctx->get_shortcode_att('title_color_h') );

        $res_ctx->load_settings_raw( 'price_color', $res_ctx->get_shortcode_att('price_color') );
        $res_ctx->load_settings_raw( 'old_price_color', $res_ctx->get_shortcode_att('old_price_color') );

        $res_ctx->load_settings_raw( 'sale_txt_color', $res_ctx->get_shortcode_att('sale_txt_color') );
        $res_ctx->load_settings_raw( 'sale_txt_color_h', $res_ctx->get_shortcode_att('sale_txt_color_h') );
        $res_ctx->load_settings_raw( 'sale_bg_color', $res_ctx->get_shortcode_att('sale_bg_color') );
        $res_ctx->load_settings_raw( 'sale_bg_color_h', $res_ctx->get_shortcode_att('sale_bg_color_h') );

        $res_ctx->load_settings_raw( 'btn_txt_color', $res_ctx->get_shortcode_att('btn_txt_color') );
        $res_ctx->load_settings_raw( 'btn_txt_color_h', $res_ctx->get_shortcode_att('btn_txt_color_h') );
        $res_ctx->load_settings_raw( 'btn_bg_color', $res_ctx->get_shortcode_att('btn_bg_color') );
        $res_ctx->load_settings_raw( 'btn_bg_color_h', $res_ctx->get_shortcode_att('btn_bg_color_h') );



        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_title' );
        $res_ctx->load_font_settings( 'f_price' );
        $res_ctx->load_font_settings( 'f_old_price' );
        $res_ctx->load_font_settings( 'f_sale' );
        $res_ctx->load_font_settings( 'f_btn' );

    }

    function render($atts, $content = null) {
        parent::render($atts);

        $this->atts = shortcode_atts(
            array(
                'woo_shortcode' => '',
                'content' => td_util::get_block_error('Woo Shortcodes', 'Please select the woocommerce shortcode to display' ),

                'gap' => '',
                'space' => '',
                'img_space' => '',
                'title_space' => '',
                'price_space' => '',
                'btn_padding' => '',

                'horiz_align' => '',

                'title_color' => '',
                'title_color_h' => '',

                'price_color' => '',
                'old_price_color' => '',

                'sale_txt_color' => '',
                'sale_txt_color_h' => '',
                'sale_bg_color' => '',
                'sale_bg_color_h' => '',

                'btn_txt_color' => '',
                'btn_txt_color_h' => '',
                'btn_bg_color' => '',
                'btn_bg_color_h' => '',

                'f_title_font_family' => '',
                'f_title_font_size' => '',
                'f_title_font_line_height' => '',
                'f_title_font_style' => '',
                'f_title_font_weight' => '',
                'f_title_font_transform' => '',
                'f_title_font_spacing' => '',
                'f_price_font_family' => '',
                'f_price_font_size' => '',
                'f_price_font_line_height' => '',
                'f_price_font_style' => '',
                'f_price_font_weight' => '',
                'f_price_font_transform' => '',
                'f_price_font_spacing' => '',
                'f_old_price_font_family' => '',
                'f_old_price_font_size' => '',
                'f_old_price_font_line_height' => '',
                'f_old_price_font_style' => '',
                'f_old_price_font_weight' => '',
                'f_old_price_font_transform' => '',
                'f_old_price_font_spacing' => '',
                'f_sale_font_family' => '',
                'f_sale_font_size' => '',
                'f_sale_font_line_height' => '',
                'f_sale_font_style' => '',
                'f_sale_font_weight' => '',
                'f_sale_font_transform' => '',
                'f_sale_font_spacing' => '',
                'f_btn_font_family' => '',
                'f_btn_font_size' => '',
                'f_btn_font_line_height' => '',
                'f_btn_font_style' => '',
                'f_btn_font_weight' => '',
                'f_btn_font_transform' => '',
                'f_btn_font_spacing' => '',
                'el_class' => '',
            ), $atts, 'tdc_woo_shortcodes');

        if (is_null($content) || empty($content)) {
            $content = $this->atts['content'];
            return '<div class="wpb_wrapper ' . $this->get_wrapper_class() . '">' . $content . '</div>';
        }

        $content = rawurldecode(base64_decode(strip_tags($content)));
        $content = do_shortcode(shortcode_unautop($content));
        
        $buffy = '<div class="wpb_wrapper ' . $this->get_wrapper_class() . ' ' . $this->get_block_classes(array($this->atts['el_class'])) . '">';
            //get the block css
            $buffy .= $this->get_block_css();
            //td-fix-index class to fix background color z-index
            $buffy .= '<div class="td-fix-index">' . $content . '</div>';
        $buffy .= '</div>';

        return $buffy;
    }
}