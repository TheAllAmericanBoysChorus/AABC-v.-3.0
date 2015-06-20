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
define('DB_NAME', 'wp_aabc3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_HOME','http://localhost/AABC-v.-3.0/wordpress');
define('WP_SITEURL','http://localhost/AABC-v.-3.0/wordpress');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%KYG6EXK%6cV|NjZDySsZIc^<kU:S EfXtV%i+^.NBD:}}fGL^.T!8 xWx)[cTP:');
define('SECURE_AUTH_KEY',  '}^E|9)-<#BZU<Y>!GZmiY?AOD6{+hE+yaj0lBvk[qlEep^Gm_*+f^2kp*:N5Z<LN');
define('LOGGED_IN_KEY',    'hA7rS-uH6;;_HuI1x1Z!+FCy)<JA jKIaVoaC=e4192/+4+3xWF5Bvg0+~e#Oyo8');
define('NONCE_KEY',        'o+}L+VTLT7W,t/p0DnOJ{]a.&TJ/DkZ-6,RSu7WD(N;snCb,m7tVy<0o$U80USJ?');
define('AUTH_SALT',        ':5}2l `B?CybXFJ-]l[-v:?H|B=+GO&X^2WN>D)|&@(6&cb}Z}-Y!|K5 )L?..y#');
define('SECURE_AUTH_SALT', '/hLupB{$K/bxX~r/ugUItw)Mn$=xzX}x!Dj:a+MO?+~X<FA2.J[yCJ#.a0&g*hE]');
define('LOGGED_IN_SALT',   'Md$kv6+,(`eAO!9F9$BNJkRZ5[_yhyuduB|*6a8!uB ]5d&z4.#8t(:GPg`-#5g,');
define('NONCE_SALT',       '?_2 tWfMxkZ-$]V-fSRX>-,ltaLl/R.u/QP1X:BgtL}%LXygvqeY8e*sY)ZgIU}~');

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
