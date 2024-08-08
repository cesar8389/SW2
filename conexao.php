<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "loja";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexao: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>