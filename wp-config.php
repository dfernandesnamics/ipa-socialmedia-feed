<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define( 'DB_NAME', 'dp_ipa_feed' );

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define( 'DB_USER', 'wp-ipa-admin' );

/** Ersetze password_here mit deinem MySQL-Passwort */
define( 'DB_PASSWORD', 'ipa2020df' );

/** Ersetze localhost mit der MySQL-Serveradresse */
define( 'DB_HOST', 'localhost' );

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define( 'DB_CHARSET', 'utf8mb4' );

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define( 'AUTH_KEY',         '~E-j6[|6P3DNB`|7,6*ZfRA}YS2IHxY5.PQQOfW7R8G!1pSRcURVgV`?%bBd~.zc' );
define( 'SECURE_AUTH_KEY',  'rT!CHs>|Qz7DqyIQ0%iKbR[#$Wjz>ISW0 tEVk*AE8hzl7cuIV^kQLZ4;RiYeMC^' );
define( 'LOGGED_IN_KEY',    '4ZT&3Mh_tZvE|G&BXRG-,&bx$ee)R}ZR|s(r9%*t1y)>ZJOrSxFMvIkP>#)Y?>Fj' );
define( 'NONCE_KEY',        ':W=R6sEXZs!oz<WXc8)qB,w|bT9alab~-aNe+Q6zn>#o_$S)}tMil^,oU{F=oX#c' );
define( 'AUTH_SALT',        '+(]~G5HHQT%uWwxthMb(rLr@=VvO][Nb|^vu 0TM[#`n,+v{1=E9t%1/#c%#I :P' );
define( 'SECURE_AUTH_SALT', 'hFM?NgDA+#[u@1,V R~?E+B-CnSR}LTavU[iN{)8!jVb`nJIR<QiSuvr.k |3&8+' );
define( 'LOGGED_IN_SALT',   'WFxgyG#2nCWsv+>TAz?*xaLwW1}|v.[iz7yqu%ZR~s_0-VYBK[)/roj`9GHxKx21' );
define( 'NONCE_SALT',       'sRT]WcI!aN,we23!+xm^,SvMmN{Kw>L=OI@(t$?$Z)s(&0>bUK}jjp?vGV!l$y=y' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix = 'wp_';

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
