<?php

require "config/database.php";
require "controllers/alunoController.php";


$controller = new AlunoController($conn);
$action = $_GET["action"] ?? 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    default:
        $controller->listarAlunos();
}

?>