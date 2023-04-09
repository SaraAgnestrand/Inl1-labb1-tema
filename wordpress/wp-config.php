<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'inl1-tema-wordpress' );

/** Databasens användarnamn */
define( 'DB_USER', 'Sara' );

/** Databasens lösenord */
define( 'DB_PASSWORD', '112233' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ngsy06K0Y|uJ^K*`[L.<i|ew*s;REh;B[%Caa*?pr^:QCUlQ]iAiEJH3hl zRS]l' );
define( 'SECURE_AUTH_KEY',  '(}+5|`>`~>&.x7^*ozP7DDTmWNw??LwGC(@%3u<>1VD>&:9,~6)K[B|&.~bBO|s3' );
define( 'LOGGED_IN_KEY',    'e|%;b<oO.>5,bflu<Dqh<zF-Pf12!`4OE.r|d8qi0QZ-&{Cs}_o;MEmfq2v~jt~V' );
define( 'NONCE_KEY',        'c)wx#8wr[QvJH!BdT`XN)@!E#NzVV<ypI@%#.FG{<b@f?g>@xoAaThF%0n6=qS$K' );
define( 'AUTH_SALT',        'XF#Q#t!/tTXwtb#+Hd;K)]FKDnrZ`9$tdaqUT4}%<nXF2drWi9wv&UZaxZA0(|5&' );
define( 'SECURE_AUTH_SALT', 'AQk}D$<-x2jC&;C}_-Blzx<ky^H|w~2J!XEwB11?t#<L@-D:4P)(xnbfK)!!7Lmf' );
define( 'LOGGED_IN_SALT',   ']p8FbDdct3y7V8`Z=yI<Lng#;N8({E`Y|lLUh6#jH[vB&}BH}N__{xpR(p{8fY7z' );
define( 'NONCE_SALT',       '=-~N[f@T;H=Y?-{trOhi4>kM)C%kX)rcFQY#)j{%Tf!H;5%4C+T`^rE.iCBE+*),' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');