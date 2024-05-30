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
define( 'DB_NAME', 'o86993_ombrime' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'o86993_ombrime' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '7tn5pfijuo3nuk718b' );

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
define( 'AUTH_KEY',         'pnTeyZyAXk3O[xLpT%Hj{:^)(<4h4Y70g!`I90wEiYr/UOyH4,qJ4J!l. 9Q%|u{' );
define( 'SECURE_AUTH_KEY',  'Bs>f g3|7BVSs<ONvN_73GaHP5T!7t9~uMI~MOem~Yp;e(1YKo})29=Hltl*?g1R' );
define( 'LOGGED_IN_KEY',    'kcn[!fe/S1K:X(US+1gB^-8cpVE_L%rvVE2<r0jSVho>e]L$o?.FJe5NOX_d-t!V' );
define( 'NONCE_KEY',        '(hf&(qEp#xpG,~R|aQ)HYS-:gFP[m~ankLMTJ28f~bVoC?}#{oU@]kmz%]d9OU,I' );
define( 'AUTH_SALT',        'JBbv]8&Cl}t3M*t,x4.[z:ZHK7Cnhs|;LQ()/*xb_~Wm-1l0veu6 N*PT2Uv>@Sk' );
define( 'SECURE_AUTH_SALT', 'DY~1:d&b(8gU)d{f8]1m$8x1JY3JR2M95#J9;`YiCE0lAc)NpFS.sMx[>t?t =#D' );
define( 'LOGGED_IN_SALT',   '0-S=<+%y~j+MUt.!;>2beA!R[q({<~+ H#p!.i-px^p4$n-CDw{To?::okLXad&i' );
define( 'NONCE_SALT',       '<rJe4C*n<VZRkd-)F$5RQGr]]`5~_F:GB)*lce7niUgk<vlb]#tN5w2W{Ge.2qvl' );

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
