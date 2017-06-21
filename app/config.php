<?php
if($_SERVER['SERVER_NAME'] == '127.0.0.1'){
    define('ENVIRONMENT', 'DEV');
} else if($_SERVER['SERVER_NAME'] == 'bonifac'){
    define('ENVIRONMENT', 'RPI');
} else {
    define('ENVIRONMENT', 'PROD');
}

if(ENVIRONMENT == 'DEV'){
    define('DEBUG', true);
    define('WEB_URL', '127.0.0.1');
    define('ROOT_DIR_FILES', '\\projects\\Fab\\');
    define('ROOT_DIR', '/projects/Fab/');
    define('FULL_PATH_ROOT', $_SERVER['SERVER_NAME'].ROOT_DIR);
    define('STATIC_CSS', ROOT_DIR . 'static/css/');
    define('STATIC_IMG', ROOT_DIR . 'static/img/');
    define('STATIC_FONT', ROOT_DIR . 'static/font/');
    define('DB_TYPE', 'mysql');
    define('DB_HOST', '127.0.0.1');
    define('DB_NAME', 'fab');
    define('DB_USER', 'root');
    define('DB_PASS', '');

} else if(ENVIRONMENT == 'RPI'){
    define('ROOT_DIR_FILES', '/');
    define('ROOT_DIR', '/');
    define('FULL_PATH_ROOT', $_SERVER['SERVER_NAME'].ROOT_DIR);
    define('DB_TYPE', 'mysql');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'weaptodo');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
} else {

}

ini_set('default_charset',"utf-8");

