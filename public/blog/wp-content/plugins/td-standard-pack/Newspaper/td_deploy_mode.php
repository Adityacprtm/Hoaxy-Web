<?php

if ( !defined('TD_STANDARD_PACK_DEPLOY_MODE') ) {
    define("TD_STANDARD_PACK_DEPLOY_MODE", 'dev');
}

/**
 * @see td_less_style.css.php for the full list of files that are compiled.
 * set this to false and you can use your own compiler for the less files
 */
if (!defined('TD_STANDARD_PACK_USE_LESS')) {
	define("TD_STANDARD_PACK_USE_LESS", true);
}