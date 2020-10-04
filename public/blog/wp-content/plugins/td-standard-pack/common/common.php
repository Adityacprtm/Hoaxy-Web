<?php

/** ---------------------------------------------------------------------------
 * front end user compiled css @see  td_css_generator.php
 */
function tdsp_include_user_compiled_css() {
    if ( ! is_admin() ) {

        if ( !td_util::is_mobile_theme() ) {

            // add the global css compiler
            if ( TD_DEPLOY_MODE == 'dev' ) {
                $compiled_css = tdsp_css_generator(); // get it live WARNING - it will always appear as autoloaded on DEV
            } else {
                $compiled_css = td_util::get_option('tds_user_compile_css'); // get it from the cache - do not compile at runtime
            }

            if (!empty($compiled_css)) {
                td_css_buffer::add_to_header($compiled_css);
            }
        }
    }
}
add_action('wp_head', 'tdsp_include_user_compiled_css', 10);
