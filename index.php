<?php
session_start();
require "config/database.php";
require "controllers/AlunoController.php";
require "controllers/loginController.php";
$controller = new AlunoController($conn);
$loginController = new LoginController($conn);
$action = $_GET["action"] ?? 'index';

switch ($action) {
    case 'mostrarLogin':
        $LoginController->mostrarLogin();
        break;
    case 'facaLogin':
        $LoginController->entrar();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'atualizar':
        $controller->atualizar();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        $controller->listarAlunos();
}

?>