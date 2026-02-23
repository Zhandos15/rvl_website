<?php

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../controllers/ContactController.php';
require_once __DIR__ . '/../controllers/NewsController.php';

$action = $_GET['action'] ?? '';

switch ($action) {

    case 'send-contact':
        $controller = new ContactController($pdo);
        $controller->send();
        break;

    case 'get-news':
        $controller = new NewsController($pdo);
        $controller->getAll();
        break;

    default:
        echo "API работает";
}
