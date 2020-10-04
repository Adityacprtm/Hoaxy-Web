<?php

    // load the deploy mode
    require_once 'td_deploy_mode.php';

    // load the config
    require_once('includes/tdsp_config.php');
    require_once('includes/tdsp_config_helper.php');

    add_action('td_global_after', array('tdsp_config', 'on_td_global_after_config'), 10); //we run on 9 priority to allow plugins to updage_key our apis while using the default priority of 10

    require_once('includes/tdsp_css_generator.php');

    require_once('includes/widgets/td_page_builder_widgets.php'); // widgets