<?php
include("conecta.php");

$sql = "SELECT * FROM rifas";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Rifas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h1>Rifas Cadastradas</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Número da Rifa</th>
                <th>Nome do Comprador</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['numero_rifa']; ?></td>
                <td><?php echo $row['nome_comprador']; ?></td>
                <td><?php echo $row['telefone']; ?></td>
                <td><?php echo $row['endereco']; ?></td>
                <td>
                    <a href="edita_rifa.php?id=<?php echo $row['id']; ?>">Editar</a>
                    <a href="deleta_rifa.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar esta rifa?');">Deletar</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <a href="index.html">Voltar à página inicial</a>
    </center>
</body>
</html>

<?php
mysqli_close($conn);
?>
