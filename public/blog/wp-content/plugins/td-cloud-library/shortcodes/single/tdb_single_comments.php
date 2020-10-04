<?php

/**
 * Class td_single_comments
 */

class tdb_single_comments extends td_block {

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
                
                /* @auth_color */
                .$unique_block_class cite,
                .$unique_block_class cite a {
                    color: @auth_color;
                }
                /* @auth_h_color */
                .$unique_block_class cite a:hover {
                    color: @auth_h_color;
                }
                /* @meta_color */
                .$unique_block_class .comment-link {
                    color: @meta_color;
                }
                /* @meta_h_color */
                .$unique_block_class .comment-link:hover {
                    color: @meta_h_color;
                }
                /* @meta_show */
                .$unique_block_class .comment-link {
                    display: @meta_show;
                }
                /* @descr_color */
                .$unique_block_class .comment-content {
                    color: @descr_color;
                }
                /* @reply_color */
                .$unique_block_class .comment-reply-link {
                    color: @reply_color;
                }
                /* @edit_color */
                .$unique_block_class .comment-edit-link {
                    color: @edit_color;
                }
                /* @edit_h_color */
                .$unique_block_class .comment-edit-link:hover {
                    color: @edit_h_color;
                }
                /* @reply_h_color */
                .$unique_block_class .comment-reply-link:hover,
                .$unique_block_class #cancel-comment-reply-link:hover,
                .$unique_block_class .logged-in-as a:hover {
                    color: @reply_h_color;
                }
                /* @sep_size */
                .$unique_block_class .comment {
                    border-bottom-width: @sep_size;
                }
                .$unique_block_class .comment .children {
                    border-top-width: @sep_size;
                }
                /* @sep_style */
                .$unique_block_class .comment {
                    border-bottom-style: @sep_style;
                }
                .$unique_block_class .comment .children {
                    border-top-style: @sep_style;
                }
                /* @sep_color */
                .$unique_block_class .comment {
                    border-bottom-color: @sep_color;
                }
                .$unique_block_class .comment .children {
                    border-top-color: @sep_color;
                }
                
                
                
                /* @form_title_color */
                .$unique_block_class .comment-reply-title {
                    color: @form_title_color;
                }
                /* @form_agree_color */
                .$unique_block_class .comment-form-cookies-consent label,
                .$unique_block_class .logged-in-as,
                .$unique_block_class .logged-in-as a {
                    color: @form_agree_color;
                }
                /* @bg_color */
                .$unique_block_class input[type=text],
                .$unique_block_class textarea {
                    background-color: @bg_color;
                }
                /* @bg_f_color */
                .$unique_block_class input[type=text]:active,
                .$unique_block_class textarea:active,
                 .$unique_block_class input[type=text]:focus,
                .$unique_block_class textarea:focus {
                    background-color: @bg_f_color;
                }
                /* @input_color */
                .$unique_block_class input[type=text],
                .$unique_block_class textarea {
                    color: @input_color;
                }
                /* @placeholder_color */
                .$unique_block_class input[type=text]::placeholder,
                .$unique_block_class textarea::placeholder {
                    color: @placeholder_color;
                }
                .$unique_block_class input[type=text]:-ms-input-placeholder,
                .$unique_block_class textarea:-ms-input-placeholder {
                    color: @placeholder_color !important;
                }
                /* @input_border_size */
                .$unique_block_class input,
                .$unique_block_class textarea {
                    border-width: @input_border_size !important;
                }
                /* @input_border_color */
                .$unique_block_class input,
                .$unique_block_class textarea {
                    border-color: @input_border_color !important;
                }
                /* @input_border_f_color */
                .$unique_block_class input[type=text]:focus,
                .$unique_block_class textarea:focus {
                    border-color: @input_border_f_color !important;
                }
                /* @input_border_radius */
                .$unique_block_class input,
                .$unique_block_class textarea {
                    border-radius: @input_border_radius;
                }
                /* @btn_txt_color */
                .$unique_block_class .comment-form .submit {
                    color: @btn_txt_color;
                }
                /* @btn_bg_color */
                .$unique_block_class .comment-form .submit {
                    background-color: @btn_bg_color;
                }
                /* @btn_txt_h_color */
                .$unique_block_class .comment-form .submit:hover {
                    color: @btn_txt_h_color;
                }
                /* @btn_bg_h_color */
                .$unique_block_class .comment-form .submit:hover {
                    background-color: @btn_bg_h_color;
                }
				/* @btn_radius */
				.$unique_block_class .comment-form .submit {
					border-radius: @btn_radius;
				}
				/* @avatar_radius */
				.$unique_block_class .avatar {
					border-radius: @avatar_radius;
				}
				/* @btn_padding */
				.$unique_block_class .comment-form .submit {
					padding: @btn_padding;
				}
				/* @btn_horiz_align */
				.$unique_block_class .comment-form .form-submit {
					text-align: @btn_horiz_align;
				}
				


