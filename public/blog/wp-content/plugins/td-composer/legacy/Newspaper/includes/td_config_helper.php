<?php
/**
 * Created by PhpStorm.
 * User: marius
 * Date: 1/26/2018
 * Time: 3:27 PM
 */

class td_config_helper {

	// fonts atts
	static function get_map_block_font_array( $param_name, $font_header = false, $font_title = '', $group = '', $index_style = '' ) {

		$params = td_fonts::get_block_font_params();

		array_unshift( $params, array(
				"param_name" => "font_settings",
				"type" => "font_settings",
				"value" => '',
				"class" => '',
			)
		);

		if ( ! empty( $font_title ) ) {
			array_unshift( $params, array(
					"param_name" => "font_title",
					"type" => "font_title",
					"value" => $font_title,
					"class" => '',
				)
			);
		}

		if ( $font_header ) {
			array_unshift( $params, array(
					"param_name" => "font_header",
					"type" => "font_header",
					"value" => '',
					"class" => '',
				)
			);
		}

		foreach ( $params as &$param ) {
			$param['param_name'] = $param_name . '_' . $param['param_name'];

			if ( ! empty( $group ) ) {
				$param['group'] = $group;
			}

			if ( ! empty( $index_style ) ) {
				$param['param_name'] .= '-' . $index_style;
			}
		}
		return $params;
	}


	static function get_map_block_shadow_array( $param_name, $shadow_title, $shadow_size, $shadow_offset_h, $shadow_offset_v, $group = '', $index_style = '', $shadow_spread = 0, $shadow_header = true ) {
		$params = array(
		    array(
                "param_name" => "shadow_size",
                "type" => "textfield-responsive",
                "value" => '',
                "heading" => '',
                'class' => 'tdc-shadow-contr-textfield',
                'description' => 'Change shadow size',
                'placeholder' => '',
            ),
            array(
                "param_name" => "shadow_offset_horizontal",
                "type" => "textfield-responsive",
                "value" => '',
                "heading" => '',
                'class' => 'tdc-shadow-contr-textfield',
                'description' => 'Change shadow horizontal offset',
                'placeholder' => '',
            ),
            array(
                "param_name" => "shadow_offset_vertical",
                "type" => "textfield-responsive",
                "value" => '',
                "heading" => '',
                'class' => 'tdc-shadow-contr-textfield',
                'description' => 'Change shadow vertical offset',
                'placeholder' => '',
            ),
            array(
                "param_name" => "shadow_spread",
                "type" => "textfield-responsive",
                "value" => '',
                "heading" => '',
                'class' => 'tdc-shadow-contr-textfield',
                'description' => 'Change shadow spread',
                'placeholder' => '',
            ),
            array(
                "param_name" => "shadow_color",
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "tdc-shadow-contr-color",
                "heading" => '',
                "value" => '',
                "description" => 'Change shadow color',
            ),
        );

        array_unshift( $params, array(
                "param_name" => "shadow_title",
                "type" => "shadow_title",
                "value" => $shadow_title,
                "class" => '',
            )
        );

        //echo $param_name . ': ' . $shadow_header . ';';

        if ( $shadow_header ) {
            array_unshift( $params, array(
                    "param_name" => "shadow_header",
                    "type" => "shadow_header",
                    "value" => '',
                    "class" => '',
                )
            );
        }

		foreach ( $params as &$param ) {

	        if( $param['param_name'] == 'shadow_size' ) {
                $param['placeholder'] = $shadow_size;
            } else if( $param['param_name'] == 'shadow_offset_horizontal' ) {
                $param['placeholder'] = $shadow_offset_h;
            } else if( $param['param_name'] == 'shadow_offset_vertical' ) {
                $param['placeholder'] = $shadow_offset_v;
            } else if( $param['param_name'] == 'shadow_spread' ) {
                $param['placeholder'] = $shadow_spread;
            }
            if ( ! empty( $group ) ) {
                $param['group'] = $group;
            }

	        $param['param_name'] = $param_name . '_' . $param['param_name'];

	        if ( ! empty( $index_style ) ) {
		        $param['param_name'] .= '-' . $index_style;
	        }

        }
        return $params;
	}


	// block general fonts
	static function block_font() {
		return array_merge(
			array(
				array(
					"param_name" => "separator",
					"type" => "text_separator",
					'heading' => 'Block fonts',
					"value" => "",
					"class" => "",
					"group" => 'Style',
				)
			),
			self::get_map_block_font_array( 'f_header', true, 'Block header', 'Style' ),
			self::get_map_block_font_array( 'f_ajax', false, 'Ajax categories', 'Style' ),
			self::get_map_block_font_array( 'f_more', false, 'Load more button', 'Style' )
		);
	}


