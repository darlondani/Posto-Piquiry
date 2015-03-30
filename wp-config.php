<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'postopiquiry');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$~8Jn]YkhFJpx]9^iE|@~C1(vVW1kY#p5ZMc+{ro?+}YR?etK%]o-^^-!8V,+5NF');
define('SECURE_AUTH_KEY',  '|WSuGZrjdH4_E,[|u %[#4`N0+DTTwL1^nY1E?a3t0lpE{/YjfHZH)g-t#|q$V5k');
define('LOGGED_IN_KEY',    'u{aU}@B+e|*gZuOIF]b-mHiRWK@ZgCQj<2`7@+%}3rW2BKjeA.p<bfsp8C31_Gqd');
define('NONCE_KEY',        '^Ai-z./Rx9IO?%(ai.xRUd>Kzj,%C,O]AI5^^K4j,v{N>.[f/NpLaI&s-P/,vJGH');
define('AUTH_SALT',        '<aZP>Xqj&WD:pK+d+AJHJ`hW6|QUgxLc^4XR!+O]bz:Sn{Vgj9CYl!XQ+@7BJ|x+');
define('SECURE_AUTH_SALT', '%05{/{b=w6P/it|2+t(:|w;u)jWKR,3FNs|yj:w6qGz:?BFN)NO^Kz;Tv|YwahpC');
define('LOGGED_IN_SALT',   '0|P.aS|:ye-~&j^me_Zso?kCekfs$jyWmv}ON4`vqJ#S_sYbI&>{^h_D9n5?8IyT');
define('NONCE_SALT',       'NCN|WjG%+F#?(>B,XkgRy(8MUM{c{(OxLl-}+#yr<ILtrk8gZm{.K3m&09U|QfS8');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
