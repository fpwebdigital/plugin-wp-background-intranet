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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress_curso');

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
define('AUTH_KEY',         'J9N<TqDP-R0S}$=*pzTspKjcy!h_`a1ZXe5F+@/HE1S;pfR=ea8$Ok&~)3]oNX|=');
define('SECURE_AUTH_KEY',  'YCFg$E_Ew3t;36%hE2]ZKdaI`2heH]rpSDyRzlJV=>ngG1bM0)B2+uA<ErI;hbn+');
define('LOGGED_IN_KEY',    '$(g}ViAIvJ<*%Vtq?iOI 0Up9=u)CResjI7@zwHOW,+U1!qhC7pR(&GgX<!5J9GP');
define('NONCE_KEY',        '*:mN#4;?no?Y=7YBZ<t(gDPkxb)l`&~Q3~m{*5a#>a8/P8uT)fm4LuMINs}-*~fV');
define('AUTH_SALT',        '.Gp%(}B-@YNSAS9GGXB-!T!dn>R+TH1)B6&hvYS1ax8!4+_rLD3ObBuKZzD>R>}|');
define('SECURE_AUTH_SALT', '!A[}d[OnJ@yADI%`[tX:Dnt+#hOO>!TL,pgu7>@ZGreIxx-YKmGVne}ddO$@[@3T');
define('LOGGED_IN_SALT',   'S,5LTp2(6>@t7n1pT59Iwm)JPr-:(-Osiu6.V9|X6e~tyy<amlM}CE9CYX!}pA=Q');
define('NONCE_SALT',       'YE|jGTyY1?Q$Gi?#kmQNUxL<A|k<8I&fo#F^*Wnhm)e^`5OqzC9l7!^AHkUgSD,Z');

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
