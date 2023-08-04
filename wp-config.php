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
@ini_set( 'upload_max_filesize' , '512M' );
@ini_set( 'post_max_size', '512M');
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'chic-dressing' );
/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'admin_chic-dressing' );
/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'admin1234' );
/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
define( 'EIO_WEBP_SHARP_YUV', true );
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
define( 'AUTH_KEY',         '-t|OzQQn|2ZwCeSy8s$ata`0wj3*<q3u{,k:@Xp;nX@)u9KVS`Fh>}y}xL<ejx(^' );
define( 'SECURE_AUTH_KEY',  'B{[ehj6)#opl<1~F0Kh4VoY}r&?rG3;t~6[H8Q[8YX($T}08xI]x^lQiaws6+tKP' );
define( 'LOGGED_IN_KEY',    'Lu/;Sh(wKIk<D5h6I!LR;bG~n0O=sLwVj6nZwG,5I|[L!${k/Dx>_DQ~h;*VOTsl' );
define( 'NONCE_KEY',        '0.}}?O.|h[X4?V <+T%DUO75XB)&nI$W|}u{T_1vCL#=K/aC,oy3>5r]cYbd5im,' );
define( 'AUTH_SALT',        ']ByyU1sz )YwO+}|X 4d}+Vd}^:uJe^9JR//E?/>3?K:0j9ZxPcgx&Iv6oNMxDe!' );
define( 'SECURE_AUTH_SALT', 'WN$j~vS)kpX3n_bK@jr3])H>$</Zf{MJ^/9iK62|QW`B(zvp[O&[ZHvg6?TSZnF}' );
define( 'LOGGED_IN_SALT',   '->&raS }m2r)H-^Lk5t?yKdbqv!0=0IvSCf};`Lwb^O:_bY`;9bFh~[%;wJe&n/O' );
define( 'NONCE_SALT',       'TI}[k 4M9BE.K0i5!-oeZ$=0cLZy4*2M(@[+PnR%z(Q6`N6mC!Z%z,tk%>kCiw5k' );
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