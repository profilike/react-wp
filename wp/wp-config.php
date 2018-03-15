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
define('DB_NAME', 'galaxy');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/* JWT */
define('JWT_AUTH_SECRET_KEY', 'your-top-secrect-key');
define('JWT_AUTH_CORS_ENABLE', true);

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0a0H}#YXQ?Eh?4SZb5VAv# {56N:<:8_l4s5bC>5PR(nlx.7Z0GE=<MG2O9O@nO}');
define('SECURE_AUTH_KEY',  'G#[heJK-.F<Y.TeSAh3Ah<E#x0@4zVOvO>G+$(j%OW+/{y6&bP0U]ssR N796aoU');
define('LOGGED_IN_KEY',    '3-t=rZk4N}D[C{5}-1%RQ}OL|k2E/NSg3199$lz:_q85%fmPHmi|thI7&0l;E+>^');
define('NONCE_KEY',        '=y~K_]yk^N!J{zhf+a&5nhOWQ,o*n-@Gsk4knt{-Jw[p<ewVjNSfh.4N5jo=|a2v');
define('AUTH_SALT',        '@llRmStlZA2F[H_<s>$`SVQy*|=$Hvz/temK1/zpn{]|f-&SsjM]ll(?rxA.>A%@');
define('SECURE_AUTH_SALT', 'rhFTLs-dao.})[!y-B6}5dL9RlbD%OC-.^$C$~6DqA:f&[1A;|ouK=M ;BM.Oz4j');
define('LOGGED_IN_SALT',   '1D7ok|tFrO{Wpca&TgRc0B3jU6A,mBv{`[rssTzP}8/csk>K312n?v%_#lDSNdr6');
define('NONCE_SALT',       '|PXEuJ,4K@iSr1*u(^&$8VAo;icC?,XZ}`Q=0{l&XfOY.=Ig`H^ADiO/.(<,0]S*');


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
