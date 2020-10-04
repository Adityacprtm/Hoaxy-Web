<?php
require_once TAGDIV_ROOT_DIR . "/includes/wp-booster/wp-admin/tagdiv-view-header.php";
?>
<div class="td-admin-wrap about-wrap">
    <div class="td-welcome-header">
        <div class="td-welcome-header-left">
            <h1>Welcome to <?php echo TD_THEME_NAME ?> <div class="td-welcome-version">V <?php echo TD_THEME_VERSION ?></div></h1>
            <div class="about-text">
                Thank you for choosing our theme! We’ve worked hard to release a great product, and we will do our absolute best to support this theme.
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/images/admin-panel/logo-panel.png">
    </div>

    <?php
        $theme_setup = tagdiv_theme_plugins_setup::get_instance();
        $theme_setup->theme_plugins();
    ?>

    <h2><?php echo TD_THEME_NAME?> Theme is the best way to create remarkable content!</h2>
    <p>For more than five years, our primary goal was to make the theme naturally easy to use while giving you the power to create amazing experiences for your visitors. We'll be happy to receive your feedback and suggestions.</p>

    <?php include_once TAGDIV_ROOT_DIR . "/includes/tagdiv-panel-docs.php"; ?>
</div>
