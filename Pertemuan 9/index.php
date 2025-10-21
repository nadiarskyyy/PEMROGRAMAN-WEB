<?php
require_once 'controllers/HomeController.php';
require_once 'controllers/JournalController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$controller = new JournalController();

switch ($action) {
    case 'home':
        $homeController = new HomeController();
        $homeController->index();
        break;
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->create();
        } else {
            $controller->showCreateForm();
        }
        break;
    case 'list':
        $controller->list();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $controller->delete($_GET['id']);
        } else {
            header("Location: index.php?action=list&message=invalid_id");
        }
        break;
    default:
        $homeController = new HomeController();
        $homeController->index();
        break;
}
?>