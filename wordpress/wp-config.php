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
define( 'DB_NAME', 'calculator_com' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'j3riE_}65{=%&w&7wyx<7QHE^HPEt?0URG_=o;xUy*idW8w#)yuSNz.7zAYR[<?`' );
define( 'SECURE_AUTH_KEY',  '<6,VH*r8t;okF,(>QH-3vp<BY;ien/Y&G2lUH.+>`q<rECHHpV1_>Y(REa5p< 3u' );
define( 'LOGGED_IN_KEY',    'Q;dlEHA(XH>q%w>gGoNrV<R^0;7*i_=!CP@H`DM/g+0.w[kS/tkG78@L{sw(-{8|' );
define( 'NONCE_KEY',        '~.B>Np} H,gQR=X1EvH#-Q=)`B^BA7NR@09bo;MZwJv!U3tnlK6@7,m(zn1TP_EB' );
define( 'AUTH_SALT',        '$weeGeD^{>~l0drq7Bz81iI4<03J_5W=4Bw53,AFlYuaX[2PIn-OcC2{J6lJ]WT9' );
define( 'SECURE_AUTH_SALT', '1yZdqn~W*2)Xxe$WMlvPc=4}Ja5<%s.LlwL9{5(4(jHysvhnK}g?Nhz^Qe-DUU,N' );
define( 'LOGGED_IN_SALT',   '</{pCWr[!h<VQ[re<SKsi1.B5Pwo7l;~.3@G4^V~#Lb qEjaQ,S!2fBT<>#PJ~fG' );
define( 'NONCE_SALT',       '=Ehg~oA*)A-r)04M1lfLP<=1fo9r,)zWRiNE5:}s $La`#{$BM_D/0tE/[)THE39' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
