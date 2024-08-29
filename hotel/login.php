<?php
include 'conexao.php';

if(isset($_POST['usuario-text']) || isset($_POST['senha-text'])){
    if(strlen($_POST['usuario-text']) == 0) {
        echo "Preencha o seu usuario";
    } else if(strlen($_POST['senha-text']) == 0) {
        echo "Preencha a sua senha";
    } else {
        $usuario = $conn->real_escape_string($_POST['usuario-text']);
        $senha = $conn->real_escape_string($_POST['senha-text']);

        $sql = "SELECT usuario, senha FROM usuarios 
        WHERE usuario = '$usuario' AND senha = '$senha'";
        $result = $conn->query($sql);

        if($result->num_rows == 1) {
            echo "Bem vindo";
        } else {
            echo "Usuario/senha incorretos";
        }
    }
} 
?>

<!DOCTYPE html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Bem vindo ao Hotel</h1>
    <form action="" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario-text">
        <label>Senha:</label>
        <input type="text" name="senha-text">
        <button type="submit">Entrar</button>
    </form>
</body>

</html>