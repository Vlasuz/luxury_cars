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
define( 'DB_NAME', 'ch2e2883f6_sale' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'ch2e2883f6_gorbachev' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '9PiqcH4kSE' );

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
define( 'AUTH_KEY',         'q2*hj>6oM5t(mNN2I@;W+Am/#wTnGQKgX}Rb[&B>pA*e=+l<$*$g@&yqrzIr9?ko' );
define( 'SECURE_AUTH_KEY',  '(mS15d5lImg`5S~PoetNmu98ny0XLNk6<UbNZK-c}1dsO0,.nOH-??FT3O5=&uT5' );
define( 'LOGGED_IN_KEY',    '<JdP0I;Qu}`lZT`#swcf-aCbBhtRV>=)NI)NTmjTLS~)B 4~1e],ok&<}{;dXZvL' );
define( 'NONCE_KEY',        'RV+?XI?dnpPrwCl5!=]2ztm2<jWd6^UFXbg;Q|y3[i2%vkp@8)boi7=(?Mk?Rclo' );
define( 'AUTH_SALT',        ')A^|%- `sYc2*6: *SJ#)5:It>wUZ-w&[U?W4*SD()/_7^n5IT~;3k;mtO=6xLno' );
define( 'SECURE_AUTH_SALT', '~M.FnPI9#KN&eOdd(B{Vno,XNJboIW@ CJ6bE(<mDZV.IY}T2EBbD`2{G02}zjs7' );
define( 'LOGGED_IN_SALT',   'MAjRxIGYxt-LeIsWPB~0x?h~([iKb-}#qf?1bA4cnXv78%Os!5>9lC;^cX$1nDqQ' );
define( 'NONCE_SALT',       '/)M_I@~_rB0jQK6aR}WMqaBAl!RLMdC9#r5Gqp[6#mLJ7^4aJmT$#eK|!xcKCX]Y' );

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
