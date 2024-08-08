<?php
include 'conexao.php';

$sql = "DELETE FROM produtos WHERE nome='Lápis'";

if ($conn->query($sql) === TRUE) {
    echo "Registro deletado com sucesso";
} else {
    echo "Erro ao deletar registro: " . $conn->error;
}

$conn->close();
?>