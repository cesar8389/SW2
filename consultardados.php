<?php
include 'conexao.php';

$sql = "SELECT id, nome, preco, quantidade FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Preço: " . $row["preco"] . " - Quantidade: " . $row["quantidade"] . "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>