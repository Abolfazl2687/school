<?php

session_start();

define('SITE_TITLE', 'هنرستان شهید امراللهی');
define('SITE_DESCRIPTION', 'وب‌سایت رسمی هنرستان کار و دانش شهید امراللهی');

define('BASE_PATH', __DIR__);

$server_host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$server_protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

$base_dir = ''; 

define('ROOT_URL', $server_protocol . "://" . $server_host . $base_dir);

define('CSS_PATH', '/static/css/');
define('JS_PATH', '/static/js/');
define('IMAGES_PATH', '/attached_assets/');

define('TIMEZONE', 'Asia/Tehran');
date_default_timezone_set(TIMEZONE);

function create_url($page) {
    if ($page === 'home') {
        return ROOT_URL;
    }

    return ROOT_URL . '?page=' . $page;
}

function is_active($page) {
    $current_page = isset($_GET['page']) ? $_GET['page'] : 'home';

    return ($current_page === $page) ? 'active' : '';
}

$valid_pages = [
    'home', 'about', 'programs', 'facilities', 'gallery', 
    'exams', 'registration', 'contact'
];

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);