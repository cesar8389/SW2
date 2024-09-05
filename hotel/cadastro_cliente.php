<?php
include 'conexao.php';
if(isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $datanascimento = $_POST['datanascimento'];
    
    $sql = "INSERT INTO clientes (nome, email, telefone, cpf, datanascimento)
    VALUES ('$nome','$email','$telefone','$cpf','$datanascimento')";
    
    if($conn->query($sql) === TRUE) {
        echo "Dados salvos com sucesso";
    } else {
        echo "Erro ao salvar" . $conn->error;
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>

<head>
    <title>Cadastro de clientes</title>
</head>

<body>
    <form action="" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <label>E-mail:</label>
        <input type="email" name="email" required>
        <label>Telefone:</label>
        <input type="tel" name="telefone" required>
        <label>CPF:</label>
        <input type="cpf" name="cpf" required>
        <label>Data de nascimento</label>
        <input type="date" name="datanascimento">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>