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
define('DB_NAME', 'learnwp_db');

/** MySQL database username */
define('DB_USER', 'learnwp_user');

/** MySQL database password */
define('DB_PASSWORD', 'Waffty12');

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
define('AUTH_KEY',         '*6/Bom7+g^K{67(|tvlu/|WGi0:JND=~?v+:^g:9&oOBX*o)>~7|_C@x5AM%tHP{');
define('SECURE_AUTH_KEY',  'iT#I Cm~- &^%2nq5{hAB3mrMp?6TB(A$G[TxWAOj`p$%IcsP.r{}h]<Am<%MRu*');
define('LOGGED_IN_KEY',    '^ lgIAPlY=wsoUFGMD{o/Ak4MFYk) YX>:Z(.dxv-ag^ri9r/?pUmwdjkd[L-D C');
define('NONCE_KEY',        ',ma=a8)d77,^$&%enZ;ck~lH6T{;;JwNBEa`_GCar7)zuh*G}7wT$y?j)F*+{ykC');
define('AUTH_SALT',        'B/.&=Gak(e>IY9qWLJCzNt+9z~8>]{0H0r{q!lxv.+Am)kmMBLC;<>|87!d)A2Uc');
define('SECURE_AUTH_SALT', 'Z#35c?Ve(i0%+nK/Acf~t[E7t#!P37^LVa9LFNL3,$7W9>T,v&K}A5reJ7{{$-6n');
define('LOGGED_IN_SALT',   'xaV%P2)Uo94?50+FgB)SzZdFhk;pgIhPt::0@Kg}aMpIeZ UJhuKqd<Uzz-#zKYE');
define('NONCE_SALT',       '[duq=|O@EH8Nzq7LS>wT~(Ap1UedC.y*rh{m|jTNsBDJ)`m$I65AGW6*y|8[0i!~');

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
