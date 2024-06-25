<?php
include("conecta.php");

$id = $_GET['id'];
$sql = "SELECT * FROM rifas WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
} else {
    die("Erro ao buscar dados: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Rifa</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validarFormulario() {
            const numeroRifa = document.getElementById('numero_rifa').value;
            const telefone = document.getElementById('telefone').value;
            const regexNumero = /^[0-9]+$/;
            const regexTelefone = /^[0-9]{10,11}$/;

            if (!regexNumero.test(numeroRifa)) {
                alert("Por favor, insira um número de rifa válido (apenas números).");
                return false;
            }
            if (!regexTelefone.test(telefone)) {
                alert("Por favor, insira um número de telefone válido (apenas números, com 10 ou 11 dígitos).");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <center>
        <h1>Editar Rifa</h1>
        <form action="atualiza_rifa.php" method="post" onsubmit="return validarFormulario()">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="numero_rifa">Número da Rifa:</label><br>
            <input type="text" id="numero_rifa" name="numero_rifa" value="<?php echo $row['numero_rifa']; ?>" required><br><br>
            <label for="nome_comprador">Nome do Comprador:</label><br>
            <input type="text" id="nome_comprador" name="nome_comprador" value="<?php echo $row['nome_comprador']; ?>" required><br><br>
            <label for="telefone">Telefone:</label><br>
            <input type="text" id="telefone" name="telefone" value="<?php echo $row['telefone']; ?>" required><br><br>
            <label for="endereco">Endereço:</label><br>
            <input type="text" id="endereco" name="endereco" value="<?php echo $row['endereco']; ?>" required><br><br>
            <input type="submit" value="Atualizar Rifa">
        </form>
        <br>
        <a href="visualiza_rifa.php">Voltar</a>
    </center>
</body>
</html>

<?php
mysqli_close($conn);
?>
