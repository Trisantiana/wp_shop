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
define('DB_NAME', 'shop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'p&q^.2Fwus`0yj*}bG_srcXP>yQeO[%@cq?hDS`;(oX1ENDZ7`#vA*JtO:Z|N2?Y');
define('SECURE_AUTH_KEY',  'EQZ`r8y_Xq:(k*;o;^0hrGVm2KX)I?W.=,}KbM-!i`i`wB o`lknB{A?k`^/I+x_');
define('LOGGED_IN_KEY',    'K6qn,j[>5u9suh-Q}&a:1MnES.((*;2ghGBNX05^IeHN`:,4B,?:(IKCnl5u<I^k');
define('NONCE_KEY',        '(,.Nr,9Ime&zLaU_G5->=ea:wPddFW^4HjX~C.`Z0A[FAmF+RSYhFf$omGlp1Jk~');
define('AUTH_SALT',        'Pxa;%6Q+.E982FEYI/I5 $03}$8W,}!B4PwF4Z+UT.-=G=1a6>,56(7zqC}  ,9M');
define('SECURE_AUTH_SALT', 'K2WJTm,G^u5]2VDMei{3o,$I?m5KR~d1xh/=#67zVs1_>Wt9u:(L@wLsxx!I}[Og');
define('LOGGED_IN_SALT',   'Qf;c?*D1suF&gDkV*Y[CSgX4RaE /S@7CMvM+]j-:O9PWTIYg$+b/ZC]r6sAF8Gm');
define('NONCE_SALT',       'e8t&w8_w&fwm(|}>2s`Ns71GlgZP!PS1Kx,h|D~;N{oMb8wJ^3|IV?>%/MR)K37N');

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
