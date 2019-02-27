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
define('DB_NAME', 'anvinfos_anvdemo');

/** MySQL database username */
define('DB_USER', 'anvinfos_harshal');

/** MySQL database password */
define('DB_PASSWORD', 'harshal@123');

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
define('AUTH_KEY',         'g)P8y0X%o[ D:VHc|$Zx`pvgb~$~$9lI:~b#[wxe8unwZ685VL!a2Bk5jWFF/L,i');
define('SECURE_AUTH_KEY',  'c;{dJxKZk]+[yZ1);X#i(awyi-E1Lw[^]caA._GBCA6/T2<vMbq X@63r?U:&p<0');
define('LOGGED_IN_KEY',    'Cz,N7jBj;b2u+y0JuLAGC(lFLqloCyBPGJ[MU?`;_S=vIG+YnfMzd*ubGde.<M(#');
define('NONCE_KEY',        '(fhYAfmyyQay3^&>`[Y*XOO2`@@x*K)9$&bfiV%l#Z.J!}QN.r}C9S:SSy&dTkWK');
define('AUTH_SALT',        'Zl]bJ$`M<GZ?Qao<V-7S_J1OxcGSMeQX:am9{nS/:=2+/#o(u>79eS<Cg!3vUbo ');
define('SECURE_AUTH_SALT', 'WROfiCOgpoZ1C]=g`G1ZDI)wXp&;Y}3 t*y%8H>zd`TcoQl/@g*yjz:cX5@.yq>X');
define('LOGGED_IN_SALT',   '?@j6bq~#-[->Q*U5cN-9p`OC]/X%e=}/mY+|g$0.%#Ni}fkR;%.s74p{QQnN#=$v');
define('NONCE_SALT',       '***:{hRq5c) X@[wWiP{eDy:_{ADrJyEX?_%M|rvf)?2(}pV]nTpv@a[OK@C$0p=');

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
