<?php
require 'controllers/UserController.php';

$path = $_GET['path'] ?? 'users';

switch ($path) {
    case 'users':
        UserController::index();
        break;
    case 'create':
        UserController::create();
        break;
    case 'store':
        UserController::store($_POST);
        break;
    case 'edit':
        $id = $_GET['id'] ?? null;
        UserController::edit($id);
        break;
    case 'update':
        $id = $_POST['id'] ?? null;
        UserController::update($id, $_POST);
        break;
    case 'delete':
        $id = $_GET['id'] ?? null;
        UserController::delete($id);
        break;
    default:
        echo "Rota não encontrada.";
}
