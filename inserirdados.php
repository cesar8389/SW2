<?php
include 'conexao.php';

$sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES 
('Caneta', 1.50, 100),
('Lápis', 0.75, 200),
('Caderno', 5.00, 50)";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$conn->close();
?>