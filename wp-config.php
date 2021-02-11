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
define( 'DB_NAME', 'davydovseo_test3' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'davydovseo_test3' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'RNEqfX34HwpRN' );

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
define( 'AUTH_KEY',         'd(C@6awf`~5sI1.0?kvw(gno7OPr4u3,~,CeeZrSJ(lX#S=E$!TNYS)tHtgT:%2e' );
define( 'SECURE_AUTH_KEY',  'sI+zuMm+F,(d7r(c%4FS%OI> !Y^%n?$*7=Df2tYP+u)Kyi85$2oUsIAa]t}a0 p' );
define( 'LOGGED_IN_KEY',    '46gZt2YNLDjN,N)=mn4}BBcA?RR=}5Q~#^~1mpR7RNCHV&913>n?jU`_vyngDrgc' );
define( 'NONCE_KEY',        '!0/a[H2^?q#~r0c!!<o*C woaG{u=X*zwQzW,@LVYa tZQN)~:W!j?EYmKVC84[ ' );
define( 'AUTH_SALT',        'l=D)Rf|>6tRhx;bp4vr zXT(v|9Y ][cmUWHeYbLP= 5KM$4])$H3u`E6K`}pNbn' );
define( 'SECURE_AUTH_SALT', '.NxSD|9AWG5)4nJ=?mB.;v[=jS:Wj&X8/25W%$pIf5=uw6fA<*FNyTV}[Cv~9!o9' );
define( 'LOGGED_IN_SALT',   'aXQ>^N)B^*A6cJl~GV0p~@:eX&`4|?_CLCQUVy.kI c7)T8Ei~Y/f%EW{Qks=xE%' );
define( 'NONCE_SALT',       'FhLU7^~. SIGad~s^3a7}i}rI|]4+.ohyX!(I6>OwPM=BM{bKN>(>~5BPJu%;JrN' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'lex_';

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
