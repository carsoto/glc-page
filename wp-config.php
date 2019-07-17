<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('WP_MEMORY_LIMIT', '256M');
//define('DB_NAME', 'dbglc');
define('DB_NAME', 'dbglc');


/** Tu nombre de usuario de MySQL */
//define('DB_USER', 'dbglc');
define('DB_USER', 'root');


/** Tu contraseña de MySQL */
//define('DB_PASSWORD', 'Galapagos1!');
define('DB_PASSWORD', '');


/** Host de MySQL (es muy probable que no necesites cambiarlo) */
//define('DB_HOST', 'dbglc.db.8113998.f96.hostedresource.net');
define('DB_HOST', 'localhost');


/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');


/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '.9j@0 pj|*?I3c-2!10@$I.I`bA2-7BD9b4NI.~_adP[Q(,Oc!(UTZYb@v~ M)hJ');

define('SECURE_AUTH_KEY', '~KNDd,n3nV]7z}&GpMpX;Lyr]}M<5msB LD{sY97Xg[lP!NHUk{KY,Vj,V3v+go$');

define('LOGGED_IN_KEY', 'RH6D+;Mo&}Ns7?SAx6N;=aMG.vH,tUZxtWV!>qN;}B[.x~E9XHRovK?uIF:LpE_;');

define('NONCE_KEY', '@IabPl#P{Z=KZ|D^s7|DwxSM=[<J1WI:wY&OPkKk;B;10e^mJc|$xy{^bg`D+J*V');

define('AUTH_SALT', '!A7(corx7J-gAKg/vLOb3C#1l. XSm5IK`?#oo)rhhhKB[b`v!p^gtykp3f+M*cU');

define('SECURE_AUTH_SALT', ']Z] &1}u${L={G&VUD0yW;@ fo,A&G|T;Z3}Ag62qD)xL?K73zpt>M`E7xp(gh{Z');

define('LOGGED_IN_SALT', '|CADBE+Zj|*.-?/_}tPtm2GqT_oo] Pw!W-l)NU}675Z_-j?%6;[7B#VEMIV{EB)');

define('NONCE_SALT', 'PQR;(ZYV3H=! eM[sx;^#=9kGR@xUG! JgoZ_6-wD)&fgmMd:vyQxO4]mg}#U`Ex');


/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';



/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

