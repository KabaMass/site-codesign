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
define( 'DB_NAME', 'codesign' );

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
define( 'AUTH_KEY',         '%N^{N9 2suPV.85EaV_,?x6V// ZK3!P4:3PhhDg2HuK<RP~)-LnN&Em@*LRtCf:' );
define( 'SECURE_AUTH_KEY',  '@e6]h{NZIYsV+{,o+J=P;]jue+~} Tz59LYB]CaJ*Y=nFE?V!S@3:sL!v5o.V>rA' );
define( 'LOGGED_IN_KEY',    'Tss nB]z]IERxM,H;&-mLL2xGrXhlA6.]&%vh]#/mOW+hu ba1CacDeum!`:fUcf' );
define( 'NONCE_KEY',        ':vdh;ywiGHMI4uP9cHL7wtj4P9vIs(`futwRX2eP2 /PkF}6V:ZnW*unpGE0?NTs' );
define( 'AUTH_SALT',        'ki|GuI?@)*0hum<KM{vEgTX>{+9gr/aNw7i9d7]t^Cv(<|n?5/czGTT=G)eKCdk|' );
define( 'SECURE_AUTH_SALT', '*lB|8NM;/6E04DUq9.nXT`y;{%-h%`N)vz]G8=Ul6[TIqX!4YRS3F~[E+]n2@rb`' );
define( 'LOGGED_IN_SALT',   '$8>%{HBe4G!2Cd.;=,yu`NpD*K_mV8v&]EK]LbLq>ps)TofNhz}kG%e@l-P}7^bM' );
define( 'NONCE_SALT',       '].=).;Gpisevb3?FZ:l^NR^GGVs*Fwt4)pOO$uH8OL*3~]Ixv}`?_|o=lx1P$qOB' );
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
