<?php
include 'conexao.php';

$sql = "UPDATE produtos SET preco=2.00 WHERE nome='Caneta'";

if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso";
} else {
    echo "Erro ao atualizar registro: " . $conn->error;
}

$conn->close();
?>