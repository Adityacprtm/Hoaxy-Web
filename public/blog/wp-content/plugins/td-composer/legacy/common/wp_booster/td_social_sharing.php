<?php


class td_social_sharing {




    /**
     * Used by all the shortcodes + widget to render the social sharing stuff.
     * @param $atts
     *      $atts['services'] = "facebook,vk,etc"
     *      $atts['style'] = "style_1"
     * @param $block_uid
     * @return string
     */
    static function render_generic($atts, $block_uid) {

        $buffy = '';
        $services = array();
        if (isset($atts['services'])) {

            if (is_array($atts['services'])) {
                $services = $atts['services'];
            }
            // not used yet - for shortcodes
//            else {
//                $services = explode(',', $atts['services']);
//                foreach ($services as &$service_id_ref) {
//                    $service_id_ref = trim($service_id_ref);
//                }
//            }


        }

        $post_id = null;

        if (isset($atts['post_id'])) {
        	$post_id = $atts['post_id'];
        }


        $tdb_block_class = '';

        if ( isset($atts['is_tdb_block']) && $atts['is_tdb_block'] ) {
	        $tdb_block_class = 'tdb-block ';
        }

        //print_r($services);

        if (empty($atts['style'])) {
            $atts['style'] = 'style1';
        }

        if (empty($atts['el_class'])) {
            $atts['el_class'] = '';
        }

        $config_classes = td_api_social_sharing_styles::get_key($atts['style'], 'wrap_classes');

        if (!empty($services)) {

        	$buffy .= '<div id="' . $block_uid . '" class="td-post-sharing ' . $tdb_block_class . $config_classes . ' td-post-sharing-' . $atts['style'] . $atts['el_class'] . ' ">';

                $buffy .= '<div class="td-post-sharing-visible">';

                    if ( $atts['share_text_show'] ) {
                        $buffy .= '<div class="td-social-sharing-button td-social-sharing-button-js td-social-handler td-social-share-text">
                                        <div class="td-social-but-icon"><i class="td-icon-share"></i></div>
                                        <div class="td-social-but-text">' . __td('Share', TD_THEME_NAME) . '</div>
                                    </div>';
                    }

                    foreach ($services as $service_id) {
                        $service_info = self::get_service_share_info($service_id, $post_id );
                        $buffy .= '<a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-' . $service_id . '" href="' . $service_info['url'] . '">
                                        <div class="td-social-but-icon"><i class="td-icon-' . $service_id . '"></i></div>
                                        <div class="td-social-but-text">' . $service_info['title'] . '</div>
                                    </a>';
                    }

                $buffy .= '</div>'; // ./td-post-sharing-visible

                $buffy .= '<div class="td-social-sharing-hidden">';
                    // the dropdown list
                    $buffy .= '<ul class="td-pulldown-filter-list"></ul>';
                    $buffy .=  '<a class="td-social-sharing-button td-social-handler td-social-expand-tabs" href="#" data-block-uid="' . $block_uid . '">
                                    <div class="td-social-but-icon"><i class="td-icon-plus td-social-expand-tabs-icon"></i></div>
                                </a>';
                $buffy .= '</div>'; // ./td-post-sharing-hidden

            $buffy .= '</div>'; // ./td-post-sharing
        }



        return $buffy;
    }



