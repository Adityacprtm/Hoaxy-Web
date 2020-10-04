<!-- Instagram Account Access Configuration -->
<script type="text/javascript">
    var tdAdminPanelUrl = "<?php echo admin_url('admin.php?page=td_theme_panel'); ?>";
</script>

<?php echo td_panel_generator::box_start('Instagram Account Access Configuration', true); ?>

<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">Configure Your Instagram Account</span>
        <p>Use this button to connect to your Instagram Account and authorize our applicaion to share data from your account <a href="https://forum.tagdiv.com/privacy-policy-2/#instagram" target="_blank">Privacy Policy</a>.</p>
    </div>
    <div class="td-box-control" style="padding-bottom: 32px;">

        <?php

        $redirect_uri = 'https://tagdiv.com/td_instagram_api/v2/td-instagram-api-v2.php';
        $return_uri = admin_url('admin.php?page-td_theme_panel'); // set as state param in instagram authorize button link

        $instagram_access_settings = td_options::get_array( 'td_instagram_connected_account');

        //	    echo '<pre style="display: inline-block; white-space: pre-wrap; word-break: break-all;">';
        //	    print_r($instagram_access_settings);
        //	    echo '</pre>';

        $connected_account = isset( $instagram_access_settings['connected_account'] ) ? $instagram_access_settings['connected_account'] : array();
        $is_account_connected = isset( $instagram_access_settings['connected_account'] );
        $disabled = $is_account_connected ? 'disabled' : '';
        $title = ! $is_account_connected ? 'Connect to your Instagram Account' : 'Your Instagram Account is already connected';

        ?>

        <a class="button button-secondary td-add-account <?php echo $disabled ?>"
           href="https://instagram.com/oauth/authorize/?app_id=225805548418040&scope=user_profile,user_media&redirect_uri=<?php echo $redirect_uri ?>&response_type=code&state=<?php echo $return_uri ?>"
           style="margin-left: 40px"
           title="<?php echo $title ?>"
        >Connect Instagram Account</a>

        <div class="td-box-section-separator" style="margin-top: 30px;"></div>

        <div class="td-box-description td-insta-acc-title">
            <span class="td-box-title">Connected Account:</span>
        </div>
        <div class="td-box-control td-box-control-inst-account" style="clear: left;">
            <?php
            if ( ! empty( $connected_account ) ) {
                ?>

                <div class="about-wrap">
                    <div class="td-insta-acc-wrap">
                        <div class="td-insta-acc-user"><?php echo $connected_account['username'] ?></div>
                        <div class="td-insta-acc-expires">
                            <?php

                            $expires_in_ts = isset( $connected_account['expires_in_ts'] ) ? $connected_account['expires_in_ts'] : '';

                            if ( ! empty( $expires_in_ts ) ) {
                                $human_readable_time_string = td_human_readable_ts( $connected_account['expires_in_ts'] );
                                if ( strpos( $human_readable_time_string, 'ago' ) === false ) {
                                    echo '<span style="color: #0a9e01;">expires in ' . $human_readable_time_string . '</span>';
                                } else {
                                    echo '<span style="color: orangered;">expired ' . $human_readable_time_string . '</span>';
                                }
                            }

                            ?>
                        </div>
                        <div class="td-insta-acc-token-trigg">
                            <div class="td-classic-check">
                                <input type="checkbox" id="show_id_token" name="" value="">
                                <label for="show_id_token" class="td-check-wrap">
                                    <span class="td-check"></span><span class="td-check-title">Show Access Token</span>
                                </label>
                            </div>
                        </div>
                        <div class="td-insta-acc-remove">
                            <a class="button button-secondary td-remove-account" href="#" data-id="<?php echo $connected_account['user_id'] ?>" data-username="<?php echo $connected_account['username'] ?>">Remove</a>
                        </div>
                        <div class="td-insta-acc-token">
                            <div class="td-insta-acc-token-inner">
                                <div class="td-insta-acc-token-info">Access Token</div>
                                <div class="td-insta-acc-token-code"><?php echo $connected_account['access_token'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            } else {
                ?>
                <p class="td-no-inst-account-message"><strong>No account connected!</strong></p>
                <?php
            }
            ?>
        </div>

        <div id="td-instagram-tk-error"
             style="
                 display: none;
                 color: orangered;
                 font-weight: bold;
                "
        ></div>

        <!-- Debug -->
        <!--
        <div class="td-box-section-separator" style="margin-top: 30px;"></div>
        <div class="td-box-description">
            <span class="td-box-title">Saved data:</span>
        </div>
        <div class="td-box-control td-box-control-inst-account-debug" style="clear: left;">
        <?php //if( ! empty($instagram_access_settings) ) { ?>
            <pre style="white-space: pre-wrap;">
                <?php //print_r($instagram_access_settings); ?>
            </pre>
	    <?php //} else { ?>
            <strong>No saved data!</strong>
        <?php //} ?>
        </div>
        -->
    </div>
</div>

<?php echo td_panel_generator::box_end(); ?>


<?php echo td_panel_generator::box_start('YouTube API Configuration', false); ?>

<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">API KEY</span>
        <p>Follow <a href="https://forum.tagdiv.com/youtube-api-key/" target="_blank">this guide</a> to get your own YouTube API key</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::input(array(
            'ds' => 'td_option',
            'option_id' => 'tds_yt_api_key'
        ));
        ?>
    </div>
</div>

<?php echo td_panel_generator::box_end(); ?>


<?php //echo td_panel_generator::box_start('Flickr API Configuration', false); ?>
<!---->
<!--<div class="td-box-row">-->
<!--    <div class="td-box-description">-->
<!--        <span class="td-box-title">API KEY</span>-->
<!--        <p>Follow <a href="https://forum.tagdiv.com/youtube-api-key/" target="_blank">this guide</a> to get your own Flickr API key</p>-->
<!--    </div>-->
<!--    <div class="td-box-control-full">-->
<!--        --><?php
//        echo td_panel_generator::input(array(
//            'ds' => 'td_option',
//            'option_id' => 'tds_flickr_api_key'
//        ));
//        ?>
<!--    </div>-->
<!--</div>-->
<!---->
<?php //echo td_panel_generator::box_end(); ?>


<?php echo td_panel_generator::box_start('Social Networks', false); ?>

<div class="td-box-row">
    <div class="td-box-description">
        <span class=" td-box-title">SET REL ATTRIBUTE VALUE</span>
        <p>Set nofollow or noopener for social links</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::radio_button_control(array(
            'ds' => 'td_option',
            'option_id' => 'tds_rel_type',
            'values' => array(
                array('text' => 'Disable', 'val' => ''),
                array('text' => 'Nofollow', 'val' => 'nofollow'),
                array('text' => 'Noopener', 'val' => 'noopener'),
                array('text' => 'Noreferrer', 'val' => 'noreferrer')

            )
        ));
        ?>
    </div>
</div>

<div class="td-box-section-separator"></div>

<?php
foreach(td_social_icons::$td_social_icons_array as $panel_social_id => $panel_social_name) {
    ?>
    <div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title"><?php echo strtoupper($panel_social_name) ?></span>
        <p>Link to : <?php printf( '%1$s', $panel_social_name ) ?></p>
    </div>
    <div id="<?php echo esc_attr( $panel_social_name ) ?>" class="td-box-control-full" >
        <?php
        echo td_panel_generator::input(array(
            'ds' => 'td_social_networks',
            'option_id' => $panel_social_id
        ));
        ?>
    </div>
    </div><?php
}
?>

<?php echo td_panel_generator::box_end();?>

