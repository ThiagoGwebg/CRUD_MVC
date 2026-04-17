<?php


class  Aluno {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function create($nome, $email, $idade) {
        $sql = "INSERT INTO alunos(nome, email, idade) VALUE('$nome', '$email', '$idade)";
        mysqli_query($this ->conn, $sql);
    }

}


?>