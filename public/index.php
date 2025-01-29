<?php

include_once __DIR__ . '/../src/config/Database.php';
include_once __DIR__ . '/../src/config/EnvLoader.php';


$db = Database::connect();
echo "Connected to database: " . $_ENV['DB_DATABASE'] . '<br>';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($page) {
    case 'about':
        include __DIR__ . '/../src/views/about.php';
        break;
    case 'dashboard':
        include __DIR__ . '/../src/views/dashboard.php';
        break;
    case 'login':
        include __DIR__ . '/../src/views/login.php';
        break;
    case 'registration':
        include __DIR__ . '/../src/views/registration.php';
        break;
    case 'seller':
        include __DIR__ . '/../src/views/seller/index.php';
        break;
    default:
        echo "Page not found.";
        break;
}

?>

