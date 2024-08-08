<?php
include 'conexao.php';

$sql = "CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela produtos criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

$conn->close();
?>