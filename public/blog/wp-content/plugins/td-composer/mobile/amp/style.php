<?php

if ( !defined("TD_THEME_NAME") ) {
    return;
}

if ( TD_DEPLOY_MODE == 'dev' ) {
    require_once ( __DIR__.'/../../includes/td_node_less/td_less_compiler.php' );

	td_less_compiler::compile_and_import(
		get_template_directory() . 'amp/less/amp_main.less',
		get_template_directory() . 'amp/css/amp_main.css'
	);
}
