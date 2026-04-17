<?php

require "config/database.php";
require "controllers/aluno";


$controller = new AlunoController($conn);
// http://http://localhost/CRUD_MVC_AULA03/index.php?action=create
$action = $_GET["action"];

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
}

?>