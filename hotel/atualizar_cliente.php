<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado usando o método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; // Obtém o ID do cliente a ser atualizado
    $nome = $_POST['nome']; // Obtém o novo nome do cliente
    $email = $_POST['email']; // Obtém o novo email do cliente

    // Prepara a consulta SQL para atualizar os dados do cliente
    $sql = "UPDATE clientes SET nome = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($sql); // Prepara a declaração SQL
    $stmt->bind_param('ssi', $nome, $email, $id); // Vincula os parâmetros (nome, email, id) à declaração SQL

    // Executa a consulta SQL
    if ($stmt->execute()) {
        echo "Cliente atualizado com sucesso!"; // Mensagem de sucesso se a consulta for executada com êxito
        // Redireciona para a página de consulta ou exibição de clientes
        header("Location: consulta_cliente.php");
        exit; // Encerra o script após o redirecionamento
    } else {
        echo "Erro ao atualizar cliente: " . $stmt->error; // Mensagem de erro em caso de falha na atualização
    }

    $stmt->close(); // Fecha a declaração preparada
    $conn->close(); // Fecha a conexão com o banco de dados
}
?>