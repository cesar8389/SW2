<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Verifica se um ID de cliente foi passado via parâmetro GET na URL
if (isset($_GET['id'])) {
    $id = $_GET['id']; // Armazena o ID do cliente

    // Prepara a consulta SQL para buscar o cliente pelo ID
    $sql = "SELECT * FROM clientes WHERE id = ?";
    $stmt = $conn->prepare($sql); // Prepara a declaração SQL
    $stmt->bind_param('i', $id); // Vincula o parâmetro ID à declaração SQL
    $stmt->execute(); // Executa a declaração SQL
    $result = $stmt->get_result(); // Obtém o resultado da consulta

    // Verifica se o cliente foi encontrado no banco de dados
    if ($result->num_rows > 0) {
        $cliente = $result->fetch_assoc(); // Obtém os dados do cliente como um array associativo
    } else {
        echo "Cliente não encontrado."; // Mensagem de erro caso o cliente não seja encontrado
        exit; // Encerra o script
    }
} else {
    echo "ID de cliente não fornecido."; // Mensagem de erro caso o ID não seja passado na URL
    exit; // Encerra o script
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8"> <!-- Define o conjunto de caracteres do documento -->
    <title>Editar Cliente</title> <!-- Título da página -->
</head>

<body>
    <h1>Editar Cliente</h1> <!-- Cabeçalho da página -->

    <!-- Formulário de edição de cliente -->
    <form action="atualizar_cliente.php" method="post">
        <!-- Envia os dados para o arquivo atualizar_cliente.php usando o método POST -->
        <!-- Campo oculto para armazenar o ID do cliente -->
        <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">

        <!-- Campo de entrada para o nome do cliente -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo htmlspecialchars($cliente['nome']); ?>" required>
        <br>

        <!-- Campo de entrada para o email do cliente -->
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($cliente['email']); ?>" required>
        <br>

        <!-- Adicione outros campos conforme necessário -->

        <!-- Botão de submissão do formulário -->
        <input type="submit" value="Salvar">
    </form>
</body>

</html>