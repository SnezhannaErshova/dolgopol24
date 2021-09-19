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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'trifanovdmi_dolgopol' );

/** Имя пользователя MySQL */
define( 'DB_USER', '046844639_dolgop' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '046844639_dolgop' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q]iHl!zu`$jTKT3Ypr`0xb%)@_ -O/_mPyo-f[`$_GlaE`Sqc5iB0UP))T?_#*K>' );
define( 'SECURE_AUTH_KEY',  ' zQP)ou|!`G 7P3KsM*bR=h.nn7^7mHH]b_DKUCe(63SLKu_v+S?bFUt$mSVO&9_' );
define( 'LOGGED_IN_KEY',    '[Piyc(nVZe]AC7h WO,r,|Tw/3-,4l%qaeC;?Oitgi/p``k.S4r.XF&dA^Z{FqAo' );
define( 'NONCE_KEY',        '|6Lj-m:l)k&HLyz!BpF7*J,*fQJZ*oGB=Y;{UCHz((|O%AdVF^*{$qZ%E(9mjci<' );
define( 'AUTH_SALT',        '{:$fdNh&0%!a-f6]wk6X8A%f;C`e5M&{g@?vM[Agq6qza~~7czLkWD[|j$VVye<+' );
define( 'SECURE_AUTH_SALT', '(N%S.0S&)@n{3yb{Sx_RQo6;rh:Q/P HCA n`8}yUVkw8y.lJ83eOcZtq?B0D[<e' );
define( 'LOGGED_IN_SALT',   '02 BJP2CC_GN{h-yc=q+^3_*YD*KZvk|nxM,f!sxr~HRQD%~mFV[fuWI}X#a$5b;' );
define( 'NONCE_SALT',       '5vl3]SoT~( Er Y$2~e[rKhc$z{c_SSD#-2cKqd1$$+fe(8T5!v%^C2Oo!($/M?0' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
