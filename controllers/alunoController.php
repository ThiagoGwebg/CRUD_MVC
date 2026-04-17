<?php
require "config/database.php";
require "models/aluno.php";
class AlunoController
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function listarAlunos()
    {
        $model = new Aluno($this->conn);
        $alunos = $model->listarAlunos();
        require "views/list.php";


    }
    public function create()
    {
        require "views/create.php";
    }

    public function store()
    {

        $model = new Aluno($this->conn);
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = $_POST["idade"];
        $model->create($nome, $email, $idade);

        header("Location: index.php");


    }

}
;