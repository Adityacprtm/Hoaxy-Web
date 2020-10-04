<!doctype html >
<html amp <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?> itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WebPage">

<amp-state id="td_amp_menu_state">
    <script type="application/json">
        {
            "visible": false
        }
    </script>
</amp-state>
<amp-sidebar id="td_amp_menu" [class]="td_amp_menu_state.visible == true ? 'td-menu-mob-open-menu' : ''" layout="nodisplay" side="left">

    <div class="td-menu-background"></div>
    <div id="td-mobile-nav">
        <div class="td-mobile-container">

            <!-- mobile menu top section -->
            <div class="td-menu-socials-wrap">

                <!-- socials -->
                <div class="td-menu-socials">
                    <?php
                    //get the socials that are set by user
                    $td_get_social_network = td_options::get_array('td_social_networks');

                    if(!empty($td_get_social_network)) {
                        foreach($td_get_social_network as $social_id => $social_link) {
                            if(!empty($social_link)) {
                                echo td_social_icons::get_icon($social_link, $social_id, true);
                            }
                        }
                    }
                    ?>
                </div>

                <!-- amp-sidebar close button -->
                <div
                        class="td-mobile-close"
                        role="button"
                        aria-label="close sidebar"
                        on="tap:td_amp_menu.toggle,AMP.setState({td_amp_menu_state: {visible: false}})"
                        tabindex="0"
                        class="close-sidebar"
                ><i class="td-icon-close-mobile"></i>
                </div>
            </div>

            <!-- menu section -->
            <div class="td-mobile-content">
                    <?php

                    td_wp_nav_menu( array(
                        'theme_location' => 'header-menu-mobile',
                        'menu_class'=> 'td-mobile-main-menu',
                        'fallback_cb' => 'td_wp_no_mobile_menu',
                        'link_after' => '<i class="td-icon-menu-right td-element-after"></i>',
                        'walker'  => new td_walker_mobile_menu()
                    ) );

                    //if no menu
                    function td_wp_no_mobile_menu() {
                        //this is the default menu
                        echo '
                    <ul class="">
                        <li class="menu-item-first">
                            <a href="' . esc_url(home_url( '/' )) . 'wp-admin/nav-menus.php">Click here - to use the wp menu builder</a>
                        </li>
                    </ul>';
                    }

                    ?>
                </div>

        </div>
    </div>

</amp-sidebar>

