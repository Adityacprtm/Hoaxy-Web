<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 19.08.2016
 * Time: 13:54
 */

class td_block_covid_19_stats extends td_block {

	private $atts = array();

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
            
                /* @style */
                .$unique_block_class .td-covid-country {
                    display: flex;
                }
                .$unique_block_class .td-covid-country > div {
                    flex: 1;
                }
                .$unique_block_class .td-covid-country:last-child > div {
                    border-bottom: none !important;
                }
                .$unique_block_class .td-covid-country > div:last-child {
                    border-right: none !important;
                }
                .$unique_block_class .td-covid-date {
                    margin-top: 8px;
                    font-size: 12px;
                    text-align: center;
                    color: #999;
                }
                @media (max-width: 767px) {
                    .$unique_block_class .td-covid-countries {
                        overflow-x: scroll
                    }
                    .$unique_block_class .td-covid-country {
                        white-space: nowrap;
                    }
                    .$unique_block_class .td-covid-country > div {
                        white-space: normal;
                    }
                    .$unique_block_class .td-covid-country > div:not(.td-covid-country-name) {
                        min-width: 90px;
                    }
                    .$unique_block_class .td-covid-country-name {
                        min-width: 150px;
                    }
                }
                
                /* @table_height */
                .$unique_block_class .td-covid-countries {
                    height: @table_height;
                    overflow-y: auto;
                }
                
                /* @col_padding */
                .$unique_block_class .td-covid-country > div {
                    padding: @col_padding;
                }
                /* @col_align_horizontal_center */
                .$unique_block_class .td-covid-country > div {
                    text-align: center;
                }
                /* @col_align_horizontal_right */
                .$unique_block_class .td-covid-country > div {
                    text-align: right;
                }
                
                /* @table_border_width */
                .$unique_block_class .td-covid-countries {
                    border-width: @table_border_width;
                }
                /* @table_border_style */
                .$unique_block_class .td-covid-countries {
                    border-style: @table_border_style;
                }
                /* @table_border_color */
                .$unique_block_class .td-covid-countries {
                    border-color: @table_border_color;
                }
                
                /* @date_color */
                .$unique_block_class .td-covid-date {
                    color: @date_color;
                }
                
                /* @row_h_text_color */
                .$unique_block_class .td-covid-country:first-child > div {
                    color: @row_h_text_color;
                }
                /* @row_h_bg_color */
                .$unique_block_class .td-covid-country:first-child > div {
                    background-color: @row_h_bg_color;
                }
                
                /* @row_text_color */
                .$unique_block_class .td-covid-country:not(:first-child) > div {
                    color: @row_text_color;
                }
                /* @row_bg_color */
                .$unique_block_class .td-covid-country:not(:first-child) {
                    background-color: @row_bg_color;
                }
                /* @row_border_width */
                .$unique_block_class .td-covid-country > div {
                    border-bottom-width: @row_border_width;
                }
                /* @row_border_style */
                .$unique_block_class .td-covid-country > div {
                    border-bottom-style: @row_border_style;
                }
                /* @row_border_color */
                .$unique_block_class .td-covid-country > div {
                    border-bottom-color: @row_border_color;
                }
                
                /* @col_border_width */
                .$unique_block_class .td-covid-country > div {
                    border-right-width: @col_border_width;
                }
                /* @col_border_style */
                .$unique_block_class .td-covid-country > div {
                    border-right-style: @col_border_style;
                }
                /* @col_border_color */
                .$unique_block_class .td-covid-country > div {
                    border-right-color: @col_border_color;
                }
            

                /* @f_header */
				.$unique_block_class .td-block-title a,
				.$unique_block_class .td-block-title span {
					@f_header
				}
                /* @f_row_h */
				.$unique_block_class .td-covid-country:first-child > div {
					@f_row_h
				}
                /* @f_row */
				.$unique_block_class .td-covid-country:not(:first-child) > div {
					@f_row
				}
                /* @f_date */
				.$unique_block_class .td-covid-date {
					@f_date
				}
				
			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        // style
        $res_ctx->load_settings_raw('style', 1);


