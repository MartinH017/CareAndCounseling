<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'careandcounselingdatabase');

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
define('AUTH_KEY',         'Ej;>OFDF&J*9Nm}>x*Kw#F?*L~ DDq:(DR6jgO<b:Gl#oPklJJS|Rg^p_oqmA]-E');
define('SECURE_AUTH_KEY',  '/D_3nG3$8r)-4;;n]|#0)~7A2F9nUnf!t>O.CVoQInz*X}O(;#gt)MQ(Yoi-2cAS');
define('LOGGED_IN_KEY',    ' r.OTmc{kPSSH3-3Bv1]r.R#C&,/@Tax[4CVG;})Qg!(MTlz]<uocCA07SH-0=>=');
define('NONCE_KEY',        'He-kM;/$J?)XI:6w#D*0{%%t3*>X|q+j&u<f7IHQ[JSr#TTqs&~i/-HWbcv0/#J1');
define('AUTH_SALT',        'av?kT*`_~e&? aI#M(VOxb`:K[pnwTenSx%Z48cS-g[r0z}_@^ _XOV2Fe)$K@pJ');
define('SECURE_AUTH_SALT', 'kaK4ho8.p$7[m{e6(m+-A01k^MQ7e,i4VmJ1pW~Er2<.=bDAZ75tbeJ|_bEMR7HT');
define('LOGGED_IN_SALT',   'n)3.}V=zc,f. |ck3hPX?0o?7X5dq9Ns|A_r8;G}[M/ISFE4#g!I>[I7LDmc+pAo');
define('NONCE_SALT',       '?o~SCV`#0*Db{r#(q+I]4vXI9,MjI.9!-%*X{~A6b]XH-RRF5t&L#}+llAst(2qo');

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
