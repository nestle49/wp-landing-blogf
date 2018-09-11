<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'DB');

/** Имя пользователя MySQL */
define('DB_USER', 'AGivoino');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '2rwpfXDp');

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
define('AUTH_KEY',         '4p-W0X+m|c6Hp m3=>t0rgOAQJ=Vb]d=hq9m%}0WR]q.<uSKl`?T1 `XI;]D_1da');
define('SECURE_AUTH_KEY',  '#7E=zvYQAv=9M$nMhpu|(9<D,oBmt<K2{e`:D6sAIW][<NO;MGbClo9^vdD8,tx@');
define('LOGGED_IN_KEY',    'H~cHi6U-:c(lhQjgBVqoPfp(q:<Rgi&.I;o16HmOM?eQj^(2&Eb8DSa<6_[Y3zLD');
define('NONCE_KEY',        'P] 6}!s!NsW0PCJ}niLlvVu5!8O]_gpnLezmw* uR5)w9KZ>2z2[OZr(uh;LGz R');
define('AUTH_SALT',        '+LRN ;]|FI@/V&wayVWoFm,m4M,l$i[nFDQ6`Yi/.|iTkjE ]zaUK%!S7TqbSCB;');
define('SECURE_AUTH_SALT', 'A<1[~XzFJ70XW2m.tC,VbxQ`PE2e;|c#nmUx_p^I=*p<tqE+O 7{eJXn!0rUv3EQ');
define('LOGGED_IN_SALT',   'T[l84&DUqSqnBvDv@/,A7l}p8o}O/U>o_GQ]z0/BOyD|>PcfCK`q[dlw;.g!Xy<M');
define('NONCE_SALT',       '=:lP~Tq^|Q<#2+qo<Kt!iZ#$fP;OhU5uH]ze7GG(#dmdZT[}l-jSMn8kaP~!RKl*');

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
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
