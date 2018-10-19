<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'Bolsa_UFJF');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L#+28}iV)jf1ebf@GG])rhHW&70Ne[oN4Sh`Rl0J7iDoVliarUhzu;C~ud1ZV`-P');
define('SECURE_AUTH_KEY',  '-#RFk.Y5(S1@0l]m}ob/O;B$cF(^Ww(3 4}N}XucB`=|2)dY!ztnG)?CP2{(e/L]');
define('LOGGED_IN_KEY',    '/l$=JtSE!+99a>_F^NK@`G6>CaU?@c[Zh cZ&y@O#>,rULUQ}$%d/[!$e4yw)|!E');
define('NONCE_KEY',        'o[_U!6$[!84FW4uXJHJn({Vw=AGPu93zzqZr`nsqYQ{Hb:CD5[A6vv_Q{0SO6vhh');
define('AUTH_SALT',        '.*NRX#nvwC6 k=@erSFZ_nlTT%G#<BLNbR1K[l3L+Lp^D+0=VACpwej39)T-$SDl');
define('SECURE_AUTH_SALT', '!gD{rEs4T^5;Y/i;zB,C&0T)N8?(/rj?x)zZ3]v$G|bqTX31}aA=z:5SipcL|+f9');
define('LOGGED_IN_SALT',   '9;M4BfvuH@KBqQE{1[I@P_+;z)*C_RNRZbU9MEy67^ 2IQ!9:#P/Y}G3jG-`Iv@*');
define('NONCE_SALT',       'k#@Ud<Pz5OS`}]+L~[KFw@#_xstF8+?g0>d[]?J3KGj`cAmHchpa.Nsk/_1wt[V0');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
