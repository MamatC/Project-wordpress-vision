<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'vision' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xxvsG$L3j=~XoD_9?zj$xiz7#Mq$VsVdt+ q(&3D`/W!fE*^Q%OOto9h14~ZKBAc' );
define( 'SECURE_AUTH_KEY',  '3`V5y}BNTX>OHdz#O>/V<X^VU0~?IK)W<ZaCZYEf=NK*5;,aVy`o((kX%@I@~]_?' );
define( 'LOGGED_IN_KEY',    'yR(/4^HEE-:i4[pL,_T0g}MUCd*/lbtQI-/f!!:u,,&~&x+HQxxY!tDdNOqM~,5u' );
define( 'NONCE_KEY',        'pf(SB.^?ZNo]+g67AIqt*9uYU>pvLOz!(e0}j7*>kg (lW]Q^>1j6gOiTQaBz^%(' );
define( 'AUTH_SALT',        '<q~>_$)ev0gmsTNnq,<v)41NRP:}H0LoP&JW7{O./e[Sg#vg]~2;{8,s(v{E[#m|' );
define( 'SECURE_AUTH_SALT', '{HRvByPFfAi-D_3VpYA~QkgM;O6j}i`^&f Xflhf/rNdq5$ C0U!wM38h; .,hpj' );
define( 'LOGGED_IN_SALT',   'e%uwxG_2{4u?/]U#SnlA#<zFA3.]qh>{Lw.7=%`&brc%zL/f<i^NZk!^{jy#oFY6' );
define( 'NONCE_SALT',       'Sr|IE_5[WKT(iE/I:$&o0<6Ecal!W*0N&}Ch~!^7(bkHQ^fr&Sly0IBnppO4&k,n' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
