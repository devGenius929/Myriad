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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webfound_wp' );

/** MySQL database username */
define( 'DB_USER', 'webfound_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bNtZ2bY5jUQm' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_MEMORY_LIMIT', '512M'); 
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'WN.WKa2BG(lAklRc|1ek7.WaASuZi5$hbY[pNS(nR+Yw>12,OrS0%l0zyhKdri0D' );
define( 'SECURE_AUTH_KEY',   'i1}Lf6vrQ^IQ;~mjb;#%Hb@3-eA<6#?tT:{J78X|dl6Vp2Cb.@*4$<TF6sC<MlPi' );
define( 'LOGGED_IN_KEY',     'ldN)kZrj):ZB}mL;y= ;my9UklJNpaZXa[Rd-S:w$%hSOZqQwx#Dd@wA3MsK>T!a' );
define( 'NONCE_KEY',         'Fo-P(rxXi `Y?=N-@7T.i(,p?%tz2F:<F4qQdb8n^Y !SD5O#hZyxi&C=:3bq}i8' );
define( 'AUTH_SALT',         'y7,j6-m_a567NVvE3?tv=}g6n,L11v0;-4Y!]8X*%2xJ3p0St)~*Op3+3;EQ7M{f' );
define( 'SECURE_AUTH_SALT',  'j%{@ehMal<*0{Y*EZ`v{F6r[B7)xGvtcCH[_|gDB ?[5f M)zAxDg<>l}S*)Ik>L' );
define( 'LOGGED_IN_SALT',    '-d,$veqI(V%PwSXn~*8hd9k,@lo$Dr oj<E!8(!FW%XaMIdSrHh4,5l9TmUB+8^|' );
define( 'NONCE_SALT',        'IPH,Y[GpL*P!Q+SV!MtLi?E@ztr|nEc:wX;|z/uYq#ah7*d4d]gE%tg,)XWK}Csw' );
define( 'WP_CACHE_KEY_SALT', '&G6f}/ca#4{,7[m@!}d%D,vqXs-]gizoEdLf{qLA&9h{/hC40(TgT&YF87C`[qJ*' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
