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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'shop5ka' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin5ka' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'o2g=g35<m/jeaX!M)-X=a=&N};`P6VBGczF-j$ 9p|V%`:ZVL9}?K}OPA s(]ubS' );
define( 'SECURE_AUTH_KEY',  'ef3Bb!-#=Nb|}Y|+AkniC.>.M&PwG{Rbh[nl$`5@`?JG:S+_kk;I1Sd+?B%FVC)4' );
define( 'LOGGED_IN_KEY',    'g_sfkACn04 TYZt,1]+a+z7-o*u7aqYT{iU4TS,15}[lxm[VC~ je+`GBKNnre$V' );
define( 'NONCE_KEY',        'KgT,c;k gorsGqcQiI{-tuu[yl=SlGjvI[Nj&|{4g/8P)~@_K=V;Ny?$)A!95aXq' );
define( 'AUTH_SALT',        'HFB`Tx0~Rc109F=_?vnFi$E8ZQs[;_$JE|NRWggLlCQ=MI`T+Z4XynD+!BqEO$yY' );
define( 'SECURE_AUTH_SALT', 'D^n`B,Th,.IA6)d[kF7S%_v2CQnB=rYe!dZ@eroZtY6|OFr!r}@@7rp?,v9iT62%' );
define( 'LOGGED_IN_SALT',   's}/b.:g7]x:S$I+f|%PW k2ce%SvUg;5yo&tX22;kd;QKBb_RZPr.f}bUe@6~EwY' );
define( 'NONCE_SALT',       '+8yjxJU)/C=fTnjhOf-`cmiL3Iu$@ehxmQVji;N}PLB^769@jczi<`-CXrX+q?:m' );

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
