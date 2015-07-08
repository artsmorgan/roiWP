<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'roi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rootatlocalhost');

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
define('AUTH_KEY',         '-?SUp>vFo,9NBi<}2{{oxhuw3+LL]y1oPvuRUZF|H}h>-w$5?u7os{|uP-v@R#a5');
define('SECURE_AUTH_KEY',  'bE,8;=K|R;4QMjj{.,%;@,R=xl$gWQIpN=)LW&mY/%@k{/-L.I$O ^ol-pV_nd(i');
define('LOGGED_IN_KEY',    'wqLEQ-{O2$MHKgdW~o0q.paF%oNKTp;@xZ6U$?6RgNHe.964+]% .yov?UDqbG/@');
define('NONCE_KEY',        'Ja+*sG[=%z6rSpZ*VU(0vhWxi?fIdxn@[<R[L0$[C* 6[Wq};%>gB)(eT2odH7b2');
define('AUTH_SALT',        'IRLL}n](OTMKIH0dXCMo]{2wl![v4>YR:rng/-v,-k;Zh}a4pA+#-K5iduq;hDCL');
define('SECURE_AUTH_SALT', 'PRv)5;CKDJ]+O{]t&A9a^dxp^<xE~}tsS42bvdB3P,0|tdvS]x$Q0+`?$Q[*S=6$');
define('LOGGED_IN_SALT',   '>#E,?z^PpzP7[X_FSas%3gU33*CxC]SpaIJLl#>eF*A;!Tu3C(YG.*lQ8:X:q(/,');
define('NONCE_SALT',       'i x9g[]cu/;k $l tX-+Q#$/$WA0[X*Q3`h,d21+&{4`z<;lc%+(8U,-K0*49FgX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