    private static function get_service_share_info($service_id, $post_id = null ) {
    	if ( ! empty( $post_id ) ) {
    		global $post;
    		$post = get_post( $post_id );
	    }
    	$page_permalink = esc_url(get_permalink());
        $page_id = get_the_ID();
        $page_title = get_the_title();
        switch ( $service_id ) {

            case 'facebook':
                return array(
                    'url' => 'https://www.facebook.com/sharer.php?u=' . urlencode($page_permalink),
                    'title' => 'Facebook'
                );
                break;

            case 'twitter':
                $twitter_user = td_util::get_option( 'tds_tweeter_username' );
                return array(
                    'url' => 'https://twitter.com/intent/tweet?text=' . htmlspecialchars(urlencode(html_entity_decode($page_title, ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8') . '&url=' . urlencode($page_permalink) . '&via=' . urlencode( $twitter_user ? $twitter_user : html_entity_decode(get_bloginfo( 'name' ), ENT_QUOTES) ) ,
                    'title' => 'Twitter'
                );
                break;

            case 'pinterest':
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'single-post-thumbnail' );

                /**
                 * get Pinterest share description
                 * get it from SEO by Yoast meta (if the plugin is active and the description is set) else use the post title
                 */
                if (class_exists('WPSEO_Options', false) and get_post_meta($page_id, '_yoast_wpseo_metadesc', true) != '') {
                    $td_pinterest_share_description = get_post_meta($page_id, '_yoast_wpseo_metadesc', true);
                } else{
                    $td_pinterest_share_description = htmlspecialchars(urlencode(html_entity_decode($page_title, ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
                }

                return array(
                    'url' => 'https://pinterest.com/pin/create/button/?url=' . $page_permalink . '&amp;media=' . ( ! empty( $image[0] ) ? $image[0] : '' ) . '&description=' . esc_html($td_pinterest_share_description),
                    'title' => 'Pinterest'
                );
                break;

            case 'linkedin':
                return array(
                    'url' => 'https://www.linkedin.com/shareArticle?mini=true&url=' . $page_permalink . '&title=' . htmlspecialchars(urlencode(html_entity_decode($page_title))),
                    'title' => 'Linkedin'
                );
                break;

            case 'tumblr':
                return array(
                    'url' => 'https://www.tumblr.com/share/link?url=' . $page_permalink . '&name=' . $page_title,
                    'title' => 'Tumblr'
                );
                break;

            case 'mail':
                return array(
                    'url' => "mailto:?subject=" . $page_title . "&body=" . $page_permalink,
                    'title' => __td('Email')
                );
                break;

            case 'telegram':
                return array(
                    'url' => 'https://telegram.me/share/url?url=' . $page_permalink . '&text=' . htmlspecialchars(urlencode(html_entity_decode($page_title))),
                    'title' => 'Telegram'
                );
                break;

            case 'whatsapp':
                return array(
                    'url' => 'whatsapp://send?text=' . htmlspecialchars(urlencode(html_entity_decode($page_title))) . ' %0A%0A ' . $page_permalink,
                    'title' => 'WhatsApp'
                );
                break;

            case 'digg':
                return array(
                    'url' => 'https://www.digg.com/submit?url=' . $page_permalink,
                    'title' => 'Digg'
                );
                break;

            case 'reddit':
                return array(
                    'url' => 'https://reddit.com/submit?url=' . $page_permalink . '&title=' . htmlspecialchars(urlencode(html_entity_decode($page_title))),
                    'title' => 'ReddIt'
                );
                break;

            case 'stumbleupon':
                return array(
                    'url' => 'https://www.mix.com/add?url=' . $page_permalink,
                    'title' => 'Mix'
                );
                break;

            case 'vk':
                return array(
                    'url' => 'https://vk.com/share.php?url=' . $page_permalink,
                    'title' => 'VK'
                );
                break;

            case 'line':
                return array(
                    'url' => 'https://line.me/R/msg/text/?' . htmlspecialchars(urlencode(html_entity_decode($page_title))) . '%0D%0A' . $page_permalink,
                    'title' => 'LINE'
                );
                break;

            case 'viber':
                return array(
                    'url' => 'viber://forward?text=' . htmlspecialchars(urlencode(html_entity_decode($page_title))) . ' ' . $page_permalink,
                    'title' => 'Viber'
                );
                break;

            case 'print':
                return array(
                    'url' => '#',
                    'title' => __td('Print')
                );
                break;

            case 'naver':
                return array(
                    'url' => 'https://share.naver.com/web/shareView.nhn?url=' . $page_permalink . '&title=' . htmlspecialchars(urlencode(html_entity_decode($page_title))),
                    'title' => 'Naver'
                );
                break;

            default:
                return '';
        }

    }

}