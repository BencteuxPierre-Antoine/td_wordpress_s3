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
define( 'DB_NAME', 'td-wordpress-s3' );

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
define( 'AUTH_KEY',         '^Cn`Pg|.{oxU5{} {O&wNNEDMQ+W{ O7|%+Aj)J+|4?[?u#ERInadUF=C[F-L]h/' );
define( 'SECURE_AUTH_KEY',  'Uy0qoHwjc,}2Pv]4M(TKf}**oY$ca)wKF^0at9g]Eko(B#zP&2VkBk3`7_rW%_{k' );
define( 'LOGGED_IN_KEY',    'ybUnkT->yYyR-1_&]5}.Zosv>@s.ymtmvWzDSjrC>Df>`RkWVctKtI2l l}[9+]#' );
define( 'NONCE_KEY',        '2MA!UjOumlK,8`B>*F?@30q*5.+p;]ONZhBlqbg/5f|:DD+1Y@Zv>Lli!h6F38ai' );
define( 'AUTH_SALT',        '4qPDE!Alx<2!H9%Y)uHAD$Z=jg#94^Z>?$<&2bf^04}U#J}w@_57ueel#xipdd8w' );
define( 'SECURE_AUTH_SALT', 'Upd6kMJ)F4409YrH&~$84e>q~d0c=On()F[Os0i^ni9V_<JN+G+ORZuLFI`O~zG?' );
define( 'LOGGED_IN_SALT',   'eDD)ZoR{$A,y>V#EK$_$HExG)]Z.&Ur@:g;(noYP7p->zJ/(_;1`!xGTiJ%H@iPq' );
define( 'NONCE_SALT',       'sH,0#EYVwJGD_r]`tPrGdql;>J{-l+gwvEsOWS[,^14-]`]U7Yp=[exb:pbSC[%J' );
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
