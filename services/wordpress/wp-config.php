<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
 define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'admin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'admin' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');


/**#@+
* Clés uniques d’authentification et salage.
*
* Remplacez les valeurs par défaut par des phrases uniques !
* Vous pouvez générer des phrases aléatoires en utilisant
* {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
* Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
* Cela forcera également tous les utilisateurs à se reconnecter.
*
* @since 2.6.0
 */
define('AUTH_KEY',         'c-m:s 4zc&M!w $ph<|U qX^Sg`=H+&zcdS,UMsTJ9s>`tR,#WFv|C7-v7mM!(1q');
define('SECURE_AUTH_KEY',  '-R{_:w~s/DUx&%6Ec51G+K.K$lU<B]Dr&/j7mqJ}k1zqD6PCeeMQ]$o$]-qXy^F!');
define('LOGGED_IN_KEY',    'QS%b2(bA7Yz[=d`7-x|}45>xYg^@7.-P-|xV3SBpQ:!Rn1[6+dctjT]++^(#y+kX');
define('NONCE_KEY',        'nW=(SbtWe!T5jF|-XuqQI,a1y~e*WVEqj+277;mn]8{xMCe[$b/J$1&]R$z8uh#0');
define('AUTH_SALT',        'tN6(EtmZW{}K%}n1Xs|gug|i}#)p-.$~DE):tve^-Ee!rwBz.njkrR(J_A(1X~a{');
define('SECURE_AUTH_SALT', 'Uhia@y=1dYyc%~s=[o+4d[R|[=:<-&2Q>7,>&w%mJ+0EC8/[p-@g[tqYe0Eq%d/|');
define('LOGGED_IN_SALT',   'l37gV3+-qeAi*aqW;ys9]=Dtlm{51n$+z}Bscnz:$5F5IQyO$mUBJ)k5%GtEb wl');
define('NONCE_SALT',       ')}+/pgG(%nq2.[LjIZ;NDNyF]Se}slYDxb:?.r,Z4J3_IzBGb.=mZ?(>^7`P/Sx.');
/**#@-*/
/**
* Préfixe de base de données pour les tables de WordPress.
*
* Vous pouvez installer plusieurs WordPress sur une seule base de données
* si vous leur donnez chacune un préfixe unique.
* N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
*/
$table_prefix = 'wp_';

/**
* Pour les développeurs : le mode déboguage de WordPress.
*
* En passant la valeur suivante à "true", vous activez l’affichage des
* notifications d’erreurs pendant vos essais.
* Il est fortemment recommandé que les développeurs d’extensions et
* de thèmes se servent de WP_DEBUG dans leur environnement de
* développement.
*
* Pour plus d’information sur les autres constantes qui peuvent être utilisées
* pour le déboguage, rendez-vous sur le Codex.
*
* @link https://codex.wordpress.org/Debugging_in_WordPress
*/
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
