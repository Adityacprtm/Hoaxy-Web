<?php
do_action( 'tdc_footer' );
if ( has_action( 'tdc_footer' ) ) {
    return;
}
?>
    <div class="td-footer-page td-footer-container td-container-wrap">
        <div class="td-sub-footer-container td-container-wrap">
            <div class="td-container">
                <div class="td-pb-row">
                    <div class="td-pb-span td-sub-footer-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                            'menu_class'=> 'td-subfooter-menu',
                            'fallback_cb' => 'tagdiv_wp_no_footer_menu',
                        ));

                        // if no menu
                        function tagdiv_wp_no_footer_menu() {
                            if ( current_user_can( 'switch_themes' ) ) {
                                echo '<ul class="td-subfooter-menu">';
                                echo '<li class="menu-item-first"><a href="' . esc_url(home_url('/')) . 'wp-admin/nav-menus.php?action=locations">Add menu</a></li>';
                                echo '</ul>';
                            }
                        }
                        ?>
                    </div>

                    <div class="td-pb-span td-sub-footer-copy">
                        &copy; Newspaper WordPress Theme by TagDiv
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!--close td-outer-wrap-->

<?php wp_footer(); ?>

</body>
</html>