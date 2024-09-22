<?php
$request = $_SERVER['REQUEST_URI'];
$content = '';

switch ($request) {
    case '/':
        $content = 'src/views/landing_page/index.php';
        break;
    case '/register':
        include 'src/views/pages/auth/register.php';
        break;
    case '/login':
        $content = 'src/views/pages/auth/login.php';
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
include 'src/views/templates/layout.php';
