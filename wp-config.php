<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */


define('DB_NAME', 'db_wp_ampt2017');
define('DB_USER', 'amptdesign');
define('DB_PASSWORD', 'Chicago_99');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         't>k3KlDf^*fXS$zty|,;I@zks+VPW$({EZrgLjiq~jUl`Qj7ID&?,Wj;%n J!TQZ');
define('SECURE_AUTH_KEY',  '`p>rvZ+Ug0{/1mG7RSxA*tj-hVnn`;T:PBpSxN$}wKC}lHU:UWdL*8fVhzQy+xFZ');
define('LOGGED_IN_KEY',    '?7Yq`Y~iAxG^MaIF-3q}uuYuzOsrYh_Z|YHYR0Lh8KBPbgSV~N&yk|-#X+EV5w[3');
define('NONCE_KEY',        'r3b0Cy+eB!2Q*6G~kjfzi8++yU!w 8N`i7=s5MI0x/S~e}RRh[zH=|KNf|Ka*o-f');
define('AUTH_SALT',        ',r4gBW0-z_L-2?(mH0~yG/C0<{=ZT  C-Z):1V1dt_^H#~1~Dy9/0GIjKK?5YesJ');
define('SECURE_AUTH_SALT', 'oU{>XBN~_>,8%8-lPZC]r>xl1%]J~:lNy-cT:EZ7|JOy@Ah%:MU-7J]>.C-IQ0kz');
define('LOGGED_IN_SALT',   '4^>v1=IrkU;z-m{]-(#%wGg##@0oHSgrV41:U|I|?^h@[zc#YUIP!C{}0^(CSs!c');
define('NONCE_SALT',       '~=Sap[+$3gHJsHhaY0T/L+(#vg(%={7}ZImQH%H!E(eM-LY*gT$-+|~`~7#H_-;C');

$table_prefix  = 'wp_';

define('WP_DEBUG', true);
// define('WP_DEBUG', false);


/*****************************************
******** LIVE SERVER ONLY !!! ************
*****************************************/
// define('DISALLOW_FILE_EDIT', true);
// define('DISALLOW_FILE_MODS', true);
define('WP_POST_REVISIONS', 10);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
