<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woolaid' );

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

define('FS_METHOD', 'direct');
define('WP_HTTP_TIMEOUT', 60);
define('FORCE_SSL_ADMIN', true);

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
define( 'AUTH_KEY',         '=9 teYZ!LI_juBgKezjFVg%MUyeUL%.w+0c;w!e>jZ5NH+p/gf9=UzIMMlN_x=9!' );
define( 'SECURE_AUTH_KEY',  '~6R8PnM`437J[vwN9G)3eTuf~eQ9}[~w-G<LW,<ZeRg]s<5<OjHl-n>Ztiv{`o`)' );
define( 'LOGGED_IN_KEY',    'fL(o@Vu^frOw9e-WA.>;-rA1#fZ<P rOD2+r4@B%ru t,K2>!{^~6&*qhy@M/cA-' );
define( 'NONCE_KEY',        '(Z%zqOXfl0:]nD]|<ZpAd*zI]m1w;5IkGtt]#`Fzg5>(=TAon|/E`<L[b@ATxW r' );
define( 'AUTH_SALT',        '[3z(#P~>ghpg=d?/@1@<A}qta#/KAgO^Xx-~wZL68{NRQYXYS]@`TlPj4y#wquhe' );
define( 'SECURE_AUTH_SALT', 'N:!*[&& nA,kv/d~c9^_y?765&OVg rA{Ucb8_&I 26]<!-+O_f+1A}x#W5+.WA$' );
define( 'LOGGED_IN_SALT',   '8?,cGp*kG$j]d4lK=>YYHi>PoU58Y8:b2X]hF<]QV|.K|>s5 $|`ubs!Z([43[GO' );
define( 'NONCE_SALT',       '>$6tFk-|GnDTGrIi@3haNX&RQ8XPADALfgZWI;R`i=OjT{iNE=DbW?_|Z-p<(O}g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

