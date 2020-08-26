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
define( 'DB_NAME', 'pofo' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1qazxsw2' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ')4r)ibE*u:eFZqz)`aqcB~BDs2g8g2$p:1}32IUFXIr_Wcn~c;@6*[(NDY>9fhJy' );
define( 'SECURE_AUTH_KEY',  '0|03S~v[},TgcX-4Kr/O%?;:i1b8-DE}g42jUH~sh@/e~:b+.`itUPlq23z~^12M' );
define( 'LOGGED_IN_KEY',    ';OeTu}~-]VYvBN~=<=Ri,w)sm,98VT|MB:d?1-;99%4fUxXIz&.VA~C9Uq8G3qNN' );
define( 'NONCE_KEY',        '5>?+;rc7+CZj:5@mZs|VQEm;krm@zZssP|#a:l?=LRE9hL]?W-]-EuTl$,9nx<DQ' );
define( 'AUTH_SALT',        'b!>zIHU7SV3T]<Jl>%}`.b,>1|2ps%MBWQXg[nyKKPW[O0=bCn`,a.vEZfQto0A/' );
define( 'SECURE_AUTH_SALT', 'L76/DIkR7e_5ra^*Z_qr_9Y|xkT/D=ce9<Z?H~EdhR3-[&z8ioN(NGmg#5K4|zRs' );
define( 'LOGGED_IN_SALT',   'i4y&h%q=s,/mtIwD20h,h+aBdokyz?utT>vcbBPh=518.(p^x)?xh@oE5xI f|td' );
define( 'NONCE_SALT',       ',r*Pwo2q1.pVE-<%EK;pD0qL@{0Ja3{0ZR-,i.KxS;d)W)f9|VP&h=KbhjY/3a3w' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
