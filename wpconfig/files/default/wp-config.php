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
define('WP_REDIS_HOST', 'nb-ds-wp-install.rra1gz.ng.0001.use1.cache.amazonaws.com');
 
define('WP_HOME','http://toptendentalplans.com/');
define('WP_SITEURL','http://toptendentalplans.com/');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'NBDSWPAurora');
/** MySQL database username */
define('DB_USER', 'NB_DS_WP');
/** MySQL database password */
define('DB_PASSWORD', 'Dental845');
/** MySQL hostname */
define('DB_HOST', 'nb-ds-wp-aurora.c7lhjhsmyzki.us-east-1.rds.amazonaws.com');
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
define('AUTH_KEY',         'sQ[mt9I|&rJHf%gpF-0u?.*I1|vDYXB~}jt.+$>]iW6@;rOTz5+gf||oQQrmvBu{');
define('SECURE_AUTH_KEY',  'S= lI251>^m+C}W+ C%UI|1{N#<VU4+6<V]Q^?e/^+RMeNWN%mW|,c|E<F1{:)M~');
define('LOGGED_IN_KEY',    'L|vM*#4Xw~<NBQ8*z|o^*.qI`Fr*;{Gj PZe!_YX&s8l_jfQ8vu;Se8^b ~(e+XN');
define('NONCE_KEY',        'e<YADf<!KD`wck$K({@5&1*sgG$N.w3dKW*OL2CjpO@0Wu3dz-x8r!!%PHKU8@|q');
define('AUTH_SALT',        '5rn)hSSAt=smhfqhxFNh8YOuA|S]r=o5.gq%l21-a^Jtv|-J|/#[5fi@5Drd0OAq');
define('SECURE_AUTH_SALT', 'Adz#[6@PI*SbH1]s@+pm=x-.s&|Z7K?6Z<fQpfEfOzH>-Y<~[OC)wHg^|xg?;ons');
define('LOGGED_IN_SALT',   'j+TG%|}hFjhAPWnIImXdm-S<_<xVvp]P.Fg6x@x,tkCscu@bIL@RL!@96<QDI--1');
define('NONCE_SALT',       '<aKgO#qV:w><)HLX*~^dGJ&4E)7G(3fP3l,|sk2R`#k^@V^wv*DEm@T,QOk!h-9Y');
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
