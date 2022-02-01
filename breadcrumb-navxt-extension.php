<?php
/**
 * Plugin Name: breadcrumb-navxt-extension
 * Plugin URI: https://github.com/kviron/breadcrumb-navxt-extension
 *
 * Version: 0.0.5
 *
 * License:      GPL-3.0+
 * License URI:  http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * Text Domain: bcnavxt-extension
 * Domain Path: /lang
 *
 * Description: Плагин расширяющий основные возможности breadcrumb-navxt
 */

function my_bcn_allowed_html($allowed_html)
{
    $allowed_html['svg'] = array(
        'xml:lang' => true,
    );
    $allowed_html['use'] = array(
        'xml:lang' => true,
        'xlink:href' => true
    );
    return $allowed_html;
}
add_filter('bcn_allowed_html', 'my_bcn_allowed_html');
