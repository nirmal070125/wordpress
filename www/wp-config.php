<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'donfmdip');

/** MySQL hostname */
define('DB_HOST', '54.251.225.128');

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
define('AUTH_KEY',         'Vrqn&0,.=+L|<ym @M>%[GjGuiXFvj3`]xog+H|^^-e&-CaV B*~i_EZ]$Lt=SHJ');
define('SECURE_AUTH_KEY',  'YDKLlcT46*@/}b,itbn~Tg^BA|)p+W;N-Ul_Go:U!Wcaepiw*8q:`<_rA{wbexTS');
define('LOGGED_IN_KEY',    'i Cs)LuEgH>Gl9mTte>|k@8-sa{66h`/`wV6+feilW=d>[6g}FECJ3O )1ZO|V#i');
define('NONCE_KEY',        'q):vt=8_bPgqi:=$#LcILQ`u7!AOaWn{3+[G@qV~6p`Fj9d4%|gm#6d#7hXEUjD]');
define('AUTH_SALT',        '+{iE{+q-aUt58P)8-/@p2|569+Jx0I.X+R8k1Dwon4$p4qZ4NUys`,C,(=%9<kOJ');
define('SECURE_AUTH_SALT', 'iv`b,?=4#4*6+}Fk_e,VyD_H#X?-?FN[feR?e~%?MRm1u=]+=w-Zyz~]R9|&3{4K');
define('LOGGED_IN_SALT',   'Yg8c:sMbryKT^xmL7+bLDZ=>E&Tmu+nw`srAePL-.McW +wzA]Gu&~aG+xw(8g%h');
define('NONCE_SALT',       'kIbGjz3;cC@oXxm|S&gt,)_j|*)CL_OTOnP(HaFUP0yh4IH=:Aozmn<WRX|q,Fif');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

