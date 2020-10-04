<?php
td_js_buffer::add_to_header("\n" . "

//themeforest iframe removal code - used only on demo
var td_is_safari = false;
var td_is_ios = false;
var td_is_windows_phone = false;
var tdb_post_autoload = false;
var tdb_is_ajax = false;

var ua = navigator.userAgent.toLowerCase();

var td_is_android = ua.indexOf('android') > -1;

if ( ua.indexOf('safari')!=-1 ){
    if( ua.indexOf('chrome')  > -1 ){

    }else{
        td_is_safari = true;
    }
}

if( navigator.userAgent.match( /(iPhone|iPod|iPad )/i ) ) {
    td_is_ios = true;
}

if ( navigator.userAgent.match( /Windows Phone/i ) ) {
    td_is_windows_phone = true;
}

if ( typeof window.tdb_globals.postAutoloadStatus !== 'undefined' && window.tdb_globals.postAutoloadStatus === 'on' ) {
    tdb_post_autoload = true;
}

if ( typeof window.tdb_globals.isAjax !== 'undefined' && window.tdb_globals.isAjax ) {
    tdb_is_ajax = true;
}

if( td_is_ios || td_is_safari || td_is_windows_phone || td_is_android ) {
    if ( top.location != location && ! tdb_post_autoload && ! tdb_is_ajax ) {
        top.location.replace('" . TD_THEME_DEMO_URL . "/');
    }
}
    
");