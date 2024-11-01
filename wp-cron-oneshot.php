<?php
/*
Plugin Name: WP-Cron Oneshot
Description: Troubleshooting plugin for wp-cron.  Schedules a "do nothing" task through wp-cron.
Author: Code Geode
Version: 1.0.0
Author URI: http://www.webprogrammingblog.com/
Text Domain: wp-cron-oneshot
License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

  Copyright 2010 Code Geode (email : codegeode@yahoo.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

register_activation_hook(__FILE__, 'wp_cron_oneshot_activate');
register_deactivation_hook(__FILE__, 'wp_cron_oneshot_deactivate');
add_action('wp_cron_oneshot_regfn', 'wp_cron_oneshot_do_nothing');

function wp_cron_oneshot_activate() {
	wp_schedule_single_event(time(),'wp_cron_oneshot_regfn');
}

function wp_cron_oneshot_deactivate() {
	wp_clear_scheduled_hook('wp_cron_oneshot_regfn');
}

function wp_cron_oneshot_do_nothing() {
  // do nothing...
}

?>