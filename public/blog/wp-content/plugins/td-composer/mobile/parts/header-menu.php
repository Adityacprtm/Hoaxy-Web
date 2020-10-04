<div id="td-header-menu">
    <div id="td-top-mobile-toggle"><a href="#"><i class="td-icon-font td-icon-mobile"></i></a></div>
    <div class="td-main-menu-logo">
        <?php
            locate_template('parts/logo.php', true, false);
        ?>
    </div>
    <!-- Search -->
    <div class="td-search-icon">
        <?php
        //check live search option
        if (td_util::get_option('tds_live_search_mob') != 'hide') { ?>
            <a id="td-header-search-button" href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
        <?php } else { //live search disabled ?>
            <a id="td-header-not-live-search-button" href="<?php echo home_url('/?s=') ?>" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
        <?php } ?>
    </div>
</div>