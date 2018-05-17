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
define('DB_NAME', 'wordpress_bd');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
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
define('AUTH_KEY', 'Q%w@r*[Zx7(R3A$#8_.DQ>eoc6*@k+iH}g+&s@hJjN5>H/.??EPx+5KY>R2f;9P ');
define('SECURE_AUTH_KEY', '-->IO|.yEx_%*iC]EN_=t+Bzl@XA]T|GS<a_4$|e$%&iuB+q#; Kgy@~H@m0q)U_');
define('LOGGED_IN_KEY', 'T(]kI>=F|cRd^?A1]2Gl7:qp1`a41/;V.Jd t&,S9>}^eR~&!t+[ b+3GH@M.|N5');
define('NONCE_KEY', 'a/D#$+w58V!mOm>]1w0_l;F6X{nr;jtZ9>DeFn,PLVRL1tVmPm` }*|q7GRv!p)2');
define('AUTH_SALT', '<U<1,8g/InW!!~Yq)Pydr^*|BjVf}!V1qmz~l6~z2I;L,VFu`-psc&G]Y,B;dw%Q');
define('SECURE_AUTH_SALT', 'r>B]1ybKvKSWAJ`5am~*&y0d[.f&%lO{dT19Kiy>@8#Bgm#~[`]Id6n`KDf8d7K:');
define('LOGGED_IN_SALT', ':2O>T>}.pGO,KEd&1Yj|u8wm&T+LvjNSN{=oc=o(6xotB]?Hsp>JS/o1).+9vO:K');
define('NONCE_SALT', '=!hS=TSeQx)1!9tVKZklzWENm=A!nSJ)oC0]*;>_T9A?Z|=dQfPTL:VgbSOLkKYO');

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

