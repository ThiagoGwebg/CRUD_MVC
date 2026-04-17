<?php
$host = "127.0.0.1:3307"; // IP local padrão
$user = "root";
$password = "Y2K@#43i";  // A senha que você definiu no Workbench
$database = "aula_php";

// Tenta a conexão
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Falha total: " . mysqli_connect_error());
}

echo "Conectado com sucesso ao MySQL do Workbench!";