				/* @f_header */
				.$unique_block_class .td-block-title a,
				.$unique_block_class .td-block-title span {
					@f_header
				}
				/* @f_auth */
				.$unique_block_class cite {
					@f_auth
				}
				/* @f_meta */
				.$unique_block_class .comment-link,
				.$unique_block_class .comment-edit-link {
					@f_meta
				}
				/* @f_descr */
				.$unique_block_class .comment-content p {
					@f_descr
				}
				/* @f_reply */
				.$unique_block_class .comment-reply-link {
					@f_reply
				}
				/* @f_frm_title */
				.$unique_block_class .comment-reply-title {
					@f_frm_title
				}
				/* @f_input */
				.$unique_block_class input[type=text],
                .$unique_block_class textarea {
					@f_input
				}
				/* @f_btn */
				.$unique_block_class .comment-form .submit {
					@f_btn
				}
				/* @f_agreement */
				.$unique_block_class .comment-form-cookies-consent label,
                .$unique_block_class .logged-in-as,
                .$unique_block_class .logged-in-as a {
					@f_agreement
				}
				
			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        /*-- COMMENTS -- */
        $res_ctx->load_settings_raw( 'auth_color', $res_ctx->get_shortcode_att('auth_color') );
        $res_ctx->load_settings_raw( 'auth_h_color', $res_ctx->get_shortcode_att('auth_h_color') );
        $res_ctx->load_settings_raw( 'meta_color', $res_ctx->get_shortcode_att('meta_color') );
        $res_ctx->load_settings_raw( 'meta_h_color', $res_ctx->get_shortcode_att('meta_h_color') );
        $meta_show = $res_ctx->get_shortcode_att('meta_show');
        $res_ctx->load_settings_raw( 'meta_show', $meta_show );
        if( $meta_show == '' ) {
            $res_ctx->load_settings_raw( 'meta_show', 'inline-block' );
        }
        $res_ctx->load_settings_raw( 'descr_color', $res_ctx->get_shortcode_att('descr_color') );
        $res_ctx->load_settings_raw( 'reply_color', $res_ctx->get_shortcode_att('reply_color') );
        $res_ctx->load_settings_raw( 'reply_h_color', $res_ctx->get_shortcode_att('reply_h_color') );
        $res_ctx->load_settings_raw( 'edit_color', $res_ctx->get_shortcode_att('edit_color') );
        $res_ctx->load_settings_raw( 'edit_h_color', $res_ctx->get_shortcode_att('edit_h_color') );
        $sep_size = $res_ctx->get_shortcode_att('sep_size');
        $res_ctx->load_settings_raw( 'sep_size', $sep_size );
        if( $sep_size != '' && is_numeric( $sep_size ) ) {
            $res_ctx->load_settings_raw( 'sep_size', $sep_size . 'px' );
        }
        $sep_style = $res_ctx->get_shortcode_att('sep_style');
        $res_ctx->load_settings_raw( 'sep_style', $sep_style );
        if( $sep_style == '' ) {
            $res_ctx->load_settings_raw( 'sep_style', 'dashed' );
        }
        $res_ctx->load_settings_raw( 'sep_color', $res_ctx->get_shortcode_att('sep_color') );



        /*-- FORM -- */
        $res_ctx->load_settings_raw( 'form_title_color', $res_ctx->get_shortcode_att('form_title_color') );
        $res_ctx->load_settings_raw( 'form_agree_color', $res_ctx->get_shortcode_att('form_agree_color') );

        // input border size
        $input_border_size = $res_ctx->get_shortcode_att('input_border_size');
        $res_ctx->load_settings_raw( 'input_border_size', $input_border_size );
        if( $input_border_size != '' && is_numeric( $input_border_size ) ) {
            $res_ctx->load_settings_raw( 'input_border_size', $input_border_size . 'px' );
        }
        // input border colors
        $res_ctx->load_settings_raw( 'input_border_color', $res_ctx->get_shortcode_att('input_border_color') );
        $res_ctx->load_settings_raw( 'input_border_f_color', $res_ctx->get_shortcode_att('input_border_f_color') );
        // input border radius
        $input_border_radius = $res_ctx->get_shortcode_att('input_border_radius');
        $res_ctx->load_settings_raw( 'input_border_radius', $input_border_radius );
        if( $input_border_radius != '' && is_numeric( $input_border_radius ) ) {
            $res_ctx->load_settings_raw( 'input_border_radius', $input_border_radius . 'px' );
        }

        $res_ctx->load_settings_raw( 'bg_color', $res_ctx->get_shortcode_att('bg_color') );
        $res_ctx->load_settings_raw( 'bg_f_color', $res_ctx->get_shortcode_att('bg_f_color') );

        $res_ctx->load_settings_raw( 'input_color', $res_ctx->get_shortcode_att('input_color') );
        $res_ctx->load_settings_raw( 'placeholder_color', $res_ctx->get_shortcode_att('placeholder_color') );

