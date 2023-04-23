<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Magic123' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mxh)gQ 5nm2J11A^>sAIysB&)vfw|= @20X;Z2 s`[BICL=Oe$W7[fJ^r+u&civQ' );
define( 'SECURE_AUTH_KEY',  'HeBM{!!di4P&R+tL/;b47K?LMS^6RNC=q.IiVctx[|?UqBU{E+)VRKs(*X=:TqpC' );
define( 'LOGGED_IN_KEY',    '(}fYa6(~:2sS3J^*N2},x;YgoYy}~O7SQ EpZ>m,tdY+}xr&y|(Gb`H?bNEy/&^ ' );
define( 'NONCE_KEY',        'ohLdJ|6FI8jLImpo=Nwsm/_bO|$,+siwnz&,9-KcLvO5X>KN ++tovm32}Mc<~0V' );
define( 'AUTH_SALT',        'E;,~RV3hoS= A%;.7t[0/GLO.ku LL=tUO(wvt3G96]K[;4;23,;uruXB YMwLXL' );
define( 'SECURE_AUTH_SALT', 'nvU,}l^AX}W<tmSv6`eP^Pl70r]PtL`|ECC8a^wSIxS9lC9`{nmVe)?~ eq<5LJ7' );
define( 'LOGGED_IN_SALT',   '`-?()K{1FQUXQ/yoxu0x[OV7qkJ:{sHA0VwR< 4x/T3,>#f~v!i,r9NwEKx@p~{k' );
define( 'NONCE_SALT',       '#o`ocxI(?jze6tXaAC9p11&gN|c-]A@;B/]W%&:c[aADNPp*WM`UJxp&mBxriX])' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
