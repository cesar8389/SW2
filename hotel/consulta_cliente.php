<?php
include 'conexao.php';

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>

<head>
    <title>Lista de clientes</title>
    <style>
        table {
            border: 1px solid black;
            border-spacing: 0px;
            width: 800px;
            text-align: left;
        }

        thead tr {
            background-color: #000000;
            color: #FFFFFF;
        }

        tbody tr:nth-child(even) {
            background: #8c8c8c;
            color: #000;
        }

        tbody tr:nth-child(odd) {
            background: #515151;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td>
                    <?php echo $row['id']?>
                </td>
                <td>
                    <?php echo $row['nome']?>
                </td>
                <td>
                    <?php echo $row['email']?>
                </td>
                <td>
                    <?php echo $row['telefone']?>
                </td>
                <td>
                    <?php echo $row['cpf']?>
                </td>
                <td>
                    <?php echo $row['datanascimento']?>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php $conn->close(); ?>
</body>

</html>