<?php

require_once('config.php');

$site_title = SITE_TITLE;
$site_description = SITE_DESCRIPTION;
$css_path = CSS_PATH;
$js_path = JS_PATH;
$images_path = IMAGES_PATH;
$base_path = BASE_PATH;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['action']) && $_POST['action'] === 'register') {
        require_once($base_path . '/includes/process_registration.php');
    }
}

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (!in_array($page, $valid_pages)) {
    $page = 'home';
}

$page_file = $base_path . '/pages/' . $page . '.php';

if (!file_exists($page_file)) {
    $page = 'home';
    $page_file = $base_path . '/pages/home.php';
}

require_once($base_path . '/includes/header.php');

require_once($page_file);

require_once($base_path . '/includes/footer.php');