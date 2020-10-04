<?php
/**
 * Front-end Actions
 *
 * @package     EDD
 * @subpackage  Functions
 * @copyright   Copyright (c) 2015, Pippin Williamson
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.8.1
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Hooks EDD actions, when present in the $_GET superglobal. Every edd_action
 * present in $_GET is called using WordPress's do_action function. These
 * functions are called on init.
 *
 * @since 1.0
 * @return void
*/
add_action('init', 'irp_do_action');
add_action('wp_ajax_do_action', 'irp_do_action');
function irp_do_action() {
    global $irp;

	if ($irp->Utils->qs('irp_action')) {
        $args=array_merge($_GET, $_POST, $_COOKIE, $_SERVER);
        $name='irp_'.$irp->Utils->qs('irp_action');
        if(has_action($name)) {
            $irp->Log->debug('EXECUTING ACTION=%s', $name);
            do_action($name, $args);
        } elseif(function_exists($name)) {
            $irp->Log->debug('EXECUTING FUNCTION=%s DATA=%s', $name, $args);
            call_user_func($name, $args);
        } elseif(strpos($irp->Utils->qs('irp_action'), '_')!==FALSE) {
            $pos=strpos($irp->Utils->qs('irp_action'), '_');
            $what=substr($irp->Utils->qs('irp_action'), 0, $pos);
            $function=substr($irp->Utils->qs('irp_action'), $pos+1);

            $class=NULL;
            switch (strtolower($what)) {
                case 'cron':
                    $class=$irp->Cron;
                    break;
                case 'tracking':
                    $class=$irp->Tracking;
                    break;
                case 'properties':
                    $class=$irp->Options;
                    break;
            }

            if(!$class) {
                $irp->Log->fatal('NO CLASS FOR=%s IN ACTION=%s', $what, $irp->Utils->qs('irp_action'));
            } elseif(!method_exists ($class, $function)) {
                $irp->Log->fatal('NO METHOD FOR=%s IN CLASS=%s IN ACTION=%s', $function, $what, $irp->Utils->qs('irp_action'));
            } else {
                $irp->Log->debug('METHOD=%s OF CLASS=%s', $function, $what);
                call_user_func(array($class, $function), $args);
            }
        } else {
            $irp->Log->fatal('NO FUNCTION FOR==%s', $irp->Utils->qs('irp_action'));
        }
	}
}