    // module slide fonts
    static function module_slide_font() {
        return array_merge(
            array(
                array(
                    "param_name" => "separator",
                    "type" => "text_separator",
                    'heading' => 'Module slide fonts',
                    "value" => "",
                    "class" => "tdc-separator-small",
                    "group" => 'Style',
                )
            ),
            self::get_map_block_font_array( 'msf_title', true, 'Article title', 'Style' ),
            self::get_map_block_font_array( 'msf_cat', false, 'Article category tag', 'Style' ),
            self::get_map_block_font_array( 'msf_meta', false, 'Article meta info', 'Style' )
        );
    }


    // image mix blend effects
    static function mix_blend($group = 'Style') {
        return array(
            array(
                "param_name" => "separator",
                "type" => "text_separator",
                'heading' => 'Image effects / Blend modes',
                "value" => "",
                "class" => "",
                "group" => $group,
            ),
            array(
                "param_name" => "mix_color",
                "holder"     => "div",
                "type"       => "gradient",
                'heading'    => "Blend color/mode",
                "value"      => "",
                "class"      => "tdc-blend",
                "group"      => $group,
            ),
            array (
                'param_name' => 'mix_type',
                'heading' => '',
                'type' => 'dropdown',
                'value' => array (
                    'Off' => '',
                    'Color' => 'color',
                    'Screen' => 'screen',
                    'Multiply' => 'multiply',
                    'Overlay' => 'overlay',
                    'Hue' => 'hue',
                    'Lighten' => 'lighten',
                    'Darken' => 'darken',
                    'Hard-light' => 'hard-light',
                    'Saturation' => 'saturation',
                    'Color-burn' => 'color-burn',
                    'Color-dodge' => 'color-dodge',
                    'Difference' => 'difference',
                    'Exclusion' => 'exclusion',
                    'Luminosity' => 'luminosity',
                ),
                'class' => 'tdc-dropdown-big tdc-blend-mode',
                'group' => $group,
            ),
            array(
                'param_name' => 'fe_brightness',
                'type' => 'range',
                'value' => '1',
                'heading' => 'Brightness',
                'description' => '',
                'class' => 'tdc-textfield-small',
                'range_min' => '0',
                'range_max' => '3',
                'range_step' => '0.1',
                'group' => $group,
            ),
            array(
                'param_name' => 'fe_contrast',
                'type' => 'range',
                'value' => '1',
                'heading' => 'Contrast',
                'description' => '',
                'class' => 'tdc-textfield-small',
                'range_min' => '0',
                'range_max' => '3',
                'range_step' => '0.1',
                'group' => $group,
            ),
            array(
                'param_name' => 'fe_saturate',
                'type' => 'range',
                'value' => '1',
                'heading' => 'Saturate',
                'description' => '',
                'class' => 'tdc-textfield-small',
                'range_min' => '0',
                'range_max' => '3',
                'range_step' => '0.1',
                'group' => $group,
            ),
        );
    }

    // image mix blend effects
    static function image_filters($group = 'Style') {
        return array(
            array(
                "param_name" => "separator",
                "type"       => "text_separator",
                'heading'    => 'Hover',
                "value"      => "",
                "class"      => "tdc-separator-small",
                "group"       => $group,
            ),
            array(
                "param_name" => "mix_color_h",
                "holder"     => "div",
                "type"       => "gradient",
                'heading'    => "Blend color/mode",
                "value"      => "",
                "class"      => "tdc-blend",
                "group"      => $group,
            ),
            array (
                'param_name' => 'mix_type_h',
                'heading' => '',
                'type' => 'dropdown',
                'value' => array (
                    'Off' => '',
                    'Color' => 'color',
                    'Screen' => 'screen',
                    'Multiply' => 'multiply',
                    'Overlay' => 'overlay',
                    'Hue' => 'hue',
                    'Lighten' => 'lighten',
                    'Darken' => 'darken',
                    'Hard-light' => 'hard-light',
                    'Saturation' => 'saturation',
                    'Color-burn' => 'color-burn',
                    'Color-dodge' => 'color-dodge',
                    'Difference' => 'difference',
                    'Exclusion' => 'exclusion',
                    'Luminosity' => 'luminosity',
                ),
                'class' => 'tdc-dropdown-big tdc-blend-mode',
                'group' => $group,
            ),
            array(
                'param_name' => 'fe_brightness_h',
                'type' => 'range',
                'value' => '1',
                'heading' => 'Brightness',
                'description' => '',
                'class' => 'tdc-textfield-small',
                'range_min' => '0',
                'range_max' => '3',
                'range_step' => '0.1',
                'group' => $group,
            ),
            array(
                'param_name' => 'fe_contrast_h',
                'type' => 'range',
                'value' => '1',
                'heading' => 'Contrast',
                'description' => '',
                'class' => 'tdc-textfield-small',
                'range_min' => '0',
                'range_max' => '3',
                'range_step' => '0.1',
                'group' => $group,
            ),
            array(
                'param_name' => 'fe_saturate_h',
                'type' => 'range',
                'value' => '1',
                'heading' => 'Saturate',
                'description' => '',
                'class' => 'tdc-textfield-small',
                'range_min' => '0',
                'range_max' => '3',
                'range_step' => '0.1',
                'group' => $group,
            ),
        );
    }
}