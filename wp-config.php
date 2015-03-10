<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'laura');

/** MySQL database username */
define('DB_USER', 'laura_user');

/** MySQL database password */
define('DB_PASSWORD', 'u4bb68UbRWpnCKwT');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'AYG-Tu,b&-j7EzQe:lQ]~ycg`>6j<+*|F^@k+hkYEZ|i_YE]k4h@>5-Y+d,%D]qY');
define('SECURE_AUTH_KEY',  'WS3^kf_*M*}^U`V;grJEs, $nC*J?1:YW=>+X7e(uL6_@v=! !v{b;_P.mc~Ws}7');
define('LOGGED_IN_KEY',    'FH9TOW7bOJ}+V?&TD_:l}<og(Eb1K#K+lf8AFfKX$sdXn5q|iYZ-n|yU`RU.02q~');
define('NONCE_KEY',        'FhQ9SVI{1d5;ox}FS:GBDU43DUmoQ;^S/hxn1dL7c#Z|mS)c5(S2eovm}iy_.tzD');
define('AUTH_SALT',        '0#f)d?v?7+aT|s^4#2Q]!=Y&}BCQ1oBO-zJbY+RJ1;)4M[-m.S|./<.?Saa| O%`');
define('SECURE_AUTH_SALT', ' -Qm/RE]N*a$,^]89qjyiL_Tf+O%!,|yg>feC.V;w[C}dt|L ig{[msO/QxCJ)OT');
define('LOGGED_IN_SALT',   '=PUj-x5qH*rbUu+w9i8ttK;1f_V0>x(:W!c:U-rBCAW/!h1ot(tU7l>Vt+z:f{`8');
define('NONCE_SALT',       '{AO-F5[d{n1L4Cj4gT8E),T$6A#<.wXVhU^H1CJ/i6bpw~kB%<F@@V&N.|{+/bKx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'laura_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
