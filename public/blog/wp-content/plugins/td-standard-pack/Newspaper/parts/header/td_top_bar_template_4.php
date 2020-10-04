<?php if (td_util::get_option('tds_top_bar') != 'hide_top_bar') { ?>

    <div class="top-bar-style-4">
        <?php require_once('top-widget.php'); ?>
        <?php require_once('top-menu.php'); ?>
    </div>

<?php }
    require_once(TDC_PATH_LEGACY . '/parts/header/td-login-modal.php');
?>