        // table height
        $table_height = $res_ctx->get_shortcode_att('table_height');
        if( $table_height != '' && is_numeric( $table_height ) ) {
            $res_ctx->load_settings_raw('table_height', $table_height . 'px');
        }

        // columns padding
        $col_padding = $res_ctx->get_shortcode_att('col_padding');
        $res_ctx->load_settings_raw('col_padding', '12px 16px');
        if( $col_padding != '' ) {
            if( is_numeric($col_padding) ) {
                $res_ctx->load_settings_raw('col_padding', $col_padding . 'px');
            } else {
                $res_ctx->load_settings_raw('col_padding', $col_padding);
            }
        }
        // columns horizontal align
        $col_align_horizontal = $res_ctx->get_shortcode_att('col_align_horizontal');
        if( $col_align_horizontal == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw('col_align_horizontal_center', 1);
        } else if( $col_align_horizontal == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw('col_align_horizontal_right', 1);
        }


        // table border width
        $table_border_width = $res_ctx->get_shortcode_att('table_border');
        $res_ctx->load_settings_raw('table_border_width', '1px');
        if( $table_border_width != '' && is_numeric($table_border_width) ) {
            $res_ctx->load_settings_raw('table_border_width', $table_border_width . 'px');
        }
        // table border style
        $table_border_style = $res_ctx->get_shortcode_att('table_border_style');
        if( $table_border_style != '' ) {
            $res_ctx->load_settings_raw('table_border_style', $table_border_style);
        } else {
            $res_ctx->load_settings_raw('table_border_style', 'solid');
        }
        // table border color
        $table_border_color = $res_ctx->get_shortcode_att('table_border_color');
        $res_ctx->load_settings_raw('table_border_color', '#ccc');
        if( $table_border_color != '' ) {
            $res_ctx->load_settings_raw('table_border_color', $table_border_color);
        }

        // last updated text color
        $res_ctx->load_settings_raw('date_color', $res_ctx->get_shortcode_att('date_color'));

        // header row text color
        $res_ctx->load_settings_raw('row_h_text_color', $res_ctx->get_shortcode_att('row_h_text_color'));
        // header row background color
        $row_h_bg_color = $res_ctx->get_shortcode_att('row_h_bg');
        $res_ctx->load_settings_raw('row_h_bg_color', '#f1f1f1');
        if( $row_h_bg_color != '' ) {
            $res_ctx->load_settings_raw('row_h_bg_color', $row_h_bg_color);
        }

        // row text color
        $res_ctx->load_settings_raw('row_text_color', $res_ctx->get_shortcode_att('row_text_color'));
        // row background color
        $res_ctx->load_settings_raw('row_bg_color', $res_ctx->get_shortcode_att('row_bg'));
        // row border width
        $row_border_width = $res_ctx->get_shortcode_att('row_border');
        $res_ctx->load_settings_raw('row_border_width', '1px');
        if( $row_border_width != '' && is_numeric($row_border_width) ) {
            $res_ctx->load_settings_raw('row_border_width', $row_border_width . 'px');
        }
        // row border style
        $row_border_style = $res_ctx->get_shortcode_att('row_border_style');
        if( $row_border_style != '' ) {
            $res_ctx->load_settings_raw('row_border_style', $row_border_style);
        } else {
            $res_ctx->load_settings_raw('row_border_style', 'solid');
        }
        // row border color
        $row_border_color = $res_ctx->get_shortcode_att('row_border_color');
        $res_ctx->load_settings_raw('row_border_color', '#ccc');
        if( $row_border_color != '' ) {
            $res_ctx->load_settings_raw('row_border_color', $row_border_color);
        }