        $res_ctx->load_settings_raw( 'btn_txt_color', $res_ctx->get_shortcode_att('btn_txt_color') );
        $res_ctx->load_settings_raw( 'btn_bg_color', $res_ctx->get_shortcode_att('btn_bg_color') );
        $res_ctx->load_settings_raw( 'btn_txt_h_color', $res_ctx->get_shortcode_att('btn_txt_h_color') );
        $res_ctx->load_settings_raw( 'btn_bg_h_color', $res_ctx->get_shortcode_att('btn_bg_h_color') );
        $btn_radius = $res_ctx->get_shortcode_att('btn_radius');
        $res_ctx->load_settings_raw( 'btn_radius', $btn_radius );
        if( $btn_radius != '' && is_numeric( $btn_radius ) ) {
            $res_ctx->load_settings_raw( 'btn_radius', $btn_radius . 'px' );
        }

        // avatar radius
        $avatar_radius = $res_ctx->get_shortcode_att('avatar_radius');
        $res_ctx->load_settings_raw( 'avatar_radius', $avatar_radius );
        if( $avatar_radius != '' && is_numeric( $avatar_radius ) ) {
            $res_ctx->load_settings_raw( 'avatar_radius', $avatar_radius . 'px' );
        }

        // button padding
        $btn_padding = $res_ctx->get_shortcode_att('btn_padding');
        $res_ctx->load_settings_raw( 'btn_padding', $btn_padding );
        if ( is_numeric( $btn_padding ) ) {
            $res_ctx->load_settings_raw( 'btn_padding', $btn_padding . 'px' );
        }

        // button align
        $btn_horiz_align = $res_ctx->get_shortcode_att('btn_align_horiz');
        if ( $btn_horiz_align == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'btn_horiz_align', 'center' );
        } else if ( $btn_horiz_align == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'btn_horiz_align', 'right' );
        }




        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_header' );
        $res_ctx->load_font_settings( 'f_auth' );
        $res_ctx->load_font_settings( 'f_meta' );
        $res_ctx->load_font_settings( 'f_descr' );
        $res_ctx->load_font_settings( 'f_reply' );
        $res_ctx->load_font_settings( 'f_frm_title' );
        $res_ctx->load_font_settings( 'f_input' );
        $res_ctx->load_font_settings( 'f_btn' );
        $res_ctx->load_font_settings( 'f_agreement' );

    }

    /**
     * Disable loop block features. This block does not use a loop and it doesn't need to run a query.
     */
    function __construct() {
        parent::disable_loop_block_features();
    }


    function render( $atts, $content = null ) {
        parent::render( $atts ); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        global $tdb_state_single;

        $post_comments_data = $tdb_state_single->post_comments->__invoke();

        $additional_classes = array();

        $form_layout = $this->get_att('form_layout');
        if( !empty( $form_layout ) ) {
            $additional_classes[] = 'tdb-comm-layout' . $form_layout;
        }

        $buffy = ''; //output buffer

        $buffy .= '<div class="' . $this->get_block_classes($additional_classes) . '" ' . $this->get_block_html_atts() . '>';

            //get the block css
            $buffy .= $this->get_block_css();

            //get the js for this block
            $buffy .= $this->get_block_js();


            $buffy .= '<div class="tdb-block-inner td-fix-index">';

                $post_comments_number = $post_comments_data['post_comments_number'];

                if( $this->get_att('block_template_id') != '' ) {
                    $global_block_template_id = $this->get_att('block_template_id');
                } else {
                    $global_block_template_id = td_options::get( 'tds_global_block_template', 'td_block_template_1' );
                }
                $td_css_cls_block_title = 'td-block-title';

                if ( $global_block_template_id === 'td_block_template_1' ) {
                    $td_css_cls_block_title = 'block-title';
                }

                $buffy .= '<div class="comments" id="comments">';

				    if ( $this->get_att('hide_header_template') === '' ) {
					    if ( $post_comments_number > 0 ) {

						    if ( $post_comments_number > 1 ) {
							    $post_comments_no_text = $post_comments_number . ' ' . __td( 'COMMENTS', TD_THEME_NAME );
						    } else {
							    $post_comments_no_text = __td( '1 COMMENT', TD_THEME_NAME );
						    }

						    $buffy .= '<div class="td-comments-title-wrap ' . $global_block_template_id . '">';
						    $buffy .= '<h4 class="td-comments-title ' . $td_css_cls_block_title . '"><span>' . $post_comments_no_text . '</span></h4>';
						    $buffy .= '</div>';

					    }
				    }

			        $buffy .= $post_comments_data['post_comments'];

				    if( isset( $post_comments_data['post_comments_reply_form'] ) ) {
                        $buffy .= $post_comments_data['post_comments_reply_form'];
                    }

                $buffy .= '</div>';

            $buffy .= '</div>';


        $buffy .= '</div>';

        return $buffy;
    }

}