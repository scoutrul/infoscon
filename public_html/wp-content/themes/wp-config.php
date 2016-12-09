<?php
#define('WP_ALLOW_REPAIR', true);
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/i/infoscon/infoscon.ru/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
 //Added by WP-Cache Manager

define('DB_NAME', 'infoscon_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'infoscon_wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'q5DJpcx4l');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');



/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O|]U>,T<Cwa0eg|,-Zq;4~ ,R5|*X:&MfCE&t$%:4D`OgZU 9.U%RG$EO~s{y!ZP');
define('SECURE_AUTH_KEY',  ':po{ZD+ex85*)y%{_?Khb2cB|=:L32_ap3iH7IFuD8,MM++2+Rd<P7-Jg&^TneeB');
define('LOGGED_IN_KEY',    '#~8Cnuydt.Cj5dS:44tWSSedILBtYO7&ZV!R|3^)0+|r|ytE+_hi2W__7  yMSCS');
define('NONCE_KEY',        'Uw<np$SG,x~!9gx5%s*t6&|gfz`:gG&:{K$&v@PU,6kBzOyL[S3_tekoyfN)56^{');
define('AUTH_SALT',        ']bjWb!bi$q4;t~J-/@n.T8HArFlX$CCzqtk]E(feu-?wghB n^[:R)24|]U:.-F0');
define('SECURE_AUTH_SALT', '+<Ss5<DFqw{NWJp=$g,>F6k${EN|F7_(DgQA9X||l9W.xfy9*8g, X~+04S?s8TW');
define('LOGGED_IN_SALT',   'm7G@S&yi;RD|Nuo+Ye%7[:I[uBYz<OPS5Gz[j?y!s!a4KNnV3[kWN[FA+(39DecF');
define('NONCE_SALT',       '4a`OaQw-eGig*J=%(ZAQ{$YFmC:Y|/qxc}z$@-2^#%ZxpIal0Hfs*>0.{(1rTw<+');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
