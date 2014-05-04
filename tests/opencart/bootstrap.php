<?php
// Set your config info here
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');
define('DB_PREFIX', 'oc_');

// Optional - only required for SEO url tests
define('HTTP_SERVER', 'http://opencart.welfordlocal.co.uk/');
define('HTTPS_SERVER', 'http://opencart.welfordlocal.co.uk/');

// Do not edit
define('OC_ROOT', __DIR__ . '/../../upload/');
define('SQL_FILE', OC_ROOT . 'install/opencart.sql');
define('DIR_APPLICATION', OC_ROOT . 'catalog/');
define('DIR_SYSTEM', OC_ROOT . 'system/');
define('DIR_LANGUAGE', OC_ROOT . 'catalog/language/');
define('DIR_TEMPLATE', OC_ROOT . 'catalog/view/theme/');
define('DIR_CONFIG', OC_ROOT . 'system/config/');
define('DIR_IMAGE', OC_ROOT . 'image/');
define('DIR_CACHE', OC_ROOT . 'system/cache/');
define('DIR_DOWNLOAD', OC_ROOT . 'system/download/');
define('DIR_MODIFICATION', OC_ROOT . 'system/modification/');
define('DIR_LOGS', OC_ROOT . 'system/logs/');

function error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}

set_error_handler("error_handler");