<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 11.02.2016
 * Time: 13:04
 */

/*
 * frontend.tpl.php can't be used without 'tdc' class
 */


global $post;

$post = tdc_state::get_post();

// check if we have a post set in the state.
if (empty($post)) {
    echo "Invalid post ID, or permission denied";
	die;
}



add_thickbox();
wp_enqueue_media( array( 'post' => $post->ID ) );

require_once( ABSPATH . 'wp-admin/admin-header.php' );

//$postContent = str_replace( '\'', '\\\'', $post->post_content );
$postContent = $post->post_content;

/*
 * Important!
 * 'vc_column_text' and 'td_block_with_title' are not self enclosed shortcodes, having their contents inside of them.
 * So, because this content has \r,\n or \r\n characters inside, it can't be used as it is for window.tdcPostSettings.postContent. It needs to be formatted as wordpress does,
 * changing these characters to paragraphs.
 */
if ( ! function_exists( 'td_replace_vc_column_text' ) ) {
	function td_replace_vc_column_text( $matches ) {
		return '[vc_column_text' . $matches[ 1 ] . ']' . base64_encode( $matches[ 2 ] ) . '[/vc_column_text]';
	}
}

if ( shortcode_exists( 'vc_column_text' ) && has_shortcode( $postContent, 'vc_column_text' ) ) {

    // Double regex instead of one regex (preg_match and preg_replace_callback) - with one regex we need to parse content for replacing text, to supply what does the second regex
    // This first regex check is to allow second regex replacement to apply only when 'vc_column_text' has content
    preg_match("/\[vc_column_text(.*)\](.*)\[\/vc_column_text\]/sU", $postContent, $matches);
    if ( is_array( $matches ) && count( $matches ) ) {
	    $postContent = preg_replace_callback( "/\[vc_column_text(.*)\](.*)\[\/vc_column_text\]/sU", 'td_replace_vc_column_text', $postContent );
    }
}

if ( ! function_exists( 'td_replace_td_block_text_with_title' ) ) {
	function td_replace_td_block_text_with_title( $matches ) {
		return '[td_block_text_with_title' . $matches[ 1 ] . ']' . base64_encode( $matches[ 2 ] ) . '[/td_block_text_with_title]';
	}
}

if ( shortcode_exists( 'td_block_text_with_title' ) && has_shortcode( $postContent, 'td_block_text_with_title' ) ) {

    // Double regex instead of one regex (preg_match and preg_replace_callback) - with one regex we need to parse content for replacing text, to supply what does the second regex
    // This first regex check is to allow second regex replacement to apply only when 'td_block_text_with_title' has content
    preg_match("/\[td_block_text_with_title(.*)\](.*)\[\/td_block_text_with_title\]/sU", $postContent, $matches);
    if ( is_array( $matches ) && count( $matches ) ) {
        $postContent = preg_replace_callback("/\[td_block_text_with_title(.*)\](.*)\[\/td_block_text_with_title\]/sU", 'td_replace_td_block_text_with_title', $postContent);
    }
}



$postContent = str_replace( array( "\r\n", "\n", "\r" ), array( "\r\n'+'" ), $postContent );


//@todo - refactorizare aici json_encode
//<link rel="stylesheet" href="http://basehold.it/22">

// Add shortcodes name to be displayed into sidebar panel
$shortcodes = array();
foreach (tdc_mapper::get_mapped_shortcodes() as $mapped_shortcode ) {
	$shortcodes[ $mapped_shortcode[ 'base' ] ] = $mapped_shortcode[ 'name' ];
}

//var_dump(wp_get_sidebars_widgets());





function get_data_shortcode_settings( $mapped_shortcode) {
	$data_shortcode_settings = '';

	if ( isset( $mapped_shortcode['tdc_start_values'] ) ) {
		$data_shortcode_settings .= 'data-start-values="' . $mapped_shortcode['tdc_start_values'] . '" ';
	}
	if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
		$data_shortcode_settings .= ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
	}
	return $data_shortcode_settings;
}

/**
 * Get the url in format //domain.com/.. without 'http' and 'https', because url of iframe does not redirect from http to https
 *
 * @param $post_id
 *
 * @return mixed
 */
function get_post_url( $post_id ) {
	 return str_replace( array( 'http:', 'https:' ), '', get_permalink( $post_id ) );
}


$tdc_mobile_header_id = '';
$tdbTemplateType = tdc_util::get_get_val('tdbTemplateType');

if ( 'header' === $tdbTemplateType && 'publish' === get_post_status( $post ) ) {

    $tdc_header_template_id = $post->ID;
    $tdc_header_template_content = '';//$post->post_content;
    $tdc_header_template_content = get_post_field('post_content', $tdc_header_template_id );

} else {

    $tdc_header_template_id = get_post_meta( $post->ID, 'tdc_header_template_id', true );
    $tdc_header_template_content = '';

    if ( empty( $tdc_header_template_id ) ) {

        // Use the global header template if it's set
        $tdc_header_template_id = '';
        $global_header_template_id = td_api_header_style::get_header_template_id();

        if ( ! empty( $global_header_template_id ) && td_global::is_tdb_template( $global_header_template_id, true ) ) {

            $global_header_template_id = td_global::tdb_get_template_id( $global_header_template_id );
            $tdc_mobile_header_id = get_post_meta( $global_header_template_id, 'header_mobile_menu_id', true );
        }

    } else if ( 'no_header' !== $tdc_header_template_id ) {

        $post_status = get_post_status( $tdc_header_template_id );

        if ( 'publish' === $post_status ) {

            $tdc_header_template_content = get_post_field('post_content', $tdc_header_template_id );
            $tdc_mobile_header_id = get_post_meta( $tdc_header_template_id, 'header_mobile_menu_id', true );

        } else {

            // Use the global header template if it's set
            $tdc_header_template_id = '';
            $global_header_template_id = td_api_header_style::get_header_template_id();

            if ( ! empty( $global_header_template_id ) && td_global::is_tdb_template( $global_header_template_id, true ) ) {

                $global_header_template_id = td_global::tdb_get_template_id( $global_header_template_id );
                $tdc_mobile_header_id = get_post_meta( $global_header_template_id, 'header_mobile_menu_id', true );
            }
        }
    }
}