<?php if (td_util::get_option('tds_live_search_mob') != 'hide') { ?>

<amp-state id="td_amp_search_state">
    <script type="application/json">
        {
            "visible": false,
            "focus": false,
            "s": ""
        }
    </script>
</amp-state>
<amp-sidebar id="td_amp_search" [class]="td_amp_search_state.visible == true ? 'td-search-opened' : ''" layout="nodisplay" side="right">

    <div class="td-search-background"></div>
    <div class="td-search-wrap">
        <div class="td-drop-down-search">

            <form
                    id="srcfrm"
                    method="post"
                    target="_top"
                    class="td-search-form"
                    novalidate=""
                    action-xhr="<?php echo admin_url('admin-ajax.php?action=td_ajax_search&td_theme_name=' . TD_THEME_NAME . '&v=' . TD_THEME_VERSION . '&amp') ?>"
                    on="submit:src_load.show;submit-success:src_load.hide;submit-error:src_load.hide"
            >

                <!-- amp-sidebar close button -->
                <div
                        class="td-search-close"
                        role="button"
                        aria-label="close sidebar"
                        on="tap:td_amp_search.toggle,AMP.setState({td_amp_search_state: {visible: false,s: ''}})"
                        tabindex="0"
                        class="close-sidebar"
                ><i class="td-icon-close-mobile"></i>
                </div>

                <div role="search" class="td-search-input">
                    <!--<span style="display: none"><?php /*_etd('Search', TD_THEME_NAME)*/?></span>-->

                    <input
                            id="td-header-search"
                            type="search"
                            name="s"
                            [value]="td_amp_search_state.s"
                            autocomplete="off"
                            placeholder="Search…"
                            on="input-debounced:srcfrm.submit"
                            required=""
                            minlength="3"
                            value=""
                    >

                </div>

                <div id="src_load" hidden="">
                    <div class="">
                        <h2 style="color: white">Loading…</h2>
                    </div>
                </div>

                <!-- covaseala ca sa mearga css ul pt {{post_no_cat}} cand nu sunt categorii  -->
                <span class="td-mod-no-cat"></span>

                <div submit-success>
                    <template type="amp-mustache">
                        <h5 style="color: white">Here are the results for the search: <span style="font-weight: bold; font-style: italic;">"{{td_search_query}}"</span></h5>
                        <div id="td-aj-search">
                            <div class="td-aj-search-results">

                                {{^td_query_posts}}
                                <h5 style="color: white">No results!</h5>
                                {{/td_query_posts}}


                                {{#td_query_posts}}
                                <div class="td_module_mob_1 td_module_wrap td-animation-stack">

                                    <div class="td-module-thumb">
                                        <a href="{{post_url}}" rel="bookmark nofollow" class="td-image-wrap" title="{{post_title_attribute}}">
                                            <amp-img
                                                    src="{{post_thumb_url}}"
                                                    class="entry-thumb"
                                                    alt="{{ title }}"
                                                    width="265"
                                                    height="198"
                                                    layout="responsive"
                                                    alt="{{ post_thumb_alt }}"
                                                    title="{{ post_thumb_title }}"
                                            >
                                            </amp-img>
                                        </a>
                                    </div>

                                    <div class="item-details">
                                        <h3 class="entry-title td-module-title">
                                            <a href="{{post_url}}" rel="bookmark nofollow" title="{{post_title_attribute}}">{{post_title}}</a>
                                        </h3>
                                        <div class="td-module-meta-info">
                                            <a href="{{post_cat_link}}" rel="nofollow" class="td-post-category {{post_no_cat}}">{{post_cat_name}}</a>
                                            <span class="td-post-date">
                                                <time class="entry-date updated td-module-date" datetime="{{post_date_unix}}">{{post_date}}</time>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                {{/td_query_posts}}
                            </div>
                            <div class="result-msg">
                                <a href="{{td_query_all_results}}" data-amp-replace="?amp" data-amp-addparams="&amp" rel="nofollow">View all results</a>
                            </div>
                        </div>
                    </template>
                </div>

            </form>

        </div>
    </div>

</amp-sidebar>
<?php } ?>
<div class="td-scroll-up td-scroll-up-visible"><a href="#top"><i class="td-icon-menu-up"></i></a></div>

<div id="td-outer-wrap">
    <div id="top" class="td-header-wrap">
        <div class="td-container">
            <div id="td-header-menu">

                <!-- amp-sidebar menu open button -->
                <div id="td-top-mobile-toggle" role="button" on="tap:td_amp_menu.toggle,AMP.setState({td_amp_menu_state: {visible: true}})" tabindex="0"><i class="td-icon-font td-icon-mobile"></i></div>

                <!-- logo -->
                <div class="td-main-menu-logo">
		            <?php locate_template('parts/logo.php', true, false); ?>
                </div>

                
                <?php 
                //check live search option
                if (td_util::get_option('tds_live_search_mob') != 'hide') { ?>
                    <!-- amp-sidebar search open button -->
                    <div class="td-search-icon" role="button" on="tap:td_amp_search.toggle,AMP.setState({td_amp_search_state: {visible: true,s: ''}})" tabindex="0"><i class="td-icon-search"></i></div>
                <?php } else { //live search disabled ?>
                    <a class="td-search-icon" href="<?php echo home_url('/?s=') ?>"><i class="td-icon-search"></i> </a>
                <?php } ?>
            </div>
        </div>
    </div>

	<?php echo td_global_blocks::get_instance('td_block_ad_box_mob')->render(
		array(
			'spot_id' => 'tdm_amp_auto_ads',
			'spot_ad_type' => 'amp'
		)
	); ?>

    <?php echo td_global_blocks::get_instance('td_block_ad_box_mob')->render(array('spot_id' => 'header_mob')); ?>
