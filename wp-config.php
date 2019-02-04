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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'couture');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         'B)dY2L+CtoE1BtAKB5/O0jV ><BO_P=+Fb4U[~KQj?m0jCE[ftp)i|%u ZUv03^5');
define('SECURE_AUTH_KEY',  'dK+eH!V64h:8B53=aTH?lzIIxSx~4S>rxn#Q{g`jk~;prV;2LyzrDa{#nOhw?zm@');
define('LOGGED_IN_KEY',    'ad^C([E@_,z)40GHFSrJ;AXLl&KQ9*lLX*1NaU:;uB;q*r@mFDXZ]a]-rC0XbusI');
define('NONCE_KEY',        '2;/>@P>V3H2CZ}hT/.c8!Z/EW{MQWknM%eBd3QpJq>pBoqS`YH&eQVW)Xfxx`|5=');
define('AUTH_SALT',        'X)/)%wfnC27:/JjavMfKfjX(UfIdLCZ?7YRr%/v<-].3Hs}:=Y+T5nN3*`ll_4~D');
define('SECURE_AUTH_SALT', '}ReAITe>AHjF%k(LlTX5GRqBs[LFY bm%IxLEH6Z=^{FME#R/G$RLQrqm=`1|-$P');
define('LOGGED_IN_SALT',   'RK)+;=SWr6APq8RU!?J0 1,QYz.U#Na.KiE NN+.bMB J#w}{0Y871Zjr9G%dxIL');
define('NONCE_SALT',       'o>l?k z9`k_+rO&Aq,3f0Eo$NH0a8-wi;xLDuVVG~J-%H665Z4HvVwO,t4]G6&k6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