if ( 'footer' === $tdbTemplateType && 'publish' === get_post_status( $post ) ) {

    $tdc_footer_template_id = $post->ID;
    $tdc_footer_template_content = '';//$post->post_content;
    $tdc_footer_template_content = get_post_field('post_content', $tdc_footer_template_id );

} else {

    $tdc_footer_template_id = get_post_meta( $post->ID, 'tdc_footer_template_id', true );
    $tdc_footer_template_content = '';

    if ( empty( $tdc_footer_template_id ) ) {

        $tdc_footer_template_id = '';

    } else if ( 'no_footer' !== $tdc_footer_template_id ) {

        $post_status = get_post_status( $tdc_footer_template_id );

        if ( 'publish' === $post_status ) {

            $tdc_footer_template_content = get_post_field('post_content', $tdc_footer_template_id );

        } else {

            // Use the global footer template if it's set
            $tdc_footer_template_id = '';
        }
    }
}

$tdb_p_infinite_load_status = td_util::get_option('tdb_p_autoload_status');
$tdb_p_infinite_type = td_util::get_option('tdb_p_autoload_type');
$tdb_p_infinite_count = td_util::get_option('tdb_p_autoload_count');


?>


	<script type="text/javascript">

		// Add 'td_composer' class to html element
		window.document.documentElement.className += ' td_composer';

		// "Starting in Chrome 51, a custom string will no longer be shown to the user. Chrome will still show a dialog to prevent users from losing data, but it’s contents will be set by the browser instead of the web page."
		// https://developers.google.com/web/updates/2016/04/chrome-51-deprecations?hl=en#remove-custom-messages-in-onbeforeload-dialogs
		window.onbeforeunload = function ( event) {
			if ( ! tdcMain.getContentModified() ) {
				return;
			}
			return 'Dialog text here';
		};

		window.tdcPostSettings = {
			postId: '<?php echo $post->ID; ?>',
			postUrl: '<?php echo get_post_url($post->ID); ?>',
            postContent: '<?php echo base64_encode( $postContent ) ?>',
			postMetaDirtyContent: '<?php echo get_post_meta( $post->ID, 'tdc_dirty_content', true ) ?>',
			postMetaVcJsStatus: '<?php echo get_post_meta( $post->ID, '_wpb_vc_js_status', true ) ?>',
			shortcodes: <?php echo json_encode( $shortcodes ) ?>,

            tdbLoadDataFromId: <?php echo json_encode(tdc_util::get_get_val('tdbLoadDataFromId')) ?>,
            tdbTemplateType: <?php echo json_encode( $tdbTemplateType ) ?>,

            headerTemplateId: '<?php echo $tdc_header_template_id ?>',
            headerTemplateContent: '<?php echo $tdc_header_template_content ?>',

            footerTemplateId: '<?php echo $tdc_footer_template_id ?>',
            footerTemplateContent: '<?php echo $tdc_footer_template_content ?>',

            mobileMenuId: '<?php echo $tdc_mobile_header_id ?>',

            tdbPInfiniteLoadStatus: '<?php echo $tdb_p_infinite_load_status ?>',
            tdbPInfiniteType: '<?php echo $tdb_p_infinite_type ?>',
            tdbPInfiniteCount: '<?php echo $tdb_p_infinite_count ?>'
       };

		// Set the local storage to show inline the iframe wrapper and the sidebar
		window.localStorage.setItem( 'tdc_live_iframe_wrapper_inline', 1 );

	</script>

	<?php
			// tdc-icon-sidebar-open is outside of the sidebar, because the sidebar has overflow hidden
	?>

	<!-- the composer sidebar -->

	<div class="tdc-sidebar-open" title="Show sidebar">
		<span class="tdc-icon-sidebar-open"></span>
	</div>

	<div id="tdc-sidebar" class="tdc-sidebar-inline">
		<div class="tdc-top-buttons">
			<div class="tdc-add-element" title="Add a new element in the viewport">
                <span class="tdc-sidebar-icon tdc-icon-add"></span>
                <span class="tdc-header-label tdc-text-add">Add</span>
			</div>
			<?php
            // load the preview for the current content if we're editing a template with content
            $tdbLoadDataFromId = tdc_util::get_get_val('tdbLoadDataFromId');
            $tdbTemplateType = tdc_util::get_get_val('tdbTemplateType');

            $preview_url = '';

            if ( $tdbLoadDataFromId !== false ) {
                switch ( $tdbTemplateType ) {
                    case 'single':
                    case 'woo_product':
                        $preview_url = get_permalink( $tdbLoadDataFromId );
                        break;

                    case 'category':
                        $preview_url = get_category_link( $tdbLoadDataFromId );
                        break;

                    case 'author':
                        $preview_url = get_author_posts_url( $tdbLoadDataFromId );
                        break;

                    case 'search':
                        $preview_url = get_search_link( $tdbLoadDataFromId );
                        break;

                    case 'date':
                        $preview_url = get_year_link( $tdbLoadDataFromId );
                        break;

                    case 'tag':
                        $preview_url = get_tag_link( $tdbLoadDataFromId );
                        break;

                    case 'attachment':
                        $preview_url = get_attachment_link( $tdbLoadDataFromId );
                        break;
                }

            } else {
                $preview_url = get_permalink($post->ID);
            }
            ?>

            <?php if (TD_THEME_NAME !== 'Newsmag') { ?>
            <a class="tdc-sidebar-w-button tdb-load-template tdc-header-link tdc-load-cloud" href="#" title="Add an element from the cloud library">
                <span class="tdc-sidebar-icon tdc-icon-cloud"></span>
                <span class="tdc-header-label tdc-text-cloud">Cloud</span>
            </a>
            <a class="tdc-sidebar-w-button tdc-zone-button tdc-header-link tdc-header-manager" href="#" title="Open the zone manager">
                <span class="tdc-sidebar-icon tdc-icon-header"></span>
                <span class="tdc-header-label tdc-text-header">Manager</span>
            </a>
            <?php } ?>
            <a class="tdc-header-link tdc-close-page" href="#" title="Close the composer and switch to backend">
                <span class="tdc-sidebar-icon tdc-icon-close"></span>
                <span class="tdc-header-label tdc-text-close">Close</span>
            </a>

            <a class="tdc-header-link tdc-save-page" href="#" title="Save the page content CTRL + S">
                <span class="tdc-sidebar-icon tdc-icon-save"></span>
                <span class="tdc-header-label tdc-text-save">Save</span>
            </a>
            <a class="tdc-header-link tdc-view-page" href="<?php echo $preview_url ?>" target="_blank" title="View the page. Save the content before it">
                <span class="tdc-sidebar-icon tdc-icon-view"></span>
                <span class="tdc-header-label tdc-text-view">View</span>
            </a>


		</div>

        <div class="tdc-empty-sidebar">
			<div class="tdc-start-tips tdc-intro">
                <img src="<?php echo TDC_URL ?>/assets/images/sidebar/tagdiv-composer.png">
				<span>Welcome to <br>tagDiv Composer!</span>
				<p>Get started by adding elements, go to <span>Add</span> and begin dragging your items. You can edit by clicking on any element in the preview area.</p>
			</div>
			<div class="tdc-sidebar-w-button tdc-add-element" title="Add new element in the viewport">Add Element</div>

            <style>
                .tdb-template-meta {
                    position: absolute;
                    top: -3px;
                    box-sizing: border-box;
                    margin-left: 12px;
                    color: #fff;
                    font-size: 10px;
                }
                .tdb-template-meta span {
                    opacity: 0.7;
                }
                .tdb-template-meta-arrow {
                    margin: 0 2px 0 -3px;
                }
            </style>

            <?php
                // array list of templates that use the 'Page Settings' button
                $supported_template_types = array( 'page', 'single' );

                if ( !in_array($tdbTemplateType, $supported_template_types ) ) {
                    ?>

                    <style>
                        .tdc-main-menu {
                            display: none;
                        }
                    </style>

                    <?php
                }

                $current_post_type = get_post_type( $post );
                if ( false !== $tdbTemplateType ) {
                    $current_post_type = $tdbTemplateType;
                }

                $post_title = get_the_title( $post );
                if ( empty( $post_title ) ) {
                    $post_title = '"Empty title"';
                }
            ?>

            <div class="tdb-template-meta">
                <span class="tdb-template-meta-cat"><?php echo $current_post_type ?></span>
                <span class="tdb-template-meta-arrow tdc-breadcrumb-arrow"></span>
                <span id="tdb-template-name"><?php echo $post_title; ?></span>
                <a href="#" title="Edit page/template name" id="tdb-template-name-edit">Edit</a>
            </div>

            <?php do_action('tdc_welcome_panel_text')?>

		</div>


		<!-- the inspector -->
		<div class="tdc-inspector-wrap">
			<div class="tdc-inspector">
				<!-- breadcrumbs browser -->
				<div class="tdc-breadcrumbs">
                    <div id="tdc-breadcrumb-zone">
						<a class="tdc-breadcrumb-item" href="#" title="The parent zone">zone</a>
					</div>
					<div id="tdc-breadcrumb-row">
						<a class="tdc-breadcrumb-item" href="#" title="The parent row">row</a>
					</div>
					<div id="tdc-breadcrumb-column">
						<span class="tdc-breadcrumb-arrow"></span>
						<a class="tdc-breadcrumb-item" href="#" title="The parent column">column</a>
					</div>
					<div id="tdc-breadcrumb-inner-row">
						<span class="tdc-breadcrumb-arrow"></span>
						<a class="tdc-breadcrumb-item" href="#" title="The parent inner row">inner-row</a>
					</div>
					<div id="tdc-breadcrumb-inner-column">
						<span class="tdc-breadcrumb-arrow"></span>
						<a class="tdc-breadcrumb-item" href="#" title="The parent inner column">inner-column</a>
					</div>
				</div>
				<div class="tdc-current-element-head" title="This is the type (shortcode) of the current selected element">
				</div>
                <?php  if (TD_DEPLOY_MODE == 'dev') { ?>
                    <div class="tdc-param-name-switch" title="Show param names next to block attributes."><div class="tdc-param-name-switch-ball"></div></div>
                <?php } ?>
				<div class="tdc-current-element-siblings">
				</div>
				<div class="tdc-tabs-wrapper">
				</div>
			</div>
		</div>


		<div class="tdc-sidebar-bottom">
			<div class="tdc-sidebar-bottom-button tdc-sidebar-close" title="Hide sidebar">
				<span class="tdc-icon-sidebar-close"></span>
			</div>
			<div class="tdc-sidebar-bottom-button tdc-bullet" title="On/Off full viewport">
				<span class="tdc-icon-bullet"></span>
			</div>
			<div class="tdc-sidebar-info"></div>
			<div class="tdc-extends">

                <div class="tdc-sidebar-bottom-button tdc-restore-undo" title="Restore content">
                    <span class="tdc-icon-restore-undo" title="Undo CTRL + Z"></span>
                </div>
                <div class="tdc-sidebar-bottom-button tdc-restore-redo" title="Restore content">
                    <span class="tdc-icon-restore-redo" title="Redo CTRL + SHIFT + Z"></span>
                </div>
				<?php
					// Extensions add button in sidebar (to open content)
					do_action( 'tdc_extension_sidebar_bottom' );
				?>

			</div>
            <?php if (current_user_can("switch_themes")) { ?>
			<div class="tdc-sidebar-bottom-button tdc-main-menu" title="Show site wide settings">
				<span class="tdc-icon-view"></span>
			</div>
            <?php } ?>
		</div>

		<div id="tdc-restore">
			Restore
		</div>

		<div id="tdc-restore-content">
            <?php

            $tdc_history = get_post_meta( $post->ID, 'tdc_history', true );

            if ( ! empty( $tdc_history ) ) {
                //var_dump( json_decode( base64_decode( $tdc_history ), true ) );
                $restore_points = json_decode( base64_decode( $tdc_history ), true );

                if ( count( $restore_points )) {
                    $restore_points = array_reverse( $restore_points );
                    ob_start();
                    foreach( $restore_points as $restore_point ) {
                        echo '<div class="tdc-snapshot">';
                        echo '<div style="width:150px;float:left" data-timestamp="' . $restore_point['timestamp'] . '">' . date('j/n/Y g:i:s A', $restore_point['timestamp'] / 1000 ) . '</div>';
                        echo '<div style="width:350px;float:left">Before Restore point</div>';
                        echo '<div class="tdc-snapshot-shortcode" style="display:none">' . $restore_point['shortcode'] . '</div>';
                        echo '<div class="tdc-snapshot-header" style="display:none">' . $restore_point['headerTemplateData'] . '</div>';
                        echo '</div>';
                    }
                    echo ob_get_clean();
                }
            }

            ?>
		</div>

		<!-- modal window -->
		<div class="tdc-sidebar-modal tdc-sidebar-modal-elements" data-button_class="tdc-add-element">
			<div class="tdc-sidebar-modal-search" title="Search for elements in list">
				<input type="text" placeholder="Search" name="Search" autocomplete="off">
				<span class="tdc-modal-magnifier"></span>
			</div>
			<div class="tdc-sidebar-modal-content">
				<!-- sidebar elements list -->
				<div class="tdc-sidebar-elements">
					<?php

					$top_mapped_shortcodes = array();

					$block_mapped_shortcodes = array();
					$big_grids_mapped_shortcodes = array();
                    $header_mapped_shortcodes = array();
					$extended_mapped_shortcodes = array();
					$external_mapped_shortcodes = array();
					$multipurpose_mapped_shortcodes = array();
					$single_post_mapped_shortcodes = array();
                    $category_page_mapped_shortcodes = array();
                    $tag_page_mapped_shortcodes = array();
                    $author_page_mapped_shortcodes = array();
                    $archive_page_mapped_shortcodes = array();
                    $search_page_mapped_shortcodes = array();
                    $attachment_page_mapped_shortcodes = array();
                    $common_page_el_mapped_shortcodes = array();
					$template_shortcodes = array(
//						'template_1' => array(
//							'name' => 'Template 1',
//							'content' => base64_encode(json_encode('[vc_row full_width="stretch_row"][vc_column width="1/4"][vc_row_inner][vc_column_inner width="1/2"][td_block_2][/vc_column_inner][vc_column_inner width="1/2"][td_block_1][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][/vc_column][vc_column width="1/4"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]')),
//						),
					);
					$td_woo_shortcodes = array();

					$template_shortcodes = apply_filters( 'tdc_template_shortcodes', $template_shortcodes );
					$td_woo_shortcodes = apply_filters( 'td_woo_shortcodes', $td_woo_shortcodes );

					$mapped_shortcodes = tdc_mapper::get_mapped_shortcodes();

					foreach ($mapped_shortcodes as &$mapped_shortcode ) {

						$shortcode_base = $mapped_shortcode['base'];

						if ( 'vc_column' === $shortcode_base || 'vc_column_inner' === $shortcode_base ) {
							continue;
						}

						if ( 'vc_row' === $shortcode_base ||
						     'vc_row_inner' === $shortcode_base ||
						     'vc_empty_space' === $shortcode_base ) {
							$top_mapped_shortcodes[$shortcode_base] = $mapped_shortcode;

							continue;
						}

						if ( isset( $mapped_shortcode['tdc_category'] ) ) {
							switch( $mapped_shortcode['tdc_category'] ) {
								case 'Blocks':
									$block_mapped_shortcodes[] = $mapped_shortcode;
									break;
								case 'Big Grids':
									$big_grids_mapped_shortcodes[] = $mapped_shortcode;
									break;
                                case 'Header shortcodes':
                                    $header_mapped_shortcodes[] = $mapped_shortcode;
                                    break;
								case 'Extended':
									$extended_mapped_shortcodes[] = $mapped_shortcode;
									break;
								case 'Single post':
									$single_post_mapped_shortcodes[] = $mapped_shortcode;
									break;
                                case 'Category page':
                                    $category_page_mapped_shortcodes[] = $mapped_shortcode;
                                    break;
                                case 'Tag page':
                                    $tag_page_mapped_shortcodes[] = $mapped_shortcode;
                                    break;
                                case 'Author page':
                                    $author_page_mapped_shortcodes[] = $mapped_shortcode;
                                    break;
                                case 'Search page':
                                    $search_page_mapped_shortcodes[] = $mapped_shortcode;
                                    break;
                                case 'Attachment page':
                                    $attachment_page_mapped_shortcodes[] = $mapped_shortcode;
                                    break;
                                case 'Common page elements':
                                    $common_page_el_mapped_shortcodes[] = $mapped_shortcode;
                                    break;
                                case 'WooCommerce':
	                                $td_woo_shortcodes[] = $mapped_shortcode;
                                    break;
								case 'Multipurpose':
									$multipurpose_mapped_shortcodes[] = $mapped_shortcode;
									break;
								case 'External':
									$external_mapped_shortcodes[] = $mapped_shortcode;
									break;
							}
						}
					}

					function tdc_sort_name( $mapped_shortcode_1, $mapped_shortcode_2 ) {
						return strcmp( $mapped_shortcode_1['name'], $mapped_shortcode_2['name'] );
					}

					usort( $extended_mapped_shortcodes, 'tdc_sort_name');
					usort( $external_mapped_shortcodes, 'tdc_sort_name');
					usort( $multipurpose_mapped_shortcodes, 'tdc_sort_name');


					// Row
					$data_shortcode_settings = get_data_shortcode_settings(  $top_mapped_shortcodes['vc_row'] );

					echo '<div class="tdc-sidebar-element tdc-row-temp" data-shortcode-name="' . $top_mapped_shortcodes['vc_row']['base'] . '" ' . $data_shortcode_settings . '>' .
							'<div class="tdc-element-ico tdc-ico-' . $top_mapped_shortcodes['vc_row']['base'] . '"></div>' .
							'<div class="tdc-element-id">' . $top_mapped_shortcodes['vc_row']['name'] . '</div>' .
				        '</div>';

					// Inner Row
					$data_shortcode_settings = get_data_shortcode_settings(  $top_mapped_shortcodes['vc_row_inner'] );

					echo
						'<div class="tdc-sidebar-element tdc-element-inner-row-temp" data-shortcode-name="' . $top_mapped_shortcodes['vc_row_inner']['base'] . '" ' . $data_shortcode_settings . '>' .
							'<div class="tdc-element-ico tdc-ico-' . $top_mapped_shortcodes['vc_row_inner']['base'] . '"></div>' .
							'<div class="tdc-element-id">' . $top_mapped_shortcodes['vc_row_inner']['name'] . '</div>' .
					    '</div>';

					// Empty space
					$data_shortcode_settings = get_data_shortcode_settings(  $top_mapped_shortcodes['vc_empty_space'] );

					echo
						'<div class="tdc-sidebar-element tdc-element" data-shortcode-name="' . $top_mapped_shortcodes['vc_empty_space']['base'] . '" ' . $data_shortcode_settings . '>' .
							'<div class="tdc-element-ico tdc-ico-' . $top_mapped_shortcodes['vc_empty_space']['base'] . '"></div>' .
							'<div class="tdc-element-id">' . $top_mapped_shortcodes['vc_empty_space']['name'] . '</div>' .
						'</div>';


					if ( ! empty( $header_mapped_shortcodes ) && 'woo_product' !== $tdbTemplateType ) {

                        // Separator
                        echo '<div class="tdc-sidebar-separator">Header shortcodes</div>';

                        foreach ( $header_mapped_shortcodes as $mapped_shortcode ) {
                            if ( isset( $mapped_shortcode['map_in_td_composer'] ) && true === $mapped_shortcode['map_in_td_composer'] ) {

                                $data_row_start_values = '';

                                if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
                                    $tdc_class = 'tdc-element-with-row tdc-row-temp';
                                    if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
                                        $data_row_start_values = ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
                                    }
                                } else {
                                    $tdc_class = 'tdc-element';
                                }

                                $data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

                                $buffer =
                                    '<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
                                    '<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
                                    '<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
                                    '</div>';

                                echo $buffer;
                            }
                        }
                    }

					if ( ! empty( $single_post_mapped_shortcodes ) && 'single' === $tdbTemplateType ) {

						// Separator
						echo '<div class="tdc-sidebar-separator">Single Post shortcodes</div>';

						// Here will be displayed the extended shortcodes
						foreach ( $single_post_mapped_shortcodes as $mapped_shortcode ) {

						    if ( in_array( $mapped_shortcode['base'], array( 'tdb_single_related', 'tdb_single_related_author'))) {
						        continue;
                            }

							$data_row_start_values = '';

							if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
								$tdc_class = 'tdc-element-with-row tdc-row-temp';
								if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
									$data_row_start_values = ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
								}
							} else {
								$tdc_class = 'tdc-element';
							}

							$data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

							$buffer =
								'<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
								'<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
								'<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
								'</div>';

							echo $buffer;
						}
					}

                    if ( ! empty( $category_page_mapped_shortcodes ) && 'category' === $tdbTemplateType ) {

                        // Separator
                        echo '<div class="tdc-sidebar-separator">Category Page shortcodes</div>';

                        // Here will be displayed the extended shortcodes
                        foreach ( $category_page_mapped_shortcodes as $mapped_shortcode ) {

                            if ( in_array( $mapped_shortcode['base'], array(
                                    'tdb_category_grid_1',
                                    'tdb_category_grid_2',
                                    'tdb_category_grid_3',
                                    'tdb_category_grid_4',
                                    'tdb_category_grid_5',
                                    'tdb_category_grid_6',
                                    'tdb_category_grid_7',
                                    'tdb_category_grid_8',
                                    'tdb_category_grid_9',
                                    'tdb_category_grid_10',
                                ))
                            ) {
                                continue;
                            }

                            $data_row_start_values = '';

                            if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
                                $tdc_class = 'tdc-element-with-row tdc-row-temp';
                                if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
                                    $data_row_start_values = ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
                                }
                            } else {
                                $tdc_class = 'tdc-element';
                            }

                            $data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

                            $buffer =
                                '<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
                                '<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
                                '<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
                                '</div>';

                            echo $buffer;
                        }
                    }

                    if ( ! empty( $tag_page_mapped_shortcodes ) && 'tag' === $tdbTemplateType ) {

                        // Separator
                        echo '<div class="tdc-sidebar-separator">Tag Page shortcodes</div>';

                        // Here will be displayed the extended shortcodes
                        foreach ( $tag_page_mapped_shortcodes as $mapped_shortcode ) {

                            $data_row_start_values = '';

                            if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
                                $tdc_class = 'tdc-element-with-row tdc-row-temp';
                                if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
                                    $data_row_start_values = ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
                                }
                            } else {
                                $tdc_class = 'tdc-element';
                            }

                            $data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

                            $buffer =
                                '<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
                                '<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
                                '<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
                                '</div>';

                            echo $buffer;
                        }
                    }

                    if ( ! empty( $author_page_mapped_shortcodes ) && 'author' === $tdbTemplateType ) {

                        // Separator
                        echo '<div class="tdc-sidebar-separator">Author Page shortcodes</div>';

                        // Here will be displayed the author page shortcodes
                        foreach ( $author_page_mapped_shortcodes as $mapped_shortcode ) {

                            $data_row_start_values = '';

                            if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
                                $tdc_class = 'tdc-element-with-row tdc-row-temp';
                                if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
                                    $data_row_start_values = ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
                                }
                            } else {
                                $tdc_class = 'tdc-element';
                            }

                            $data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

                            $buffer =
                                '<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
                                '<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
                                '<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
                                '</div>';

                            echo $buffer;
                        }
                    }

                    if ( ! empty( $search_page_mapped_shortcodes ) && 'search' === $tdbTemplateType ) {

                        // Separator
                        echo '<div class="tdc-sidebar-separator">Search Page shortcodes</div>';

                        // Here will be displayed the search page shortcodes
                        foreach ( $search_page_mapped_shortcodes as $mapped_shortcode ) {

                            $data_row_start_values = '';

                            if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
                                $tdc_class = 'tdc-element-with-row tdc-row-temp';
                                if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
                                    $data_row_start_values = ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
                                }
                            } else {
                                $tdc_class = 'tdc-element';
                            }

                            $data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

                            $buffer =
                                '<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
                                '<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
                                '<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
                                '</div>';

                            echo $buffer;
                        }
                    }

                    if ( ! empty( $attachment_page_mapped_shortcodes ) && 'attachment' === $tdbTemplateType ) {

                        // Separator
                        echo '<div class="tdc-sidebar-separator">Attachment Page shortcodes</div>';

                        // Here will be displayed the search page shortcodes
                        foreach ( $attachment_page_mapped_shortcodes as $mapped_shortcode ) {

                            $data_row_start_values = '';

                            if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
                                $tdc_class = 'tdc-element-with-row tdc-row-temp';
                                if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
                                    $data_row_start_values = ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
                                }
                            } else {
                                $tdc_class = 'tdc-element';
                            }

                            $data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

                            $buffer =
                                '<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
                                '<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
                                '<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
                                '</div>';

                            echo $buffer;
                        }
                    }

                    if ( ! empty( $common_page_el_mapped_shortcodes ) && ! empty( $tdbTemplateType ) && 'page' !== $tdbTemplateType ) {

                        // Separator
                        echo '<div class="tdc-sidebar-separator">Common Page Elements shortcodes</div>';

                        // Here will be displayed the common page shortcodes
                        foreach ( $common_page_el_mapped_shortcodes as $mapped_shortcode ) {

                            if ( 'single' === $tdbTemplateType && ( $mapped_shortcode['base'] === 'tdb_loop' || $mapped_shortcode['base'] === 'tdb_loop_2' ) )
                                continue;

							if ( 'attachment' === $tdbTemplateType && ( $mapped_shortcode['base'] === 'tdb_loop' || $mapped_shortcode['base'] === 'tdb_loop_2' ) )
								continue;

                            if ( '404' === $tdbTemplateType && ( $mapped_shortcode['base'] === 'tdb_title' || $mapped_shortcode['base'] === 'tdb_loop' || $mapped_shortcode['base'] === 'tdb_loop_2' ) )
                                continue;

                            $data_row_start_values = '';

                            if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
                                $tdc_class = 'tdc-element-with-row tdc-row-temp';
                                if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
                                    $data_row_start_values = ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
                                }
                            } else {
                                $tdc_class = 'tdc-element';
                            }

                            $data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

                            $buffer =
                                '<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
                                '<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
                                '<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
                                '</div>';

                            echo $buffer;
                        }
                    }

                    if ( ! empty( $td_woo_shortcodes ) ) {

	                    // Separator
	                    echo '<div class="tdc-sidebar-separator">WooCommerce shortcodes</div>';

	                    // Here will be displayed the WooCommerce type shortcodes
	                    foreach ( $td_woo_shortcodes as $mapped_shortcode ) {

		                    if ( 'woo_product' !== $tdbTemplateType )
			                    continue;

		                    $data_row_start_values = '';

		                    if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
			                    $tdc_class = 'tdc-element-with-row tdc-row-temp';
			                    if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
				                    $data_row_start_values = ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
			                    }
		                    } else {
			                    $tdc_class = 'tdc-element';
		                    }

		                    $data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

		                    $buffer =
			                    '<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
			                    '<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
			                    '<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
			                    '</div>';

		                    echo $buffer;
	                    }

                    }

                    if ( ! empty( $block_mapped_shortcodes ) ) {

						// Separator
						echo '<div class="tdc-sidebar-separator">Block shortcodes</div>';

						foreach ( $block_mapped_shortcodes as $mapped_shortcode ) {
							if ( isset( $mapped_shortcode['map_in_td_composer'] ) && true === $mapped_shortcode['map_in_td_composer'] ) {

								$data_row_start_values = '';

								if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
									$tdc_class = 'tdc-element-with-row tdc-row-temp';
								} else {
									$tdc_class = 'tdc-element';
								}

								$data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

								$buffer =
									'<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
									'<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
									'<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
									'</div>';

								echo $buffer;
							}
						}
					}

					if ( ! empty( $big_grids_mapped_shortcodes ) ) {

						// Separator
						echo '<div class="tdc-sidebar-separator">Big Grid shortcodes</div>';

						foreach ( $big_grids_mapped_shortcodes as $mapped_shortcode ) {
							if ( isset( $mapped_shortcode['map_in_td_composer'] ) && true === $mapped_shortcode['map_in_td_composer'] ) {

								$data_row_start_values = '';

								if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
									$tdc_class = 'tdc-element-with-row tdc-row-temp';
									if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
										$data_row_start_values = ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
									}
								} else {
									$tdc_class = 'tdc-element';
								}

								$data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

								$buffer =
									'<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
									'<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
									'<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
									'</div>';

								echo $buffer;
							}
						}
					}

					if ( ! empty( $extended_mapped_shortcodes ) ) {

						// Separator
						echo '<div class="tdc-sidebar-separator">Extended shortcodes</div>';

						// Here will be displayed the extended shortcodes
						foreach ( $extended_mapped_shortcodes as $mapped_shortcode ) {

							$data_row_start_values = '';

							if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
								$tdc_class = 'tdc-element-with-row tdc-row-temp';
								if ( isset( $mapped_shortcode['tdc_row_start_values'] ) ) {
									$data_row_start_values = ' data-row-start-values="' . $mapped_shortcode['tdc_row_start_values'] . '" ';
								}
							} else {
								$tdc_class = 'tdc-element';
							}

							$data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

							$buffer =
								'<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
								'<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
								'<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
								'</div>';

							echo $buffer;
						}
					}

					if ( ! empty( $external_mapped_shortcodes ) ) {

						// Separator
						echo '<div class="tdc-sidebar-separator">External shortcodes</div>';

						if ( 'page' === $tdbTemplateType ) {
                            foreach ( $common_page_el_mapped_shortcodes as $common_page_el_mapped_shortcode ) {
                                if ( $common_page_el_mapped_shortcode['base'] === 'tdb_loop' || $common_page_el_mapped_shortcode['base'] === 'tdb_loop_2' || $common_page_el_mapped_shortcode['base'] === 'tdb_breadcrumbs' || $common_page_el_mapped_shortcode['base'] === 'tdb_title' || $common_page_el_mapped_shortcode['base'] === 'tdb_woo_menu_cart' ) {
                                    $external_mapped_shortcodes[] = $common_page_el_mapped_shortcode;
                                }
                            }
                        }

						// Here will be displayed the external shortcodes
						foreach ( $external_mapped_shortcodes as $mapped_shortcode ) {

							$data_row_start_values = '';

							if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
								$tdc_class = 'tdc-element-with-row tdc-row-temp';
							} else {
								$tdc_class = 'tdc-element';
							}

							$data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

							$buffer =
								'<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
								'<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
								'<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
								'</div>';

							echo $buffer;
						}
					}

					if ( ! empty( $multipurpose_mapped_shortcodes ) ) {

						// Separator
						echo '<div class="tdc-sidebar-separator">Multipurpose shortcodes</div>';

						// Here will be displayed the multipurpose shortcodes
						foreach ( $multipurpose_mapped_shortcodes as $mapped_shortcode ) {

							$data_row_start_values = '';

							if ( isset( $mapped_shortcode['tdc_in_row'] ) && true === $mapped_shortcode['tdc_in_row'] ) {
								$tdc_class = 'tdc-element-with-row tdc-row-temp';
							} else {
								$tdc_class = 'tdc-element';
							}

							$data_shortcode_settings = get_data_shortcode_settings( $mapped_shortcode );

							$buffer =
								'<div class="tdc-sidebar-element ' . $tdc_class . '" data-shortcode-name="' . $mapped_shortcode['base'] . '" ' . $data_shortcode_settings . '>' .
								'<div class="tdc-element-ico tdc-ico-' . $mapped_shortcode['base'] . '"></div>' .
								'<div class="tdc-element-id">' . $mapped_shortcode['name'] . '</div>' .
								'</div>';

							echo $buffer;
						}
					}

					if ( ! empty( $template_shortcodes ) ) {

						// Separator
						echo '<div class="tdc-sidebar-separator">Template shortcodes</div>';

						// Here will be displayed the template shortcodes
						foreach ( $template_shortcodes as $template_id => $template_shortcode ) {

							$buffer =
								'<div class="tdc-sidebar-element tdc-row-temp" data-template-content="' . $template_shortcode['content'] . '" data-shortcode-name="vc_row">' .
								'<div class="tdc-element-ico tdc-ico-template"></div>' .
								'<div class="tdc-element-id">' . $template_shortcode['name'] . '</div>' .
								'</div>';

							echo $buffer;
						}
					}

					// Separator
					echo '<div class="tdc-sidebar-separator tdc-sidebar-saved-shortcodes">Saved shortcodes</div>';

					?>
				</div>
			</div>
		</div>


		<!-- modal window -->
		<div class="tdc-sidebar-modal tdc-sidebar-modal-menu" data-button_class="tdc-main-menu">
			<div class="tdc-sidebar-modal-content">
				<div id="tdc-theme-panel">
					<?php
                        if ('single' === $tdbTemplateType ) {
                            require_once( plugin_dir_path( __FILE__ ) . '../panel/tdc_post_settings.php');
                        } else {
                            require_once( plugin_dir_path( __FILE__ ) . '../panel/tdc_header.php');
                        }
					?>
				</div>
			</div>
		</div>

		<div id="tdc-icon-selector">
			<div class="tdc-icon-selector-head">
				<select class="tdc-icon-selector-lib"><option value="">All</option>

					<?php
					foreach ( tdc_config::$font_settings as $font_id => $font_settings ) {
						if ( 'Newspaper' !== TD_THEME_NAME && 'font_newspaper' == $font_id ) {
							continue;
						}
						echo '<option value="' . $font_id . '">' . $font_settings['name'] . '</option>';
					}
					?>

				</select>
				<div class="tdc-icon-selector-wrap">
					<input class="tdc-icon-selector-filter" placeholder="Search icon..." type="text"/>
				</div>
			</div>
			<div class="tdc-icon-selector-content-wrap">
				<div class="tdc-icon-selector-content">

					<?php
					$buffer = '';

					foreach ( tdc_config::$font_settings as $font_id => $font_settings ) {
						if ( 'Newspaper' !== TD_THEME_NAME && 'font_newspaper' == $font_id ) {
							continue;
						}
						$buffer .= '<div class="tdc-font-separator" data-font_id="' . $font_id . '">' . $font_settings['name'] . '</div>';

						ob_start();
							include_once( $font_settings['template_file'] );
						$buffer .= ob_get_clean();
					}

					echo $buffer;
					?>

				</div>
			</div>
		</div>

		<div id="tdc-palette">
			<input type="text" val="" id="tdc-palette-color-picker"/>
		</div>

		<div id="tdc-gradient">
			<input type="text" val="" id="tdc-gradient-color-picker"/>
		</div>

		<div id="tdc-font-list">
		</div>

        <div id="tdc-editor-css" style="z-index:2;height:650px;width:calc(100% + 26px);left:-13px">
		</div>

		<?php

		// Extensions add content
		do_action( 'tdc_extension_content' );

		?>

	</div>

	<div id="tdc-context-menu">
		<ul>
			<li class="tdc-current-type separator"></li>
            <li class="tdc-cut-shortcode">Cut<span>CTRL + X</span></li>
			<li class="tdc-copy-shortcode">Copy<span>CTRL + C</span></li>
			<li class="tdc-paste-shortcode-before">Paste Before<span>CTRL + SHIFT + V</span></li>
			<li class="tdc-paste-shortcode-after separator space">Paste After<span>CTRL + V</span></li>
			<li class="tdc-copy-style active">Copy Style<i class="td-icon-right-arrow"></i><ul class="tdc-copy-list-attrs tdc-list-atts"></ul></li>
			<li class="tdc-paste-style separator space">Paste Style<i class="td-icon-right-arrow"></i><ul class="tdc-paste-list-attrs tdc-list-atts"></ul></li>
            <li class="tdc-reset-style separator space">Reset Style</li>
            <li class="tdc-save-shortcode">Save as Element<span>SHIFT + S</span></li>
			<li class="tdc-delete-shortcode">Delete<span>DEL</span></li>
			<li class="tdc-clone-shortcode">Duplicate<span>CTRL + D</span></li>
			<li class="tdc-clear-shortcode">Clear</li>
		</ul>
	</div>


	<!-- The live iFrame loads in this wrapper :) -->
	<div id="tdc-live-iframe-wrapper" class="tdc-live-iframe-wrapper-inline"></div>

	<div id="tdc-iframe-cover"></div>

	<div style="height: 1px; visibility: hidden; overflow: hidden;">

		<?php
		//$is_IE = false;   // used by wp-admin/edit-form-advanced.php
		//require_once ABSPATH . 'wp-admin/edit-form-advanced.php';
		?>

	</div>


	<div id="tdc-menu-settings">
		<header>
			<div class="title"></div>
			<div class="tdc-iframe-close-button"></div>
		</header>
		<div class="content"></div>
		<footer>
			<div class="tdc-iframe-apply-button"></div>
			<div class="tdc-iframe-ok-button"></div>
		</footer>
	</div>

	<div id="tdc-wpeditor">
		<header>
			<div id="title">WP Editor</div>
			<div class="tdc-iframe-close-button"></div>
		</header>
		<div class="content"></div>
	</div>

	<div id="tdc-page-settings">
		<header>
			<div class="title"></div>
			<div class="tdc-iframe-close-button"></div>
		</header>
		<div class="content"></div>
		<footer>
			<div class="tdc-iframe-apply-button"></div>
			<div class="tdc-iframe-ok-button"></div>
		</footer>
	</div>

    <div id="tdc-zone">
        <header>
            <div class="title">Website Manager</div>
            <div class="tdc-iframe-close-button"></div>
        </header>
        <div class="content">
            <div class="tdc-template-wrap">
                <div class="tdc-template-title tdc-template-supertitle"><span>Header</span></div>
                <div class="tdc-template-title tdc-header-template-title">Choose header template</div>
                <div class="tdc-template-select tdc-header-template-select">
                    <select class="tdc-template-list tdc-header-template-list">
                        <option value="">Global Template</option>
                        <option value="no_header">No Header</option>
                    </select>
                    <div class="tdc-template-cloud tdc-header-template-cloud">Import header</div>
                </div>
                <div class="tdc-header-template-zones">
                    <div class="tdc-header-zone">
                        <div class="tdc-zone-group">
                            <div class="tdc-zone tdc-zone-active" data-type="tdc_header_desktop">
                                <div class="tdc-template-title">Main menu</div>
                                <div class="tdc-zone-icon tdc-zone-icon-mainm"></div>
                            </div>
                            <div class="tdc-zone tdc-zone-sticky-inactive" data-type="tdc_header_desktop_sticky">
                                <div class="tdc-template-title">Main menu sticky</div>
                                <div class="tdc-zone-icon tdc-zone-icon-mainms"></div>
                                <div class="tdc-zone-sticky-info">
                                    <div class="tdc-zone-sticky-switch">
                                        <div class="tdc-zone-sticky-switch-ball"></div>
                                    </div>
                                    <div class="tdc-zone-sticky-txt" title="This option is only applicable in the composer.">Enable/disable sticky menu</div>
                                </div>
                            </div>
                        </div>
                        <div class="tdc-zone-group">
                            <div class="tdc-zone" data-type="tdc_header_mobile">
                                <div class="tdc-template-title">Mobile menu</div>
                                <div class="tdc-zone-icon tdc-zone-icon-mobm"></div>
                            </div>
                            <div class="tdc-zone tdc-zone-sticky-inactive" data-type="tdc_header_mobile_sticky">
                                <div class="tdc-template-title">Mobile menu sticky</div>
                                <div class="tdc-zone-icon tdc-zone-icon-mobms"></div>
                                <div class="tdc-zone-sticky-info">
                                    <div class="tdc-zone-sticky-switch">
                                        <div class="tdc-zone-sticky-switch-ball"></div>
                                    </div>
                                    <div class="tdc-zone-sticky-txt" title="This option is only applicable in the composer.">Enable/disable sticky menu</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tdc-template-wrap">
                <div class="tdc-template-title tdc-template-supertitle"><span>Footer</span></div>
                <div class="tdc-template-title tdc-footer-template-title">Choose footer template</div>
                <div class="tdc-template-select tdc-footer-template-select">
                    <select class="tdc-template-list tdc-footer-template-list">
                        <option value="">Global Template</option>
                        <option value="no_footer">No Footer</option>
                    </select>
                    <div class="tdc-template-cloud tdc-footer-template-cloud">Import footer</div>
                </div>
            </div>
        </div>
    </div>




<?php
require_once( ABSPATH . 'wp-admin/admin-footer.php' );


