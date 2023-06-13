<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'PLANTY' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']h 3enXHhz5V$1acC?Bw:f Nn%3864LBeB^3{g`(s,R^r&Fr.OWR2aE|9MT4MScr' );
define( 'SECURE_AUTH_KEY',  '=[ @_OIG|Oy~L~WH%tu9sa746x^p3PKi*BCxvxU&tMx?k,.0g2am q8FI=yL>brA' );
define( 'LOGGED_IN_KEY',    'n*su|Jawu|TM>!Eoc]Wk$9Lb=6*}3?{bquZ2N.sSOb1Gn0E=E/Wb^a6X)Kf8J#U5' );
define( 'NONCE_KEY',        'W!L;Mfl^WJ*sc:`(pG%M@{`z(m$L8thkV7-(%Trmv[ULzow5],O=h)-!xiRlPM1#' );
define( 'AUTH_SALT',        '1MR6B&ia2<a{gSbIY,S[~7a).xi1T{,q}.Ok.{iB4K=Nwe`0[ Iq#PtK3:wNiFAy' );
define( 'SECURE_AUTH_SALT', 'Pf&}mg~Ln{8mfE(m{>`|WM56|}yrbrr4BEPJ4bSV.+?|<^7~KEd$>M0_2qpb=z?[' );
define( 'LOGGED_IN_SALT',   'l{w^OfTkIC6WK$yS&tpnY>WaPo T:@aXm!6e4#F+t.bOT/0_7{u8ilCIwDGN{%cO' );
define( 'NONCE_SALT',       '%@X0hM3BYZ}u$/ye3~P&&kYuv^C6ZmkcGX-2YK)&NUfB.xQu,f~Y;ll;Mv[V{(k/' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
