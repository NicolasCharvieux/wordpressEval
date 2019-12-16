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
define( 'DB_NAME', 'wordpress3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         'pg{7X;*i<1a{@2BO_r;igNOIc;shtj7~L;@$|oz2@~+RkR1IbWd^Gk(<m+Fp1`4/' );
define( 'SECURE_AUTH_KEY',  'Z1Stycg}s=O<-8S!Q96ahQ-W!/4H4t@W~Xc%3A)`36Av*23}UuLI])##I9?oBOv`' );
define( 'LOGGED_IN_KEY',    '-{=Xs|Z .EtFn]yfU@fFa|[0@:?R-FAlDl|hJN:aNHY?UD7set}:YJCS_]q#hvHj' );
define( 'NONCE_KEY',        'Raw2T!IzL[!i|mW#Lao%0^vYgRm5_3G}9LIPJ$(+!y@;>@ulClYom~u5%,<M(:=L' );
define( 'AUTH_SALT',        'JyA=:`+`_{)2fW8JQ2q@yaqLO[6;Cr/HX1.z3]PJF:A,44@NV:>)z%U!srhM@]Pi' );
define( 'SECURE_AUTH_SALT', '|HMMr4Z~&b~NTbo0sJkxvEbVy@B4bAd[d+y8A#6[p#N5]%!4l1D:U9q;(6j6Ji~7' );
define( 'LOGGED_IN_SALT',   '!`jYS*c7?8ph:VfQE#mQ~`K@&n8nqxoEI^G:>(R0zzNoW2|.A#quGW[(8FN9KQ^K' );
define( 'NONCE_SALT',       '?2aQU<YYZVf{~:Rc:o%nZ$-6__KSRl?4RYnh^;c@J.2:WZyZ(?`fEl.7B-(3NZ[%' );
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
