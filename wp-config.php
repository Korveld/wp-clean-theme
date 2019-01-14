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
define('DB_NAME', 'clean');

/** MySQL database username */
define('DB_USER', 'clean');

/** MySQL database password */
define('DB_PASSWORD', 'dBltnm13');

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
define('AUTH_KEY',         'q-rMF>,VMtE*Yg#[sQSJ<]7:*2 kUjwQ#:1K@>$z2-gZR|i O_Ji$H(uTCk,IHLd');
define('SECURE_AUTH_KEY',  'qHBM)H4RpSB?a}P,WNF20$IT ?Oj6XWcZSR#u_Gjd67B<pPtYJ}M/+.:RsG;~ _|');
define('LOGGED_IN_KEY',    'mo1yh,W-h 2$24<irjlq6T:}ZKm>W*|70.j`@G<ZN37x#S_NvqDSH=*k`wG!]}Q8');
define('NONCE_KEY',        './8}PIUO8SsWe&<4]@39yvsH4bueWq)93HlhizA.w%9A9j~nyM*|-k}:s@-#c{.y');
define('AUTH_SALT',        '?Y@w4&:a%x)25Hvys5:n0L:pK7}V:T#5y*.o8ywZ.RSF_#yiQ}W&c>we<>ts]J$@');
define('SECURE_AUTH_SALT', 'e~:$xgj|QtaI1{h4oO)h#6Fmcu*E(Z]SF>E1g4^wx<</kJUd:d#)1{PV&Dv%[/mr');
define('LOGGED_IN_SALT',   'C#nub-0s5d8(Q3N|hPen,jX<`df~f1HD_.dbe#Vx>#nzTB&7M{oBCxK!~kOV-PO8');
define('NONCE_SALT',       'a{xkt5v1fH$o_aji>HWx?xCkrHbuJBWwMzp|N?EvFAp7[m:SEbuQX7wLD`+S46iD');

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
