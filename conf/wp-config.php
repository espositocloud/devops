<?php

define('DB_NAME',          (getenv('WORDPRESS_DB_NAME')          ? getenv('WORDPRESS_DB_NAME')          : 'wordpress'));
define('DB_USER',          (getenv('WORDPRESS_DB_USER')          ? getenv('WORDPRESS_DB_USER')          : 'root'));
define('DB_PASSWORD',      (getenv('WORDPRESS_DB_PASSWORD')      ? getenv('WORDPRESS_DB_PASSWORD')      : ''));
define('DB_HOST',          (getenv('WORDPRESS_DB_HOST')          ? getenv('WORDPRESS_DB_HOST')          : 'db:3306'));
define('DB_CHARSET',                                                                                      'utf8');
define('DB_COLLATE',                                                                                      '');

define('AUTH_KEY',         (getenv('WORDPRESS_AUTH_KEY')         ? getenv('WORDPRESS_AUTH_KEY')         : ''));
define('SECURE_AUTH_KEY',  (getenv('WORDPRESS_SECURE_AUTH_KEY')  ? getenv('WORDPRESS_SECURE_AUTH_KEY')  : ''));
define('LOGGED_IN_KEY',    (getenv('WORDPRESS_LOGGED_IN_KEY')    ? getenv('WORDPRESS_LOGGED_IN_KEY')    : ''));
define('NONCE_KEY',        (getenv('WORDPRESS_NONCE_KEY')        ? getenv('WORDPRESS_NONCE_KEY')        : ''));
define('AUTH_SALT',        (getenv('WORDPRESS_AUTH_SALT')        ? getenv('WORDPRESS_AUTH_SALT')        : ''));
define('SECURE_AUTH_SALT', (getenv('WORDPRESS_SECURE_AUTH_SALT') ? getenv('WORDPRESS_SECURE_AUTH_SALT') : ''));
define('LOGGED_IN_SALT',   (getenv('WORDPRESS_LOGGED_IN_SALT')   ? getenv('WORDPRESS_LOGGED_IN_SALT')   : ''));
define('NONCE_SALT',       (getenv('WORDPRESS_NONCE_SALT')       ? getenv('WORDPRESS_NONCE_SALT')       : ''));

$table_prefix  = 'wp_';
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
