<?php
define('WP_HOME', getenv('WORDPRESS_URL'));
define('WP_SITEURL', getenv('WORDPRESS_URL'));

// Lanjutkan dengan konfigurasi wp-config.php standar di bawah ini...
define('DB_NAME', getenv('MYSQL_DATABASE'));
define('DB_USER', getenv('MYSQL_USER'));
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));
define('DB_HOST', 'db');

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix = 'wp_';

define('WP_DEBUG', false);
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}
require_once ABSPATH . 'wp-settings.php';
