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
define( 'DB_NAME', 'blagorez' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'u(T56Iy+m9Gx9?uxh])[PE|7~0q|?A^Lor4>>prRAl^-vEA80Rl$ENV>Qpwka]cv' );
define( 'SECURE_AUTH_KEY',  'KLxz(?u#z4NAZyOQhYDheA&=!|K]Gwm6!rCZ23y%a[NR7hrv!L^+`6Z+UpHG_?`E' );
define( 'LOGGED_IN_KEY',    '+vDA<eY-MnZ:~ie!^t$aS[E(^O&%{DJ][&BvVT9y;aDN$O L{^0DP@wescrsA_*3' );
define( 'NONCE_KEY',        '=A0nbNn3phm1&Ez3&kM(twVvtzq|h$k$j#H{?F%Vv$d(7% 0G>!~N|S*W+GqA0`n' );
define( 'AUTH_SALT',        '$C%S9ex9;vMB[*6`/{ZdAA-hZzOh$A5dlPD74yn<$O?(eVPGTPc6[:OmDNGY$f,K' );
define( 'SECURE_AUTH_SALT', 'Wp;)y;!Y]B5Xgt1~x;kg,BE<lpJ:kEL!xB(_n9H`o?xU}o,!$Q3C8FL%~w@Fji[r' );
define( 'LOGGED_IN_SALT',   '> ]i1y@*OTUKm8:C},g+AvC5Qg,7}j#^h^v9UrWRt[t6S/x@C$K5*kn56h&PiqJ+' );
define( 'NONCE_SALT',       'iNMadQY`O]cJ/20mk*0[`)UR(Lk]zI;h<S]89m!<sZB$5;z%GXSFzjBP%|(&zbdb' );

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