        // column border width
        $col_border_width = $res_ctx->get_shortcode_att('col_border');
        $res_ctx->load_settings_raw('col_border_width', '1px');
        if( $col_border_width != '' && is_numeric($col_border_width) ) {
            $res_ctx->load_settings_raw('col_border_width', $col_border_width . 'px');
        }
        // column border style
        $col_border_style = $res_ctx->get_shortcode_att('col_border_style');
        if( $col_border_style != '' ) {
            $res_ctx->load_settings_raw('col_border_style', $col_border_style);
        } else {
            $res_ctx->load_settings_raw('col_border_style', 'solid');
        }
        // column border color
        $col_border_color = $res_ctx->get_shortcode_att('col_border_color');
        $res_ctx->load_settings_raw('col_border_color', '#ccc');
        if( $col_border_color != '' ) {
            $res_ctx->load_settings_raw('col_border_color', $col_border_color);
        }


        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_header' );
        $res_ctx->load_font_settings( 'f_row_h' );
        $res_ctx->load_font_settings( 'f_row' );
        $res_ctx->load_font_settings( 'f_date' );

    }

	function render($atts, $content = null){

		self::disable_loop_block_features();

		parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)


        // get data
        $countries_data = td_covid19::get_data();

        // get format
        $format = array('C', 'c', 'd', 'r', 'a');
        if( $this->get_att('covid-format') != '' ) {
            $format = explode(' ', $this->get_att('covid-format'));
        }

        // sort
        $sort_by = 'c';
        $sort_order = 'descending';
        if( $this->get_att('sort') != '' ) {
            $sort_by = $this->get_att('sort');
        }
        if( $this->get_att('order') != '' ) {
            $sort_order = $this->get_att('order');
        }

        // texts
        $country_text = 'Country/Region';
        if( $this->get_att('country_text') != '' ) {
            $country_text = $this->get_att('country_text');
        }
        $confirmed_text = 'Confirmed cases';
        if( $this->get_att('confirmed_text') != '' ) {
            $confirmed_text = $this->get_att('confirmed_text');
        }
        $deaths_text = 'Deaths';
        if( $this->get_att('deaths_text') != '' ) {
            $deaths_text = $this->get_att('deaths_text');
        }
        $recovered_text = 'Recovered';
        if( $this->get_att('recovered_text') != '' ) {
            $recovered_text = $this->get_att('recovered_text');
        }
        $active_text = 'Active cases';
        if( $this->get_att('active_text') != '' ) {
            $active_text = $this->get_att('active_text');
        }

        if( $sort_by != '' && in_array($sort_by, $format) ) {
            if( $sort_by == 'C' ) {
                if( $sort_order == 'descending' ) {
                    krsort($countries_data['data']);
                } else if( $sort_order == 'ascending' ) {
                    ksort($countries_data['data']);
                }
            }
            if( $sort_by == 'c' ) {
                $confirmed = array();

                foreach ( $countries_data['data'] as $country_data_name => $country_data ) {
                    $confirmed[$country_data_name] = $country_data['confirmed_cases'];
                }

                if( $sort_order == 'descending' ) {
                    array_multisort($confirmed, SORT_DESC, $countries_data['data']);
                } else if( $sort_order == 'ascending' ) {
                    array_multisort($confirmed, SORT_ASC, $countries_data['data']);
                }
            }
            if( $sort_by == 'd' ) {
                $deaths = array();

                foreach ( $countries_data['data'] as $country_data_name => $country_data ) {
                    $deaths[$country_data_name] = $country_data['deaths'];
                }

                if( $sort_order == 'descending' ) {
                    array_multisort($deaths, SORT_DESC, $countries_data['data']);
                } else if( $sort_order == 'ascending' ) {
                    array_multisort($deaths, SORT_ASC, $countries_data['data']);
                }
            }
            if( $sort_by == 'r' ) {
                $recovered = array();

                foreach ( $countries_data['data'] as $country_data_name => $country_data ) {
                    $recovered[$country_data_name] = $country_data['recovered'];
                }

                if( $sort_order == 'descending' ) {
                    array_multisort($recovered, SORT_DESC, $countries_data['data']);
                } else if( $sort_order == 'ascending' ) {
                    array_multisort($recovered, SORT_ASC, $countries_data['data']);
                }
            }
            if( $sort_by == 'a' ) {
                $active = array();

                foreach ( $countries_data['data'] as $country_data_name => $country_data ) {
                    $active[$country_data_name] = $country_data['active'];
                }

                if( $sort_order == 'descending' ) {
                    array_multisort($active, SORT_DESC, $countries_data['data']);
                } else if( $sort_order == 'ascending' ) {
                    array_multisort($active, SORT_ASC, $countries_data['data']);
                }
            }
        }


		$buffy = ''; //output buffer


		$buffy .= '<div class="' . $this->get_block_classes() . '" ' . $this->get_block_html_atts() . '>';

            //get the block css
            $buffy .= $this->get_block_css();

            //get the js for this block
            $buffy .= $this->get_block_js();

            // block title wrap
            $buffy .= '<div class="td-block-title-wrap">';
                $buffy .= $this->get_block_title(); //get the block title
                $buffy .= $this->get_pull_down_filter(); //get the sub category filter for this block
            $buffy .= '</div>';


            // For tagDiv composer add a placeholder element
            if ( $countries_data === FALSE ) {

                $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner td-fix-index">';
                    $buffy .= td_util::get_block_error('Covid-19 Statistics', 'Render failed - no data' );
                $buffy .= '</div>';

                $buffy .= '</div>';

                return $buffy;
            }

            //td-fix-index class to fix background color z-index
            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner td-fix-index">';

                $buffy .= '<div class="td-covid-countries">';
                    $buffy .= '<div class="td-covid-country">';
                        foreach ( $format as $column ) {
                            switch ( $column ) {
                                case 'C':
                                    $buffy .= '<div class="td-covid-country-name">' . $country_text . '</div>';
                                    break;

                                case 'c':
                                    $buffy .= '<div class="td-covid-confirmed">' . $confirmed_text . '</div>';
                                    break;

                                case 'd':
                                    $buffy .= '<div class="td-covid-deaths">' . $deaths_text . '</div>';
                                    break;

                                case 'r':
                                    $buffy .= '<div class="td-covid-recovered">' . $recovered_text . '</div>';
                                    break;

                                case 'a':
                                    $buffy .= '<div class="td-covid-active">' . $active_text . '</div>';
                                    break;
                            }
                        }
                    $buffy .= '</div>';

                    foreach( $countries_data['data'] as $country_name => $country_data ) {
                        $buffy .= '<div class="td-covid-country">';
                            foreach ( $format as $column ) {
                                switch ( $column ) {
                                    case 'C':
                                        $buffy .= '<div class="td-covid-country-name">' . $country_name . '</div>';
                                        break;

                                    case 'c':
                                        $buffy .= '<div class="td-covid-confirmed">' . number_format(intval($country_data['confirmed_cases'])) . '</div>';
                                        break;

                                    case 'd':
                                        $buffy .= '<div class="td-covid-deaths">' . number_format(intval($country_data['deaths'])) . '</div>';
                                        break;

                                    case 'r':
                                        $buffy .= '<div class="td-covid-recovered">' . number_format(intval($country_data['recovered'])) . '</div>';
                                        break;

                                    case 'a':
                                        $buffy .= '<div class="td-covid-active">' . number_format(intval($country_data['active'])) . '</div>';
                                        break;
                                }
                            }
                        $buffy .= '</div>';
                    }
                $buffy .= '</div>';

                $date = new DateTime("@" . $countries_data['timestamp']);
                $local_timezone = get_option('timezone_string') ? get_option( 'timezone_string' ) : date_default_timezone_get();
                $date->setTimezone(new DateTimeZone($local_timezone));

                $buffy .= '<div class="td-covid-date">Updated on ' . $date->format(get_option('date_format') . ' ' . get_option('time_format') ) . '</div>';

            $buffy .= '</div>';
		$buffy .= '</div>';
		return $buffy;
	}

}