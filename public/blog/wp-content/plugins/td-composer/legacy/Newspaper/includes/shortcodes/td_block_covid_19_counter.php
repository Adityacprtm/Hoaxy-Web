<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 19.08.2016
 * Time: 13:54
 */

class td_block_covid_19_counter extends td_block {

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
                    flex-direction: column;
                    align-items: center;
                }
                .$unique_block_class .td-covid-country-name {
                    font-size: 23px;
                    font-weight: 500;
                    line-height: 21px;
                    color: #222;
                }
                .$unique_block_class .td-covid-country-count {
                    font-size: 60px;
                    font-weight: 700;
                    line-height: 1;
                    margin: 15px 0 11px;
                }
                .$unique_block_class .td-covid-stat-name {
                    font-size: 17px;
                    font-weight: 500;
                    line-height: 21px;
                    text-align: center;
                    color: #666;
                }
                .$unique_block_class .td-covid-date {
                    display: none;
                    margin-top: 8px;
                    font-size: 12px;
                    text-align: center;
                    color: #999;
                }
                
                /* @counter_padding */
                .$unique_block_class .td-covid-country-count {
                    margin: @counter_padding;
                }
                
                /* @content_align_horizontal_left */
                .$unique_block_class .td-covid-country {
                    align-items: flex-start;
                }
                .$unique_block_class .td-covid-stat-name,
                .$unique_block_class .td-covid-date {
                    text-align: left;
                }
                /* @content_align_horizontal_right */
                .$unique_block_class .td-covid-country {
                    align-items: flex-end;
                }
                .$unique_block_class .td-covid-stat-name,
                .$unique_block_class .td-covid-date {
                    text-align: right;
                }
                
                /* @show_date */
                .$unique_block_class .td-covid-date {
                    display: @show_date;
                }
                /* @date_space */
                .$unique_block_class .td-covid-date {
                    margin-top: @date_space;
                }
                
                
                /* @country_name_color */
                .$unique_block_class .td-covid-country-name {
                    color: @country_name_color;
                }
                /* @counter_color */
                .$unique_block_class .td-covid-country-count {
                    color: @counter_color;
                }
                /* @statistic_color */
                .$unique_block_class .td-covid-stat-name {
                    color: @statistic_color;
                }
                /* @date_color */
                .$unique_block_class .td-covid-date {
                    color: @date_color;
                }
                
                /* @display_inline */
                .$unique_block_class {
                    display: inline-block;
                }
            

                /* @f_header */
				.$unique_block_class .td-block-title a,
				.$unique_block_class .td-block-title span {
					@f_header
				}
                /* @f_country */
				.$unique_block_class .td-covid-country-name {
					@f_country
				}
                /* @f_count */
				.$unique_block_class .td-covid-country-count {
					@f_count
				}
                /* @f_stat */
				.$unique_block_class .td-covid-stat-name {
					@f_stat
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

        // horizontal align
        $content_horiz_align = $res_ctx->get_shortcode_att('content_align_horizontal');
        if( $content_horiz_align == 'content-horiz-left' ) {
            $res_ctx->load_settings_raw('content_align_horizontal_left', 1);
        } else if( $content_horiz_align == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw('content_align_horizontal_right', 1);
        }

        // counter padding
        $counter_padding = $res_ctx->get_shortcode_att('counter_padding');
        $res_ctx->load_settings_raw( 'counter_padding', $counter_padding );
        if ( is_numeric( $counter_padding ) ) {
            $res_ctx->load_settings_raw( 'counter_padding', $counter_padding . 'px' );
        }

        // show last updated text
        $res_ctx->load_settings_raw('show_date', $res_ctx->get_shortcode_att('show_date'));

        // last updated text space
        $date_space = $res_ctx->get_shortcode_att('date_space');
        $res_ctx->load_settings_raw( 'date_space', $date_space );
        if ( is_numeric( $date_space ) ) {
            $res_ctx->load_settings_raw( 'date_space', $date_space . 'px' );
        }

        // display inline
        $display_inline = $res_ctx->get_shortcode_att('display_inline');
        if( $display_inline != '' ) {
            $res_ctx->load_settings_raw( 'display_inline', 1 );
        }


        /*-- COLORS -- */
        // country name color
        $res_ctx->load_settings_raw('country_name_color', $res_ctx->get_shortcode_att('country_name_color'));
        // counter color
        $res_ctx->load_settings_raw('counter_color', $res_ctx->get_shortcode_att('counter_color'));
        // statistic name color
        $res_ctx->load_settings_raw('statistic_color', $res_ctx->get_shortcode_att('statistic_color'));
        // last updated text color
        $res_ctx->load_settings_raw('date_color', $res_ctx->get_shortcode_att('date_color'));


        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_header' );
        $res_ctx->load_font_settings( 'f_country' );
        $res_ctx->load_font_settings( 'f_count' );
        $res_ctx->load_font_settings( 'f_stat' );
        $res_ctx->load_font_settings( 'f_date' );

    }

	function render($atts, $content = null){

		self::disable_loop_block_features();

		parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)


        // get data
        $countries_data = td_covid19::get_data();

        // country name
        $country_name = 'All countries';
        if( $this->get_att('country') != '' ) {
            $country_name = $this->get_att('country');
        }

        // statistic to display
        $statistic = 'confirmed_cases';
        if( $this->get_att('statistic') != '' ) {
            $statistic = $this->get_att('statistic');
        }

        // texts
        $all_countries_text = 'All countries';
        if( $this->get_att('all_countries_text') != '' ) {
            $all_countries_text = $this->get_att('all_countries_text');
        }
        $country_text = '';
        if( $this->get_att('country_text') != '' ) {
            $country_text = $this->get_att('country_text');
        }
        $confirmed_text = 'Total confirmed cases';
        if( $this->get_att('confirmed_text') != '' ) {
            $confirmed_text = $this->get_att('confirmed_text');
        }
        $deaths_text = 'Total deaths';
        if( $this->get_att('deaths_text') != '' ) {
            $deaths_text = $this->get_att('deaths_text');
        }
        $recovered_text = 'Total recovered';
        if( $this->get_att('recovered_text') != '' ) {
            $recovered_text = $this->get_att('recovered_text');
        }
        $active_text = 'Total active cases';
        if( $this->get_att('active_text') != '' ) {
            $active_text = $this->get_att('active_text');
        }

        $statistic_counter = 0;


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
                    $buffy .= td_util::get_block_error('Covid-19 Counter', 'Render failed - no data' );
                $buffy .= '</div>';

                $buffy .= '</div>';

                return $buffy;
            }

            //td-fix-index class to fix background color z-index
            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner td-fix-index">';

                if( $country_name === 'All countries' ) {

                    foreach ( $countries_data['data'] as $country_data_name => $country_data ) {
                        $statistic_counter += $country_data[$statistic];
                    }

                } else {
                    if ( isset( $countries_data['data'][$country_name][$statistic] ) ) {

                    	$statistic_counter = $countries_data['data'][$country_name][$statistic];

                    } else {
                            $buffy .= td_util::get_block_error('Covid-19 Counter', 'Render failed - no data exists for chosen country' );
                        $buffy .= '</div>';

                        $buffy .= '</div>';

                        return $buffy;
                    }
                }


                $buffy .= '<div class="td-covid-country">';
                    $buffy .= '<div class="td-covid-country-name">';
                        if( $country_name == 'All countries' ) {
                            $buffy .= $all_countries_text;
                        } else {
                            if( $country_text != '' ) {
                                $buffy .= $country_text;
                            } else {
                                $buffy .= $country_name;
                            }
                        }
                    $buffy .= '</div>';

                    $buffy .= '<div class="td-covid-country-count">' . number_format($statistic_counter) . '</div>';

                    $buffy .= '<div class="td-covid-stat-name">';
                        switch ($statistic) {
                            case 'confirmed_cases':
                                $buffy .= $confirmed_text;
                                break;
                            case 'deaths':
                                $buffy .= $deaths_text;
                                break;
                            case 'recovered':
                                $buffy .= $recovered_text;
                                break;
                            case 'active':
                                $buffy .= $active_text;
                                break;
                        }
                    $buffy .= '</div>';

                    $date = new DateTime("@" . $countries_data['timestamp']);
                    $local_timezone = get_option('timezone_string') ? get_option( 'timezone_string' ) : date_default_timezone_get();
                    $date->setTimezone(new DateTimeZone($local_timezone));

                    $buffy .= '<div class="td-covid-date">Updated on ' . $date->format(get_option('date_format') . ' ' . get_option('time_format') ) . '</div>';
                $buffy .= '</div>';

            $buffy .= '</div>';
		$buffy .= '</div>';
		return $buffy;
	}

}
