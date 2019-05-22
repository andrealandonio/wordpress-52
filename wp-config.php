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

// Database settings
define('DB_NAME', 'wordpress_52');
define('DB_USER', 'root');
define('DB_PASSWORD', 'admin');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c(B #EbAV`NWEeI]Xv+GCs[W WR<[~(n/w$@|3#xRm,ph<Zh*(wPYfpn-9#c+8Ym' );
define( 'SECURE_AUTH_KEY',  'l-x,BGf4lN`^?6o[/5G$iSxSJr)S)BH[75zy862,Z]vOi7([7:{3+.%#*LT*JQ(<' );
define( 'LOGGED_IN_KEY',    '3!TRujNIcH]Zh..apm$pD:Y|hk^;podOuI^S3Qyf%SV:)%Fh<cWaAziCwLjM-{QN' );
define( 'NONCE_KEY',        'hvU>V-owahXp@m$$b~d-N(+M!90BWtG~NJzosXC`wX`x.;4vnn[NWz;UPk4&0G^y' );
define( 'AUTH_SALT',        'Ym9bIy:?lA*$0Eai[b$,ieG?5QdUDOR:/WB|i-^uA0|4@~.)xSH].AMMzR}Q b?:' );
define( 'SECURE_AUTH_SALT', 'TgIF:fST.7>,=bNkpM~~ge/Q6N`=Dp:8RgGSP.OP`JeL^3cxp^cah@>>V]p+V&?0' );
define( 'LOGGED_IN_SALT',   '.N<8I,v0WJ4avw!0VFm>29#l{/fl1F<#wc.os#s8&Ilt#&b7ow-G<G$|{GfDSj[0' );
define( 'NONCE_SALT',       'bXk<0%<=+U;!s1vq2M>N2h`>g{[zGSR s&RbQ=Le?8+e,uW%mE[1N8Lb:gI#TQD*' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

// Custom settings
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_POST_REVISIONS', 0);
define('AUTOSAVE_INTERVAL', 1800);
define('WP_AUTO_UPDATE_CORE', false);

// Network settings
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'wordpress52.local');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
