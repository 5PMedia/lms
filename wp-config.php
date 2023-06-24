<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PfN4f!$3oz<8Ci2xD.x@x~b3:(}C{/?R!H$RwH]si_,u|OEwg@}0G~=4*g6<-:^N' );
define( 'SECURE_AUTH_KEY',  'a:|8<]EoGbjWO}X[YK.y+D=qQ}wZh;+=Reph*$l9H9p>{oh:eS)9N~UYJr`. &Gu' );
define( 'LOGGED_IN_KEY',    '^PbCf<]H/o]hOqJz$[GdZpcGi5x:zfQC$RyRu*ZDxo:Q7,;lo0S*:Y{6oP}t(oa9' );
define( 'NONCE_KEY',        '_|ta<=<9dhz[Es&J:CQq_G&5HB^>8xG&Kl(w@6?fuP+A`CWS|X=)_[(1p.I$fj*I' );
define( 'AUTH_SALT',        'l;9>WGB!3t9jHDW7+-u3</0zz5M+(@ ~+jo,cwLDMi{3U~~`8Kbqi1![veM?66Sr' );
define( 'SECURE_AUTH_SALT', 'j;)DXXOWFVO7@R%`*+pKP8d4WyeV-M$NUtbdp3vUAS`2`v$5k*d*a}mPm#+c*Wjg' );
define( 'LOGGED_IN_SALT',   'E BKFF@[1#kPD5?XC=G$?x<,&<hR8TvzYi:c7rG%,^wx)><iU?Q~uu1yY5fICT,@' );
define( 'NONCE_SALT',       'fZ;TNvA&H3nY.1GbJgW a<i[*Aw?MzcHZj[PK$PslV;F]Tz!{F(D/q;tDV*0cp~?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
