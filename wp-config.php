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
define('DB_NAME', 'db_ipa');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'root');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Y.F77E1%:9wQ!8[Zoi}e_n9d,ad.IU59DR{vS@Z1Q2zxcC})3x&_!Mg7<gwyRXG0');
define('SECURE_AUTH_KEY',  '-h4}BRH,(R}yPt#e8eaa])}B;6*T5Pux[MLvgdrhA0^~}p|`rgVE`kSro:Wa/:){');
define('LOGGED_IN_KEY',    '`4?y:TDpqtsl&,V=HCs={p[xVzZjT>khV-Y>1jn/N<L7+;zBzeG9Q2RDu90737l%');
define('NONCE_KEY',        'mg5rfhNHSI Xz@]o,DlZvBk=,9O[elEu[Vr9v6c>=,>u)8P/)e|Hjw&;+gRZ7F5K');
define('AUTH_SALT',        'dw-m$]/dZk/T ;S1VW/PfBd]-ta&o3aF:-]X4#-F-^Jzgqkb_wv`t!d}ch:&0~KF');
define('SECURE_AUTH_SALT', '>!,cxK/LrSNh-jdaF|R}?Y0AJCRT>5ksJ{OLYpn%+(M,BtX2iGwj#Cygk_xB#q6@');
define('LOGGED_IN_SALT',   'h-& TY@t&9>=HiR0!#;ydHgOl4mKNxoj0qy% Jnm?5y<m=xNtSw02sqfb15PIYAA');
define('NONCE_SALT',       'brr$|9ot|7+x&4W5PoKW&`;H6[Pe[-nf|yXL}Pu %r&V_3A]-mP5vH jua3b!.y0');

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
